<?php

namespace App\Http\Controllers\Admin;

use App\Saving;
use App\SavingsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class SavingsController extends BaseController
{

    public function __construct()
    {
        $this->middleware('admin.registered');
    }

    public function index()
    {
        $this->savings = Saving::all();
        return view('admin.savings.index', $this->data);
    }

    public function categoryPage()
    {
        $this->categories = SavingsCategory::all();
        return view('admin.savings.categories', $this->data);
    }

    public function addCategoryPage()
    {
        return view('admin.savings.add-category');
    }

    public function postSavingCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'description' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors());
        }

        $categories = new SavingsCategory();
        $categories->name = $request->name;
        $categories->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $categories->description = $request->description;
        $categories->save();

        return redirect()->route('admin.dashboard')->with('success', 'Savings Category Created Successfully');

    }

}
