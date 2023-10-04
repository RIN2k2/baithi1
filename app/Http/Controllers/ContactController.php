<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactfromMail;
use App\Mail\ContactMail;
use Mockery\Matcher\Contain;
use App\Models\Lienhe;

class ContactController extends Controller
{

    public function lienhe()
    {
        return view('contacts');
    }
    public function postContact(Request $req)
    {
        // Xác thực dữ liệu từ form nếu cần

        // Lấy dữ liệu từ form
        $sentData = [
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'message' => $req->input('message'),
        ];
        // Gửi email cho bạn
        Mail::to('nguyenrin412002@gmail.com')->send(new ContactMail($sentData));

        //


        $lienhe = new Lienhe();
        $lienhe->name = $req->name;
        $lienhe->email = $req->email;
        $lienhe->message = $req->message;
        $lienhe->save();


        // Chuyển hướng hoặc hiển thị thông báo thành công
        return redirect()->route('lienhe')->with('message', 'Gửi email thành công!');
    }
}
