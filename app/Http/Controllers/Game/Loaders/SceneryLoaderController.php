<?php

namespace App\Http\Controllers\Game\Loaders;

use App\Models\Scenery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SceneryLoaderController extends Controller
{
    public function index(Request $request)
    {
        $sceneries = Scenery::where('active', true)->get();
        return response()->json($sceneries);
    }
}
