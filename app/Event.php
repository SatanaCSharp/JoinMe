<?php

namespace App;


class Event extends BootUserModel
{
    protected $fillable = ['name', 'description', 'date_time'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function address()
    {
        return $this->belongsTo('App\Address');
    }

    public function participants()
    {
        return $this->hasMany('App\Participant');
    }

    private function getEventData($request)
    {
        return [
            'name' => $request->name,
            'description' => $request->description,
            'date_time' => $request->date_time,
        ];
    }


    private function getEventCategory($request)
    {
        return $request->category_id;
    }

    private function setRelationship($request, $event)
    {
        $address = new Address();
        $category = Category::findOrFail($this->getEventCategory($request));
        $event->category()->associate($category);
        $event->address()->associate($address->setAddress($request));
    }
    private function deleteRelationship($event)
    {
        $event->category()->dissociate();
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
