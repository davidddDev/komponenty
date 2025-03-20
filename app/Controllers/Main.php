<?php

namespace App\Controllers;

use App\Models\TypKomponent;
use App\Models\Komponent;
use App\Models\Vyrobce;
use Config\KomponentConfig;
use Config\Pager;

class Main extends BaseController
{
    private $typKomponentModel;
    private $komponentModel;
    private $vyrobceModel;

    public function __construct()
    {
        $this->komponentModel = new Komponent();
        $this->typKomponentModel = new TypKomponent();
        $this->vyrobceModel = new Vyrobce();
    }

    public function index()
    {
        $typKomponents = $this->typKomponentModel->findAll();
        $data = ['typKomponents' => $typKomponents,];
        return view('index', $data);
    }

    public function komponenty_podle_typu($url)
    {
    $typKomponent = $this->typKomponentModel->where('url', $url)->first();
    $config = new KomponentConfig();
    $perPage = $config->perPage;
    $komponents = $this->komponentModel->where('typKomponent_id', $typKomponent->idKomponent)->paginate($perPage);
    $pager = $this->komponentModel->pager;
    $data = [
        'typKomponent' => $typKomponent,
        'komponents' => $komponents,
        'pager' => $pager,
    ];

    return view('komponenty_podle_typu', $data);
}

public function komponent_detail($idKomponent)
{
    $komponent = $this->komponentModel->find($idKomponent);
    $vyrobce = $this->vyrobceModel->find($komponent->vyrobce_id);
    $komponent->vyrobce = $vyrobce;
    $typKomponent = $this->typKomponentModel->where('idKomponent', $komponent->typKomponent_id)->first();
    $komponent->typKomponent = $typKomponent;
    $data = [
        'komponent' => $komponent,
        'typKomponentUrl' => base_url('typ-komponent/' . $typKomponent->url),]; // drobeckova navigace

    return view('komponent_detail', $data);
    }

    public function taby()
{
    $typKomponents = $this->typKomponentModel->findAll();
    $komponentModel = $this->komponentModel;
    $data = ['typKomponents' => $typKomponents, 'komponentModel' => $komponentModel];
    return view('taby', $data);
}
}
