@extends("Layouts.main-layout")

  @section("content")
  <section id="home">

    <ul>
      @foreach ($data as $elements)
      <li>
        <a href="{{ route('routShowElem', $loop->index) }}">
          {{ $elements['title'] }} (click me)
        </a>
      </li>
      @endforeach
    </ul>


</section>
@endsection
