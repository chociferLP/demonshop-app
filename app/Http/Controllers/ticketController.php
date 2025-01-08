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
        $tick = Ticket::where('id');
        Ticket::create([
            'user_id' => $user,
            'title' => $request->input('title'),
            'status' => 'open',
            'category_id' => $request->input('category_id')
        ]);
        TicketChat::create([
            'tickets_id' => $user,
            'admin_id' => 1,
            'chat'=>$request->input('matn')
        ]);

        return redirect()->back();
    }
    public function index()
    {

        $user = auth()->id();
        return view('panel.ticket.index', compact('user'));
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
