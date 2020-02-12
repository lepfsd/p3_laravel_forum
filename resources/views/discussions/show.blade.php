@extends('layouts.app')

@section('content')

<div class="card my-5">
    <div class="card-header text-white bg-info"> 
        <div class="d-flex justify-content-between">
            <div>
                <img src="{{ URL::to('/') }}/images/myimage.jpeg" alt="" style="border-radius: 50%" width="40px" height="40px">
                <strong class="my-2"> {{ $discussion->author->name }} </strong>
            </div>
        </div>   
    </div>
       
    <div class="card-body">
        {{ $discussion->title }}
        <hr>
        {!! $discussion->content !!}
    </div>
</div>
<hr>

@foreach ($discussion->replies()->paginate(3) as $reply)
    <div class="card my-5">
        <div class="card-header">
            <div class="d-flex justify-content-between float-left">
                <img src="{{ URL::to('/') }}/images/myimage.jpeg" alt="" style="border-radius: 50%" width="40px" height="40px">
                <strong class="my-2"> {{ $reply->owner->name }} </strong>
            </div>
        </div>
        <div class="card-body">
            {!! $reply->content !!}
        </div>
    </div>

    
@endforeach
{{ $discussion->replies()->paginate()->links() }}

<div class="card my-5">
    <div class="card-header">
        add a reply
    </div>
    <div class="card-body">
        @auth
            <form action="{{ route('replies.store', $discussion) }}" method="POST">
                @csrf
                <div class="form-group">
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary float-right my-2">reply</button>
            </form>
        @else     
        <a href="{{ route('login') }}" class="btn btn-info">sign in to add a reply</a>
        @endauth
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection
