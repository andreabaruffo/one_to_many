<x-layout>
    <x-header 
        title="Crea Prodotto"
    />
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nome Prodotto</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control" name="price">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Immagini</label>
                        <input type="file" class="form-control" name="img">
                      </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>