@extends('structure.layout')

@section('title','Produits E-commerce')

@section('contenu')

  <h1>Liste des produits</h1>

  @foreach($produits as $produit)
    {{ $produit->id }}<br>
    {{ $produit->titre }}<br>
    {{ $produit->reference }}<br>
    {{ $produit->slug }}<br>
    {{ $produit->photo }}<br>
    {{ $produit->prix }}<br>
    {{ $produit->quantite }}<br>
    {{ $produit->description }}<br>
    {{ $produit->created_at }}<br>
    {{ $produit->updated_at }}<br>
  @endforeach

@endsection