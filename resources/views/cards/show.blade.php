@extends('layout')

@section('content')

<h1>{{  $card->title }}</h1>
<ul class="list-group">
@foreach ($card->notes as $note)

<a href="/notes/{{ $note->id }}/edit"><li class="list-group-item">{{  $note->body }}</li></a>

 @endforeach
 </ul>

<h3>Add a New Note</h3>

<form method="POST" action="/cards/{{ $card->id }}/notes" >

{{ csrf_field() }}

  <div class="form-group">
    <textarea name="body" rows="3" cols="40" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add Note </button>
  </div>

</form>

@stop
