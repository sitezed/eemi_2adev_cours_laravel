@extends('structure.layout')

@section('title','Produits E-commerce')

@section('contenu')

  <h1>Liste des produits</h1>

  {{ $okok }}

  @foreach($produits as $key => $value)
    {{ $value->id }}<br>
    {{ $value->titre }}<br>
    {{ $value->reference }}<br>
    {{ $value->slug }}<br>
    {{ $value->photo }}<br>
    {{ $value->prix }}<br>
    {{ $value->quantite }}<br>
    {{ $value->description }}<br>
    {{ $value->created_at }}<br>
    {{ $value->updated_at }}<br>
  @endforeach

@endsection