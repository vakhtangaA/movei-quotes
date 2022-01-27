<!DOCTYPE html>
<html lang="en"
      class="h-full">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible"
        content="IE=edge" />
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}"
        rel="stylesheet" />
  <link rel="apple-touch-icon"
        sizes="180x180"
        href="{{ asset('images/apple-touch-icon.png') }}">
  <link rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{ asset('images/favicon-32x32.png') }}">
  <link rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset('images/favicon-16x16.png') }}">
  <link rel="manifest"
        href="{{ asset('images/site.webmanifest') }}">
  <title>Movie Quotes</title>
</head>

<body class="h-full">
  <!-- this script is for firefox to not flash styles  before everything is loaded -->
  <script>
    0
  </script>
  @include('components.utils.flash')
  {{ $slot }}

</body>

</html>
