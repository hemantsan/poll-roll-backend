<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HandleResponse;
use App\Http\Resources\PollsResource as PollsResource;
use App\Http\Resources\PollsCollection;
use App\Http\Controllers\PollOptionsController;
use App\Polls;

class PollsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PollsCollection(User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPoll = Polls::create([
            'question' => $request->get('question'),
            'created_by' => 1
        ]);
        // return HandleResponse::jsonResponse('', $token = $request->header('Authorization'));

        if (!$newPoll) {
            return HandleResponse::jsonResponse('poll_create_error');
        }
        PollOptionsController::store($request->get('options'), $newPoll->id);
        return HandleResponse::jsonResponse('poll_create_success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
