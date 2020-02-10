@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">add discussion</div>

    <div class="card-body">
        <form action="{{ route('discussion.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" name="title" value="">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <input id="content" type="hidden" name="content">
                <trix-editor input="content"></trix-editor>
            
            </div>
            <div class="form-group">
                <label for="channel">channel</label>
                <select name="channel" id="channel" class="form-control">
                    @foreach ($channels as $channel)
                        <option value="{{ $channel->id }}"> {{ $channel->name }} </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">save</button>
        </form>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection
