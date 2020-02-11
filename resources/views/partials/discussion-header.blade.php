<div class="card-header"> 
    <div class="d-flex justify-content-between">
        <div>
            <img src="{{ URL::to('/') }}/images/myimage.jpeg" alt="" style="border-radius: 50%" width="40px" height="40px">
            <strong class="my-2"> {{ $discussion->author->name }} </strong>
        </div>
        <div>
            <a href="{{ route('discussion.show', $discussion->id) }}" class="btn btn-primary btn-sm">view</a>
        </div>
    </div>   
</div>