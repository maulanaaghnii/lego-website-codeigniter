<?php

namespace App\Controllers;


class Transaction extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $transactionModel = new \App\Models\TransactionModel();

        $transaction = $transactionModel->join('product', 'product.id = transaction.id_product')
            ->join('user', 'user.id=transaction.id_customer')
            ->where('transaction.id', $id)
            ->first();

        return view('transaction/view', [
            'transaction' => $transaction,
        ]);
    }

    public function index()
    {
        $transactionModel = new \App\Models\TransactionModel();
        $model = $transactionModel->findAll();
        return view('transaction/index', [
            'model' => $model,
        ]);
    }
}
