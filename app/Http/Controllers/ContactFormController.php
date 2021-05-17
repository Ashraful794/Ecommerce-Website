<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banners;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function contact_us(Request $request)
    {
        $banners = Banners::where('status','1')->orderby('sort_order','asc')->get();        
        if($request->isMethod('post')){
            $data = $request->all();
            $name=$data['name'];
            $email=$data['email'];
            $subject=$data['subject'];
            $text=$data['message'];
                $messageData=[
                    'email'=>$email,
                    'name'=>$name,
                    'subject'=>$subject,
                    'text'=>$text,
                ];
                Mail::send('wayshop.email.contactform',$messageData,function($message) use($email){
                $message->to("ashraful01934207337@gmail.com")->subject('Customer Query');
            });
                return redirect()->back()->with('flash_message_success','Message have been sent Successfully!');        
        }
        else{
            return view('wayshop.contact_us')->with(compact('banners'));
        }
        
    }
}
