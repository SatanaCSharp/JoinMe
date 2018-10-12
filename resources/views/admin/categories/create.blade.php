@extends('admin.layouts.app')
@section('title','Creation Category')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Create Category</h4>
                    </div>
                    <a href="{{route('categories.index')}}" class="card-button__create active"><i
                                class="fas fa-arrow-left"></i></a>
                    <div class="card-body">
                        {!! Form::open(['route' => ['categories.store'],'method' => 'post','class'=>'creation-form']) !!}
                        {{  Form::label('category', 'Category')}}
                        {{  Form::text('category',null, array_merge(['class' => 'form-control','required'=>'required'])) }}
                        {{  Form::submit('Create',['class'=>'btn-create-event-type'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection