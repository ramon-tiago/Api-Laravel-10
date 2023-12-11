<?php

namespace App\Http\Controllers\Closeds\Backoffice;

use App\Http\Controllers\Controller;
use App\Services\Closeds\Backoffice\UserService;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Nette\Schema\Expect;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $userService = new UserService();
        return response()->json($userService->index());
    }

    public function show(int $id): JsonResponse
    {
        $userService = new UserService();
        return response()->json($userService->show($id));
    }

    public function store(Request $req): JsonResponse
    {
        $userService = new UserService();
        return response()->json($userService->store($req->all()));
    }

    public function update(Request $req, int $id): JsonResponse
    {
        $userService = new UserService();
        return response()->json($userService->update($req->all(), $id));
    }

    public function destroy($id): JsonResponse
    {
        $userService = new UserService();
        if (!$userService->destroy($id)) {
            return response()->json([
                "message" => "Não foi possível dletar o registro ${$id}!"
            ]);
        };
        return response()->json([
            "message" => " Registro ${$id} deletado com sucesso!"
        ]);
    }
}
