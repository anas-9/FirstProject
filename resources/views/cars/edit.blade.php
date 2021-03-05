@extends('cars.app')

@section('content')
<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase font-bold orange-txt">
            Edit car
        </h1>
    </div>
</div>
    <div class="flex justify-center pt-20">
        @foreach($cars as $car)
        <form action="{{Route('update',['id'=>$car->id])}}" method="post">
         @csrf
            @method('HEAD')
          <div class="block">
              <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic
              placeholder-gray-400" name="name" placeholder="Write to edit" value="{{$car->name}}">

              <input type="hidden" name="id" value="{{$car->id}}">

              <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic
              placeholder-gray-400" name="founded" placeholder="Write to edit" value="{{$car->founded}}">

              <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic
              placeholder-gray-400" name="description" placeholder="Write to edit" value="{{$car->description}}">

              <button type="submit" class="bg-green-500 block font-bold mb-10 p-2 w-80
              uppercase">
                  Submit
              </button>
          </div>

        </form>
        @endforeach
    </div>




@endsection
