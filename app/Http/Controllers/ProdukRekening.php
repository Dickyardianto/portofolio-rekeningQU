<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukRekening extends Controller
{
    public function createProduct() {
        return view('layout.product.add-product');
    }
    
    public function productRekening() {
        $client = new Client();
        $response = $client->request("GET", "http://localhost:8080/api/rekening/product");
        $data = json_decode($response->getBody()->getContents());
        return view('layout.product.product', ['data' => $data]);
    }

    public function addNewProduct(Request $request) {

        $rules = array(
            'productCode' => 'required',
            'productName' => 'required',
        );

        $messages = array(
            'productCode.required' => 'Kode produk tidak boleh kosong!',
            'productName.required' => 'Nama produk tidak boleh kosong!',
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect('/product')
            ->withErrors($validator)
            ->withInput();
        }

        $client = new Client();
        $response = $client->request('POST', 'http://localhost:8080/api/rekening/product', [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'json' => [
                'kodeProduk' => $request->productCode,
                'namaProduk' => $request->productName,
            ]
        ]);

        $data = json_decode($response->getBody()->getContents());
        if($data->status == true) {
            return redirect('/product')->with('success', 'Berhasil tambah data!');
        }else {
            return redirect('/product')->with('error', 'Gagal tambah data!');
        }

    }
}
