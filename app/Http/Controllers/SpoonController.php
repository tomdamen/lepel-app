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
        // dd($request);
        $this->validateSpoon(($request));
        $this->storeSpoon($request);
        return redirect()->route("dashboard", ['date' => $request->date]);
    }

    public function handleUpdateSpoon(Request $request) {
        $this->validateSpoon(($request));
        $this->updateSpoon($request);
        // dd($request);
        return redirect()->route("spoon.view", ['id' => $request->id]);
    }


    public function storeSpoon(Request $request) {
        Spoon::create([
            'user_id' => $request->user_id,
            'description' => $request->description,
            'date' => $request->date,
            'afternoon' => $request->afternoon,
        ]);
    }

    public function updateSpoon(Request $request) {
        Spoon::where('id', $request->id)->update([
            'date' => $request->date,
            'description' => $request->description,

        ]);
    }


    //DEZE functie snap ik nog niet helemaal wat ie doet
    private function validateSpoon(Request $request) {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'date' => 'required|date',
            'description' => 'required',
            'afternoon' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function handleRemoveSpoon(Request $request) {
        // dd($request);
        $this->removeSpoon($request->id);

        return redirect()->route("dashboard", ['date' => $request->date]);
    }

    public function removeSpoon(int $spoonId) {
        $entry = Spoon::getSpoonById($spoonId);
        $entry->delete();
    }

}