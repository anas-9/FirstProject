<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Illuminate\Routing\RedirectController;
use Ramsey\Uuid\Type\Time;

class CarsController extends Controller
{

    public function index()
    {

      $cars=Car::paginate(3);
     //$cars=Car::all()->count();
    // print_r($cars);
      //$cars=Car::where('name','Audi')
          //->get();


        return view('cars.index',
        [
            'cars'=>$cars
        ]);
    }


    public function create()
    {
        return view('cars.create');
    }


    public function store(Request $request)
    {
        /*
        $car=new Car();
        $car->name=$request->input('name');
        $car->founded=$request->input('founded');
        $car->description=$request->input('description');
        $car->save();
        */
        //$image=$request->file('image')->getClientOriginalName();


        $request->validate([
            'name'=>'required|unique:cars',
            'founded'=>'required|integer|min:0|max:2021',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName=time().'-'.$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);



        $car=Car::create([
           'name'=>$request->input('name'),
           'founded'=>$request->input('founded'),
           'description'=>$request->input('description'),
            'image_path'=>$newImageName
        ]);
        return redirect('cars');

    }


    public function show($id)
    {
        $car=Car::where('id',$id)->first();


        return view('cars.show')->with('car',$car);
    }


    public function edit($id)
    {
        $cars=Car::where('id',$id)
            ->get();
        return view('cars.edit',[
            'cars'=>$cars

        ]);

    }


    public function update(Request $request, $id)
    {
        $car=Car::where('id',$id)
            ->update([
            'name'=>$request->input('name'),
            'founded'=>$request->input('founded'),
            'description'=>$request->input('description')
        ]);
        return redirect('cars');
    }


    public function destroy($id)
    {
        $car=Car::find($id)->first();
        $car->delete();
        return redirect('cars');

    }
    public function list($id=null)
    {
       return $id?Car::find($id):Car::all();
    }
}
