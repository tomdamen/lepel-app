<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lepel;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function viewDashboard(Request $request) {
        $date = $request->date ?? date('Y-m-d');
        $user = User::getUserWithDateLepels(1, $date);
        $lepelsMorning = Lepel::getLepelsByDayPart(1, $date, 0);
        $lepelsAfternoon = Lepel::getLepelsByDayPart(1, $date, 1);

        return view('dashboard', ['user' => $user, 'date' => $date, 'lepelsMorning' => $lepelsMorning, 'lepelsAfternoon' => $lepelsAfternoon]);
    }
}