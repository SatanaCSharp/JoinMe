@extends('admin.layouts.app')
@section('title','Show Role')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Role: <span class="card-header__role-name">{{$role->display_name}}</span> </h4>
                    </div>
                    <a href="{{route('roles.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        <div class="card-body__description-title"> Description:</div>
                        <div class="card-body__description">
                            {{$role->description}}
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <span class="form__permissions">Permissions:</span>
                                @foreach($rolePermissions as $rolePermission)
                                    @foreach($rolePermission->perms as $permission )
                                        {{ Form::checkbox('permission[]', $permission->id, true, ['class' => 'checkbox','id'=>'permission-'.$permission->id,'disabled' => 'disabled']) }}
                                        <label for="{{'permission-'.$permission->id}}">{{ $permission->display_name }}</label>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection