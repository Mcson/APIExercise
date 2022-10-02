@extends('layout.layout')

 
@section('content')
 
	<div class="container pt-5">
        <div id="wrapper">
            <div class="row header-row">
                <h1 class="title">Cats and dogs combined paginated list breed</h1>
                <a href="/" class="btn btn-primary back">Back to Home</a>
            </div>        
            <div class="results mt-5 row">   

                    <table class="table">
                        <thead>
                            <tr>                            
                                    <th>ID</th>
                                    <th>Breed</th>
                                    <th>Image</th>
                            </tr>
                        </thead>
    
                        <tbody>
                            @foreach($result as $item)
                            <tr>
                                <td>{{$item['id']}}</td>
                                <td>{{$item['name']}}</td>
                                <td><img class="img-fluid" width="250" height="auto"  src="{{$item['image']['url']}}"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
    
                    {!! $result->withPath('/v1/breeds')->appends($params)->links() !!}
                
            </div>
        </div>
        <br>
    </div>

   
 
@endsection