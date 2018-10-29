{!! Form::open(['method'=>'PUT', 'route'=>['participants.update',$event->id]]) !!}

<button type="submit" class="button-leave">
    <i class="fas fa-minus-circle"></i>
    Leave
</button>
{!! Form::close(); !!}