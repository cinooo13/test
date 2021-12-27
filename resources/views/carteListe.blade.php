@extends('all')
@section("content")

        <div class="trending-wrapper">
            <h4>Votre Panier</h4>
             <br><br>
            @foreach($products as $item)
            <div class=" row searched-item cart-list">
             <div class="col-sm-3">
                <a href="details/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="\sup\{{$item->idc}}" class="btn btn-warning" >Supprimer</a>
             </div>
            </div>
            @endforeach
          </div>
          <br><br>
          <a class="btn btn-success" href="confirmation">Confirmer</a> <br> <br>

     
@endsection 