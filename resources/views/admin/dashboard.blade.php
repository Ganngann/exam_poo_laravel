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
@endsection --}}


<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-1">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="row  bg-white px-4 py-4">
                <!-- Featured News -->
                <h2 class="text-gray-500 text-2xl">Latest Blog Posts</h2>
                <div class="grid  grid-rows-1 grid-cols-4 gap-4">

                    @php
                        $posts = \App\Models\Post::orderBy('created_at', 'DESC')
                            ->take(4)
                            ->get();
                    @endphp
                    @each('posts._media_object', $posts, 'post')
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="row  bg-white px-4 py-4">
                    <!-- Featured News -->
                    <h2 class="text-gray-500 text-2xl">Latest Blog Posts</h2>
                    <div class="grid  grid-rows-1 grid-cols-4 gap-4">
                        @php
                            $works = \App\Models\Work::orderBy('created_at', 'DESC')
                                ->take(4)
                                ->get();
                        @endphp
                        @each('works._card_4', $works, 'work')
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
