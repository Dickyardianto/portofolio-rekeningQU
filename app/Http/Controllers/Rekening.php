<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Http\Request;

class Rekening extends Controller
{
    public function inquiryRekening() {
        try {
            $client = new Client();
            $response = $client->request("GET", "http://localhost:8080/api/rekening");
            $data = json_decode($response->getBody()->getContents());
            return view('index', ['data' => $data]);
        } catch (ConnectException $e) {
            $data = $e->getMessage();
            return view('index', ['errData' => $data]);
        }
    }

    public function createRekening() {
        try {
            $client = new Client();
            $responseProduct = $client->request("GET", "http://localhost:8080/api/rekening/product");
            $dataProduct = json_decode($responseProduct->getBody()->getContents());

            $responseTujuanBurek = $client->request("GET", "http://localhost:8080/api/rekening/tujuanBurek");
            $dataTujuanBurek = json_decode($responseTujuanBurek->getBody()->getContents());

            return view('create', ['data' => $dataProduct, 'dataTujuanBurek' => $dataTujuanBurek]);
        } catch (ConnectException $e) {
            $data = $e->getMessage();
            return view('create', ['errData' => $data]);
        }
    }
}
