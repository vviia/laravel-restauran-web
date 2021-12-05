<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div style="position: relative; top:60px; right:-60px">
            <table bgcolor="grey" border="3px">
                <tr >
                    <th style="padding: 30px">Nama</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">Action</th>
                </tr>
                @foreach ($data as $data)
                    <tr align="center">
                        <th>{{ $data->name }}</th>
                            <th>{{ $data->email }}</th>
                        @if ($data->usertype=="0")
                            <th><a href="{{ url('/deleteuser',$data->id) }}">Delete</a></th>
                        @else
                            <th><a href="">Not Allowed</a></th>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
   @include("admin.adminscript");
  </body>
</html>