<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleRequest;
use App\Repositories\SaleRepository;
use Illuminate\Http\Request;


class SaleController extends Controller
{

    protected $sale;

    public function __construct(SaleRepository $sale)
    {
        $this->sale = $sale;
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return $this->sale->all($request->per_page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleRequest $request)
    {

        $this->sale->create($request);
        return Response()->json(['message' => 'Venda Concluida com sucesso!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->sale->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaleRequest $request, $id)
    {
       $this->sale->update($request,$id);
        return Response()->json('Venda Alterada com sucesso!', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $this->sale->destroy($id);
        return Response()->json('Venda Excluida com sucesso!', 200);
    }
}
