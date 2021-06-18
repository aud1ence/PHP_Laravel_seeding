<?php


namespace App\Services;


interface ServiceInterface
{
    public function all();

    public function create();

    public function update($id);

    public function delete($id);

    public function show($id);
}
