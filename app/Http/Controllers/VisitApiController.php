<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;

class VisitApiController extends Controller
{
    public function count(Request $request)
    {
        $visit = new Visit();
        $visit->ip = $request->ip();
        $visit->user_agent = $request->userAgent();
        $visit->save();
        $visitCount = Visit::count();
        return response()->json($visitCount);
    }
}
