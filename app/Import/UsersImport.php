<?php

namespace App\Import;
use App\Models\Product;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $now = Carbon::now()->toDateTimeString();
        return new Product([
            'name' => $row['name'],
            'email' => $row['email'],
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}