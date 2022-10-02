@extends('layout.layout')

 
@section('content')
 
	<div class="container pt-5">
        <h1 class="title">Breed Browser</h1>
        <br>
        <div class="row">
           
          <div class="col-sm-12">
            <a href="/v1/breeds" class="btn btn-primary">Cats and Dogs Combined Paginated List</a>
          </div>

        </div>
        <br>
        <div class="row"> 
        
          <div class="col-sm-12">
            <a href="/v1/breeds/:breed" class="btn btn-primary">Cats Paginated Image List</a>
          </div>
         
        </div>
        <br>
        <div class="row"> 
        
          <div class="col-sm-12">
            <a href="/v1/list" class="btn btn-primary">Cats and Dogs List</a>
          </div>
         
        </div>
        <br>
        <div class="row"> 
        
          <div class="col-sm-12">
            <a href="/v1/:image" class="btn btn-primary">Dogs Paginated Image List</a>
          </div>
         
        </div>
    </div>

   
 
@endsection