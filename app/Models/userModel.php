<?php

namespace App\Models;

# Ketika sudah menggunakan database aktifkan kembali code ini
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class userModel extends Model
// {
//     use HasFactory;
// }

class userModel {
    private static $member = [
        [
            "name" => "Yeonjun",
            "image" => "txtyeonjun.jpg"
        ]
    ];
    
    public static function showUser() {
        return collect(self::$member);
    }
}


