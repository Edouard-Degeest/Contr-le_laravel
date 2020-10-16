
@extends('layouts.base')
@section('content')
<link href="/css/edit.css" rel="stylesheet">

<main>
<h1> Liste des livres </h1>
<table class="table">
<thead>
<hr>
<tr>
<th scope="col">Titre</th>
<th scope="col">Auteur</th>
<th scope="col">Genre</th>
<th scope="col">Synopsis</th>
<th scope="col">Date</th>
<th scope="col">Action</th>


</tr>
</thead>
<tbody>
@foreach ($statue as $i)

<td>{{ $i->title }}</td>
<td>{{ $i->date }}</td>
<td>{{ $i->origine }}</td>
<td>{{ $i->prix }}</td>
<td>{{ $i->artiste }}</td>
<td> 
<form action="/delete" method="POST">
    @csrf
   <input type="hidden" name="id" value="{{$i->id }}">
<button type="submit"  class="btn btn-outline-danger">Delete</button>

</form>
<a class="btn btn-outline-primary2" href="{{ url('edit/'.$i->id) }}" >Modifier</a>

</td>
</tr>
@endforeach

</tbody>
</table>
@endsection