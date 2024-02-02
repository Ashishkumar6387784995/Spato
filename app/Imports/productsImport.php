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
                'Lief_Art_Nr' => $row[2],
                'Hersteller_Artikelnummer' => $row[3],
                'Katalog_Art_Nummer' => $row[4],
                'Kategorie_1' => $row[5],
                'Kategorie_2' => $row[6],
                'Kategorie_3' => $row[7],
                'Kategorie_4' => $row[8],
                'Kategorie_5' => $row[9],
                'Artikelname' => $row[11],
                'Beschreibung_kurz' => $row[12],
                'Beschreibung_lang' => $row[13],
                'm3/h' => $row[14],
                'Stichmass' => $row[15],
                'kW' => $row[16],
                'Volt' => $row[17],
                'Kelvin' => $row[18],
                'lm' => $row[19],
                'Druckstufe_PN' => $row[20],
                'Material' => $row[21],
                'Körnung/h' => $row[22],
                'Durchmesser' => $row[23],
                'Radius' => $row[24],
                'Gewicht' => $row[25],
                'Länge' => $row[26],
                'Breite' => $row[27],
                'Höhe' => $row[28],
                'VE_VPE' => $row[29],
                'Einheit' => $row[30],
                'Rabattcode_1' => $row[31],
                'Rabattcode_2' => $row[32],
                'Rabattcode_3' => $row[33],
                'Preis_zzgl_MwSt' => $row[34],
                'Preis_inkl_MwSt' => $row[35],
                'Einkaufsrabatt' => $row[36],
                'Bild_1' => $row[37],
                'Bild_2' => $row[38],
                'Bild_3' => $row[39],
                'Bild_4' => $row[40],
                'Anleitung_PDF_1' => $row[41],
                'Anleitung_PDF_2' => $row[42],
                'Anleitung_PDF_3' => $row[43],
           
                // Add more columns as needed
            ]);

            // Save the product to the database
            $product->save();
        }
    }
}
