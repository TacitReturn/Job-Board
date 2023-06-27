<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body class="from-10% via-30% to-90% mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-500 mx-auto mt-10 text-slate-700">
    <nav class="mb-8 flex justify-between text-lg font-medium">
        <ul class="flex space-x-2">
            <li>
            </li>
        </ul>
        <ul class="flex space-x-2">
            @auth
                <li>
                    {{ auth()->user()->name ?? 'Guest' }}
                </li>
                <li>
                    <form action="{{ route('auth.destroy') }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <x-button>Logout</x-button>
                    </form>
                </li>
            @else
                <a href="{{ route('auth.create') }}">Login</a>
            @endauth
        </ul>
    </nav>
    {{ $slot }}
</body>
</html>
