<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\BaseController;
use App\State;
use App\LoanCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoansController extends BaseController
{
    public function __construct()
    {
        $this->middleware('agent.registered');
    }

    public function index()
    {
        $this->loans = Loan::orderBy('created_at')->get();
        return view('agent.loans.index', $this->data);
    }

    public function requestLoansPage()
    {
        $this->states = State::all();
        $this->categories = LoanCategory::all();
        return view('agent.loans.request', $this->data);
    }

    public function requestLoan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'numeric'],
            'loan_category' => ['required'],
            'marital_status' => ['required'],
            'house_type' => ['required'],
            'street_address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'phone_number' => ['required'],
            'bvn' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors());
        }

        $loan = new Loan();
        $loan->name = auth()->user()->full_name;
        $loan->user_id = auth()->user()->id;
        $loan->amount = $request->amount;
        $loan->category_id = $request->loan_category;
        $loan->marital_status = $request->marital_status;
        $loan->house_type = $request->house_type;
        $loan->street_address = $request->street_address;
        $loan->city_of_applicant = $request->city;
        $loan->state_of_applicant = $request->state;
        $loan->phone_number = $request->phone_number;
        $loan->bvn = $request->bvn;
        $loan->save();

        return redirect()->route('agent.dashboard')->with('success', 'Loan Application Submitted. Awaiting Approval');

    }
}
