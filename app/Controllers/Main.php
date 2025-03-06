<?php 
namespace App\Controllers;

use App\Models\TypKomponent;
use App\Models\Komponent;



class Main extends BaseController
{
    private $typKomponentModel;
    private $komponentModel;

    public function __construct()
    {
        $this->komponentModel = new Komponent();
        $this->typKomponentModel = new TypKomponent();
    }

    public function index()
    {
        $typKomponents = $this->typKomponentModel->findAll();
        $data = ['typKomponents' => $typKomponents,];
        return view('index', $data);
    }

    public function komponenty_podle_typu($idKomponent) {
        $typKomponent = $this->typKomponentModel->find($idKomponent);
        if (!$typKomponent) {
            throw new \Exception('Typ komponent not found');
        }
    
        $komponents = $this->komponentModel->where('typKomponent_id', $idKomponent)->findAll();
    
        $data = [
            'typKomponent' => $typKomponent,
            'komponents' => $komponents,
        ];
    
        return view('komponenty_podle_typu', $data);
    }
}