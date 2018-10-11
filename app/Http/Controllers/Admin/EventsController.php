<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use App\Event;
use App\EventType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.events.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventTypes = EventType::get();
        return view('admin.events.create', ['eventTypes' => $eventTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $eventType = EventType::findOrFail($request->input('event_type_id'));
//        $event = new Event();
//        $event->name = $request->input('name');
//        $event->description = $request->input('description');
//        $event->date_time = $request->date_time;
//
//        $addressData = [
//            'city' => $request->input('city'),
//            'place' => $request->input('place'),
//        ];
//
//        $addresses = Address::where($addressData)->get();
//
//        if ($addresses->isNotEmpty()) {
//            $address = $addresses->first();
//        } else {
//            $address = Address::creare($addressData);
//        }

//        $event->eventType()->associate($eventType);
//        $event->address()->associate($address);
//        $event->save();
        $event = new Event();
        $address = new Address();
        $event->setEvent($request,$event,$address->setAddress($request));
        dd($request);
        return redirect()->route('events.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
