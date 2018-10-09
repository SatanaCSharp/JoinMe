@extends('admin.layouts.app')
@section('title','User Info')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User: <span
                                    class="card-header__user-name">{{$user->first_name}} {{$user->last_name}}</span>
                        </h4>
                    </div>
                    <a href="{{route('users.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        <div class="card-body__info">
                            <span class="card-body__assign-item">Email:
                            <span class="card-body__email"> {{$user->email}}</span></span>
                            <span class="card-body__assign-item">Phone number:
                            <span class="card-body__phone-number"> {{$user->phone_number}} </span></span>
                            <span class="card-body__assign-item"> City:
                            <span class="card-body__city">
                                    @isset($user->address->city)
                                       {{$user->address->city }}
                                @endisset
                            </span>
                            </span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <span class="form__permissions">Roles:</span>
                                @forelse($user->roles as $role)
                                    {{ Form::checkbox('permission[]', $role->id, true, ['class' => 'checkbox','id'=>'permission-'.$role->id,'disabled' => 'disabled']) }}
                                    <label for="{{'permission-'.$role->id}}">{{ $role->display_name }}</label>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
