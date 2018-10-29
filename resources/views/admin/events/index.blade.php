@extends('admin.layouts.app')
@section('title','Events')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Events</h4>
                    </div>
                    <a href="{{route('events.create')}}" class="card-button__create active"><i
                                class="fas fa-plus"></i></a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date/Time</th>
                                <th>Address</th>
                                <th>Type</th>
                                <th>Published by</th>
                                <th>Participate</th>
                                <th>Actions</th>
                                </thead>
                                <tbody>
                                @forelse($events as $event)
                                    <tr>
                                        <td>{{$event->id}}</td>
                                        <td>{{$event->name}}</td>
                                        <td>{{$event->description}}</td>
                                        <td>{{$event->date_time}}</td>
                                        <td>{{$event->address->city}}
                                            <span class="table__city">{{$event->address->place}}</span>
                                        </td>
                                        <td>{{$event->category->category}}</td>
                                        <td>{{$event->user->first_name}}  {{$event->user->last_name}}</td>
                                        <td>
                                            @include('admin.includes.leave')
                                            @include('admin.includes.participate')
                                        </td>
                                        <td>
                                            <div class="action-buttons__user-action">
                                                <div class="action-buttons">

                                                    <a href="{{route('events.edit',[$event->id])}}"
                                                       class="action-buttons__button__edit"><i class="fas fa-edit"></i></a>

                                                    <a href="{{route('events.show',[$event->id])}}"
                                                       class="action-buttons__button__show"><i
                                                                class="far fa-eye"></i></a>

                                                    {!! Form::open(['method'=>'DELETE', 'route'=>['events.destroy',$event->id]]) !!}
                                                    <button type="submit" class="action-buttons__button__delete"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    {!! Form::close(); !!}
                                                </div>
                                            </div>
                                        </td>

                                        @empty
                                            <td class="table__empty" colspan="8">There are no events!</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body__pagination">{{ $events->links() }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection