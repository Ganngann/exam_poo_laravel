{{-- Variables disponibles
    - $posts ARRAY(Post) --}}

<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-1">
                {{ __('Gestion des posts') }}
            </h2>
            <a href="{{ route('admin.posts.create') }}" type="button"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <!-- Heroicon name: solid/check -->
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                New post
            </a>
        </div>
    </x-slot>


    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Image
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Content
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Infos
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                    <div class="justify-self-center w-48">{{ $posts->links() }}</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-32">
                                                <img class="" src="{{ asset('assets/img/blog/' . $post->image) }}"
                                                    alt="{{ $post->image }}">
                                            </div>

                                        </div>
                                        <div class="text-gray-500 text-xs">{{ $post->image }}</div>

                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $post->title }}</div>
                                    </td>
                                    <td class="px-6 py-4">

                                        <div class="text-sm text-gray-900">{!! Str::of($post->content)->limit(400) !!}
                                        </div>
                                    </td>
                                    <td class="text-sm text-gray-500 whitespace-nowrap">
                                        <div class="text-sm text-gray-500 whitespace-nowrap">Categorie :
                                            {{ $post->categorie->name }}</div>
                                        <div class="text-sm text-gray-500">Id : {{ $post->id }}</div>
                                        <div class="text-sm text-gray-500">Created :
                                            {{ \Carbon\Carbon::parse($post->created_at)->format('H:i:s j/m/y') }}
                                        </div>
                                        <div class="text-sm text-gray-500">Last update :
                                            {{ \Carbon\Carbon::parse($post->updated_at)->format('H:i:s j/m/y') }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('admin.posts.edit', $post->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post"
                                            class="py-1.5">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="text-indigo-600 hover:text-indigo-900"
                                                type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="4">
                                </td>
                                <td colspan="1">
                                    <div class="justify-self-center w-48">{{ $posts->links() }}</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
