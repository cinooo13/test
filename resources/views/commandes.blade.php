@extends('all')
@section("content")

        <div class="trending-wrapper">
            <h4>Vos Commandes</h4>
             <br><br>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list">
             <div class="col-sm-3">
                <a href="details/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Nom : {{$item->name}}</h2>
                      <h5>Description : {{$item->description}}</h5>
                      <h5>Status : {{$item->status}}</h5>
                      <h5>Methode de paiment : {{$item->payment_methode}}</h5>
                      <h5>Status du paiment : {{$item->payment_status}}</h5>
                      <h5>Adresse : {{$item->adresse}}</h5>
                    </div>
             </div>
            
            </div>
            @endforeach
          </div>
          <br><br>
          
     
@endsection 