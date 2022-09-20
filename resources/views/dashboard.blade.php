<?php 
use Carbon\Carbon;
Carbon::setLocale('fr');
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- component -->
                    <div class="min-w-screen flex items-center justify-center">
                        <div class="max-w-7xl w-full mx-auto py-4">
                            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4 items-center justify-center">
                                <div class="w-full lg:w-1/5">
                                    <div class="widget w-full p-4 rounded-lg">
                                        <div class="flex items-center">
                                            <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <div class="text-lg">{{ $views }}</div>
                                                <div class="text-sm text-gray-400">Vues</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/5">
                                    <div class="widget w-full p-4 rounded-lg">
                                        <div class="flex items-center">
                                            <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <div class="text-lg">XXX</div>
                                                <div class="text-sm text-gray-400">Personnes</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/5">
                                    <div class="widget w-full p-4 rounded-lg">
                                        <div class="flex items-center">
                                            <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                                </svg>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <div class="text-lg">{{ $numberOfArticles }}</div>
                                                <div class="text-sm text-gray-400">Articles</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="font-bold text-xl mt-12 mb-6">Mes articles</h3>
                            @foreach($posts as $post)
                            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-[70%]  mb-5">
                                <div class="p-5">
                                    <a href="/post/{{ $post->id }}">
                                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight">{{ $post->title }} </h5>
                                    </a>
                                    <span class="text-xs mb-1 text-gray-400">Publié {{ Carbon::parse($post->created_at)->shiftTimezone('Europe/Paris')->diffForHumans(); }} </span>
                                    <p class="font-normal text-gray-700 mb-3">{{ Str::limit($post->content, 160, "...") }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
