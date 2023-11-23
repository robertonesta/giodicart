@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">Prodotti</h2>
@if (session('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
@endif
<div class="d-flex justify-content-center">
    <a href="{{route('admin.products.create')}}" class="my-3 btn btn-primary text-decoration-none actions">
        <span>Aggiungi un nuovo prodotto</span>
    </a>
</div>
<table class="table table-striped table-dark">
  <thead class="text-center">
    <tr>
      <th scope="col">Immagine</th>
      <th scope="col">Nome</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody class="text-center">
    @forelse ($products as $product)
    <tr class="align-middle">
        <td class="text-center"><img height=100 src="{{$product->img}}" alt=""></td>
        <td>{{$product->name}}</td>
        <td>€{{$product->price}}</td>
        <td>{{$product->description}}</td>
        <td class="d-flex justify-content-center align-items-center">
                    <a href="{{route('admin.products.show', $product)}}"
                        class="btn btn-primary text-decoration-none actions">
                        <span>Visualizza</span>
                    </a>
                    <a href="{{route('admin.products.edit', $product)}}"
                        class="btn btn-warning text-decoration-none actions">
                        <span>Modifica</span>
                    </a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger actions" data-bs-toggle="modal"
                        data-bs-target="#modal{{$product->slug}}">
                        Cancella
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{$product->slug}}" tabindex="-1"
                        aria-labelledby="modalTitle-{{$product->slug}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark">
                                <div class="modal-header border-0">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione!</h1>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                    <img class="my-3" height=150 src="{{$product->img}}" alt="">
                                    </div>
                                    Sicuro di voler eliminare
                                    <strong>{{$product->name}}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Chiudi</button>
                                    <form action="{{route('admin.products.destroy', $product->slug)}}" method="post"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Cancella</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->
                </td>
    </tr>
    @empty
    <tr>No products registered</tr>
    @endforelse
  </tbody>
</table>
</div>
@endsection