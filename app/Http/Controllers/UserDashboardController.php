<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Info;
use App\Models\PurchaseDetail;
use Carbon\Carbon;

class UserDashboardController extends Controller
{
    protected function account()
    {
        $data = User::find(session()->get('user_id')); 
        return view('user_panel.profile',compact('data'));
    }

    protected function projectQueries()
    {
        $data = Info::where('user_id', session()->get('user_id'))
                ->get(['id','unit','usag','budget','created_at','meeting_date']);
        // return $data;
        return view('user_panel.info',compact('data'));
    }

    protected function showQuery(Request $req)
    {
        if(!$req->id){
            abort(404);
        }

        $data = Info::find($req->id);
        // return $data;
        return view('user_panel.showQuery',compact('data'));

    }
    
    protected function purchaseDetails(){
        $data = PurchaseDetail::where('user_id', session()->get('user_id'))
                ->get();
        return view('user_panel.purchaseDetails',compact('data'));
    }
}
