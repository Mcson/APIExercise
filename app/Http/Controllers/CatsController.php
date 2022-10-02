<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class CatsController extends Controller
{
    //
    // Returns a paginated image list of cats or dogs by breed
   // GET /v1/breeds/:breed
   public function image_list_cat_dog_breed(Request $request)
   {
       //set limit
       $limit = $request->limit ? $request->limit : 20;
      

       //fetch breeds
       $cats = HomeController::fetch_breed("https://api.thecatapi.com/v1/breeds");    

       //set pagination
       $paginated = HomeController::paginate($cats, $limit); 
       
       //parameters
       $params = ['page' => 1, 'limit' => $limit]; 
     
       
       return view('breed', ['params' => $params, 'result' =>  $paginated]);      
       
   }
}
