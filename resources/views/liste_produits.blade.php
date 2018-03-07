@extends('structure.layout')

@section('title','Produits E-commerce')

@section('contenu')

  <h2>Tableau des produits</h2>
  <table class="table">
    <thead>
    <tr>
      <td>
        <a href="{{ route('produit.nouveau') }}">+ nouveau produit</a>
      </td>
    </tr>
    <tr>
      <!-- ici nous affichons les tritres de notre Table HTML, en nous basant sur les titres du 1er array PHP dans l'indice 0 -->
      <th>id</th>
      <th>titre</th>
      <th>reference</th>
      <th>prix</th>
      <th>photo</th>
      <th>quantite</th>
      <th>Mod</th>
      <th>Suppr</th>
    </tr>
    </thead>
    <tbody>
    @foreach($produits as $key => $value)
    <tr>
      <td>{{ $value->id }}</td>
      <td>{{ $value->titre }}</td>
      <td>{{ $value->reference }}</td>
      <td>{{ $value->prix  }}</td>
      <td><img width="100" src="{{ asset('stockage/photos/' . $value->photo) }}" alt=""></td>
      <td>{{ $value->quantite  }}</td>
      <td>
        <a href="{{ route('produit.modifier', $value->id) }}">
          <i class="fa fa-edit"></i>
        </a>
      </td>
      <td>
        <a onclick="return confirm('T sûr ??')" href="{{ route('produit.suppression', $value->id) }}">
          <i class="fa fa-trash"></i>
        </a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>

@endsection