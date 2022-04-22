<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{config('app.name', 'LSAPP')}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

     {{-- ckeditor CDN --}}
       <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>

</head>

<body>
     
    <div id="app">
    
      @include('inc.navbar')

      <div class="container">
        @include('inc.messages')    
          {{-- <script src="node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script> --}}
            <script>
                ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
            </script>

        <main class="py-4">
            @yield('content')
        </main>
        </div>
    </div>

</body>
</html>
