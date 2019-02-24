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
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Id</th>
                                <th>Event</th>
                                <th>User</th>
                                <th>Is Participated</th>
                                <th>Actions</th>
                                </thead>
                                <tbody>
                                @forelse($participants as $participant)
                                    <tr>
                                        <td>{{$participant->id}}</td>
                                        <td>{{$participant->events->name}}</td>
                                        <td>{{$participant->users->first_name}} {{$participant->users->last_name}}</td>
                                        <td>
                                            <div class="is-participated">
                                                <label for="{{'is_participated-'.$participant->id}}">
                                                    {{ Form::radio('is_participated', $participant->id, $participant->is_participated,
                                             ['class' => 'option-input radio','id'=>'event-type-'.$participant->id,'disabled'=>'disabled' ]) }}
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-buttons__user-action">
                                                <div class="action-buttons">
                                                    <div class="action-buttons__participants">
                                                        {!! Form::open(['method'=>'post', 'route'=>['participant.store',$participant->events['id']]]) !!}
                                                        <button type="submit" class="action-buttons__button__add">
                                                            <i class="fas fa-plus-circle"></i>
                                                        </button>
                                                        {!! Form::close(); !!}

                                                        {!! Form::open(['method'=>'PUT', 'route'=>['participants.update',$participant->events['id']]]) !!}
                                                        <button type="submit" class="action-buttons__button__leave">
                                                            <i class="fas fa-minus-circle"></i>
                                                        </button>
                                                        {!! Form::close(); !!}

                                                        {!! Form::open(['method'=>'delete', 'route'=>['participants.destroy',$participant->events['id']]]) !!}
                                                        <button type="submit" class="action-buttons__button__delete"><i
                                                                    class="fas fa-trash-alt"></i></button>
                                                        {!! Form::close(); !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        @empty
                                            <td class="table__empty" colspan="5">There are no participants!</td>
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