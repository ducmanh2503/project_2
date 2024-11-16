<?php

namespace App\Controllers;

use App\Models\SpModel;

class SpController extends baseController
{
    protected $SP;
    public function __construct()
    {
        $this->SP = new SpModel();
    }

    function index()
    {
        return $this->render("admin.index");
    }

    function getAllSetBuffet()
    {
        $SP = $this->SP->listSetBuffett();
        // var_dump($SP);
        return $this->render("admin.setBuffet", ["SP" => $SP]);
    }

    function formAddSetBuffet()
    {
        return $this->render("admin.addSetBuffet");
    }

    function addSetBF()
    {
        if (isset($_POST['btn_add'])) {
            $tenSetBuffet = $_POST['tenSetBuffet'];
            $giaSetBuffet = $_POST['giaSetBuffet'];
            $moTaSetBuff = $_POST['moTaSetBuff'];
            $this->SP->addSetBuffet($tenSetBuffet, $giaSetBuffet, $moTaSetBuff);
            header("Location: set-buffet");
        }
    }

    function deleteSetBF()
    {
        $maSetBuffet = $_GET['id'];
        $this->SP->deleteSetBuffet($maSetBuffet);
        header("Location: set-buffet");
    }
}
