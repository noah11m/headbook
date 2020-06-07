<?php

namespace App;
use Illuminate\Database\Eloquent\Builder;
use App\Like;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function like($user = null ,$liked = true)
    {
        if ($this->isLikedBy(auth()->user())) {
            return $this->likes()->delete();
        } else {

            $this->likes()->updateOrCreate([
                "user_id" => $user ? $user->id : auth()->id(),
            ], [
                "liked" => $liked
            ]);
        }
    }


    public function dislike($user = null, $liked = false)
    {
        if ($this->isDislikedBy(auth()->user())) {
            return $this->dislikes()->delete();
        }
        $this->dislikes()->updateOrCreate([
            "user_id" => $user ? $user->id : auth()->id(),
        ], [
            "liked" => $liked
        ]);
    }

    public function isLikedBy(User $user)
    {
        return (bool) $user->likes
        ->where("tweet_id", $this->id)
        ->where("liked", true)
        ->count();
    }

    public function isDislikedBy(User $user)
    {
        return (bool) $user->likes
        ->where("tweet_id", $this->id)
        ->where("liked", false)
        ->count();
    }

    public function likes()
    {
    return $this->hasMany(Like::class);
    }

    public function dislikes()
    {
        return $this->hasMany(Like::class);
    }

}
