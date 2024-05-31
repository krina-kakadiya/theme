<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GameAd;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $games = GameAd::get();
       return view('admin.games.index',['games' => $games]);
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
        $request->validate([
            'game_name' => 'required',
            'interstitial_ads' => 'required',
            'native_ads' => 'required',
            'video_ads' => 'required',
            'banner_ads' => 'required'
        ]);
        GameAd::create([
            'game_name' => $request->input('game_name'),
            'game_code' => $request->input('game_code'),
            'interstitial_ads' => $request->input('interstitial_ads'),
            'native_ads' => $request->input('native_ads'),
            'video_ads' => $request->input('video_ads'),
            'banner_ads' => $request->input('banner_ads'),
        ]);
        return redirect()->back()->with('success', 'Games Created Successfully');
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
    public function update(Request $request, GameAd $game)
    {

        $request->validate([
            'game_name' => 'required',
            'interstitial_ads' => 'required',
            'native_ads' => 'required',
            'video_ads' => 'required',
            'banner_ads' => 'required'
        ]);

        $game->update([
            'game_name' => $request->input('game_name'),
            'game_code' => $request->input('game_code'),
            'interstitial_ads' => $request->input('interstitial_ads'),
            'native_ads' => $request->input('native_ads'),
            'video_ads' => $request->input('video_ads'),
            'banner_ads' => $request->input('banner_ads'),
        ]);

        return redirect()->back()->with('success', 'Games Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GameAd $game)
    {
        if (!$game) {
            return redirect()->route('games.index')->with('error', 'Games not found.');
        }

        $game->delete();
        return redirect()->route('games.index')->with('success', 'Games deleted successfully.');
    }
}
