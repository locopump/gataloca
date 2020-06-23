<?php


namespace App\Models\Repositories;


interface ProductosInterface
{
    public function getAll();

    public function getNumbers(int $input);
}
