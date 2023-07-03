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
        $usedSpoonsDay = 0;
        foreach ($spoons as $spoon) {
            $usedSpoonsDay += $spoon->spoons_for_activity;
        }
        $spoonsMorning = Spoon::getSpoonsByDayPart(1, $date, 1);
        $usedSpoonsMorning = 0;
        foreach ($spoonsMorning as $spoon) {
            $usedSpoonsMorning += $spoon->spoons_for_activity;
        }
        $spoonsAfternoon = Spoon::getSpoonsByDayPart(1, $date, 2);
        $usedSpoonsAfternoon = 0;
        foreach ($spoonsAfternoon as $spoon) {
            $usedSpoonsAfternoon += $spoon->spoons_for_activity;
        }
        $spoonsEvening = Spoon::getSpoonsByDayPart(1, $date, 3);
        $usedSpoonsEvening = 0;
        foreach ($spoonsEvening as $spoon) {
            $usedSpoonsEvening += $spoon->spoons_for_activity;
        }

        return view('dashboard', [
            'user' => $user,
            'date' => $date,
            'spoons' => $spoons,
            'spoonsMorning' => $spoonsMorning,
            'spoonsAfternoon' => $spoonsAfternoon,
            'spoonsEvening' => $spoonsEvening,
            'usedSpoonsDay' => $usedSpoonsDay,
            'usedSpoonsMorning' => $usedSpoonsMorning,
            'usedSpoonsAfternoon' => $usedSpoonsAfternoon,
            'usedSpoonsEvening' => $usedSpoonsEvening,
        ]);
    }
}