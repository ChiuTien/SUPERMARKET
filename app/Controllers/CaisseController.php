<?php 
namespace App\Controllers;

class CaisseController extends BaseController {
    public function getPage() {
        return view("caisse/numCaisse");
    }
}
?>