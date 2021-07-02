<?php


namespace App\Repositories;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;



class ProductRepository
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function all(Request $request)
    {
        if(isset($request->product_name))
            $query = strtoupper($request->product_name);
            return Product::where('name','LIKE','%'.$query.'%')
                        ->orWhere('reference','LIKE','%'.$query.'%')->get();

    }

    public function create(ProductRequest $request)
    {
        $product = new Product;
        $product->create($request->all());
        
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->reference = $request->reference;
        $product->price = $request->price;
        $product->delivery_days = $request->delivery_days;
        $product->save();
    }

    public function destroy($id){

        $product = Product::find($id);
        $product->delete();

    }
}
