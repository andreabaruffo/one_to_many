<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{Storage::url($product->img)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">Autore:{{$product->description}}</p>
          <p class="card-text">{{$product->price}}</p>
          <p class="card-text">Venditore: 
            <a href="{{route('user.product' , $product->user->id)}}">{{$product->user->name}}</a>
          </p>
          <a href="{{route('product.show' , $product)}}" class="btn btn-primary">Go somewhere</a>
          {{-- <p class="card-text"><small class="text-muted">{{$article->created_at->format('d/m/y')}}</small></p> --}}
        </div>
      </div>
    </div>
  </div>