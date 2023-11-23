@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">Modifiche</h2>
   @include('partials.validation_error')
    <form action="{{route('admin.products.update', $product->slug)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label @error('description') is-invalid @enderror">Nuovo nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{old('name', $product->name)}}" placeholder="Nuovo nome del prodotto">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label @error('price') is-invalid @enderror">Nuovo prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $product->price)}}" aria-describedby="price" placeholder="Nuovo prezzo del prodotto">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label @error('description') is-invalid @enderror">Nuova descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="10">{{old('description', $product->description)}}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
          <label for="img" class="form-label @error('img') is-invalid @enderror">Link della nuova immagine</label>
          <input type="text" name="img" id="img" class="form-control" placeholder="Link della nuova immagine" value="{{old('img', $product->img)}}" aria-describedby="img">
        </div>
        <div id="buttons" class="d-flex justify-content-center gap-3">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
@endsection