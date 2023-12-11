<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function index(): JsonResponse
    {
        return response()->json($this->service->index());
    }

    public function show(int $id): JsonResponse
    {
        return response()->json($this->service->show($id));
    }

    public function store(): JsonResponse
    {
        return response()->json($this->service->store());
    }

    public function update(int $id): JsonResponse
    {
        return response()->json($this->service->update($id));
    }

    public function destroy($id): JsonResponse
    {

        if (!$this->service->destroy($id)) {
            return response()->json([
                "message" => "Não foi possível dletar o registro ${$id}!"
            ]);
        };
        return response()->json([
            "message" => " Registro ${$id} deletado com sucesso!"
        ]);
    }
}
