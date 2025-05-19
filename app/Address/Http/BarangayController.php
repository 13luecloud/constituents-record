<?php

namespace App\Address\Http;

use App\Address\Actions\GetBarangaysAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BarangayController extends Controller
{
    public function index(Request $request, GetBarangaysAction $action)
    {
        $filters = $request->filter ?? [];

        $data = $action->execute($filters);
        
        return Inertia::render('Barangay', [
            'barangays' => $data,
        ]);
    }
}
