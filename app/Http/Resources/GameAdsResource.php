<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameAdsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            // 'id' => $this->id,
            'game_name' => $this->game_name,
            'game_code' => $this->game_code,
            'interstitial_ads' => $this->interstitial_ads,
            'banner_ads' => $this->banner_ads,
            'native_ads' => $this->native_ads,
            'video_ads' => $this->video_ads,
          ];
    }
}
