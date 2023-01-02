<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\Cast\Bool_;

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
        // dd($request);
        // $request->validate([
        //      'nama'=>'require|max:255',
        //      'check-in'=>'check-in',
        //      'check-out'=>'check-out',
        //      'room'=>'room',
        //      'fasilitas'=>'fasilitas |min:5 |max:255'
        //  ]);
        // dd ($request);

        Booking::create([
            // kiri sesuai dengan controller kanan sesuai dengan database
            'id_pelanggan' => null,
            'room' => $request->room,
            'nm' => $request->nm,
            'fasilitas' => $request->fasilitas,
            'cek_in' => $request->check_in,
            'cek_out' => $request->check_out,
            'email' => $request->email,
            'no_tlp' => $request->NO_Telpon,
            'jumlah_tamu' => $request->jumlah_tamu

        ]);
        return redirect()->route('detail.index');
    }

    /**
     * Store a newly created resource in storage.
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ubah(Request $request, $id)
    {
        //
        $title = 'edit';
        $boking = Booking::find($id);
        // dd($boking);
        return view('pages.edit', compact('title', 'boking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Booking $boking)
    {
        $boking->delete();
        return redirect('booking.index');
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
        $update_boking = booking::findOrFail($id);
        $update_boking->nm = $request->updatenm;
        $update_boking->room = $request->updateroom;
        $update_boking->fasilitas = $request->updatefasilitas;
        $update_boking->cek_in = $request->updatecek_in;
        $update_boking->cek_out = $request->updatecek_out;
        $update_boking->email = $request->updateemail;
        $update_boking->no_tlp = $request->updateno_tlp;
        $update_boking->jumlah_tamu = $request->updatejumlah_tamu;
        $update_boking->save();
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
