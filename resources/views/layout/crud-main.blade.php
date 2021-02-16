<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Document</title>
</head>
<body>
  <header>
    <h1 class="text-center">@yield("header-title")</h1>
  </header>

  <main>
    @yield("main-content")
  </main>

  <footer>
    @yield("footer-content")
  </footer>

</body>
</html>
