<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-align: center">
            {{ __('Gallery') }}
        </h2>
        <style>
            table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
            }table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
            }table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
            }table th,
            table td{
            padding: .625em;
            text-align: center;
            }img {
                display: block;
                margin: 0 auto;
                width: 40%;
            }table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
            }
            @media screen and (max-width: 600px) {
                table {
                    border: 2px;
                }table caption {
                    font-size: 1.3em;
                }table thead {
                    border: none;
                    clip: rect(0 0 0 0);
                    height: 1px;
                    margin: -1px;
                    overflow: hidden;
                    padding: 0;
                    position: absolute;
                    width: 1px;
                }table tr {

                    border-bottom: 3px solid #ddd;
                    display: block;
                    margin-bottom: .625em;
                }table td{
                    border-bottom: 1px solid #ddd;
                    display: block;
                    font-size: .8em;
                    text-align: right;
                }table td::before {
                    content: attr(data-label);
                    float: left;
                    font-weight: bold;
                    text-transform: uppercase;
                }table td:last-child {
                    border-bottom: 0;
                }img {
                    display: block;
                    margin: 0 auto;
                    width: 40%;
                }
            }
            body {
            font-family: "Open Sans", sans-serif;
            line-height: 1.25;
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" >
                    <div class="mb-5 container">
                        <div class="center" style="text-align:center;">
                            <x-jet-nav-link href="{{ route('images.create') }}" >
                                <x-jet-button>
                                    {{ __('Posts Gallery') }}
                                </x-jet-button>
                            </x-jet-nav-link>
                        </div>
                    </div>
                    <table class="center" >
                        <thead class="font-bold bg-gray-300 border-b-2">
                            <td scope="col">@sortablelink("ID")</td>
                            <td scope="col">Title</td>
                            <td scope="col">Tanggal</td>
                            <td scope="col">Image</td>
                            <td scope="col">Action</td>
                        </thead>
                        <tbody>
                            @foreach ($images->sortBy('created_at') as $image)
                            <tr>
                                <td class="px-4 py-2 " data-label="Title">{{ Str::limit($image->title,20) }}</td>
                                <td class="px-4 py-2" data-label="Created_at">{{ $image->created_at }}</td>
                                <td class="px-4 py-2" data-label="File" >
                                    <img src={{$image->file }} width="50"/>
                                </td>
                                <td class="px-4 py-2 font-extrabold">
                                    <form action="{{ route('images.destroy', $image->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <x-jet-danger-button type="submit"> Delete </x-jet-danger-button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $images->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    var tables = document.getElementsByTagName('tbody');
    var table = tables[tables.length - 1];
    var rows = table.rows;
    for(var i = 0, td; i < rows.length; i++){
        td = document.createElement('td');
        td.appendChild(document.createTextNode(i + 1));
        rows[i].insertBefore(td, rows[i].firstChild);
    }
</script>
