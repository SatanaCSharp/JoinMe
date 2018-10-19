@extends('admin.layouts.app')
@section('title','Participants')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Participants</h4>
                    </div>
                    {{--<a href="{{route('events.create')}}" class="card-button__create active"><i--}}
                                {{--class="fas fa-plus"></i></a>--}}
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Id</th>
                                <th>Event</th>
                                <th>User</th>
                                <th>Actions</th>
                                </thead>
                                <tbody>
                                @forelse($participants as $participant)
                                    <tr>
                                        <td>{{$participant->id}}</td>
                                        <td>{{$participant->events->name}}</td>
                                        <td>{{$participant->users->first_name}} {{$participant->users->last_name}}</td>
                                        <td>
                                            <div class="action-buttons__user-action">
                                                <div class="action-buttons">
                                                    {!! Form::open(['method'=>'DELETE', 'route'=>['participant.delete',$participant->events['id']]]) !!}
                                                    <button type="submit" class="action-buttons__button__delete"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    {!! Form::close(); !!}
                                                </div>
                                            </div>
                                        </td>

                                        @empty
                                            <td class="table__empty" colspan="4">There are no participants!</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body__pagination">{{ $participants->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection