<?php

namespace App\Controllers;

class EventController extends BaseController
{
    public function index(): string
    {
        return view('event');
    }
}