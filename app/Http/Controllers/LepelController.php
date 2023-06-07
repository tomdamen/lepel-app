<?php

namespace App\Http\Controllers;

use App\Models\Lepel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Type\VoidType;

class LepelController extends Controller {


    public function handleCreateLepel(Request $request) {
        $this->validateCreateLepel(($request));
        // dd($request);
        $this->storeLepel($request);
        // $date = $request->date;

        return redirect()->route("dashboard", ['date' => $request->date]);
    }


    public function storeLepel($request) {
        Lepel::create([
            'user_id' => $request->user_id,
            'description' => $request->description,
            'date' => $request->date,
        ]);
    }

    private function validateCreateLepel(Request $request) {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'date' => 'required|date',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function handleRemoveLepel(Request $request) {
        // dd($request);
        $this->removeLepel($request->lepelId);

        return redirect()->route("dashboard", ['date' => $request->date]);
    }

    public function removeLepel(int $lepelId) {
        $entry = Lepel::getLepelById($lepelId);
        $entry->delete();
    }

}