<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Booking';
        return view('booking', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        // $request->validate([
        //      'nama'=>'require|max:255',
        //      'check-in'=>'check-in',
        //      'check-out'=>'check-out',
        //      'room'=>'room',
        //      'fasilitas'=>'fasilitas |min:5 |max:255'
        //  ]);
        // dd ($request);

        Booking::create([
            'id_pelanggan' => null,
            'room' => $request->room,
            'nm' => $request->nm,
            'fasilitas' => $request->fasilitas,
            'cek_in' => $request->cek_in,
            'check_out' => $request->cek_out,
            'check_email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'jumlah_tamu' => $request->jumlah_tamu

        ]);
        return redirect()->route('detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sh($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return view('delet.add');
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
