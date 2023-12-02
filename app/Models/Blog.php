<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use function PHPUnit\Runner\validate;

class Blog extends Model
{
    use HasFactory;
    private  static $blog,$status,$image,$imageName,$imageURL,$imageDIR,$slug;
    public static function saveInfo($request, $id=null)
    {
        $request->validate([
            'title' => 'required | string | max:100 | min:3',
            'slug' => 'nullable',
            'catagori_id' => 'required',
            'content' => 'nullable | string',
            'contents' => 'nullable | string',
            'image' => 'image | mimes:jpg,jpeg,png,webp'
        ],[
            'title.required' => 'Please add some Title of Blog',
            'title.string' => 'Please add some String Title of Blog',
            'title.max' => 'Please add some Title of Blog < 100 char',
            'title.min' => 'Please add some Title of Blog > 3 char',
            'catagori_id.required' => 'Please select a Catagory of Blog',
            'image.image' => 'add requred image only (jpg, jpeg, png, webp)',
        ]);
        if ($id !=null)
        {
            self::$blog = Blog::find($id);
        }
        else {
            self::$blog =  new Blog();
        }
        self::$blog->title = $request->title;
        self::$blog->slug = self::makeSlug($request);
        self::$blog->catagori_id = $request->catagori_id;
        self::$blog->content = $request->content;
        self::$blog->contents = $request->contents;
        if ($request->file('image'))
        {
            if (self::$blog->image)
            {
                if (file_exists(self::$blog->image))
                {
                    unlink(self::$blog->image);
                }
            }
            self::$blog->image = self::saveImage($request);
        }

        self::$blog->save();
    }
    public static function makeSlug($request){
        if ($request->slug)
        {
            self::$slug = Str::slug($request->slug,'-').rand();
        }
        else {
            self::$slug = Str::slug($request->title, '-').rand();
        }
        return self::$slug;
    }
    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = $request->title.'_'.rand().'.'.self::$image->extension();
        self::$imageDIR = 'assets/blogImage/';
        self::$imageURL = self::$imageDIR.self::$imageName;
        self::$image->move(self::$imageDIR, self::$imageURL);
        return self::$imageURL;
    }
    public static function showStatus ($id){

        self::$status = Blog::find($id);
        if (self::$status->status == 1){
            self::$status->status = 0;
        }
        else {
            self::$status->status = 1;
        }
        self::$status->save();
    }
    //    relational database
    public  function catagory()
    {
        return $this->belongsTo(Catagory::class,'catagori_id');
    }
}
