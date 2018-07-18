<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newitem;

class NewitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      /* views > new > create */
      return view('new.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /* validate -> store -> redirect maybe */
      /*the validate*/
      /*$this->validate($request, array(
          'name' => 'required',
          'price' => 'required',
          'target' => 'required',
          'size' => 'required',
          'category' => 'required',
          'color' => 'required',
          'description' => 'required',
          'img1920' => 'required',
          'img1280' => 'required',
          'img1024' => 'required'
          ));*/

          /*storing validated stuff to db*/
          /* $model_object_instance = new model; */
          $newitem = new Newitem;
          /* $model_object_instance ->db_column = $request->name; */
          $newitem->name = $request->name;
          $newitem->price = $request->price;
          $newitem->target = $request->target;
          $newitem->size = $request->size;
          $newitem->category = $request->category;
          $newitem->color = $request->color;
          $newitem->description = $request->description;
          /*$photoName = $request->$newitem->getClientOriginalName();*/
          $newitem->img1920 = $request->file('img1920')->move('img/collectionPics');
          $newitem->img1280 = $request->file('img1280')->move('img/collectionPics');
          $newitem->img1024 = $request->file('img1024')->move('img/collectionPics');

          $newitem->save();

          /*redirecting to the content's particular page*/
          return redirect()->route('new.show', $newitem->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $newitem = Newitem::find($id);
        return view('new.show')->with('newitem', $newitem);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
