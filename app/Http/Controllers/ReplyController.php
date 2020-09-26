<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReplyResource;
use App\Question;
use App\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{

public function __construct()
        {
            $this->middleware('JWT', ['except' => ['index', 'show']]);
        }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return ReplyResource::collection($question->replies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Question $question , Request $request)
    {
     Reply::create($request->all());
     return response("CREATED", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question , Reply $reply)
    {
        return new ReplyResource($reply);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question, Reply $reply)
    {
        $reply->update($request->all());
        return response("UPDATED", 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question , Reply $reply)
    {
        $reply->delete();
        return response("DELETE", 203);
    }
}
