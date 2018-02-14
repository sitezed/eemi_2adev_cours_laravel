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

  <h1 style="color:blue">Ajouter un article</h1>
  <div class="col-sm-8">
    <form action="{{ route('article.enregistrer') }}" method="POST" enctype="multipart/form-data">

      <div class="form-group">
        <label for="utilisateur">utilisateur:</label>
        <select name="utilisateur" id="utilisateur">
          @foreach($listeUsers as $user)
           <option value="{{ $user->id }}">{{ $user->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="titre">Titre:</label>
        <input name="titre" type="text" class="form-control" id="titre">
      </div>
      <div class="form-group">
        <label for="resume">Reference:</label>
        <input name="resume" type="text" class="form-control" id="reference">
      </div>
      <div class="form-group">
        <label for="contenu">Reference:</label>
        <input name="contenu" type="text" class="form-control" id="reference">
      </div>

      <div class="form-group">
        <label for="photo_principale">Photo:</label>
        <input name="photo_principale" type="file" class="form-control" id="photo">
      </div>

      <div class="form-group">
        <label for="categorie">description:</label>
        <select name="categorie" id="categorie">
          <option value="sport">Sport</option>
          <option value="politique">Politique</option>
          <option value="cinema">Cinema</option>
        </select>
      </div>

      <button type="submit" class="btn btn-info">Enregistrer article</button>

    </form>
  </div>
@endsection