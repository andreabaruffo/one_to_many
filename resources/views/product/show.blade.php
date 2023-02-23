<x-layout>
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 text-center">
                 <h1>Dettaglio Prodotto</h1>
            </div>
        </div>
   </div>
   <div class="container my-5">
    <div class="row">
        <div class="col-6">
            <img src="{{Storage::url($product->img)}}" class="img-fluid" alt="">
        </div>
        <div class="col-6">
            <h1>{{$product->name}}</h1>
            <p class="fw-bold">{{$product->description}}</p>
            <p>Venditore : {{$product->user->name}}</p>
            <p>Pubblicato il : {{$product->created_at}}</p>
        </div>
    </div>
   </div>
</x-layout>