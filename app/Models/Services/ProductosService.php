<?php

namespace App\Models\Services;


use App\Models\Repositories\ProductosInterface;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class ProductosService
{
    protected $productos_repo;

    public function __construct(ProductosInterface $productos)
    {
        $this->productos_repo = $productos;
    }

    public function getAll()
    {
        $code = 400;
        $headers = ['Content-Type' => 'application/json; charset=UTF-8'];
        $response = [];

        try {
            $product = $this->productos_repo->getAll();
            $numero = $this->productos_repo->getNumbers(5);

            $code = $numero*40;
            $response = [
                'success' => true,
                'data' => $product,
                'message' => 'Listado exitoso, saludos.',
                'success' => $code,
            ];

        } catch (QueryException $e) {
            $response = [
                'success' => false,
                'message' => 'Error en la consulta, contactese con Sistemas, maldito.',
                'code' => $code,
            ];
        }

        return response()->json($response, $code, $headers);
    }
}
