<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class CatsDogsListController extends Controller
{
    //
    //Returns a combined paginated list of cats and dogs
    // GET /v1/list
    public function list_cat_dog_breed(Request $request)
    {
        //set limit
        $limit = $request->limit ? $request->limit : 20;       

       //Fetch Cats and Dogs data
        $data = HomeController::fetch_data();       
       
        //set pagination
        $paginated = HomeController::paginate($data, $limit);  
        //parameters
        $params = ['page' => 1, 'limit' => $limit]; 
        
        return view('list', ['params' => $params, 'result' =>  $paginated]);
    }
}
