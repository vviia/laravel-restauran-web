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
      <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
        @include("admin.navbar");

        <div style="position: relative; top:60px; right:-150px">
            <form action="{{ url('/update', $data->id) }}" method="post" enctype="multipart/form-data">

                @csrf

                <div>
                    <label for="">Title</label>
                    <input style="color: blue;" type="text" name="title" value="{{ $data->title }}" required>
                </div>
                <div>
                    <label for="">Price</label>
                    <input style="color: blue;" type="num" name="price" value="{{ $data->price }}" required>
                </div>
                <div>
                    <label for="">Description</label>
                    <input style="color: blue;" type="text" name="description" value="{{ $data->description }}" required>
                </div>
                <div>
                    <label for="">Old Image</label>
                    <img height="200" width="200" src="/foodimage/{{ $data->image }}">
                </div>
                <div>
                    <label for="">Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <input type="submit" value="save">
                </div>
            </form>
        </div>

    </div>
    @include("admin.adminscript");
  </body>
</html>