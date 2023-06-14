<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OverviewController extends Controller {
    public function viewOverview(Request $request) {

        $timePeriod = $request->timePeriod ?? 7;
        $user = User::getUserWithTimeIntervalLepels(1, date('Y-m-d', strtotime('-' . $timePeriod . 'days')), date('Y-m-d'));

        return view('overview', ['user' => $user, 'timePeriod' => $timePeriod]);
    }
}