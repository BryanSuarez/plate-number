<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlateFormRequest;
use Illuminate\Http\Request;


class PlateController extends Controller
{
    public function index()
    {
        return view('plate.index');
    }
    public function checkDrive(PlateFormRequest $request)
    {
        $entirePlate = $request->input('plate');
        //SAVE DATA ON VARIABLES
        $plate = substr($request->input('plate'),-1);
        $date = $request->input('date');
        $time = $request->input('time');


        if ($plate == 1 || $plate == 2 and $date === 'Monday'  and $time >= '07:00' and $time <= '09:30'
            || $time >= '16:00' and $time <= '19:30' ){

            $denyMsg = "You can not drive $date at $time";

        }elseif ($plate == 3 || $plate == 4 and $date === 'Tuesday'  and $time >= '07:00' and $time <= '09:30'
            || $time >= '16:00' and $time <= '19:30' ){

            $denyMsg = "You can not drive $date at $time";

        }elseif ($plate == 5 || $plate == 6 and $date === 'Wednesday'  and $time >= '07:00' and $time <= '09:30'
            || $time >= '16:00' and $time <= '19:30' ){

            $denyMsg = "You can not drive $date at $time";
        }elseif ($plate == 7 || $plate == 8 and $date === 'Thursday'  and $time >= '07:00' and $time <= '09:30'
            || $time >= '16:00' and $time <= '19:30' ){

            $denyMsg = "You can not drive $date at $time";
        }elseif ($plate == 9 || $plate == 0 and $date === 'Friday'  and $time >= '07:00' and $time <= '09:30'
            || $time >= '16:00' and $time <= '19:30' ){

            $denyMsg = "You can not drive $date at $time";
        }
        else{
            $allowMsg = "You can drive $date at $time";
        }

        return view('plate.result', compact('denyMsg','allowMsg', 'entirePlate','date','time'));
        //dd("$plate - $date - $time ");
    }
}
