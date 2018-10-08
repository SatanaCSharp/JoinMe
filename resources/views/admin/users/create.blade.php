@extends('admin.layouts.app')
@section('title','Create user')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Create User</h4>
                    </div>
                    <a href="{{route('users.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        {!! Form::open(['route' => ['users.store'],'method' => 'post','class'=>'creation-form']) !!}

                        {{--<div class="avatar-upload">--}}
                            {{--<div class="avatar-edit">--}}
                                {{--<input type='file' id="imageUpload" onchange="readURL(this);" name="image" value="{{asset('images/avatar-default.png')}}" accept=".png, .jpg, .jpeg" required/>--}}
                                {{--<label for="imageUpload"><i class="fas fa-pen"></i></label>--}}
                            {{--</div>--}}
                            {{--<div class="avatar-preview">--}}
                                {{--<img src="{{asset('images/avatar-default.png')}}" id="imagePreview" >--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{  Form::label('first_name', 'First Name')}}
                        {{  Form::text('first_name',null, array_merge(['class' => 'form-control','required' => 'required'])) }}
                        {{  Form::label('last_name', 'Last Name')}}
                        {{  Form::text('last_name',null, array_merge(['class' => 'form-control','required' => 'required'])) }}
                        {{  Form::label('Email', 'Email')}}
                        {{  Form::email('email',null, array_merge(['class' => 'form-control','required' => 'required'])) }}

                        {{  Form::label('city', 'Your City')}}
                        <input class="form-control" type="text" id="city" name="city" placeholder=" " autocomplete="on" required>

                        {{  Form::label('phone_number', 'Phone Number')}}
                        {{  Form::text('phone_number',null, array_merge(['class' => 'form-control'])) }}

                        {{  Form::label('password', 'Password')}}
                        {{  Form::text('password',null, array_merge(['class' => 'form-control key','required' => 'required','minlength' => 6 ])) }}

                        {{  Form::label('password_confirmation', 'Password Confirmation')}}
                        {{  Form::text('password_confirmation',null, array_merge(['class' => 'form-control key','required' => 'required','minlength' => 6])) }}

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <span class="form__permissions">Roles:</span>
                                @foreach($roles as $role)
                                    {{ Form::checkbox('roles[]', $role->id, false, ['class' => 'checkbox','id'=>'role-'.$role->id]) }}
                                    <label for="{{'role-'.$role->id}}">{{ $role->display_name }}</label>
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