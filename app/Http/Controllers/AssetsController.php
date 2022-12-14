<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class AssetsController extends Controller
{

    public function __invoke($file)
    {
        abort_if(auth()->guest(), Response::HTTP_FORBIDDEN);
        $path = "secret/$file";

        return response()->file(Storage::path($path));
    }
}
