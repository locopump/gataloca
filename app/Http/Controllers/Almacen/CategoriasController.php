<?php

namespace App\Http\Controllers\Almacen;

use App\Http\Controllers\Controller;
use App\Models\Services\ProductosService;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    protected $productos_service;

    public function __construct(ProductosService $productos)
    {
        $this->productos_service = $productos;
    }

    public function getProductos(Request $request)
    {
        return $this->productos_service->getAll();
    }
}
