<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientsRequest;


use App\Repositories\ClientRepository;


class ClientsController extends Controller
{
    /**
     * @var ClientsRepository
     */
    private $clientsRepository = null;

    public function __construct(ClientRepository $clientsRepository){
        $this->clientsRepository = $clientsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ClientsRequest $request)
    {
        $clients = $this->clientsRepository->all($request->all());
        if(!$clients){
            return response()->json([
                'message' => 'Clients not found',
                'status' => 'error'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Clients retrieved successfully',
            'data' => $clients
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientsRequest $request)
    {
        $cliente = $this->clientsRepository->create($request->all());
        if(!$cliente){
            return response()->json([
                'message' => 'Client not created',
                'status' => 'error'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Client created successfully',
            'data' => $cliente
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientsRequest $request, $id)
    {
        $cliente = $this->clientsRepository->update($request->all(), $id);
        if(!$cliente){
            return response()->json([
                'message' => 'Client not updated',
                'status' => 'error'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Client updated successfully',
            'data' => $cliente
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = $this->clientsRepository->delete($id);
        if(!$cliente){
            return response()->json([
                'message' => 'Client not deleted',
                'status' => 'error'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Client deleted successfully',
            'data' => $cliente
        ], 200);
    }

    public function consultaFinalPlaca($numeroplaca)
    {
        $cliente = $this->clientsRepository->consultaFinalPlaca($numeroplaca);
        if(!$cliente){
            return response()->json([
                'message' => 'Client not found',
                'status' => 'error'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Client retrieved successfully',
            'data' => $cliente
        ], 200);
    }
}
