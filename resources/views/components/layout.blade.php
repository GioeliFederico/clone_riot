<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- CSS -->
      <link rel="stylesheet" href="/css/app.css" />

      <!-- Font Awesome CDN -->
      <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
        crossorigin="anonymous"
      />

      <title>{{$title ?? 'League of Legends - Home page'}}</title>
    </head>
    <body>

      <x-_navbar />

      {{$slot}};

      <x-_footer />

      <script src="/js/app.js"> </script>
      @stack('scripts')

    </body>
</html>
