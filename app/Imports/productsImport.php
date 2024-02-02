<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Product;

class productsImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Create a new Product model instance and fill it with data
            $product = new Product([
               // Replace with your actual column names or use associative keys
                'Hersteller' => $row[0],
                'Herst_Nr' => $row[1],
                // Add more columns as needed
            ]);

            // Save the product to the database
            $product->save();
        }
    }
}
