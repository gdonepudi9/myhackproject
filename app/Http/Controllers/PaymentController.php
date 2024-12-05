<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $request->tier,
                        ],
                        'unit_amount' => $request->amount, // Amount in cents
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return response()->json(['id' => $session->id]);
    }

    public function success()
    {
        // Assuming you have access to the authenticated user
        $user = auth()->user();

        // Add 60 days to the created_at date
        $newStatusDate = \Carbon\Carbon::parse($user->created_at)->addDays(60);

        // Update the status column
        $user->status = $newStatusDate;
        $user->save();

        return view('home.payment');
    }


    public function cancel()
    {
        return view('home.cancel');
    }
}
