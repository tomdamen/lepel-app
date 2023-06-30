<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Spoon;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function viewDashboard(Request $request) {
        $date = $request->date ?? date('Y-m-d');
        $user = User::getUserWithDateSpoons(1, $date);
        $spoons = Spoon::getSpoonsByDate(1, $date);
        $spoonsMorning = Spoon::getSpoonsByDayPart(1, $date, 1);
        $spoonsAfternoon = Spoon::getSpoonsByDayPart(1, $date, 2);
        $spoonsEvening = Spoon::getSpoonsByDayPart(1, $date, 3);

        return view('dashboard', [
            'user' => $user,
            'date' => $date,
            'spoons' => $spoons,
            'spoonsMorning' => $spoonsMorning,
            'spoonsAfternoon' => $spoonsAfternoon,
            'spoonsEvening' => $spoonsEvening,
        ]);
    }
}