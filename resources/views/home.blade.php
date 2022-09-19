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
    <body class="flex flex-row mt-24 mx-auto justify-center">
        <div class="w-3/5">
            @foreach($posts as $post)
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-[90%] mx-auto mb-5">
                <div class="p-5">
                    <a href="#">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight">{{ $post->title }} </h5>
                    </a>
                    <span class="text-xs mb-1 text-gray-400">Publié {{ Carbon::parse($post->created_at)->shiftTimezone('Europe/Paris')->diffForHumans(); }} </span>
                    <p class="font-normal text-gray-700 mb-3">{{ Str::limit($post->content, 160, "...") }}</p>
                    <a href="/post/{{ $post->id }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lire le poste
                        <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="w-2/5">
            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-[90%] mx-auto">
                <div class="p-5">
                    <a href="#">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Postes les plus consultés :</h5>
                    </a>
                    <p class="font-normal text-gray-700 mb-3">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </div>
    </body>
</html>
