<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $categories = Category::all();
      return view('settings.create')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('settings.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $setting = new Setting;
        /* $model_object_instance ->db_column = $request->name; */
        /*$newitem->company_logo = $request->file('company_logo')->move('img/company');*/
        $setting->company_name = $request->company_name;
        $setting->city = $request->city;
        $setting->country = $request->country;
        $setting->street = $request->street;
        $setting->telephone = $request->telephone;
        $setting->telephone_2 = $request->telephone_2;
        $setting->weekday_hours = $request->weekday_hours;
        $setting->weekend_hours = $request->weekend_hours;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->twitter = $request->twitter;
        $setting->youtube = $request->youtube;

        $setting->save();

        /*redirecting to the content's particular page*/
        /*return redirect()->route('settings.show', $setting->id);*/
        $categories = Category::all();
        return view('settings.create')->withCategories($categories);
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
