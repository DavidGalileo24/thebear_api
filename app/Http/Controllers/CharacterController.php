<?php

namespace App\Http\Controllers;

use App\Http\Resources\CharacterResource;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    
    public function index(){
        $data = Character::orderBy('id', 'desc')->get();
        return CharacterResource::collection($data);
    }

    public function show(Character $character){
        return CharacterResource::make($character);
    }

    public function store(Request $request){
        $data = Character::create([
            'fullname' => $request->fullname, 
            'nickname' => $request->nickname, 
            'gender' => $request->gender, 
            'date_of_birth' => $request->date_of_birth, 
            'position_job' => $request->position_job, 
            'description' => $request->description,
        ]);
        return new CharacterResource($data);
    }



    public function update(Request $request, Character $character){
        $character->update([
            'fullname' => $request->fullname, 
            'nickname' => $request->nickname, 
            'gender' => $request->gender, 
            'date_of_birth' => $request->date_of_birth, 
            'position_job' => $request->position_job, 
            'description' => $request->description,
        ]);
        return new CharacterResource($character);
    }

    public function destroy(Character $character){
        $character->delete();
        return response()->json(['message' => 'Deleted!']);
    }
}
