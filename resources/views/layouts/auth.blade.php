<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>

    @include('includes.style')
    @stack('styles')
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    @include('includes.script')
    @stack('scripts')
</body>

</html>
