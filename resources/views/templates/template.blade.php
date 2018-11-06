@include('piles.styles')

@include('piles.scripts')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    @stack('head')

    <!-- Title Page-->
    <title>{{$title ?? 'Admin'}}</title>

</head>
<body class="animsition">

    <div class="page-wrapper">

        @yield('content')

    </div>

     @stack('script')

</body>
</html>