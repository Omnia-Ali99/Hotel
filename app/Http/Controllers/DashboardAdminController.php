<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   $bookings= Booking::with('bill')->with('user')->where('del', '0')->paginate(10);
     return view('admin.pages.bookings',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $booking=Booking::find( $id);
      $booking->fill(['del' => '1'])->save();
     return redirect()->route('dashboard_admin.index');

    
    }

    public function recycle_bin()
    {
      
    $RecycleBin= Booking::with('bill')->with('user')->where('del', '1')->paginate(10);
    return view('admin.pages.recycle-bin',compact('RecycleBin'));
    
    }

    public function recycle(string $id)
    {
      $Recycle=Booking::find( $id);
      $Recycle->fill(['del' => '0'])->save();
     return redirect()->route('recycle-bin');

    
    }

}
