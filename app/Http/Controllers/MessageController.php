<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;


class MessageController extends Controller
{

    public function index(Request $request): View
    {
        $search = $request->input('search');

        $messages = Message::when($search, function ($query) use ($search) {
            return $query->where('message_name', 'like', "%{$search}%")
                         ->orWhere('message_message', 'like', "%{$search}%")
                         ->orWhere('message_email', 'like', "%{$search}%");
        })->orderByDesc('created_at')->paginate(10);

        return view('layouts.admin-message.table', compact('messages'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'message_name' => ['required', 'string', 'max:20', 'regex:/^[a-zA-Z\s]+$/'],
            'message_email' => ['required', 'email', 'max:50'],
            'message_message' => ['required', 'string', 'max:500'],
        ]);

        // Bersihkan input
        $data = $request->all();
        $data['message_name'] = strip_tags($data['message_name']);
        $data['message_message'] = strip_tags($data['message_message']);

        // Simpan data
        $msg = Message::create($data);

        return redirect('/')->withSuccess('Message Successfully!');
    }


    public function destroy($id): RedirectResponse
    {
        $message = Message::findOrFail($id);
        $message->delete();
        // return redirect()->route('message.index')->withSuccess('Message deleted successfully');

        Alert::success('Sucessfully!', 'Message deleted successfully');
        return redirect()->route('message.index');
    }
}
