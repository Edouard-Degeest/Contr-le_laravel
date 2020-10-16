<link href="/css/add.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@extends('layouts.base')
@section('title', 'Ajouter une statuettes')
@section('css','/css/edit.css')
@section('content')

<h1>Ajouter une Statue</h1>


<form method="POST" action="/add">
  @csrf
  <div>
    <div class="form-group">
      <label for="title">Titre :</label>
      <input name="title" type="text" class="form-control" value="Bouudha le sang">
    </div>
    <div class="form-group">
      <label for="date">Date de création :</label>
      <input name="date" type="text" class="form-control" value="1700">
    </div>
    <div class="form-group">
      <label for="origine">Origine :</label>
      <input name="origine" type="text" class="form-control" value="Inde">
    </div>
    <div class="form-group">
      <label for="prix">Prix :</label>
      <input name="prix" type="text" class="form-control" value=" 30€">
    </div>
    <div class="form-group">
      <label for="artiste">Artiste</label>
      <input name="artiste" type="text" class="form-control" value="Charle de Monceaut">
    </div>
    <button class="btn-primary">✔︎</button>
    </div>

  </form>
@endsection

