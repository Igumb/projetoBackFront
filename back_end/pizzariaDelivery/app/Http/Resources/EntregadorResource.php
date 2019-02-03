<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Entregador;

class EntregadorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'qtdDeEntrega' => $this->qtdDeEntrega,
            'horarioDeSaida' => $this->horarioDeSaida,
            'horarioDeChegada' => $this->horarioDeChegada,
        ];
    }
}
