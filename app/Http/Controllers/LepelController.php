<?php

namespace App\Http\Controllers;

use App\Models\Lepel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Type\VoidType;

class LepelController extends Controller {


    public function viewLepel(int $id) {
        $lepel = Lepel::getLepelById($id);
        return view('lepel', ['lepel' => $lepel]);
    }

    public function handleCreateLepel(Request $request) {
        // dd($request);
        $this->validateLepel(($request));
        $this->storeLepel($request);
        return redirect()->route("dashboard", ['date' => $request->date]);
    }

    public function handleUpdateLepel(Request $request) {
        $this->validateLepel(($request));
        $this->updateLepel($request);
        // dd($request);
        return redirect()->route("lepel.view", ['id' => $request->id]);
    }


    public function storeLepel(Request $request) {
        Lepel::create([
            'user_id' => $request->user_id,
            'description' => $request->description,
            'date' => $request->date,
            'afternoon' => $request->afternoon,
        ]);
    }

    public function updateLepel(Request $request) {
        Lepel::where('id', $request->id)->update([
            'date' => $request->date,
            'description' => $request->description,

        ]);
    }


    //DEZE functie snap ik nog niet helemaal wat ie doet
    private function validateLepel(Request $request) {
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

    public function handleRemoveLepel(Request $request) {
        // dd($request);
        $this->removeLepel($request->id);

        return redirect()->route("dashboard", ['date' => $request->date]);
    }

    public function removeLepel(int $lepelId) {
        $entry = Lepel::getLepelById($lepelId);
        $entry->delete();
    }

}