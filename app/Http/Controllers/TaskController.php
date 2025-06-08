<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Services\TaskService;

class TaskController extends Controller
{
    public function __construct(private TaskService $service) {}

    /**
     * @OA\Get(
     *     path="/task",
     *     description="List all tasks",
     *     description="List all tasks",
     *     security={{ "api_token": {} }},
     *     tags={"Task"},
     *
     *     @OA\Response(
     *          response=500,
     *          description="Erro interno do servidor.",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Examples(
     *                  example="result",
     *                  value={"message": "Exemplo de mensagem de erro"},
     *                  summary="Mensagem de erro da exception"))),
     * )
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreRequest $request)
    {
        $this->service->store($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->service->show($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskUpdateRequest $request, string $id)
    {
        $this->service->update($request->validated(), $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->service->destroy($id);
    }
}
