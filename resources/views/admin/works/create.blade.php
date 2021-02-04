{{-- Variables disponibles
    - $tags ARRAY(Tag) --}}

@php
$tags = \App\Models\Tag::orderBy('name', 'ASC')->get();
$clients = \App\Models\Client::orderBy('name', 'ASC')->get();
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajout d\'un work') }}
        </h2>
    </x-slot>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route('admin.works.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="title" class="block text-sm font-medium text-gray-700">
                                Titre
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="title" id="title" value="" class=" focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full
                                rounded-md sm:text-sm border-gray-300" placeholder="Votre titre">
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">
                            Contenu
                        </label>
                        <div class="mt-1">
                            <textarea id="content" name="content" rows="15"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                placeholder="Votre article"></textarea>
                        </div>
                    </div>
                    {{-- <div class="mb-2"> --}}
                    <fieldset
                        class="flex flex-wrap space-x-3 gap-1 focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md">
                        {{-- <select name="tags" id="tags" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"> --}}
                        @foreach ($tags as $tag)
                            {{-- <option value="{{ $tag->id }}">{{ $tag->name }}</option> --}}
                            <div>
                                <input class="border-gray-300 rounded-md" type="checkbox" name="tags[]"
                                    value="{{ $tag->id }}"> {{ $tag->name }}<br>

                            </div>

                        @endforeach

                    </fieldset>
                    {{-- </div> --}}
                    <div class="mb-2">
                        <select name="client_id" id="client_id"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                            <label for="image">Image</label>


                            <input type="file" name="image" id="image"
                                >


                    </div>
                    <fieldset
                        class="flex flex-wrap space-x-3 gap-1 focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md">
                        <div>
                            <input class="border-gray-300 rounded-md" type="checkbox" name="inSlider" value="1"> In slider
                        </div>
                    </fieldset>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Enregistrer
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
