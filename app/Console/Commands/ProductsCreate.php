<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class ProductsCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:create {name} {reference?} {price?} {delivery_days?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description Teste';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $product = new Product;
        $product->name = $this->argument('name');

        if ($this->argument('reference') != null) {

            $product->reference = $this->argument('reference');
        } elseif ($this->argument('reference') === null) {
            $r = rand(1,99999);
            $product->reference = "VX-$r";
        }
        if ($this->argument('price') != null) {

            $product->price = $this->argument('price');
        } else if ($this->argument('price') === null) {

            $product->price = 0;
        }
        if ($this->argument('delivery_days') != null) {

            $product->delivery_days = $this->argument('delivery_days');

        } elseif ($this->argument('delivery_days') == null) {
            
            $product->delivery_days = 0;
        }



        $product->save();
    }
}
