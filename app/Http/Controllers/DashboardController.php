<?php

namespace App\Http\Controllers;


use App\Models\Bill;
use App\Models\Booking;
use App\Models\Booking_detail;
use App\Models\City;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Mail\MailUser;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
  
        $cities= City::all();
      
        $alert=session()->get('alert');
          session()->remove('alert');

        return  view('user.home', compact( 'cities' ,'alert')) ;
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
        $cityNumber = $request->cityNumber;
        session(['city' =>  $cityNumber]);
        $city= city::find($cityNumber);
        $hotels=$city->hotels;
        return  view('user.hotels', compact( 'hotels')) ;
    
    }


 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Hotel=Hotel::find( $id);

        $Hotel_session_name=$Hotel->name;
        $id_Hotel=$Hotel->id;
        session(['Hotel_name' =>  $Hotel_session_name] );
        session(['Hotel_id' =>  $id_Hotel] );

        $rooms=$Hotel->types; 
    
      return  view('user.rooms', compact( 'rooms')) ;
    
    }
    
    public function booking(string $id,string $name )
    {
      session(['type_rooms_id' =>  $id] );

         $City_id=session()->get('city');
        //   session()->remove('city');
          $city=city::find($City_id);
 
        $Hotel_name=session()->get('Hotel_name');
        //   session()->remove('Hotel_name');
       $bills=Bill::get();
       
   return  view('user.booking',compact('city','Hotel_name','name' ,'bills')) ;
    }

    public function booking_store(Request $request)
    {
        $type_rooms_id= session()->get('type_rooms_id');

                $Hotel_id=session()->get('Hotel_id');

                $rooms=Room::where('hotel_id','=', $Hotel_id )

                ->where('type_room_id','=', $type_rooms_id)
                ->get();
                foreach ($rooms  as $room){
                   $room_id= $room->id; 
             
                    }

                    $this->validate($request, [
                        'Arrival_date'=>'required',
                        'Departure_Date'=>'required',
                        'bill'=>'required',
                        
                    ]);
                

                    $Booking = new Booking;
                    $Booking -> arrival_date = $request->Arrival_date;
                    $Booking -> departure_date = $request->Departure_Date;
                    $Booking -> bill_id = $request->bill;
                    $Booking ->user_id=Auth::user()->id;
                    $Booking->save();
            
                    
                    $booking_details = new Booking_detail;
                    $booking_details->room_id=  $room_id;
                    $booking_details->booking_id=  $Booking->id;
                    $booking_details->save();
                    
                    $room =Room::find($room_id);
                    $room->active='1';
                    $room->save();

                    session(['alert' => 't'] );

                    Mail::to(Auth::user()->email)->send(new MailUser);

                  return redirect()->route('dashboard_user.index');
    

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
