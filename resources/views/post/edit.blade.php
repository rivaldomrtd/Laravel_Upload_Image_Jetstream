<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-align: center">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('posts.update', $post->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="title" value="{{__('Title')}}" />
                            <x-jet-input type="text" class="mt-1 block w-full" name="title" value="{{ $post->title }}" />
                            <x-jet-input-error for="title" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="description" value="{{__('Description')}}" />
                            <textarea  type="text" rows="10" name="description" class="
                            w-full
                            px-4
                            py-2
                            mt-2
                            border
                            rounded-md
                            focus:outline-none
                            focus:ring-1
                            focus:ring-blue-600"
                            >{{ $post->description }}</textarea>
                            <x-jet-input-error for="description" class="mt-2"  />
                        </div>
                        <div class="flex items-center mt-4">
                            <x-jet-button> Update
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
