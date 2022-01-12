<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Message;
use App\Models\Store;

class ChatController extends Controller
{
    public function allUserMessageChat($id){
        
        $userId = User::with(['profile'])->where('id', $id)->first();
        $profile = $userId->profile;
        $stores = Store::all();
        $chats = Chat::all();

        return view('site.chat.userAllChatMessages',compact('userId','profile','chats','stores'));

    }

    public function chatWithStore($id){
        $userId = User::find(auth()->user()->id);
        $profile = Profile::find(auth()->user()->id);
        $stores = Store::where('id',$id)->first();
        $chats = Chat::all();
        return view('site.chat.userChatToStore',compact('userId','stores','profile','chats'));
    }


    public function chatWithUsers(Request $request){
        
        $stores = Store::first();
       

        $userId = $request->user_id;
        $allusers = User::with(['chats','profile'])->get();
        $users = User::all();


        if($userId){
            $chats = Chat::with('user')->get();
        }else{
            $chats = Chat::all();
        }

        return view('site.chat.storeChats',compact('stores','allusers','chats'));
        
    }

    public function store(Request $request){
        $chat = Chat::create([
            'body' => $request->body,
            'user_id' => auth()->user()->id,
            'store_id' => $request->store_id,
            'profile_id' => auth()->user()->id,
        ]);


        if ($chat) {
            return true;
        } else {
            return false;
        }
    }
}
