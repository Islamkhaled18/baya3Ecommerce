<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function index(){
        
        $user = User::get();
        $comment = Comment::latest()->first();
        $Notifications = Notification::send($user, new \App\Notifications\add_comment($comment));
        return view('site.notifications.index',compact('Notifications','comment','user'));
    }

}

