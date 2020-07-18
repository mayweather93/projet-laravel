<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Cashier\Exceptions\IncompletePayment;

class BillingController extends Controller
{
    public function index (Request $request) {
        $user = auth()->user();
        try {
            $newSubscription = $user->newSubscription('starter', 'price_1H5SpNA1cZajWek8083TmU2a')->create($request->payment_method, ['email' => $user->email]);
        } catch ( IncompletePayment $exception ){
            return redirect()->back()->with(['error_message' => $exception->getMessage()]);
        }

        return redirect()->back();
    }
}
