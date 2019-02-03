<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Pedido;

class PedidoResource extends JsonResource
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
            'sabor' => $this->sabor,
            'bebida' => $this->bebida,
            'tamanho' => $this->tamanho,
            'valor' => $this->valor,
            'formaDePagamento' => $this->formaDePagamento,
            'status' => $this->status,
        ];
    }
}
