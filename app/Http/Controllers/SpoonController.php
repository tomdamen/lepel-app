<?php

namespace App\Http\Controllers;

use App\Models\Spoon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Type\VoidType;

class SpoonController extends Controller {


    public function viewSpoon(int $id) {
        $spoon = Spoon::getSpoonById($id);
        return view('spoon', ['spoon' => $spoon]);
    }

    public function handleCreateSpoon(Request $request) {
        $this->validateSpoon(($request));
        $this->storeSpoon($request);
        return redirect()->route("dashboard", ['date' => $request->date]);
    }

    public function handleUpdateSpoon(Request $request) {
        $this->validateSpoon(($request));
        $this->updateSpoon($request);
        return redirect()->route("spoon.view", ['id' => $request->id]);
    }


    public function storeSpoon(Request $request) {
        Spoon::create([
            'user_id' => $request->user_id,
            'description' => $request->description,
            'date' => $request->date,
            'spoons_for_activity' => $request->spoons_for_activity,
            'part_of_day' => $request->part_of_day,
            'private' => 0,
        ]);
    }

    public function updateSpoon(Request $request) {
        Spoon::where('id', $request->id)->update([
            'date' => $request->date,
            'description' => $request->description,

        ]);
    }

    private function validateSpoon(Request $request) {
        $validator = $request->validate([
            'user_id' => 'required|integer',
            'date' => 'required|date',
            'description' => 'required',
            'part_of_day' => 'required',
            'spoons_for_activity' => 'required|integer',
        ]);
    }

    public function handleRemoveSpoon(Request $request) {
        $this->removeSpoon($request->id);
        return redirect()->route("dashboard", ['date' => $request->date]);
    }

    public function removeSpoon(int $spoonId) {
        $entry = Spoon::getSpoonById($spoonId);
        $entry->delete();
    }

}