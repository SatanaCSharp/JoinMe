@extends('admin.layouts.app')
@section('title','Edition Event')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Event</h4>
                    </div>
                    <a href="{{route('events.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        {!! Form::open(['route' => ['events.update',$event->id],'method' => 'put','class'=>'creation-form']) !!}

                        {{  Form::label('name', 'Event Name')}}
                        {{  Form::text('name',$event->name, array_merge(['class' => 'form-control','required' => 'required'])) }}
                        {{  Form::label('description', 'Event Description')}}
                        {{  Form::textarea('description',$event->description, array_merge(['class' => 'form-control','required' => 'required'])) }}

                        {{  Form::label('city', 'Event City')}}
                        <input class="form-control" type="text" id="city" name="city" value="{{$event->address->city}}"
                               placeholder=" " autocomplete="on"
                               required>
                        {{  Form::label('place', 'Event Place')}}
                        {{  Form::text('place',$event->address->place, array_merge(['class' => 'form-control'])) }}
                        {{  Form::label('date_time', 'Date And Time')}}
                        {{  Form::text('date_time',$event->date_time, array_merge(['class' => 'form-control datepicker'])) }}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <span class="form__event-types">Select type:</span>
                                <div class="form__event-types-radio">
                                    @foreach($eventTypes as $eventType)<label for="{{'event_type_id-'.$eventType->id}}">
                                        {{ Form::radio('event_type_id', $eventType->id, ($eventType->id ==$event->event_type_id)?true:false,
                                        ['class' => 'option-input radio','id'=>'event-type-'.$eventType->id]) }}
                                        {{ $eventType->type }}</label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{  Form::submit('Update',['class'=>'btn-create-role'])}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection