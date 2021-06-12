<?php

namespace App\Http\Controllers\Admin;

use App\Events\WelcomeNewLocation;
use App\Http\Controllers\Controller;
use App\Mail\WelcomeNewPost;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\EventType;
use App\Models\User;
use App\Policies\LocationPolicy;
use Illuminate\Support\Facades\Mail;
use League\Flysystem\Adapter\Local;

class DashboardController extends Controller
{

	public function __construct()
	{
		//$this->middleware('admin')->except('index');
	}
	
	public function index()
	{
		return view('admin.dashboard');
	}

	public function location()
	{
		$locations = Location::all();
		$Country = Location::Country()->get();
		return view('admin.location', get_defined_vars());
	}

	public function eventType()
	{
		$event_types = EventType::all();
		return view('admin.event_type', get_defined_vars());
	}

	public function addLocation()
	{
		return view('admin.location_add');
	}

	public function storeLoc(Request $request)
	{
		//dd($request->all());
		//Location::create($request->all());
		//$this->authorize('create',User::class);

		
		$locations = new Location();
		$locations->setLocationNameAttribute('name',$request->name);
		$locations->slug = $request->slug;
		$locations->save();
		event(new WelcomeNewLocation());

		if($request->hasfile('image') || $request->image)
		{
			$image = $request->image;
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$movedFile = $image->move(base_path('public\images'), $filename);
			$locations->image = 'images/'.$filename;
			$locations->save();

			//$image = Image::make(public_path('public\images'.$request->image))->fit(300,300);
			//$locations->save();
		}
		//return redirect()->route('admin.locations');
	}

	public function locationEdit(Location $location)
	{
		dd($location);
	}

	
}
