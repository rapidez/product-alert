<?php

namespace Rapidez\ProductAlert\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class AlertController extends Controller
{
    public function __invoke(Request $request)
    {
        return DB::table('product_alert_stock')
            ->where('customer_id', auth()->user()->entity_id)
            ->pluck('product_id') ?? [];
    }
}
