<?php 
use Carbon\Carbon;
Carbon::setLocale('fr');
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="flex flex-row mt-12 mx-auto justify-center">
        <div class="w-3/5 mb-12">
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-[90%] mx-auto mb-5">
                <div class="p-5">
                    <a href="{{ URL::previous() }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                          </svg>                          
                         Retour
                    </a>
                    <a href="#">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight">{{ $post->title }} </h5>
                    </a>
                    <span class="text-xs mb-1 text-gray-400">Publié {{ Carbon::parse($post->created_at)->shiftTimezone('Europe/Paris')->diffForHumans(); }} </span>
                    <p class="font-normal text-gray-700 mb-3">{{ $post->content }}</p>
                </div>
            </div>
        </div>
    </body>
</html>
