<?php

namespace App\Http\Controllers;

use App\Models\PeoplesModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class PeoplesController extends Controller
{
    public function __construct()
    {
        $this->middleware('client');
    }
    public function handleResponse($status, $message, $content, $httpCode = 200):JsonResponse
    {
        return response()->json([
            'success'=>$status,
            'message'=>$message,
            'content'=>$content,
            'code'=>$httpCode
        ], $httpCode);
    }
    public function index(): JsonResponse
    {
        $peoples = PeoplesModel::all();
        return self::handleResponse(true, 'Listado mostrado correctamente', $peoples);
    }

    public function show($id): JsonResponse
    {
        $peoples = PeoplesModel::where('id','=',$id)->first();
        return self::handleResponse(true, 'Elemento mostrado correctamente', $peoples);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $peoples = PeoplesModel::findOrFail($id);
        $peoples->update($request->all());
        return self::handleResponse(true, 'Elemento actualizado correctamente', $peoples);
    }

    /**
     * @throws Throwable
     */
    public function store(Request $request): JsonResponse
    {
        $peoples = [];
        DB::beginTransaction();

        try {
            $peoples = PeoplesModel::create($request->all());
            DB::commit();
        }catch (Throwable $th){
            DB::rollBack();
            throw $th;
        }

        return self::handleResponse(true, 'Elemento guardado correctamente', $peoples);
    }
}
