@extends('structure.layout')

@section('title','Articles E-commerce')

@section('contenu')

  <h1>Liste des articles</h1>

  @foreach($articles as $key => $value)
    Utilisateur article : {{ $value->user->name }}<br>
    Titre article : {{ $value->titre }}<br>
    Photo article :
    <a href=""><img src="{{ asset('photos/'.$value->photo_principale) }}" alt=""></a><br>
    Résumé article :
    {{ $value->resume }}<br>
    Date de création : {{ $value->created_at->format('d/m/Y') }}<br>
    ====================================================================================<br>
  @endforeach

@endsection