<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('base.name'))</title>       
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="py-6 flex flex-col	 items-center min-h-screen">
        <main role="main" class="flex flex-col justify-center items-center">
            @yield('content')   
        </main>
           
            <footer class="mt-96">
                
                <p class="text-gray-400">&copy; Copiryght {{ date('Y')}} 
                
                    @if(!Route::is('about'))
                    &middot; <a href="{{ route('about')}}" class="text-indigo-500 hover:text-indigo-600 underline">About us</a>
                    @endif
                </p>
            </footer>
    </body>
</html>
