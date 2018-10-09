@extends('admin.layouts.app')
@section('title','User Edition')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit User</h4>
                    </div>
                    <a href="{{route('users.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        {!! Form::open(['route' => ['users.update',$user->id],'method' => 'put','class'=>'creation-form']) !!}
                        {{  Form::label('first_name', 'First Name')}}
                        {{  Form::text('first_name',$user->first_name, array_merge(['class' => 'form-control','required' => 'required'])) }}
                        {{  Form::label('last_name', 'Last Name')}}
                        {{  Form::text('last_name',$user->last_name, array_merge(['class' => 'form-control','required' => 'required'])) }}
                        {{  Form::label('Email', 'Email')}}
                        {{  Form::email('email',$user->email, array_merge(['class' => 'form-control','required' => 'required'])) }}
                        {{  Form::label('city', 'Your City')}}
                        <input class="form-control" type="text" id="city" name="city" value="@isset($user->address->city){{$user->address->city }}@endisset"
                               placeholder=" " autocomplete="on" required>
                        {{  Form::label('phone_number', 'Phone Number')}}
                        {{  Form::text('phone_number',$user->phone_number, array_merge(['class' => 'form-control'])) }}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <span class="form__permissions">Roles:</span>
                                @foreach($roles as $role)
                                    {{ Form::checkbox('roles[]', $role->id, $user->hasRole($role->name)? true:false, ['class' => 'checkbox','id'=>'role-'.$role->id]) }}
                                    <label for="{{'role-'.$role->id}}">{{ $role->display_name }}</label>
                                @endforeach
                            </div>
                        </div>
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