<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    
    public function store($request, $id, $model){
        $url = Storage::put('images', $request);
        $data = Image::create([
            'url' => Storage::url($url),
            'imageable_type' => $model,
            'imageable_id' => $id,
        ]);

        return $data;
    }
}
