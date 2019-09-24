<?php

namespace App\Http\Controllers\Admin;

use App\Models\ChatRoom;
use Illuminate\Http\Request;

class ChatRoomController extends Controller
{
    public function index()
    {
        $chatRooms = ChatRoom::latest()->get();

        return view('admin.chat_rooms', compact('chatRooms'));
    }

    public function add()
    {
        $chatRooms = ChatRoom::latest()->limit(5)->get();

        return view('admin.add_chat_room', compact('chatRooms'));
    }

    public function store(Request $request)
    {
        if($this->isValidChatRoom($request->name))
        {
            $chatroom = new ChatRoom;

            $chatroom->name = $request->name;
            $chatroom->slug = str_slug($request->name);
            $chatroom->description = $request->description;
            $chatroom->active = ($request->status == 1) ? true : false;

            $chatroom->save();

            session()->flash('success', 'Chat Room Created');
        }
        else {
            session()->flash('error', 'Chat Room already exists');
        }

        return back();
    }

    private function isValidChatRoom($name)
    {
        //check that no chat room exists with the same name
        $room = ChatRoom::where('name', $name)->first();

        if(is_null($room))
        {
            return true;
        }

        return false;
    }

    public function edit($id)
    {
        $chatroom = ChatRoom::find($id);

        return view('admin.chat_room_edit', compact('chatroom'));
    }

    public function update(Request $request, $id)
    {
        $chatroom = ChatRoom::find($id);

        if(empty($request->name))
        {
            session()->flahs('error', 'The name cannot be empty');

            return back();
        }

        $chatroom->name = $request->name;
        $chatroom->description = $request->description;
        $chatroom->active = ($request->status == 1) ? true : false;

        $chatroom->save();

        session()->flash('success', 'Chat Room Info UPdated');

        return back();
    }

    public function destroy($id)
    {
        ChatRoom::destroy($id);

        session()->flash('success', 'Chat Room Deleted');

        return back();
    }
}
