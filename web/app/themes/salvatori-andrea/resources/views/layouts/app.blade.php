<!doctype html>
<html class="" @php language_attributes() @endphp>
@include('partials.head')
<body @php body_class() @endphp>
@php do_action('get_header') @endphp
<div id="app" role="document">
    
    <div id="barba-wrapper">
        <div class="barba-container">
        @include('partials.header')
        @yield('content')
        @if (App\display_sidebar())
            <aside class="sidebar">
                @include('partials.sidebar')
            </aside>
        @endif
        </div>
    </div>    
</div>
@php do_action('get_footer') @endphp
@include('partials.footer')
@php wp_footer() @endphp
</body>
</html>
