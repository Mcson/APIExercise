<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class DogsController extends Controller
{
    //
    //Returns an image of the cat or dog by image ID
    // GET /v1/:image
    public function image_list_dog_breed(Request $request)
    {
         //set limit
         $limit = $request->limit ? $request->limit : 20;     

         //fetch breeds
         $dogs = HomeController::fetch_breed("https://api.thedogapi.com/v1/breeds");   
 
         //set pagination
         $paginated = HomeController::paginate($dogs, $limit); 
         
         //parameters
         $params = ['page' => 1, 'limit' => $limit]; 
       
         
         return view('image', ['params' => $params, 'result' =>  $paginated]);      
    }
}
