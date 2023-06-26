<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Spoon;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function viewDashboard(Request $request) {
        $date = $request->date ?? date('Y-m-d');
        $user = User::getUserWithDateSpoons(1, $date);
        $spoonsMorning = Spoon::getSpoonsByDayPart(1, $date, 0);
        $spoonsAfternoon = Spoon::getSpoonsByDayPart(1, $date, 1);

        return view('dashboard', ['user' => $user, 'date' => $date, 'spoonsMorning' => $spoonsMorning, 'spoonsAfternoon' => $spoonsAfternoon]);
    }
}