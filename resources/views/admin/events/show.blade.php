@extends('admin.layouts.app')
@section('title','Event Info')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Event: <span
                                    class="card-header__user-name">{{$event->name}}</span>
                        </h4>
                    </div>
                    <a href="{{route('events.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        <div class="card-body__info">
                            <span class="card-body__assign-item">Date and time:
                                <span class="card-body__event-date-time"> {{$event->date_time}} </span>
                            </span>
                            <span class="card-body__assign-item"> Published by:
                                 <span class="card-body__event-user"> {{$event->user->first_name}}  {{$event->user->last_name}}</span>
                            </span>
                            <span class="card-body__assign-item">Description:
                                <span class="card-body__event-description"> {{$event->description}}</span>
                            </span>
                            <span class="card-body__assign-item"> Address:
                                 <span class="card-body__event-address"> {{$event->address->city}} {{$event->address->place}}</span>
                            </span>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <span class="form__event-types">Select type:</span>
                                <div class="form__event-types-radio">
                                    <label for="{{'event_type_id-'.$event->eventType->id}}">
                                        {{ Form::radio('event_type_id', $event->eventType->id, true, ['class' => 'option-input radio',
                                        'id'=>'event-type-'.$event->eventType->id,'disabled'=>'disabled' ]) }}
                                        {{ $event->eventType->type }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
