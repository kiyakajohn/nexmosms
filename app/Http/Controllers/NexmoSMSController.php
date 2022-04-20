<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class NexmoSMSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        try {

            $basic  = new \Vonage\Client\Credentials\Basic("2ca89ec1", "W7kfhw0nrbyX48e9");
            $client = new \Vonage\Client($basic);
            $receiverNumber = "254717291410";
            $message = "This is testing from Kiyakas";

            $message = $client->message()->send([
                'to' => $receiverNumber,
                'from' => 'Vonage APIs',
                'text' => $message
            ]);

            dd('SMS Sent Successfully.');

        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
