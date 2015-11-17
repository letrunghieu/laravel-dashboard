<!-- Twitter Bootstrap CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"/>

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>

<!-- Admin LTE CSS -->
<link rel="stylesheet"
      href="{{ asset('vendor/' . \HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME . '/dist/css/AdminLTE.min.css') }}"/>

<!-- Admin LTE skin CSS -->
<link rel="stylesheet"
      href="{{ asset('vendor/' . \HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME . '/dist/css/skins/skin-' . (app(\HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME)->getSkin()) . '.css') }}"/>

<!-- Modernizr script -->
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>