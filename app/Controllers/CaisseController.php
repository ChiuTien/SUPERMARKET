<?php 
namespace App\Controllers;

use App\Models\Achat;
use App\Models\Caisse;


class CaisseController extends BaseController {
    protected $achat;
    protected $caisse;

    public function __construct() {
        $this->achat = new Achat();
        $this->caisse = new Caisse();
    }

    public function getPage() {
        $data['caisses'] = $this->caisse->findAll();    
        return view("caisse/numCaisse", $data);
    }

    public function traitAchat() {
        $idCaisse = $this->request->getPost('idCaisse');
        $data = [
            "caisse_id" => $idCaisse,
            "date" => date('Y-m-d H:i:s')
        ];

        $this->achat->insert($data);
        
        $achatId = $this->achat->getInsertId();

        $session = session();

        $session->set('achatId',$achatId);

        return view("achats/saisie");
    }
}
?>