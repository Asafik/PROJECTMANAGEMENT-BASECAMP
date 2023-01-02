<?php

namespace App\Http\Controllers;

use App\Mail\kirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class kirimEmailController extends Controller
{
    public function index(){
        $pesan = 'Mohon Verifikasi Email Anda';

        $data_email = [
            'subject' => 'Verifikasi Email',
            'sender_name' => 'dewiratnaiswara99@gmail.com',
            'isi' => $pesan
        ];
        Mail::to("dewiratnaiswara99@gmail.com")->send(new kirimEmail($data_email));
    }
}
