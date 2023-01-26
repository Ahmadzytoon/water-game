<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::with('activity')->get();
        $data = [];
        foreach ($reservations as $reservation) {
            $data[] = [
                'id' => $reservation->id,
                'first_name' => $reservation->first_name,
                'last_name' => $reservation->last_name,
                'phoneNumber' => $reservation->phoneNumber,
                'email'=>$reservation->email,
                'number_of_guest' => $reservation->number_of_guest,
                'res_date' => $reservation->res_date,
                'price' => $reservation->price,
                'status' => $reservation->status,
                'activity' => isset($reservation->activity) ? $reservation->activity->name : "",
                'user' => isset($reservation->user) ? $reservation->user->name : "",


            ];
        }
        return view('admin.reservation.show',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
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
        // $data = Reservation::findOrfail($id);
        // return view('admin.reservation.edit',['data'=>$data]);
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

        // ____________________ahmad________________________________________________
        // $data = Reservation::findOrfail($id);
        // $data->status = $request->status;
        // $data->save();
        // return redirect()->route('admin.reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
}
