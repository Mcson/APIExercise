<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    //home
    function index()
    {        
        return view('index');
    }

    // Custom function
    //Merging Cats and Dogs data
    public function fetch_data()
    {        
        //fetch cat breeds
        $cats = static::fetch_breed("https://api.thecatapi.com/v1/breeds");       
         
        //fetch dog breeds 
        $dogs = static::fetch_breed("https://api.thedogapi.com/v1/breeds");       
         
        //merging cats and dogs
        $merged = array_merge($cats, $dogs); 
         
        return $merged;
    }

    // Custom function
    //pagination
    public static function paginate($items, $perPage = null, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    
    }

    //Custom function
    //fetch breed
    public static function fetch_breed($url)
    {
        $result = [];
        foreach(json_decode(Http::get($url), true) as $val){
            if(array_key_exists("image",$val)){
                $result[] = [
                    "id" => $val['id'],
                    "name" => $val["name"],
                    "image" => $val['image']
                ];
                
            }else{
                continue;
            }
        }
        return $result;
    }
    
}
