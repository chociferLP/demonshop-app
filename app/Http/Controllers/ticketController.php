<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\TicketChat;
use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function store()
    {
        $category = Category::all();
        $user = auth()->id();
        return view('panel.ticket.create', compact('user', 'category'));
    }
    public function upload(User $user, Request $request)
    {
        $user = auth()->id();

       $ticket = Ticket::create([
            'user_id' => $user,
            'title' => $request->input('title'),
            'status' => 'open',
            'category_id' => $request->input('category_id')
        ]);
        TicketChat::create([
            'tickets_id' => $ticket->id,
            'admin_id' => 1,
            'chat'=>$request->input('matn')
        ]);

        return redirect()->back();
    }
    public function index()
    {
        $user = auth()->id();
        $tickets = Ticket::where('user_id', $user)->get();
        return view('panel.ticket.index', compact('user','tickets'));
    }
    public function show()
    {
        $user = auth()->id();
        $tickets = Ticket::where('user_id', $user)->get();
        $tickets2 = TicketChat::all();
        return view('panel.ticket.detail',compact('user','tickets','tickets2'));
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
