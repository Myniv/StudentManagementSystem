<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class Photos extends ResourceController
{
    public function index()
    {
        echo "PHOTOS";
    }

    public function new()
    {
        echo "PHOTOS NEW";
    }

    public function show($id = null)
    {
        echo "PHOTOS SHOW " . $id;
    }
    public function edit($id = null)
    {
        echo "PHOTOS Edit " . $id;
    }
}
?>