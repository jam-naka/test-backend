<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre_id',
        'price',
    ];

    public static function createData($request)
    {
        $inputs = [];
        $inputs['name'] = $request->name;
        $inputs['price'] = $request->price;
        return self::create($inputs);
    }
}
