@extends('admin.layouts.app')
@section('title','Edition Event Type')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Event Type</h4>
                    </div>
                    <a href="{{route('event-types.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        {!! Form::open(['route' => ['event-types.update',$eventType->id],'method' => 'put','class'=>'creation-form']) !!}
                        {{  Form::label('type', 'Event Type')}}
                        {{  Form::text('type',$eventType->type, array_merge(['class' => 'form-control'])) }}
                        {{  Form::submit('Update',['class'=>'btn-create-event-type'])}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection