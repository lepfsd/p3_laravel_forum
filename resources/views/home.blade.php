@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <a href="{{ route('discussion.index') }}" style="color:#fff" class="btn btn-info my-2">discussions</a>
    </div>
</div>
@endsection
