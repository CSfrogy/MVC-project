<?php  

class Products extends Controller
{
    public function index()
    {
        $this->view('products/product');
    }
}

