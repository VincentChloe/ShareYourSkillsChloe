<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\DemandesModel;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index($demandeId)
    {
        $messages = Message::where('demande_id', $demandeId)->with('sender')->get();
        return response()->json($messages);
    }

    public function store(Request $request, $demandeId)
    {
        $message = new Message();
        $message->demande_id = $demandeId;
        $message->sender_id = Auth::id();
        $message->receiver_id = $request->receiver_id;
        $message->content = $request->content;
        $message->save();

        return response()->json($message);
    }
}
