<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta property="og:site_name" content="{{ $page->siteName }}"/>
  <meta property="og:title" content="Automatic & flexible multi-tenancy package for Laravel."/>
  <meta property="og:description" content="{{ $page->siteDescription }}"/>

  <meta property="og:image" content="/assets/img/logo.png"/>
  <meta property="og:type" content="website"/>

  <meta name="theme-color" content="#5850EC">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <title>{{ ($title ?? null) ? $title . ' | Tenancy for Laravel' : 'Tenancy for Laravel' }}</title>
</head>
<body class="font-sans antialiased">

{{-- Header --}}
@include('_partials.header')
{{-- /Header --}}

<main class="
  {{ $page->centered ? 'p-8 md:w-1/2 w-full mx-auto' : '' }}
  {{ $page->markdown ? 'markdown' : '' }}
  ">
  @yield('content')
</main>

{{-- Footer --}}
@include('_partials.footer')
{{-- /Footer --}}

<script src="{{ $page->baseUrl . mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>