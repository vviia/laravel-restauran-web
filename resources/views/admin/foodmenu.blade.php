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
        <div style="position: relative; top:60px; right:-150px">
            <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div>
                    <label for="">Title</label>
                    <input style="color: blue;" type="text" name="title" placeholder="write a title" required>
                </div>
                <div>
                    <label for="">Price</label>
                    <input style="color: blue;" type="num" name="price" placeholder="write a price" required>
                </div>
                <div>
                    <label for="">Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <label for="">Description</label>
                    <input style="color: blue;" type="text" name="description" placeholder="write a description" required>
                </div>
                <div>
                    <input type="submit" value="save">
                </div>
            </form>
            <div>
                <table>
                    <tr>
                        <th style="padding: 30px">Food Name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                        <th style="padding: 30px">Action 2</th>
                    </tr>
                    @foreach ($data as $data)
                        <tr align="center">
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->description }}</td>
                            <td> <img height="200" width="200" src="/foodimage/{{ $data->image }}"> </td>
                            <td><a href="{{ url('/deletemenu', $data->id) }}">Delete</a></td>
                            <td><a href="{{ url('/updatemenu', $data->id) }}">Update</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

      </div>
    @include("admin.adminscript");
  </body>
</html>