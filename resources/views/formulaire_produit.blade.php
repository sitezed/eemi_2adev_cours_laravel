@extends('structure.layout')

@section('title','Produits E-commerce')

@section('contenu')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <h1>{{ \Illuminate\Support\Str::ucfirst($action) }} un produit</h1>
<div class="col-sm-8">
  <form action="{{ route(Route::currentRouteName(), (!empty($produitAmodifier))? $produitAmodifier->id : '') }}" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titre">Titre:</label>
    <input name="titre" type="text" class="form-control"
           value="{{ !empty($produitAmodifier) ? $produitAmodifier->titre : old('titre') }}" id="titre">
  </div>
  <div class="form-group">
    <label for="reference">Reference:</label>
    <input name="reference" type="text" class="form-control" value="{{ !empty($produitAmodifier) ? $produitAmodifier->reference : old('reference') }}" id="reference">
  </div>

    <div class="form-group">
      <label for="photo">Photo:</label>
      @if(!empty($produitAmodifier) && is_file(public_path('stockage/photos/' . $produitAmodifier->photo)))
        <img width=100 src="{{ asset('stockage/photos/' . $produitAmodifier->photo) }}" alt="{{ $produitAmodifier->titre }}">
      @endif
      <input name="photo" type="file" class="form-control" value="{{ !empty($produitAmodifier) ? $produitAmodifier->photo : old('photo') }}" id="photo">
    </div>

  <div class="form-group">
    <label for="prix">prix:</label>
    <input name="prix" type="text" class="form-control" value="{{ !empty($produitAmodifier) ? $produitAmodifier->prix : old('prix') }}" id="prix">
  </div>
  <div class="form-group">
    <label for="quantite">Quantité: </label>
    <select name="quantite" id="quantite">
      @for($i=1;$i<100;$i++)
        <option {{ ((!empty($produitAmodifier) && $produitAmodifier->quantite == $i) || old('quantite') == $i) ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
      @endfor
    </select>
  </div>
  <div class="form-group">
    <label for="description">description:</label>
    <input name="description" type="text" class="form-control"
           value="{{ !empty($produitAmodifier) ? $produitAmodifier->description : old('description') }}" id="description">
  </div>

  <button type="submit" class="btn btn-info">{{ $action }}  produit</button>

  </form>
</div>
@endsection