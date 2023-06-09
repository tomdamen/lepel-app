<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function viewDashboard(Request $request) {
        $date = $request->date ?? date('Y-m-d');
        $user = User::getUserWithDateLepels(1, $date);

        return view('dashboard', ['user' => $user, 'date' => $date]);
    }
}