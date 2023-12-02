<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    private  static $team,$status,$image,$imageName,$imageURL,$imageDIR,$slug;
    public static function saveInfo($request, $id=null)
    {
        $request->validate([
            'name' => 'required | string | max:100 | min:3',
            'post' => 'nullable',
            'email' => 'required',
            'image' => 'image | mimes:jpg,jpeg,png,webp'
        ],[
            'name.required' => 'Please add a nice Name',
            'post.required' => 'Please add Post of employee',
            'email.required' => 'Please add a Unique email of employee',

            'image.image' => 'add requred image only (jpg, jpeg, png, webp)',
        ]);
        if ($id !=null)
        {
            self::$team = Team::find($id);
        }
        else {
            self::$team =  new Team();
        }
        self::$team->name = $request->name;
        self::$team->post = $request->post;
        self::$team->email = $request->email;
        if ($request->file('image'))
        {
            if (self::$team->image)
            {
                if (file_exists(self::$team->image))
                {
                    unlink(self::$team->image);
                }
            }
            self::$team->image = self::saveImage($request);
        }

        self::$team->save();
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
    public static function showStatus ($id)
    {

        self::$status = Team::find($id);
        if (self::$status->status == 1) {
            self::$status->status = 0;
        } else {
            self::$status->status = 1;
        }
        self::$status->save();
    }
}
