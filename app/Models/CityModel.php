<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;



class CityModel extends Model
{
    use HasFactory;
    protected $table='city';

    protected $fillable=[
        'country',
        'city'
    ];

    public function __construct()
    {
        $redis=Redis::connection();
    }

    public function fetchAll()
    {

    }





    protected $hidden=[];
}
