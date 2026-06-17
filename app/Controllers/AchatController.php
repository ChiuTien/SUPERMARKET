<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Produit;
use App\Models\Achat;
use App\Models\AchatProduit;


class AchatController extends BaseController {
    protected $produit;
    protected $achat;
    protected $achatProduit;

    public function __construct() {
        $this->produit = new Produit();
        $this->achat = new Achat();
        $this->achatProduit = new AchatProduit();
    }
    public function achat() {
        $data = $this->request->getPost("data");
    }
}
