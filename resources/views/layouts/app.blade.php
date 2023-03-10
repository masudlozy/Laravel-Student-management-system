<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("layouts.includes.header")
<body>
    <div id="app">
        @include("layouts.includes.nav")
        <main class="py-4">
            <div class="container">
        <div class="row justify-content-center">
            @if (auth()->user())
              @include("layouts.includes.sidebar")
            @endif
             <div class="col-md-9">
                @yield('content')

            </div>
        </div>
        </div>
        </main>
    </div>
</body>
</html>
