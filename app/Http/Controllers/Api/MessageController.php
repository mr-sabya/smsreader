<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
            'date' => 'required',
            'time' => 'required',
        ]);

        $message = new Message();
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->date = $request->date;
        $message->time = $request->time;
        $message->save();

        return $message;
    }
}
