<?php

namespace App;


class Event extends BootUserModel
{
    protected $fillable = ['name', 'description', 'date_time'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function eventType()
    {
        return $this->belongsTo('App\EventType');
    }

    public function address()
    {
        return $this->belongsTo('App\Address');
    }

    private function getEventData($request)
    {
        return [
            'name' => $request->name,
            'description' => $request->description,
            'date_time' => $request->date_time,
        ];
    }
    private function getEventType($request)
    {
        return [
            'event_type_id' => $request->event_type_id
        ];
    }

    public function setEvent($request,$event,$address)
    {
        $eventType = EventType::findOrFail($this->getEventType($request));
        $event->fill($this->getEventData($request));
        $event->eventType()->associate($eventType);
        $event->address()->associate($address);
        $event->save();
    }

}
