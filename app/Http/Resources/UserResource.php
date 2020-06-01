<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'phoneNumber' => $this->phone_number,
            'email' => $this->email,
            'accountNumber' => $this->wallet->account_number,
            'walletBalance' => $this->wallet->balance,
            'savingsBalance' => $this->wallet->savings_balance,
            'investmentBalance' => $this->wallet->deposit_balance
        ];
    }
}
