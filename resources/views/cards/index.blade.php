@extends('layout')

@section('content')

<h1>All Cards</h1>

@foreach($cards as $card)

<div>
<a href="/cards/{{ $card->id }}">{{  $card->title }}</a>
</div>

@endforeach


<h3>Add a New Card</h3>

<form method="POST" action="/cards/{{ $card->id }}/" >

{{ csrf_field() }}

  <div class="form-group">
    <textarea name="title" rows="3" cols="40" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add Card</button>
  </div>

</form>


@stop
