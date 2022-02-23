<?php

namespace Akash\Contuct\Http\Controller;

use Akash\Contuct\Mail\ContuctMail;
use Akash\Contuct\Models\Contuct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContuctController extends Controller
{
    public function show()
    {
        return view('form::form');
    }

    public function store(Request $request)
    {
        Mail::to(config('contuct.send_email_to'))->send(new ContuctMail($request->msg));
        Contuct::create($request->all());
        return redirect(route('contuct'));
    }
}
