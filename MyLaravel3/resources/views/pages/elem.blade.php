@extends("Layouts.main-layout")

@section("content")
  <h1>HELLO WORLD</h1>

  <div>
    <ul class="fraseFamosa">
      <h2>{{ $dataIndex["title"] }}</h2>
      <h3>{{ $dataIndex["desc"] }}</h3>
    </ul>

  </div>

@endsection
