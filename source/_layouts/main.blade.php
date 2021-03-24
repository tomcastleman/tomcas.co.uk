<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>
<body class="text-gray-900 font-sans antialiased bg-gray-50">
<div class="container px-10">
    <div class="flex items-stretch mt-8 text-blue-750 w-9/12 mx-auto">
        <div class="flex-auto">
            <img class="h-20" src="/assets/images/TOMCAS-Logo_COLOURED.png">
        </div>
        <div class="flex-auto self-center">
            <h1 class="text-2xl font-bold text-right">TOMCAS Consulting</h1>
        </div>
    </div>
    <div class="border-b-2 border-blue-750 mt-8 mb-8"></div>
    <div class="w-9/12 mx-auto ">
        @yield('body')
    </div>
    <div class="border-b-2 border-blue-750 mt-8 mb-8"></div>
    <div class="h-24 w-9/12 mx-auto">
        <div class="flex items-stretch">
            <div class="flex-grow text-xs text-gray-500">
                Tomcas Consulting Limited. Registered in England &amp; Wales no. 10540609.<br>
                Registered office: West Walk Building, 110 Regent Road, Leicester LE1 7LT, United Kingdom.
            </div>
            <div class="flex-none w-12 ml-2">
                <img class="" src="/assets/images/footer-icon.svg">
            </div>
        </div>
    </div>
</div>
</body>
</html>
