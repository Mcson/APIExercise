@extends('layout.layout')

 
@section('content')
 
	<div class="container pt-5">
        <div id="wrapper">
            <div class="row header-row">
                <h1 class="title">Dogs paginated image list</h1>
                <a href="/" class="btn btn-primary back">Back to Home</a>
            </div>           
            <div class="results mt-5 row">               
                  
                    @foreach($result as $item)
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="card">
                                    <img class="card-img-top" width="250" height="auto" src="{{$item['image']['url']}}">
                                    <div class="card-body">                                       
                                        <h2>{{$item['name']}}</h2>
                                    </div>
                                </div>
                            </div>
                        
                    @endforeach   
                  
    
                    {!! $result->withPath('/v1/:image')->appends($params)->links() !!}
                
            </div>
        </div>
        <br>
    </div>

   
 
@endsection