<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function store()
    {
        $user = auth()->id();
        return view('panel.ticket.create',compact('user'));
    }
    public function index()
    {

        $user = auth()->id();
        return view('panel.ticket.index',compact('user'));
    }
    public function show()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }
    public function changeStatus()
    {

    }
    public function search()
    {

    }
    public function uploadAttachment()
    {

    }
    public function addContent()
    {

    }
    public function export()
    {

    }
}
