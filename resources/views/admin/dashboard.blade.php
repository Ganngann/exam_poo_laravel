{{-- @extends('admin.templates.dashboard')

@section('content')
<div class="row">
    <!-- Featured News -->
    <h2>Latest Blog Posts</h2>
    <div class="grid  grid-rows-1 grid-cols-4 gap-4">

        @php
        $posts = \App\Models\Post::orderBy('created_at', 'DESC')->take(4)->get()
        @endphp
        @each('posts._media_object', $posts, 'post')
    </div>

</div>
@endsection
 --}}


<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-1">
                {{ __('Gestion des posts') }}
            </h2>
            <a href="{{ route('admin.posts.create') }}" type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <!-- Heroicon name: solid/check -->
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                New post
              </a>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
    <div class="row  bg-white px-4 py-4">
        <!-- Featured News -->
        <h2 class="text-gray-500 text-2xl">Latest Blog Posts</h2>
        <div class="grid  grid-rows-1 grid-cols-4 gap-4">

            @php
            $posts = \App\Models\Post::orderBy('created_at', 'DESC')->take(4)->get()
            @endphp
            @each('posts._media_object', $posts, 'post')
        </div>
    </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
    <div class="row  bg-white px-4 py-4">
        <!-- Featured News -->
        <h2 class="text-gray-500 text-2xl">Latest Blog Posts</h2>
        <div class="grid  grid-rows-1 grid-cols-4 gap-4">

            @php
            $works = \App\Models\Work::orderBy('created_at', 'DESC')->take(4)->get()
            @endphp
            @each('works._card_3', $works, 'work')
        </div>
    </div>
    </div>

</div>
</x-app-layout>
