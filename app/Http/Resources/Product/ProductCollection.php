<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[

            'name' => $this->name,
            'total' =>  round($this->price - (($this->discount/100)*$this->price)),
            'rating' => 
            $this->reviews->count() > 0 ?round($this->reviews->sum('star')/$this->reviews->count()) : 'No rating yet',
            'discount' =>$this->discount,
            'href' => [

                'link' => route('products.show', $this->id)


            ]

        ];
    }
}
