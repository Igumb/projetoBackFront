<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Cozinheiro;

class CozinheiroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'ingrediente' => $this->ingrediente,
            'tempoDePreparo' => $this->tempoDePreparo,
        ];
    }
}
