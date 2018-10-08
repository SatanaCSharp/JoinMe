@extends('admin.layouts.app')
@section('title','Users')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Users</h4>
                    </div>
                    <a href="{{route('users.create')}}" class="card-button__create active"><i
                                class="fas fa-plus"></i></a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>City</th>
                                <th>Roles</th>
                                <th>Actions</th>
                                </thead>
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->address['city']}}</td>
                                        <td>
                                            @forelse($user->roles as $role)
                                              <span class="table__role"> <i class="far fa-check-circle"></i> {{$role->display_name}}</span>
                                            @empty

                                            @endforelse
                                        </td>
                                        <td>
                                            <div class="action-buttons__user-action">
                                                <div class="action-buttons">

                                                    <a href="{{route('users.edit',[$user->id])}}"
                                                       class="action-buttons__button__edit"><i class="fas fa-edit"></i></a>

                                                    <a href="{{route('users.show',[$user->id])}}"
                                                       class="action-buttons__button__show"><i
                                                                class="far fa-eye"></i></a>

                                                    {!! Form::open(['method'=>'DELETE', 'route'=>['users.destroy',$user->id]]) !!}
                                                    <button type="submit" class="action-buttons__button__delete"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    {!! Form::close(); !!}
                                                </div>
                                            </div>
                                        </td>

                                        @empty
                                            <td class="table__empty" colspan="8">There are no Users!</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body__pagination">{{ $users->links() }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection