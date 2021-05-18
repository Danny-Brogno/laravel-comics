@extends("Layouts.main-layout")

@section("content")
  <h1>HELLO WORLD</h1>


  <div>

    <ul>
      @foreach ($data as $elements)
      <li>
        <a href="{{ route('elem', $loop->index) }}">
          {{ $elements['title'] }}
        </a>
      </li>
      @endforeach
    </ul>

</div>

@endsection
