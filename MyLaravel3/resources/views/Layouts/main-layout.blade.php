<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title></title>
  </head>

  <body>

    <article>
      @include('Components.header')
    </article>

    <section>
      @yield('content')
    </section>

    <aside>
      @include('Components.footer')
    </aside>
  </body>

</html>
