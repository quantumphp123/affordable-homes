<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Project;
use App\Models\Property;
use App\Models\Contractor;
use App\Models\Info;
use App\Models\Goal;
use App\Models\Query;
use App\Models\PropertyImage;
use App\Models\PropertyMap;
use App\Models\PurchaseDetail;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function login_post(Request $request) {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if ($admin && password_verify($request->password, $admin->password)) {
            session([
                'id' => $admin->id,
                'name' => $admin->name,
                'email' => $admin->email,
            ]);
            return redirect()->route('admin.dashboard');   
        }
        $error = "Invalid Credentials. Please Try Again...";
        session('error', $error);
        return redirect()->back(); 
    }

    public function logout() {
        session()->flush();
        return redirect()->route('admin.login');
    }

    public function dashboard() {
        $count = [
            'testimonials' => Testimonial::count(),
            'services' => Service::count(),
            'projects' => Project::count(),
            'contractors' => Contractor::count(),
            'goals' => Goal::count(),
            'queries' => Query::count(),
            'properties' => Property::count(),
            'infos' => Info::count(),
            'pending_infos' => Info::where('status', 'pending')->count(),
        ];
        return view('admin.dashboard', ['count' => $count]);
    }

    public function testimonials() {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', ['testimonials' => $testimonials]);
    }

    public function testimonial_add(Request $request) {
        $request->validate([
            'image' => 'required | image',
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required',
        ]);

        $name = rand().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('assets/img/testimonials', $name);

        Testimonial::insert([
            'image' => $name,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
        ]);

        $success = "Testimonial is Added Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.testimonials');
    }

    public function testimonial_update(Request $request) {
        if ($request->file('image') != null) {
            $image = Testimonial::where('id', $request->testimonial_id)
                                ->get('image')
                                ->toArray();
            $image = $image[0]['image'];
            if (file_exists('assets/img/testimonials/'.$image)) {
                unlink('assets/img/testimonials/'.$image);
            }            
            $name = rand().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('assets/img/testimonials', $name);

            Testimonial::where('id', $request->testimonial_id)->update([
                'image' => $name,
            ]);
        }
        Testimonial::where('id', $request->testimonial_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        $success = "Testimonial is Updated Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.testimonials');
    }

    public function testimonial_delete($id) {
        $testimonial = Testimonial::where('id', $id)
                                ->get()
                                ->toArray();
        unlink('assets/img/testimonials/'.$testimonial[0]['image']);
        Testimonial::find($id)->delete();

        $success = "Testimonial is Deleted Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.testimonials');
    }

    public function services() {
        $services = Service::all()->toArray();
        return view('admin.services.index', ['services' => $services]); 
    }

    public function service_add(Request $request) {
        $request->validate([
            'image' => 'required | image', 
            'name' => 'required', 
            'description' => 'required', 
        ]);

        $name = rand().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('assets/img/services', $name);

        Service::insert([
            'image' => $name,
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => now(),
        ]);

        $success = "Service is Added Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.services'); 
    }

    public function service_edit(Request $request) {
        if ($request->file('image') != null) {
            $image = Service::where('id', $request->service_id)
                            ->get()
                            ->toArray();
            $image = $image[0]['image'];
            if (file_exists('assets/img/services/'.$image)) {
                unlink('assets/img/services/'.$image);
            }
            $name = rand().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('assets/img/services', $name);

            Service::where('id', $request->service_id)->update([
                'image' => $name,
            ]);
        }

        Service::where('id', $request->service_id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        $success = "Service is Successfully Updated";
        session()->flash('success', $success);
        return redirect()->route('admin.view.services');
    }

    public function service_delete($id) {
        $service = Service::where('id', $id)
                        ->get()
                        ->toArray();
        unlink('assets/img/services/'.$service[0]['image']);
        Service::find($id)->delete();

        $success = "Service is Deleted Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.services');
    }

    public function projects() {
        $projects = Project::all()->toArray();
        return view('admin.projects.index', ['projects' => $projects]);
    }

    public function project_add(Request $request) {
        $request->validate([
            'image' => 'required | image',
            'name' => 'required',
        ]);

        while(true) {
            $name = rand().'.'.$request->file('image')->getClientOriginalExtension();
            if (!file_exists('assets/img/portfolio/'.$name)) {
                $request->file('image')->move('assets/img/portfolio', $name);
                break;
            }
        }
        Project::insert([
            'image' => $name,
            'name' => $request->name,
            'created_at' => now(),
        ]);

        $success = "Project has been Added Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.projects');
    }

    public function project_edit(Request $request) {
        if ($request->file('image') != null) {
            $image = Project::where('id', $request->project_id)
                            ->get('image')
                            ->toArray();
            $image = $image[0]['image'];
            if (file_exists('assets/img/portfolio/'.$image)) {
                unlink('assets/img/portfolio/'.$image);
            }
            $name = rand().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('assets/img/portfolio', $name);

            Project::where('id', $request->project_id)->update([
                'image' => $name,
            ]);
        }

        Project::where('id', $request->project_id)->update([
            'name' => $request->name,
        ]);

        $success = "Project has been Updated Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.projects');
    }

    public function project_delete($id) {
        $project = Project::where('id', $id)
                        ->get()
                        ->toArray();
        unlink('assets/img/portfolio/'.$project[0]['image']);
        Project::find($id)->delete();

        $success = "Project has been Deleted Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.projects');
    }

    public function properties() {
        $properties = Property::all()->toArray();
        return view('admin.properties.index', ['properties' => $properties]);
    }

    public function property_add(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'length' => 'required',
            'width' => 'required',
            'level' => 'required',
            'bedroom' => 'required',
            'kitchen' => 'required',
            'images' => 'required',
        ]);

        $property_id = Property::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'length' => $request->length,
            'width' => $request->width,
            'level' => $request->level,
            'bedroom' => $request->bedroom,
            'kitchen' => $request->kitchen,
            'created_at' => now(),
        ]);

        foreach ($request->file('images') as $image) {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/img/properties', $image_name);
            PropertyImage::insert([
                'name' => $image_name,
                'property_id' => $property_id,
                'created_at' => now(),
            ]);
            sleep(1);
        }

        if ($request->file('maps') != null) {
            foreach ($request->file('maps') as $image) {
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $image->move('assets/img/properties', $image_name);
                PropertyMap::insert([
                    'name' => $image_name,
                    'property_id' => $property_id,
                    'created_at' => now(),
                ]);
                sleep(1);
            }
        }

        $success = "Property has been Added Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.properties');
    }

    public function property($property_name, $property_id) {
        $data = [
            'property' => Property::where('id', $property_id)->first(),
            'images' => PropertyImage::where('property_id', $property_id)->get(),
            'maps' => PropertyMap::where('property_id', $property_id)->get(),
        ];
        return view('admin.properties.edit', ['data' => $data]);
    }

    public function property_add_image(Request $request) {
        foreach ($request->file('images') as $image) {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/img/properties', $image_name);
            PropertyImage::insert([
                'name' => $image_name,
                'property_id' => $request->id,
                'created_at' => now(),
            ]);
            sleep(1);
        }
        $success = "Images has been Added Successfully";
        session()->flash('success', $success);
        return redirect()->back();
    }

    public function property_add_map(Request $request) {
        foreach ($request->file('maps') as $image) {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/img/properties', $image_name);
            PropertyMap::insert([
                'name' => $image_name,
                'property_id' => $request->id,
                'created_at' => now(),
            ]);
            sleep(1);
        }
        $success = "Maps has been Added Successfully";
        session()->flash('success', $success);
        return redirect()->back();
    }

    public function property_delete_image($image_id) {
        PropertyImage::where('id', $image_id)->delete();
        $success = "Image has been Deleted Successfully";
        session()->flash('success', $success);
        return redirect()->back();
    }

    public function property_delete_map($map_id) {
        PropertyMap::where('id', $map_id)->delete();
        $success = "Map has been Deleted Successfully";
        session()->flash('success', $success);
        return redirect()->back();
    }

    public function property_edit(Request $request) {
         
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'length' => 'required',
            'width' => 'required',
            'level' => 'required',
            'bedroom' => 'required',
        ]);

        Property::where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'length' => $request->length,
            'width' => $request->width,
            'level' => $request->level,
            'bedroom' => $request->bedroom,
            'kitchen' => $request->kitchen,
        ]);

        $success = "Details has been Edited Successfully";
        session()->flash('success', $success);
        return redirect()->back();
    }

    public function property_delete($id) {
        $maps = PropertyMap::where('property_id', $id)->get()->toArray();
        if (count($maps) > 0) {
            foreach ($maps as $map) {
                if (file_exists('assets/img/properties/'.$map['name'])) {
                    unlink('assets/img/properties/'.$map['name']);
                }
                PropertyMap::where('id', $map->id)->delete();
            }
        }

        $images = PropertyImage::where('property_id', $id)->get()->toArray();
        foreach ($images as $image) {
            if (file_exists('assets/img/properties/'.$image['name'])) {
                unlink('assets/img/properties/'.$image['name']);
            }
            PropertyImage::where('id', $image->id)->delete();
        }

        Property::find($id)->delete();

        $success = "Property has been Deleted Successfully";
        session()->flash('success', $success);
        return redirect()->back();
    }

    public function contractors() {
        $contractors = Contractor::all()->toArray();
        return view('admin.contractors.index', ['contractors' => $contractors]);
    }

    public function contractor_add(Request $request) {
        $request->validate([
            'email' => 'required | email',
            'name' => 'required', 
            'phone_number' => 'required', 
        ]);

        Contractor::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'created_at' => now(),
        ]);

        $success = "Contractor has been Added Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.contractors'); 
    }

    public function contractor_edit(Request $request) {
        Contractor::where('id', $request->contractor_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        $success = "Contractor has been Updated Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.contractors'); 
    }

    public function contractor_delete($id) {
        $contractor = Contractor::find($id)->delete();

        $success = "Contractor has been Deleted Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.contractors');
    }

    public function customers_info() {
        $infos = Info::with('user')->get()->toArray();
        return view('admin.customers_info.index', ['infos' => $infos]);
    }

    public function customer_info($info_id) {
        $info = Info::with('user')->where('id', $info_id)->get()->toArray();
        return view('admin.customers_info.customer_details', ['info' => $info[0]]);
    }

    public function change_status_customer_info(Request $request) {
        if ($request->status == 'pending') {
            $status = 'completed';
        } else {
            $status = 'pending';
        }
        Info::where('id', $request->id)->update(['status' => $status]);
        session()->flash('success', 'Status is Changed to '.ucfirst($status));
        return redirect()->route('admin.view.customers.info');
    }

    public function goals() {
        $goals = Goal::all()->toArray();
        return view('admin.goals.index', ['goals' => $goals]);
    }
    
    public function goal_add(Request $request) {
        $request->validate([
            'name' => 'required', 
            'description' => 'required', 
        ]);
    
        Goal::insert([
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => now(),
        ]);
    
        $success = "Goal has been Added Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.goals'); 
    }
    
    public function goal_edit(Request $request) {
        Goal::where('id', $request->goal_id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        $success = "Goal has been Updated Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.goals'); 
    }
    
    public function goal_delete($id) {
        $goal = Goal::find($id)->delete();
    
        $success = "Goal has been Deleted Successfully";
        session()->flash('success', $success);
        return redirect()->route('admin.view.goals');
    }

    public function queries() {
        $queries = Query::all()->sortByDesc('id')->toArray();
        // echo "<pre>";
        // echo print_r($queries); die;
        return view('admin.queries.index', ['queries' => $queries]);
    }

    public function purchase_details() {
        $purchase_details = PurchaseDetail::with('user')->orderBy('id', 'DESC')->get();
        return view('admin.purchase_details.index', ['purchase_details' => $purchase_details]);
    }

    public function purchase_detail($id) {
        $purchase_detail = PurchaseDetail::with('user', 'property')->where('id', $id)->first();
        return view('admin.purchase_details.purchase_detail', ['purchase_detail' => $purchase_detail]);
    }
}
