<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}" id="maincss">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <div class="flex justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <div>
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Welcome to Enigma!
                    </h2>
                </div>
                <div class="mt-8 space-y-6">
                    <div class="rounded-md shadow-sm">
                        <a href="/login" class="button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Log in
                        </a>
                    </div>
                    <div class="text-sm text-center">
                        <a href="/register" class="font-medium text-red-500 hover:text-red-600">
                            Don't have an account? Register here.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>