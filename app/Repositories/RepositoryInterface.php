<?php


namespace App\Repositories;


interface RepositoryInterface
{
    public function all();

    public function create();

    public function update($id);

    public function delete($id);

    public function show($id);
}
