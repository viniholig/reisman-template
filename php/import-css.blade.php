   <link href="{{ stylesheet('bootstrap.css') }}" rel="stylesheet">
   <link rel="preload" href="{{ stylesheet('reisman.css') }}" as="style">
   <link rel="stylesheet" href="{{ stylesheet('reisman.css') }}">   @if (starts_with(request()->path(), 'checkout'))
       <link rel="stylesheet" href="{{ stylesheet('checkout.css') }}">
   @elseif(starts_with(request()->path(), 'account'))
       <link rel="stylesheet" href="{{ stylesheet('account.css') }}">
   @endif
   <link href="{{ canopus_css() }}" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">




   @stack('styles')
