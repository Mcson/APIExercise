<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class CatsDogsBreedController extends Controller
{
    //
    // Returns a combined paginated list of cat and dog breeds
    // GET /v1/breeds
    public function combined_cat_dog_breed(Request $request)
    {
        //set limit
        $limit = $request->limit ? $request->limit : 20;       

        //Get data
        $data = HomeController::fetch_data();
       
        //set pagination
        $paginated = HomeController::paginate($data, $limit);  
        //parameters
        $params = ['page' => 1, 'limit' => $limit]; 
        
        return view('home', ['params' => $params, 'result' =>  $paginated]);
    }
}
