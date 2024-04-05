<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(){
        Order::create([
            'user_id' => 10,
            'amount' => 25
        ]);
        
    }
}
