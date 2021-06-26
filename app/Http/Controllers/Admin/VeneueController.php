<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Veneue;
use App\Models\Location;
use App\Models\EventType;
use App\Events\Venu;


class VeneueController extends Controller
{
    public function veneues()
    {
        $veneues = Veneue::where('name','first')->where('id',26)->with('event_types')->get();
        dd($veneues);
        /*$veneues = Veneue::with('event_types')->where('name','first')->where(function($q){
            $q->where('people_maximum',4)->orWhere('people_minimum',23);
        })->get();*/


        //event(new Venu());
        /*$veneues = Veneue::where('name','first');
        dd($veneues->pluck('name')->take(2));*/
        //dd($veneues->groupBy('name')['first']);

        $veneues = Veneue::where('name','first')->whereHas('event_types',function($q){
            $q->where('name','marriage');
        })->get();
        //dd($veneues);
        return view('admin.veneue.index', get_defined_vars());
    }

    public function veneueAdd()
    {
        $locations = Location::all();
        $events = EventType::all();
        return view('admin.veneue.create', get_defined_vars());
    }

    public function veneueStore(Request $request)
    {
        //dd($request->all());
        $venue = Veneue::create($request->except('event_types'));
        $event_ty = EventType::find($request->event_types);
        $venue->event_types()->attach($event_ty);
        //$venue->event_types()->attach($request->input('event_types'),[],$venue->id);
    }
}   
