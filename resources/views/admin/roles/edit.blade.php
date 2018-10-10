@extends('admin.layouts.app')
@section('title','Role Edition')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Role</h4>
                    </div>
                    <a href="{{route('roles.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        {!! Form::open(['route' => ['roles.update',$role->id],'method' => 'put','class'=>'creation-form']) !!}

                        {{  Form::label('name', 'Name')}}
                        {{  Form::text('name',$role->name, array_merge(['class' => 'form-control'])) }}
                        {{  Form::label('display_name')}}
                        {!! Form::text('display_name', $role->display_name, array('class' => 'form-control')) !!}
                        {{  Form::label('description', 'Description')}}
                        {{  Form::text('description',$role->description, array_merge(['class' => 'form-control'])) }}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <span class="form__permissions">Permissions:</span>
                                @foreach($permissions as $permission)
                                    {{ Form::checkbox('permission[]', $permission->id, (in_array($permission->id,$permission->hasRolePermission($role->perms)))?true:false,
                                     ['class' => 'checkbox','id'=>'permission-'.$permission->id]) }}
                                    <label for="{{'permission-'.$permission->id}}">{{ $permission->display_name }}</label>
                                @endforeach
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