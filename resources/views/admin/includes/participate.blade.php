{!! Form::open(['method'=>'post', 'route'=>['participant.store',$event->id]]) !!}
<button type="submit" class="button-participate">
    <i class="fas fa-plus-circle"></i>
    Participate
</button>
{!! Form::close(); !!}