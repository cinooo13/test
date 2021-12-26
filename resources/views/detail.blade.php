@extends('all')
@section('content')
<div class="container custom-details">
    <div class = "row">
        
        <div class = "col-sm-6">    
            
            <img class="details-img" src="{{$product['gallery']}}"> 
            
        </div>
        <div class="col-sm-6">
           
            <a href="\">Back to home </a>
            <br><br>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['prix']}}</h3>
            <h4>Details : {{$product['description']}}</h4>
            <h4>Category : {{$product['category']}} </h4>  
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add To Cart </button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy</button>
           
        </div>   
        
      
  </div>

  

@endsection('content')