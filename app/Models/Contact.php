<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private static $contact;
    public static function createContact($request)
    {
        self::$contact = new Contact();
        self::$contact->name  = $request->name;
        self::$contact->email = $request->email;
        self::$contact->mobile = $request->mobile;
        self::$contact->subject = $request->subject;
        self::$contact->message = $request->message;
        self::$contact->save();
    }
    public static function deleteContact($id)
    {
        self::$contact = Contact::find($id);
        self::$contact->delete();
    }
}
