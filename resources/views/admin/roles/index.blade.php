@extends('admin.layouts.app')
@section('title','Roles')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Roles</h4>
                    </div>
                    <a href="{{route('roles.create')}}" class="card-button__create active"><i
                                class="fas fa-plus"></i></a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                                </thead>
                                <tbody>
                                @forelse($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->description}}</td>
                                        <td>
                                            <div class="action-buttons">
                                                <a href="{{route('roles.edit',[$role->id])}}"
                                                   class="action-buttons__button__edit"><i class="fas fa-edit"></i></a>

                                                <a href="{{route('roles.show',[$role->id])}}"
                                                   class="action-buttons__button__show"><i class="far fa-eye"></i></a>

                                                {!! Form::open(['method'=>'DELETE', 'route'=>['roles.destroy',$role->id]]) !!}
                                                <button type="submit" class="action-buttons__button__delete"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                {!! Form::close(); !!}
                                            </div>
                                        </td>

                                        @empty
                                            <td class="table__empty" colspan="4">There are no roles!</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection