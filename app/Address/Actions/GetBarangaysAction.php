<?php

namespace App\Address\Actions;

use App\Address\Models\Barangay;

class GetBarangaysAction
{
    public function execute(array $filters)
    {
        $nameFilter = $filters['name'] ?? '';

        return Barangay::query()
            ->when($nameFilter, function ($query, $nameFilter) {
                $query->where('name', 'like', $nameFilter.'%');
            })
            ->with([
                'city' => function ($query) {
                    $query->select('id', 'name');
                },
            ])
            ->orderBy('id')
            ->get();
    }
}
