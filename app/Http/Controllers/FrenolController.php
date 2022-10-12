<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

use App\Mail\EnquiryEmail;
use Illuminate\Support\Facades\Mail;

class FrenolController extends Controller
{
    //
    

    public function index(){
        $initialMarkers = [
            [
                'position' => [
                    'lat' => -1.254337,
                    'lng' => 36.681660
                ],
                'label' => [ 'color' => 'white', 'text' => 'P1' ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => -1.286389,
                    'lng' => 36.817223
                ],
                'label' => [ 'color' => 'white', 'text' => 'P2' ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 28.625182,
                    'lng' => 79.81464
                ],
                'label' => [ 'color' => 'white', 'text' => 'P3' ],
                'draggable' => true
            ]
        ];
        $services = Service::all();

        return view('frenol/home',  compact('services', 'initialMarkers'));
    }


    public function about(){

        $services = Service::all();
        return view('frenol/about', compact('services'));
    }

    public function info(Request $request){

        
       
        $name = $request->get('name');
        dd($name);
        $phone = $request->get('phone');
        $email = $request->get('email');
        $message = $request->get('message');

        $data = [
            "name" => "hello shiftech  i am $name  and  im equiring $message and this are my credentials phone: $phone and Email: $email",
        ];

        Mail::to("defrenol021@gmail.com")->send(new EnquiryEmail($data));
        return redirect()->back();
    }
}
