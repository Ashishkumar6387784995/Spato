<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class suppliersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // Skip the first row (headers) and start from the second row
        $rows->shift();

        foreach ($rows as $row) {
            // Create a new User model instance and fill it with data
            $user = new User([
                'name' => $row[1],
                // 'email' => $row[9],
                // 'password' => Hash::make($row[15]),
                // 'mobile' => $row[14],
                // 'action' => $row[17],
                // 'role' => $row[23],
                // 'address' => $row[3] . '.' . $row[4]. '.' . $row[6],
                // 'zipCode' => $row[5],
                // 'vatNo' => $row[7],
                // 'rabatt_Gruppe' => $row[18],
                // 'Zahlung' => $row[19],
                // 'MwSt_Satz' => $row[21],
                // 'Shop_APP' => $row[20],
                // 'Premium_connection/h' => $row[22],
            ]);

            // Save the user to the database
            $user->save();
        }
    }
}
