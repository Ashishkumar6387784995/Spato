<?php
use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\User;

class ProductsExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}
