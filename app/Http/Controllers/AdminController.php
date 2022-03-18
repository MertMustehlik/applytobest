<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Settings;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function home(){
        return view('admin.include.admin-home');
    }

    public function contact(){
        $datas = Contact::get()->reverse();
        return view('admin.include.contact',compact('datas'));
    }

    public function settings(){
        $datas = Settings::find(1);
        return view('admin.include.settings',compact('datas'));
    }
    
    public function settingsUpdate(Request $request){
        $request->validate([
            'linkedin' => 'nullable | url',
            'instagram' => 'nullable | url',
            'mail' => 'nullable | email:rfc,dns',
        ]);

        $favicon = $request->favicon;
        if(isset($favicon)){
            $datas = Settings::find(1);
            $deleteUrl = $datas->favicon;
            File::delete(public_path('assets/images/'.$deleteUrl));
            
            $faviconUrl = "fav-icon" . "." . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('assets/images'), $faviconUrl);

            $update = Settings::whereId(1)->update([
                "favicon" => $faviconUrl,
                'whatsapp' => $request->whatsapp,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'phone' => $request->phone,
                'mail' => $request->mail
            ]);
        }
        else{
            $update = Settings::whereId(1)->update([
                'whatsapp' => $request->whatsapp,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'phone' => $request->phone,
                'mail' => $request->mail
            ]);
        }

        return back()->with('success','Update successful');
    }
    public function settingsDurum($name,$id){
        if($id == 1 ){ $id = 2; } else{ $id = 1; }

        $update = Settings::whereId(1)->update([
            $name => $id
        ]);
        return back()->with('success','Status change successful.');
        
    }
}
