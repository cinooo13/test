@extends('all')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>Prix</td>
              <td>DZ {{$total}}</td>
              </tr>
              <tr>
                <td>Livraison</td>
                <td>DZ 10</td>
              </tr>
              <tr>
                <td>Total</td>
              <td>DZ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <br><br><br>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="entrer votre adresse" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Methode de paiment</label> <br> <br>
                  <input type="radio" value="EnLigne" name="payment"> <span>Paiment En Ligne</span> <br> <br>
                  <input type="radio" value="Cash" name="payment"> <span>Paiment A La Livraison</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-success">Confirmer</button>
              </form>
          </div>
     </div>
</div>
@endsection 