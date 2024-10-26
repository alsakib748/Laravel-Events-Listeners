<?php

namespace App\Http\Controllers;

use Event;

use App\Events\SendMail;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    public function subscribed(){

        // todo: One way to execute event
        Event::dispatch(new SendMail(3));

        // todo: Second way to execute event
        // event(args: new SendMail(1));

        dd('User Subscribe Successfully');
    }





}
