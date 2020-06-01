<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\DepositCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class DepositController extends BaseController
{

    public function __construct()
    {
        $this->middleware('admin.registered');
    }

    public function index()
    {
        $this->deposits = Deposit::all();
        return view('admin.deposit.index', $this->data);
    }

    public function depositCategoryPage()
    {
        $this->categories = DepositCategory::all();
        return view('admin.deposit.categories', $this->data);
    }

    public function addCategoryPage()
    {
        return view('admin.deposit.add-category');
    }

    public function postDepositCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'description' => ['required'],
            'time_of_maturity' => ['required'],
            'interest_rate' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors());
        }

        $categories = new DepositCategory();
        $categories->name = $request->name;
        $categories->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $categories->description = $request->description;
        $categories->time_of_maturity = $request->time_of_maturity;
        $categories->interest = $request->interest_rate;
        $categories->save();

        return redirect()->route('admin.dashboard')->with('success', 'Deposit Category Created Successfully');

    }

}
