<?php

namespace App\Http\Controllers;

use App\Models\Like;

use App\Models\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class LikeController extends Controller
{
    public function likeIt(Reply $reply)
    {
        $reply->like()->create(['user_id'=>'1']);
        return response('Liked', Response::HTTP_ACCEPTED);
    }
    public function unlikeIt(Reply $reply)
    {
        $reply->like()->where(['user_id'=>'1'])->first()->delete();
        return response('Delete', Response::HTTP_ACCEPTED);
    }
}
