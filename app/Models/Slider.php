<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    private  static $slider,$status,$image,$imageName,$imageURL,$imageDIR,$slug;
    public static function saveInfo($request, $id=null)
    {
        $request->validate([
            'offer_time' => 'required | string | max:100 | min:3',
            'title' => 'required | string | max:100 | min:3',
            'title_2' => 'required | string | max:100 | min:3',
            'price' => 'required | string | max:100 | min:3',
            'image' => 'image | mimes:jpg,jpeg,png,webp'
        ],[
            'offer_time.required' => 'Please add some Title of Blog',
            'title.string' => 'Please add some String Title of Blog',
            'title_2.max' => 'Please add some Title of Blog < 100 char',
            'price.min' => 'Please add some Title of Blog > 3 char',
            'image.image' => 'add requred image only (jpg, jpeg, png, webp)',
        ]);
        if ($id !=null)
        {
            self::$slider = Slider::find($id);
        }
        else {
            self::$slider =  new Slider();
        }
        self::$slider->offer_time = $request->offer_time;
        self::$slider->title = $request->title;
        self::$slider->title_2 = $request->title_2;
        self::$slider->price = $request->price;
        if ($request->file('image'))
        {
            if (self::$slider->image)
            {
                if (file_exists(self::$slider->image))
                {
                    unlink(self::$slider->image);
                }
            }
            self::$slider->image = self::saveImage($request);
        }

        self::$slider->save();
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

        self::$status = Slider::find($id);
        if (self::$status->status == 1){
            self::$status->status = 0;
        }
        else {
            self::$status->status = 1;
        }
        self::$status->save();
    }
}
