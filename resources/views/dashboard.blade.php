<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-align: center">
            {{ __('Postingan') }}
        </h2>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
        <style type="text/css">
        .show_image img{
            position: absolute;
            left: -1000%;
            right: -1000%;
            top: -1000%;
            bottom: -1000%;
            margin: auto;
            min-height: 100%;
            min-width: 100%;
            display: block;
        }

        </style>
    </x-slot>
    <div class="py-12">
        <div class="row max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @foreach ($images as $image)
            <div class="col-md-4 col-sm mt-4 p-6">
                <div class="card text-center p-0">
                    <div class="card-header">
                        <b style="color: black">{{$image->title}}</b>
                    </div>
                    <div class="card-body ">
                        <img src="{{$image->file}}">
                    </div>
                    <p class="card-text">{{Str::limit($image->description,30)}}</p>
                    <div class="card-footer text-muted" style="background-color: white">{{$image->description}}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
