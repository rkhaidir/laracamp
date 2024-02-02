<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();
        $request->session()->flash('success', "Checkout with Id {$checkout->id} has been updated!");
        return redirect(route('admin.dashboard'));
    }
}
