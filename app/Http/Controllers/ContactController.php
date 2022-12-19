<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('send');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = ContactUs::paginate(20);
        return view('pages.backend.contact.index',[
            'data' => $data
        ])->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return response()->json([
            'success' => true
        ]);
    }

    public function update(Request $request,$id)
    {
        ContactUs::find($id)->update([
            'status' => 1
        ]);
        
        $request->session()->flash('success', 'Berhasil update status');
        return redirect()->route('contact.index');
    }

    public function sends(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
           
        Mail::to('nawasenawigunasemesta@gmail.com')
            ->send(new \App\Mail\ContactEmail($request->all()));
        if (Mail::failures()) {
            return response()->json([
                'success' => false
            ]);
        }else{
            return response()->json([
                'success' => true
            ]);
        }
    }
}
