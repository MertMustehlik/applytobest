<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function add(Request $request){
        $date1 = $request->visit_time;
        $date2 = time();
        $subTime = $date2 - $date1;

        if (isset($request->botControl)) {
            return redirect()->route('contact')->with('botWarning', 'Your message was not saved bot message detected');
        } else {
            if ($subTime < 5) {
                return redirect()->route('contact')->with('botWarning', 'Your message was not saved bot message detected');
            } else {
                $request->validate([
                    'name' => 'string | max:255',
                    'mail' => 'email:rfc,dns',
                    'phone' => 'numeric | nullable',
                    'message' => 'string | max:2800',
                ]);

                Contact::create([
                    "name" => $request->name,
                    "mail" => $request->mail,
                    "phone" => $request->phone,
                    "message" => $request->message
                ]);

                return redirect()->route('contact')->with('success', 'Has been sent.');
            }
        }
    }
}
