<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Auth\Guard;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    protected $user = null;

    public function __construct(Guard $auth)
    {
        $this->user = $auth->user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::whereUserId($this->user->id)->with('place')->orderBy('date')->get();

        return view('client.payment', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sales = Sale::wherePaymentId($id)->with(['product' => function($query) {
            $query->with('info');
        }])->get();
        $payment = Payment::whereId($id)->with('place')->first();

        return view('client.paymentinfo', compact(['sales', 'payment']));
    }

    public function pay(Request $request)
    {
        $payment = $request->get('payment');

        return view('client.paymentsystem', compact('payment'));
    }

    public function update(Request $request)
    {
        Payment::whereId($request->get('payment')['id'])->update(['payment_date' => date('Y-d-m H:i:s')]);

        return redirect()->route('ref.payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
