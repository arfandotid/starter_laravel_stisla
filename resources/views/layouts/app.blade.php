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
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <nav class="navbar navbar-expand-lg main-navbar">
                @include('includes.navbar')
            </nav>

            <div class="main-sidebar sidebar-style-2">
                @include('includes.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="section-body">
                        <h2 class="section-title">@yield('title')</h2>
                        <p class="section-lead">@yield('desc')</p>
                        @yield('content')
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                @include('includes.footer')
            </footer>
        </div>
    </div>

    @include('includes.script')
    @stack('scripts')
</body>

</html>
