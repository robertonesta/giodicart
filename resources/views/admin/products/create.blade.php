@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">Nuovo Prodotto</h2>
   @include('partials.validation_error')
    <form action="{{route('admin.products.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Nome Prodotto">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" aria-describedby="price" placeholder="Prezzo prodotto">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" aria-describedby="description" placeholder="Product description" rows="4"></textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="img" name="img" aria-describedby="img" placeholder="Immagine">
            @error('img')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div id="buttons" class="d-flex justify-content-center gap-3">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-success">Conferma</button>
        </div>
    </form>
</div>
@endsection