@extends('layout')

@section('content')
  <div class="title">All Cards</div>
  <ul>
    @foreach ($cards as $card)
      <li>
        {{ $card -> title }}
      </li>
    @endforeach
</ul>
@stop
