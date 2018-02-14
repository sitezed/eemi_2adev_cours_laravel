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

  <h1>Ajouter un produit</h1>
<div class="col-sm-8">
  <form action="{{ route('produit.enregistrer') }}" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titre">Titre:</label>
    <input name="titre" type="text" class="form-control" id="titre">
  </div>
  <div class="form-group">
    <label for="reference">Reference:</label>
    <input name="reference" type="text" class="form-control" id="reference">
  </div>

    <div class="form-group">
      <label for="photo">Photo:</label>
      <input name="photo" type="file" class="form-control" id="photo">
    </div>

  <div class="form-group">
    <label for="prix">prix:</label>
    <input name="prix" type="text" class="form-control" id="prix">
  </div>
  <div class="form-group">
    <label for="quantite">Quantité: </label>
    <select name="quantite" id="quantite">
      @for($i=1;$i<100;$i++)
        <option value="{{ $i }}">{{ $i }}</option>
      @endfor
    </select>
  </div>
  <div class="form-group">
    <label for="description">description:</label>
    <input name="description" type="text" class="form-control" id="description">
  </div>

  <button type="submit" class="btn btn-info">Enregistrer produit</button>

  </form>
</div>
@endsection