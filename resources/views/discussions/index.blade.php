@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('discussion.create')}}" class="btn btn-success ">add a discussion</a>
    </div>
    @foreach ($discussions as $item)
        <div class="card">
            <div class="card-header"> {{ $item->title }} </div>

            <div class="card-body">
                {!! $item->content !!}
            </div>
        </div>
    @endforeach
    {{ $discussions->links() }}
@endsection
