@extends('admin.layouts.app')
@section('title','Categories')
@section('content')
    @include('admin.includes.error')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Categories</h4>
                    </div>
                    <a href="{{route('categories.create')}}" class="card-button__create active"><i
                                class="fas fa-plus"></i></a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Id</th>
                                <th>Category</th>
                                <th>Actions</th>
                                </thead>
                                <tbody>
                                @forelse($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->category}}</td>
                                        <td>
                                            <div class="action-buttons__user-action">
                                                <div class="action-buttons-event-types">
                                                    <a href="{{route('categories.edit',[$category->id])}}"
                                                       class="action-buttons__button__edit"><i class="fas fa-edit"></i></a>
                                                    {!! Form::open(['method'=>'DELETE', 'route'=>['categories.destroy',$category->id]]) !!}
                                                    <button type="submit" class="action-buttons__button__delete"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    {!! Form::close(); !!}
                                                </div>
                                            </div>
                                        </td>

                                        @empty
                                            <td class="table__empty" colspan="3">There are no event types!</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body__pagination">{{ $categories->links() }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection