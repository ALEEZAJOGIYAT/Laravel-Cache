<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityModel;
use Illuminate\Support\Facades\Redis;
use DB;
use Cache;

class CityController extends Controller
{
    //
    public function __construct(){
        $this->storage = Redis::connection();
    }

    public function index($id){
        $storage = Redis::connection();
        $views = $storage ->incr('names: ' . $id . ':views');
        return 'this is an article with id' . $id . ' it has views' . $views . 'views'; 
    }
    public function showAll(){
        DB::connection()->enableQueryLog();
        // $result=CityModel::all()->take(500);
        
        $result = Cache::remember('name_cache',1,function(){
            return CityModel::all()->take(500);
            
        });
        return $result;
        $log=DB::getQuerylog();
        print_r($log);
        // return view('admin.post.show',compact('blogPosts',$blogPosts));

        return view('show',compact('result',$result));
    }

    // public function
}


//what to ask
//tested that db is connected with cache 
//but as uzair bhai said ke koi bh crud operation ho like if user added or created so cache update ho
//how to do this 
//furthr i connected redis with docker but when i am running redis-cli in laravel app so it shows download that command
//so didn't understand this as it is working fine on app 
