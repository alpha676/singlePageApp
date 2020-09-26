<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{

public function __construct()
        {
            $this->middleware('JWT');
        }
   public function isLike(Reply $reply){
        Like::insert(["user_id" => 67, "reply_id" => $reply->id]);
        return response("CREATED", 200);
   }

    public function isNotLike(Reply $reply){
        Like::where(["user_id" => 67, "reply_id" => $reply->id])->delete();
        return response("DELETED", 201);
    }
}
