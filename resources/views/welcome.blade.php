<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
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
    </body>
</html>
