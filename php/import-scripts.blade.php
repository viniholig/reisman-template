<script src="{{ canopus_js() }}" defer></script>
<script src="{{ script('checkout-preview.js') }}" defer></script>
<script src="{{ script('bootstrap.js') }}"></script>
<script src="{{ script('jquery_min.js') }}"></script>
<script src="{{ script('reisman.js') }}"></script>
@if (!starts_with(request()->path(), 'aliancas-de-casamento'))
    <script src="{{ script('slinky_min.js') }}"></script>
@endif

@if (starts_with(request()->path(), '/'))
    <script src="{{ script('swiper.js') }}"></script>
    <script src="{{ script('home-new.js') }}"></script>
@endif
@stack('scripts')


<script></script>
