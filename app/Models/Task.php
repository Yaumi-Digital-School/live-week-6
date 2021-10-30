<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static $data = [
        ["id" => 1, "name" => "Makan malam", "is_done" => False],
        ["id" => 2, "name" => "Makan siang", "is_done" => False],
        ["id" => 3, "name" => "Sarapan", "is_done" => True]
    ];
}
