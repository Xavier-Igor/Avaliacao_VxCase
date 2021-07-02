<?php

namespace App\Repositories;

use App\Http\Requests\SaleRequest;
use App\Models\Sale;
use Illuminate\Support\Carbon;

class SaleRepository 
{


    protected $sale;

    public function __construct(Sale $sale)
    {
        $this->sale = $sale;
    }



    public function all($per_page){

        

        return Sale::with('products:name,delivery_days')->paginate($per_page);
    }


    public function create(SaleRequest $request){
        
        $sale = new Sale;
        $sale->purchase_at = Carbon::parse($request->purchase_at);
        $sale->amount = $request->amount;
        $sale->delivery_days = $request->delivery_days;
        $sale->save();
        $sale->products()->sync($request->products);

        
    }


    public function find($id){

        return Sale::with('products:name,delivery_days')->find($id);
    }


    public function update(SaleRequest $request, $id){
        $sale = Sale::find($id);
        $sale->purchase_at = Carbon::parse($request->purchase_at);
        $sale->save();

        $sale->products()->sync($request->products);

    }

    public function destroy($id){
        $sale = Sale::find($id);
        $sale->products()->detach();
        $sale->delete();
    }

}   