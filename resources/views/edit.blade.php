@extends('layouts.base')
@section('title', 'Editer un livre')
<link href="/css/edit.css" rel="stylesheet">


@section('content')
<h1>Modifier une Statuettes</h1>
<hr>
<form method="POST" action="/update">
    @csrf
    <input type="hidden" name="id" value="{{ $statue->id }}">
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" name="title" value="{{ $statue->title }}">
    </div>
    <div class="form-group">
        <label for="date">date</label>
        <input type="text" class="form-control" name="date" value="{{ $statue->date }}">
    </div>
    <div class="form-group">
        <label for="origine">origine</label>
        <input type="text" class="form-control" name="origine" value="{{ $statue->origine }}">
    </div>
    <div class="form-group">
        <label for="prix">prix</label>
        <input type="text" class="form-control" name="prix" value="{{ $statue->prix }}">
    </div>
    <div class="form-group">
        <label for="artiste">artiste</label>
        <textarea class="form-control" id="synopsis" name="artiste" rows="3">{{ $statue->artiste }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection