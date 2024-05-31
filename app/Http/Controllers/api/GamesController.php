<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameAdsResource;
use App\Models\GameAd;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function getGameData(Request $request)
    {
        $gameData = GameAd::where('game_name',$request->game_name)->where('game_code',$request->game_code)->get();
        $gameAds = GameAdsResource::collection($gameData);
        if(count($gameAds) > 0){
            $response = [
                'success' => true,
                'message' => "Game api get successfully",
                'data'    => $gameAds,
            ];
        } else {
            $response = [
                'success' => false,
                'message' => "Game api code not found",
                'data'    => $gameAds,
            ];
        }
        return response()->json($response, 200);
    }
}
