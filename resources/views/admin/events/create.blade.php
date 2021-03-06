@extends('admin.layouts.app')
@section('title','Creation Event')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Create Event</h4>
                    </div>
                    <a href="{{route('events.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        {!! Form::open(['route' => ['events.store'],'method' => 'post','class'=>'creation-form']) !!}

                        {{  Form::label('name', 'Event Name')}}
                        {{  Form::text('name',null, array_merge(['class' => 'form-control','required' => 'required'])) }}
                        {{  Form::label('description', 'Event Description')}}
                        {{  Form::textarea('description',null, array_merge(['class' => 'form-control','required' => 'required'])) }}

                        {{  Form::label('city', 'Event City')}}
                        <input class="form-control" type="text" id="city" name="city" placeholder=" " autocomplete="on"
                               required>
                        {{  Form::label('place', 'Event Place')}}
                        {{  Form::text('place',null, array_merge(['class' => 'form-control'])) }}
                        {{  Form::label('date_time', 'Date And Time')}}
                        {{  Form::text('date_time',null, array_merge(['class' => 'form-control datepicker'])) }}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <span class="form__event-types">Select category:</span>
                                <div class="form__event-types-radio">
                                    @foreach($categories as $category)
                                        <label for="{{'category_id-'.$category->id}}">
                                            {{ Form::radio('category_id', $category->id, false, ['class' => 'option-input radio','id'=>'event-type-'.$category->id]) }}
                                         {{ $category->category }}</label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{  Form::submit('Create',['class'=>'btn-create-role'])}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection