<?php

namespace App\Controllers;

class Catalog extends BaseController
{
    private $url = "https://api.rajaongkir.com/starter/";
    private $apiKey = "6a21672046a140b6a57d22c863da3517";

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $product = new \App\Models\ProductModel();
        $model = $product->findAll();
        return view('catalog/index', [
            'model' => $model,
        ]);
    }

    public function buy()
    {
        $id = $this->request->uri->getSegment(3);

        $modelProduct = new \App\Models\ProductModel();

        $model = $modelProduct->find($id);
        $provinsi = $this->rajaongkir('province');

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'transaction');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $transactionModel = new \App\Models\TransactionModel();
                $transaction = new \App\Entities\Transaction();

                $productModel = new \App\Models\ProductModel();
                $id_product = $this->request->getPost('id_product');
                $amount = $this->request->getPost('quantity');
                $product = $productModel->find($id_product);
                $entityProduct = new \App\Entities\Product();

                $entityProduct->id = $id_product;

                $entityProduct->stock = $product->stock - $amount;

                $productModel->save($entityProduct);

                $transaction->fill($data);
                $transaction->status = 0;
                $transaction->created_by = $this->session->get('id');
                $transaction->created_date = date("Y-m-d H:i:s");

                $transactionModel->save($transaction);
                $id = $transactionModel->insertID();
                $segment = ['transaction', 'view', $id];
                return redirect()->to(site_url($segment));
            }
        }

        return view('catalog/buy', [
            'model' => $model,
            'provinsi' => json_decode($provinsi)->rajaongkir->results,
        ]);
    }

    public function getCity()
    {
        if ($this->request->isAJAX()) {
            $id_province = $this->request->getGet('id_province');
            $data = $this->rajaongkir('city', $id_province);
            return $this->response->setJSON($data);
        }
    }
    public function getCost()
    {
        if ($this->request->isAJAX()) {
            $origin = $this->request->getGet('origin');
            $destination = $this->request->getGet('destination');
            $weight = $this->request->getGet('weight');
            $courier = $this->request->getGet('courier');
            $data = $this->rajaongkircost($origin, $destination, $weight, $courier);
            return $this->response->setJSON($data);
        }
    }

    private function rajaongkircost($origin, $destination, $weight, $courier)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=" . $origin . "&destination=" . $destination . "&weight=" . $weight . "&courier=" . $courier,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: " . $this->apiKey,
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    private function rajaongkir($method, $id_province = null)
    {
        $endPoint = $this->url . $method;

        if ($id_province != null) {
            $endPoint = $endPoint . "?province=" . $id_province;
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $endPoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: " . $this->apiKey
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }
}
