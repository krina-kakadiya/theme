<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAd extends Model
{
    use HasFactory;
    protected $table = "game_ads";

    protected $fillable = [
        'id',
        'game_name',
        'game_code',
        'interstitial_ads',
        'banner_ads',
        'native_ads',
        'video_ads'
    ];

    public function get_game_ads($request){

        $gameAdsCount = GameAd::where('game_ads.game_name', $request['gameName'])
                           ->where('game_ads.game_code', $request['gameCode'])
                            ->count();
        if($gameAdsCount == 0){
            $objgameAds = new GameAd();
            $objgameAds->game_name = $request['gameName'];
            $objgameAds->game_code = $request['gameCode'];
            $objgameAds->interstitial_ads = "yes";
            $objgameAds->banner_ads = "yes";
            $objgameAds->native_ads = "yes";
            $objgameAds->video_ads = "yes";
            $objgameAds->created_at = date('Y-m-d H:i:s');
            $objgameAds->updated_at = date('Y-m-d H:i:s');
            if($objgameAds->save()){
                return 'true';
            }
            return 'false';
        }
        return 'gameAdsExists';
    }
}
