<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    private  static $shop,$status,$image,$imageName,$imageURL,$imageDIR,$slug;
    public static function saveInfo($request, $id=null)
    {
        $request->validate([
            'name' => 'required | string | max:100 | min:3',
            'reerence' => 'nullable',
            'catagori_id' => 'required',
            'ex_tax' => 'required',
            'brand' => 'required | string',
            'product_code' => 'required | string',
            'reward_point' => 'nullable | string',
            'in_stock' => 'required | string',
            'image' => 'image | mimes:jpg,jpeg,png,webp'
        ],[
            'name.required' => 'Please add some Title of Blog',
            'name.string' => 'Please add some String Title of Blog',
            'name.max' => 'Please add some Title of Blog < 100 char',
            'name.min' => 'Please add some Title of Blog > 3 char',
            'image.image' => 'add requred image only (jpg, jpeg, png, webp)',
        ]);
        if ($id !=null)
        {
            self::$shop = Shop::find($id);
        }
        else {
            self::$shop =  new Shop();
        }
        self::$shop->name = $request->name;
        self::$shop->catagori_id = $request->catagori_id;
        self::$shop->reerence = $request->reerence;
        self::$shop->ex_tax = $request->ex_tax;
        self::$shop->brand = $request->brand;
        self::$shop->product_code = $request->product_code;
        self::$shop->reward_point = $request->reward_point;
        self::$shop->description = $request->description;
        self::$shop->in_stock = $request->in_stock;


        if ($request->file('image'))
        {
            if (self::$shop->image)
            {
                if (file_exists(self::$shop->image))
                {
                    unlink(self::$shop->image);
                }
            }
            self::$shop->image = self::saveImage($request);
        }

        if ($request->file('image2'))
        {
            if (self::$shop->image2)
            {
                if (file_exists(self::$shop->image2))
                {
                    unlink(self::$shop->image2);
                }
            }
            self::$shop->image2 = self::saveImage2($request);
        }

        self::$shop->save();
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
 public static function saveImage2($request)
    {
        self::$image = $request->file('image2');
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

        public function catagoriShop()
        {
            return $this->belongsTo(Catagory::class,'catagori_id');
        }
}
