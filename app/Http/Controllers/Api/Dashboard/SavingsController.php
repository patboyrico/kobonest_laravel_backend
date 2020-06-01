<?php

namespace App\Http\Controllers\Api\Dashboard;

use App\SavingsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SavingsController extends Controller
{
    public function getSavingsCategory()
    {
        $savings_category = SavingsCategory::all();
        return response()->json(['savingsCategory' => $savings_category]);
    }
}
