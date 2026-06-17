<?php

namespace App\Controllers;

use App\Models\Produit;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProduitController extends BaseController {
    protected $produit;

    public function __construct() {
        $this->produit = new Produit();
    }
}
