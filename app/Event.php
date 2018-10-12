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
        return $request->event_type_id;
    }

    private function setRelationship($request, $event)
    {
        $address = new Address();
        $eventType = EventType::findOrFail($this->getEventType($request));
        $event->eventType()->associate($eventType);
        $event->address()->associate($address->setAddress($request));
    }
    private function deleteRelationship($event)
    {
        $event->eventType()->dissociate();
        $event->address()->dissociate();
    }

    public function setEvent($request, $event)
    {
        $event->fill($this->getEventData($request));
        $this->setRelationship($request, $event);
        $event->save();
    }


    public function updateEvent($request, $event)
    {
        $this->deleteRelationship($event);
        $this->setEvent($request, $event);
    }

}
