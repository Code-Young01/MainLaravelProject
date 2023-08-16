<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebPage - @yield('title_page')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')">
</head>
<body>

@include('partials.navigation')

@if (session('status'))
    <div> {{ session('status') }} </div>
@endif

@yield('content')

</body>
</html>