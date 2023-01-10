<?php

namespace Rapidez\ProductAlert\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class AlertController extends Controller
{
    public function __invoke(Request $request)
    {
        abort_if(!$request->header('authorization'), 401);
        $customer = DB::table('oauth_token')->select('customer_id')->where('token', str_replace('Bearer ', '', $request->header('authorization')))->first();
        abort_if(!$customer || !$customer->customer_id, 401);
        $alerts = DB::table('product_alert_stock')->select('product_id')->where('customer_id', $customer->customer_id)->get();

        return $alerts->pluck('product_id')->toJson() ?? [];
    }
}
