<?php

namespace App\Controllers;


class Product extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::Validation();
        $this->session = session();
    }



    public function index()
    {
        $productModel = new \App\Models\ProductModel();
        $products = $productModel->findAll();
        return view('product/index', [
            'products' => $products,
        ]);
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $productModel = new \App\Models\ProductModel();
        $product = $productModel->find($id);

        return view('product/view.php', [
            'product' => $product,
        ]);
    }

    public function create()
    {
        if ($this->request->getPost()) {
            //if data posted
            $data = $this->request->getPost();
            $this->validation->run($data, 'product');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                //insert to db
                $productModel = new \App\Models\ProductModel();

                $product = new \App\Entities\Product();

                $product->fill($data);
                $product->thumbnail = $this->request->getFile('thumbnail');
                $product->created_by = $this->session->get('id');
                $product->created_date = date("Y-m-d H:i:s");

                $productModel->save($product);

                $id = $productModel->insertID();

                $segments = ['product', 'view', $id];
                // product/view/$id  in URL
                return redirect()->to(site_url($segments));
            }
        }
        return view('product/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $productModel = new \App\Models\ProductModel();

        $product = $productModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'product_update');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                $p = new \App\Entities\Product();
                $p->id = $id;
                $p->fill($data);

                if ($this->request->getFile('thumbnail')->isValid()) {
                    $p->thumbnail = $this->request->getFile('thumbnail');
                }

                $p->updated_by = $this->session->get('id');
                $p->updated_date = date("Y-m-d H:i:s");

                $productModel->save($p);

                $segments = ['product', 'view', $id];

                return redirect()->to(site_url($segments));
            }
        }

        return view('product/update', [
            'product' => $product,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelProduct = new \App\Models\ProductModel();
        $delete = $modelProduct->delete($id);

        return redirect()->to(site_url('product/index'));
    }
}
