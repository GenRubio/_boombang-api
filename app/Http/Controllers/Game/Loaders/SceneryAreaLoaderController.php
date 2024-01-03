<?php

namespace App\Http\Controllers\Game\Loaders;

use App\Models\Scenery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SceneryAreaLoaderController extends Controller
{
    public function index(Request $request)
    {
        $sceneries = Scenery::where('type_id', 1)
            ->where('active', true)
            ->get();
        return response()->json($sceneries);
    }
}
