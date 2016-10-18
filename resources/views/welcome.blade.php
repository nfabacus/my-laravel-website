@extends('layout')

@section('content')
  <div class="title">Welcome</div>
  @if (empty($people))
    There are no people.
  @else
    There are people.
  @endif

  @foreach ($people as $person)
    <li>{{ $person }}</li>
  @endforeach

  @foreach ($pets as $pet)
    <li>{{ $pet }}</li>
  @endforeach

@stop
