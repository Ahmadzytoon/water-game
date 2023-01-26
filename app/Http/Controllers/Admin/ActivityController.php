<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data=Activity::all();

        return view('admin.activity.show',['data'=> $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activity.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        // $image = response()->json([
        //     'file' => $request->file('activity_image1')->getClientOriginalName()
        // ]);
        // return $image;
        $photoName = $request->file('activity_image1')->getClientOriginalName();
        $request->file('activity_image1')->storeAs('public/image', $photoName);
        $photoName2 = $request->file('activity_image2')->getClientOriginalName();
        $request->file('activity_image2')->storeAs('public/image', $photoName2);

        $data = new Activity;

            $data->name = $request->activity_name;
            $data->short_description = $request->short_description;
            $data->long_description = $request->long_description;
            $data->price = $request->activity_price;
            $data->image1 = $request->file('activity_image1')->getClientOriginalName();
            $data->image2 = $request->file('activity_image2')->getClientOriginalName();

        $data->save();

        return redirect()->route('admin.activity.index');
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
        $data = Activity::findOrfail($id);
        return view('admin.activity.edite', ['data' => $data]);
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
        $data = Activity::findOrfail($id);
        $data->name = $request->activity_name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->price = $request->activity_price;
        $data->image1= '$request->activity_image1';
        $data->image2 = '$request->activity_image2';
        $data->save();
        //-------------------------------

        return redirect()->route('admin.activity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            Activity::findOrfail($id)->delete();
            return redirect()->route('admin.activity.index');
        }
    }
}
