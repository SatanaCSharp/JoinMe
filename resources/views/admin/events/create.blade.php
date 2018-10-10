@extends('admin.layouts.app')
@section('title','Creation Event')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Create User</h4>
                    </div>
                    <a href="{{route('events.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        {!! Form::open(['route' => ['events.store'],'method' => 'post','class'=>'creation-form']) !!}

                        {{  Form::label('name', 'Event Name')}}
                        {{  Form::text('name',null, array_merge(['class' => 'form-control','required' => 'required'])) }}
                        {{  Form::label('description', 'Event Description')}}
                        {{  Form::text('description',null, array_merge(['class' => 'form-control','required' => 'required'])) }}

                        {{  Form::label('city', 'Event City')}}
                        <input class="form-control" type="text" id="city" name="city" placeholder=" " autocomplete="on" required>
                        {{  Form::label('place', 'Event Place')}}
                        {{  Form::text('place',null, array_merge(['class' => 'form-control'])) }}
                        {{  Form::label('date', 'Date')}}
                        {{  Form::text('date',null, array_merge(['class' => 'form-control'])) }}
                        {{  Form::label('time', 'Time')}}
                        {{  Form::text('time',null, array_merge(['class' => 'form-control'])) }}
                        <br>

                        {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
                            {{--<div class="form-group">--}}
                                {{--<span class="form__permissions">Select type:</span>--}}
                                {{--@foreach($types as $type)--}}
                                    {{--{{ Form::radio('$type', $type->id, false, ['class' => 'checkbox','id'=>'role-'.$type->id]) }}--}}
                                    {{--<label for="{{'type-'.$type->id}}">{{ $type->type }}</label>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{  Form::submit('Create',['class'=>'btn-create-role'])}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection