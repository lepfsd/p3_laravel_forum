<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Discussion extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'user_id', 'channel_id'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function markAsBestReply(Reply $reply)
    {
        $this->update([
            'reply_id' => $reply->id
        ]);
    }

    public function getBestReply()
    {
        return Reply::find($this->reply_id);
    }

    public function bestReply()
    {
        return $this->belongsTo(Reply::class, 'reply_id');
    }

}
