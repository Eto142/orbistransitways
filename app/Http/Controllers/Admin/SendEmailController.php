<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // ✅ Import base Controller
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminSendMail;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('admin.send_email'); // Blade file: resources/views/admin/send_email.blade.php
    }

    public function send(Request $request)
    {
        $request->validate([
            'to'      => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            $adminEmail = Auth::guard('admin')->user()->email;

            Mail::to($request->to)
                ->cc($adminEmail)
                ->send(new AdminSendMail(
                    $request->subject,
                    $request->message
                ));

            return back()->with('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
}
