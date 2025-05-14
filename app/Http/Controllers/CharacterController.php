<?php

namespace App\Http\Controllers;

use App\Http\Resources\CharacterResource;
use App\Mail\TestMailQueue;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CharacterController extends Controller
{
    public function index()
    {
        $data = Character::orderBy('id', 'desc')->get();
        $data->load('country');
        $data->load('image');

        return CharacterResource::collection($data);
    }

    public function show(Character $character)
    {
        return CharacterResource::make($character);
    }

    public function store(Request $request)
    {
        $image = new ImageController;
        $data = Character::create([
            'fullname' => $request->fullname,
            'nickname' => $request->nickname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'job_position' => $request->job_position,
            'country_id' => $request->country_id,
            'season_id' => $request->season_id,
            'description' => $request->description,
        ]);
        $image->store($request->image, $data->id, Character::class);

        return new CharacterResource($data);
    }

    public function update(Request $request, Character $character)
    {
        $character->update([
            'fullname' => $request->fullname,
            'nickname' => $request->nickname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'job_position' => $request->job_position,
            'country_id' => $request->country_id,
            'season_id' => $request->seaason_id,
            'description' => $request->description,
        ]);
        // $this->image->store($request->image, $character->id, Character::class);

        return new CharacterResource($character);
    }

    public function destroy(Character $character)
    {
        $character->delete();

        return response()->json(['message' => 'Deleted!']);
    }

    public function testMail(Request $request)
    {
        $data = 'Hi mail';
        Mail::to($request->email)->queue(new TestMailQueue($data));

        return response()->json(['message' => 'Sending mail successfully!']);
    }
}
