<?php

namespace App\Exports;


use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ProductsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Fetch the products from the database
        return Product::all();
    }

    public function headings(): array
    {
        // Define the column headings
        return [
            'Hersteller', 'Herst_Nr', 'Lief_Art_Nr', 'Hersteller_Artikelnummer', 'Katalog_Art_Nummer',
            'Kategorie_1', 'Kategorie_2', 'Kategorie_3', 'Kategorie_4', 'Kategorie_5',
            'Artikelname', 'Beschreibung_lang', 'm3/h', 'Stichmass', 'kW', 'Volt', 'Kelvin',
            'lm', 'Druckstufe_PN', 'Material', 'Körnung/h', 'Durchmesser', 'Radius',
            'Gewicht', 'Länge', 'Breite', 'Höhe', 'VE_VPE', 'Einheit', 'Rabattcode_1',
            'Rabattcode_2', 'Rabattcode_3', 'Preis_zzgl_MwSt', 'Preis_inkl_MwSt', 'Einkaufsrabatt',
            'Bild_1', 'Bild_2', 'Bild_3', 'Bild_4', 'Anleitung_PDF_1', 'Anleitung_PDF_2', 'Anleitung_PDF_3',
        ];
    }
}
