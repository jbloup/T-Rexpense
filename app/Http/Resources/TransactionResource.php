<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class TransactionResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    #[ArrayShape([
        'id' => "mixed",
        'name' => "mixed",
        'total' => "mixed",
        'category' => "mixed",
        'user' => "mixed",
        'paid_at' => "mixed",
        'created_at' => "mixed",
        'updated_at' => "mixed"
    ])]
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'total' => $this->amount,
            'category' => $this->category,
            'user' => $this->user,
            'paid_at' => $this->paid_at->format('Y-m-d'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
