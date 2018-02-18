<?php

namespace App\Http\Controllers;

use App\GuestEntry;
use App\Http\Requests\SignGuestbookRequest;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $entries = GuestEntry::orderBy('created_at','desc')->paginate(5);
        return view('guestbook.index',['entries' => $entries]);
    }

    public function store(SignGuestbookRequest $request)
    {
        GuestEntry::create($request->validated() + ['user_id'=>\Auth::id()]);
        return redirect()->route('guestbook');

    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
