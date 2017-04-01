<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $message = new Messages;
        $message->message = encrypt($request->message);
        $message->destroy_method = $request->method;
        $message->token = str_random(6);
        if($message->save())
            return [
                'status' => 'success',
                'link' => env('APP_URL', 'http://localhost') . '/m/' . $message->token
                ];
        // TODO: error handler
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $messages, $token)
    {
        $message = $messages::where('token', $token)->firstOrFail();
        switch ($message->destroy_method) {
            case 1:
                if(time() - strtotime($message->created_at) >= 60)
                    $message->delete();
                break;
            case 2:
                    $message->delete();
                break;
        }
        try {
            $message->message = decrypt($message->message);
        } catch (DecryptException $e) {
            // TODO: handle Exception
        }
        return view('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
