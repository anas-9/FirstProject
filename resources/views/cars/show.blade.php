@extends('cars.app')

@section('content')


    <div class="m-auto w-4/5 py-24 text-center">

        <div class="text-center">
            <img src="{{asset('images/'.$car->image_path)}}" class="w-8/12 mb-8 shadow-xl">
            <h1 class="text-5xl uppercase bold">{{$car->name}}</h1>
           <p class="text-lg text-gray-700 py-6">
              {{$car->headquarter->headquarter}},{{$car->headquarter->country}}
           </p>

        </div>
        <div class="w-5/6  py-10">

                <div class="m-auto">

                    <span class="uppercase text-blue-500 font-bold text-xs italic">
          Founded: {{$car->founded}}
          </span>
                    <p class="text-lg text-gray-700">
                        {{$car->description}}
                    </p>

                    <table class="table-auto">
                        <tr class="bg-blue-100">
                           <th class="w-1/4 border-4 border-gray-500">
                               Model
                           </th>
                            <th class="w-1/4 border-4 border-gray-500">
                                Engines
                            </th>
                            <th class="w-1/4 border-4 border-gray-500">
                                Date
                            </th>

                        </tr>

                        @forelse($car->carModel as $model)
                        <tr class="bg-blue-100">
                            <td >{{$model->model_name}}</td>
                             @foreach($car->engines as $engine)
                                 @if ($model->id==$engine->model_id)
                                    <td>{{$engine->engine_name}}</td>
                                 @endif
                            @endforeach
                            <td>{{date('d-m-y',strtotime($car->carProductionDate->created_at))}}</td>
                        </tr>
                        @empty
                            <p>
                              There are no models!
                            </p>
                        @endforelse
                    </table>


                </div>

        </div>

    </div>



@endsection
