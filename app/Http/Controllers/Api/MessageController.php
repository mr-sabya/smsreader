<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function index()
    {
        $messages = Message::orderBy('id', 'DESC')->get();
        return response()->json([
            'statuts' => 200,
            'message' => 'Data get successfully',
            'data' => $messages,
        ], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
            'timestamp' => 'required|integer',
        ]);

        $datetime = Carbon::createFromTimestamp($validatedData['timestamp']);

        $message = Message::create([
            'phone' => $validatedData['phone'],
            'message' => $validatedData['message'],
            'timestamp' => $datetime,
        ]);

        if ($message->save()) {
            return response()->json([
                'statuts' => 200,
                'message' => 'Data saved successfully',
                'data' => $message,
            ], 200);
        } else {
            return response()->json([
                'statuts' => 400,
                'message' => 'Error',
            ], 400);
        }
    }


    // get by phone
    public function getByPhone($phone)
    {
        $message = Message::where('message', 'like', '%is your one time password for verification%')
            ->where('phone', $phone)
            ->where('is_read', 0)
            ->first();


        if ($message) {
            $message->is_read = 1;
            $message->save();


            return response()->json([
                'statuts' => 200,
                'message' => 'Data get successfully',
                'data' => $message,
            ], 200);
        } else {
            return response()->json([
                'statuts' => 404,
                'message' => 'Data not found!',
            ], 404);
        }
    }


    // get by phone
    public function getLast()
    {
        $message = Message::where('message', 'like', '%is your one time password for verification%')
            ->where('is_read', 0)
            ->first();


        if ($message) {
            $message->is_read = 1;
            $message->save();


            return response()->json([
                'statuts' => 200,
                'message' => 'Data get successfully',
                'data' => $message,
            ], 200);
        } else {
            return response()->json([
                'statuts' => 404,
                'message' => 'Data not found!',
            ], 404);
        }
    }
}
