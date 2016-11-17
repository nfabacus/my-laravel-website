@extends('layout')

@section('content')
  <div class="title">All Cards</div>
  <ul>
    @foreach ($cards as $card)
      <li>
        <a href="/cards/{{ $card->id }}">{{ $card -> title }}</a>
      </li>
    @endforeach
</ul>
@stop
