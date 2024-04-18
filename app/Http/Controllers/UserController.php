<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Project;
use App\Models\Goal;
use App\Models\Query;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\PropertyMap;
use App\Models\Info;
use App\Models\Price;
use App\Models\PurchaseDetail;
use Carbon\Carbon;

class UserController extends Controller
{
    public function home() {
        $data = [
            'testimonials' => Testimonial::all()->toArray(),
            'services' => Service::all()->toArray(),
            'projects' => Project::all()->toArray(),
            'goals' => Goal::all()->toArray(),
        ];
        return view('users.pages.index', ['data' => $data]);
    }

    public function login() {
        return view('users.auth.login');
    }

    public function login_post(Request $request) {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user && password_verify($request->password, $user->password)) {
            session([
                'user_id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'phone_number' => $user->phone_number,
                'email' => $user->email,
            ]);
            if (session()->has('infos')) {
                $info_id = Info::insertGetId(session('infos'));
                Info::where('id', $info_id)->update(['user_id' => $user->id]);
                session()->flash('infos_saved', true);
            }
            return redirect()->route('users.home');
        }

        $error = "Invalid Credentials";
        session()->flash('error', $error);
        return redirect()->back();
    }

    public function signup() {
        return view('users.auth.signup');
    }

    public function signup_post(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required | email | exists:users,email',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
            'created_at' => now(),
        ]);
        
        if ($user) {
            $success = "Your Account has been Successfully Created! Please Login to Continue";
            session()->flash('success', $success);            
            return redirect()->route('users.home');
        }

        $error = "Something is wrong at our side. Please try again";
        session()->flash('error', $error);
        return redirect()->back();
    }

    public function logout() {
        echo "Logging You Out....Please Wait....";
        session()->flush();
        return redirect()->route('users.home');
    }

    public function view_services() {
        return view('users.pages.services');
    }

    public function query_add(Request $request) {
        $query = Query::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
        ]);
        if ($query) {
            $message = true;
        } else {
            $message = false;
        }
        session()->flash('message-sent', $message);
        return redirect()->route('users.home');
    }

    public function property_listing(Request $request) {
        $properties = Property::where([
            'level' => $request->level,
            'bedroom' => $request->bedroom,
        ])->get();

        foreach ($properties as $key => $property) {
            if ($property->length * $property->width == $request->size) {
                unset($key);
            }   
        }
        $data = [
            'properties' => $properties,
        ];
        return view('users.pages.property_listing', ['data' => $data]);
    }

    public function property_details($property_name, $property_id) {
        $data = [
            'property' => Property::where('id', $property_id)->first(),
            'images' => PropertyImage::where('property_id', $property_id)->get(),
            'maps' => PropertyMap::where('property_id', $property_id)->get(),
            'prices' => Price::all(),
        ];
        return view('users.pages.property_detail', ['data' => $data]);
    }

    public function save_infos(Request $request) {
        $request->validate([
            'unit' => 'required',
            'usage' => 'required',
            'budget' => 'required',
            'financing_need' => 'required',
            'goal' => 'required',
            'bedroom' => 'required',
            'kitchen' => 'required',
            'bathroom' => 'required',
            'bathroom_number' => 'required',
            'meeting_date' => 'required',
        ]);
        $infos = [
            'unit' => $request->unit,
            'usag' => $request->usage,
            'budget' => $request->budget,
            'financing_need' => $request->financing_need,
            'goal' => $request->goal,
            'bedroom' => $request->bedroom,
            'kitchen' => $request->kitchen,
            'bathroom' => $request->bathroom,
            'bathroom_number' => $request->bathroom_number,
            'meeting_date' => $request->meeting_date,
        ];
        if (session()->has('user_id')) {
            // Save infos into DB
            $info_id = Info::insertGetId($infos);
            Info::where('id', $info_id)->update(['user_id' => session('user_id')]);
            session()->flash('infos_saved', true);
            return redirect()->back();
        } else {
            // Save infos into Session and ask user to login or signup
            session()->put('infos', $infos);
            session()->flash('infos_saved', false);
            session()->flash('infos_msg', 'You need to login first to Submit the Details');
            return redirect()->back();
        }
    }

    public function save_purchase_details(Request $request) {
        $request->validate([
            'windows' => 'required',
            'doors' => 'required',
            'hatch_skylight_roof' => 'required',
            'toilet' => 'required',
            'tub' => 'required',
            'contract_date' => 'required',
            'address' => 'required',
        ]);

        PurchaseDetail::insert([
            'user_id' => session('user_id'),
            'property_id' => $request->property_id,
            'windows' => $request->windows,
            'doors' => $request->doors,
            'hatch_skylight_roof' => $request->hatch_skylight_roof,
            'toilet' => $request->toilet,
            'tub' => $request->tub,
            'contract_date' => $request->contract_date,
            'address' => $request->address,
        ]);
        session()->flash('success', 'Thankyou for Submitting Purchase Details. We will get back to You Soon');
        session()->flash('purchase_details_saved', true);
        return redirect()->back();
    }
}
