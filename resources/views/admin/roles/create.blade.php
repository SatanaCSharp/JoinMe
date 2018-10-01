@extends('admin.layouts.app')
@section('title','Create Role')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Create Role</h4>
                    </div>
                    <a href="{{route('roles.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        {!! Form::open(['route' => ['roles.store'],'method' => 'post','class'=>'creation-form']) !!}

                        {{  Form::label('name', 'name', ['class' => 'title'])}}
                        {{  Form::text('name',null, array_merge(['class' => 'form-control'])) }}

                        {{  Form::label('description', 'Description')}}
                        {{  Form::text('description',null, array_merge(['class' => 'form-control'])) }}
                        <br><br><br>
                        {{  Form::submit('Create',['class'=>'btn-create-role'])}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection