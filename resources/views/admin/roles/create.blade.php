@extends('admin.layouts.app')
@section('title','Create Role')
@section('content')
    @include('admin.includes.error')
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

                        {{  Form::label('name', 'Name')}}
                        {{  Form::text('name',null, array_merge(['class' => 'form-control'])) }}
                        {{  Form::label('display_name')}}
                        {!! Form::text('display_name', null, array('class' => 'form-control')) !!}
                        {{  Form::label('description', 'Description')}}
                        {{  Form::text('description',null, array_merge(['class' => 'form-control'])) }}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <span class="form__permissions">Permissions:</span>
                                @foreach($permissions as $permission)
                                    {{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'checkbox','id'=>'permission-'.$permission->id)) }}
                                    <label for="{{'permission-'.$permission->id}}">{{ $permission->display_name }}</label>
                                @endforeach
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