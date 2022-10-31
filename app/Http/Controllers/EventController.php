<?php

namespace App\Http\Controllers;
use Event;
use App\Events\SendMail;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(){
        Event(new SendMail(1));
       print('ali');
    }
}
