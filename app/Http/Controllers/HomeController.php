<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
https://login.uber.com/oauth/v2/authorize?client_id=9jqqS8FGDobdFql6vpxoAfBq-P3PD0eO&response_type=code&redirect_uri=http://localhost



      $url = 'https://api.uber.com/v1.2/products?latitude=37.7752315&longitude=-122.418075'; //Url address for sending SMS
      $token = 'JA.VUNmGAAAAAAAEgASAAAABwAIAAwAAAAAAAAAEgAAAAAAAAH4AAAAFAAAAAAADgAQAAQAAAAIAAwAAAAOAAAAzAAAABwAAAAEAAAAEAAAAKjLPVFw6N_YksqRg6m4zHmnAAAALsd-Q9nUDOxSInR_giy6RC16ftzXyvoEcshd3OmN4aJ0dYoUXWYk7DBaVubvu9LqQeP5TSaHrpMciBqLnousCfoOE9TbawjHPJ21ZLuvheWC1F1Aqonz1ufmGHczqyZq6Ulpxg8QPNpi_xAwUDGzkzWya5uq3ECJfHczYgk9IbFUDairOZwQk5vkm_GiEewi7L8iP1zqBUYanSwLD5NCOAfDvqGqxkUADAAAAPozeLAt7lAz6TKDpiQAAABiMGQ4NTgwMy0zOGEwLTQyYjMtODA2ZS03YTRjZjhlMTk2ZWU';  //  Your token (secret)

      $data = array(
             "token" => $token
         );

         $curl = curl_init($url);
         curl_setopt($curl, CURLOPT_POST, true);
         curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
         curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
$response = curl_exec($curl);

      // Fecha e limpa recursos
      curl_close($curl);
dd($response);
/*
        return view('home');
    */
    }
}
