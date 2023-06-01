<?php

namespace App\Http\Controllers;

use App\Models\Lepel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LepelController extends Controller {


    public function handleCreateLepel(Request $request) {
        $this->validateCreateLepel(($request));

        $this->storeLepel($request);

        return redirect("dashboard");
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

}