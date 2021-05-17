<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>TEST 17 MAGGIO</title>
  </head>
  <body>

    <header>
      <h1>Hello world from {{ $name }}</h1>
    </header>

    <main>
      <h2>Record count: {{ count($records) }}</h2>
      @if(count($records) == 1)
        <p>Single record</p>
      @elseif (count($records) > 1)
        <p>Multiple records</p>
      @else
        <p>No records</p>
      @endif

      <ul>
        @foreach ($records as $record)
          <li>{{ $loop -> iteration }} {{ $record }}</li>
        @endforeach
      </ul>

      <p>
        @foreach ($records as $record)
        {{ $record }}
          @if(!$loop -> last)
            ♠ ♣ ♥ ♦
          @endif
        @endforeach
      </p>

      <p>
        @for ($i = 0; $i < 10; $i++)
        {{ $i }}
          @if ( $i < 9)
            ☭
          @endif
        @endfor
      </p>

    </main>

  </body>
</html>
