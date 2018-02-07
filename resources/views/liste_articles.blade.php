@extends('structure.layout')

@section('title','Articles E-commerce')

@section('contenu')

  <h1>Liste des articles</h1>

  @foreach($articles as $key => $value)
    {{ $value->id }}<br>
    {{ $value->titre }}<br>
    <a href=""><img src="{{ asset('photos/'.$value->photo_principale) }}" alt=""></a><br>
    {{ $value->resume }}<br>
    Date de création : {{ $value->created_at->format('d/m/Y') }}<br>
  @endforeach

@endsection