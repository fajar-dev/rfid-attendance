<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Bootstrap 5 Template</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">      

    </head>
    
    <body id="top">

      @yield('content')        

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('j/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>