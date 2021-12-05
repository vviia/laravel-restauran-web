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
        <form action="{{ url('/uploadchef') }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Name</label>
                <input style="color: blue" type="text" name="name" required="" placeholder="Enter Name">
            </div>
            <div>
                <label for="">Speciality</label>
                <input type="text" style="color: blue" name="speciality" required="" placeholder="speciality">
            </div>
            <div>
                <input type="file" name="image" required="">
            </div>
            <div>
                <input style="color: blue" type="submit" value="save">
            </div>
        </form>
        <table bgcolor="black">
            <tr>
                <th style="padding: 30px;">Chef Name</th>
                <th style="padding: 30px;">Speciality</th>
                <th style="padding: 30px;">Image</th>
                <th style="padding: 30px;">Action</th>
                <th style="padding: 30px;">Action2</th>
            </tr>
            @foreach ( $data as $data )
            <tr align="center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->speciality }}</td>
                <td><img height="100" width="100" src="/chefimage/{{ $data->image }}" alt=""></td>
                <td><a href="{{ url('/updatechef', $data->id) }}">Update</a></td>
                
                <td><a href="{{ url('/deletechef', $data->id) }}">Delete</a></td>
            </tr> 
            @endforeach
        </table>
    </div>
    @include("admin.adminscript")
  </body>
</html>