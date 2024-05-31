<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameAdsResource;
use App\Models\GameAd;
use Illuminate\Http\Request;

class GameAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Game::collection(Book::with('ratings')->paginate(25));
        $gameAds = GameAdsResource::collection(GameAd::paginate(25));
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = GameAd::create([
            'game_name' => $request->gameName,
            'game_code' => $request->gameCode,
            'interstitial_ads' => $request->interstitialAds,
            'banner_ads' => $request->bannerAds,
            'native_ads' => $request->nativeAds,
            'video_ads' => $request->videoAds,
          ]);

          $gameAds =  new GameAdsResource($book);

          if($gameAds){
            $response = [
                'success' => true,
                'message' => "Game api create successfully",
                'data'    => $gameAds,
            ];
            return response()->json($response, 200);

          } else {
            $response = [
                'success' => false,
                'message' => "Something went wrong",
                'data'    => $gameAds,
            ];
            return response()->json($response, 200);

          }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
