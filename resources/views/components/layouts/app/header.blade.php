<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-gray-800">
        {{ $slot }}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-black">
                {{ __('Log Out') }}
            </button>
        </form>
    </body>
