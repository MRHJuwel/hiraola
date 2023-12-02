<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private static $contact;
    public static function saveInfo($request)
    {
        self::$contact = new Contact();
        self::$contact->con_name = $request->con_name;
        self::$contact->con_email = $request->con_email;
        self::$contact->con_subject = $request->con_subject;
        self::$contact->con_message = $request->con_message;
        self::$contact->save();
    }
}
