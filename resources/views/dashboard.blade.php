<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-align: center">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($images as $image)
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="card">
                            <img src="{{$image->file }}" width="50" class="card-img-top" alt="gambar" >
                            <div class="card-body">
                                <h5 class="card-title">{{ $image->title }}</h5>
                                <x-jet-nav-link href="#{{ $image->id }}" class="btn btn-primary">
                                    <x-jet-secondary-button>
                                        Baca Artikel
                                    </x-jet-secondary-button>

                                </x-jet-nav-link>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
