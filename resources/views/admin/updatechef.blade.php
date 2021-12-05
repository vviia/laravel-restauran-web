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
        @include("admin.navbar")
   
    
        <form action="{{ url('/updatefoodchef', $data->id) }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Chef Name</label>
                <input style="color: blue;" type="text" name="name" value="{{ $data->name }}">
            </div>
            <div>
                <label for="">Speciality</label>
                <input style="color: blue;" type="text" name="speciality" value="{{ $data->speciality }}">
            </div>
            <div>
                <label for="">Old Image</label>
                <img height="200" width="200" src="/chefimage/{{ $data->image }}" alt="">
            </div>
            <div>
                <label for="">New Image</label>
                <input type="file" name="image" required="">
            </div>
            <div>
                <input style="color: blue; text-align: center;" type="submit" value="Update Chef" required="">    
            </div>
        </form>
    </div>
    @include("admin.adminscript")
  </body>
</html>