<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Vocabs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // resource cstomization jati data api ma pathaunu xa teti matra pathaune 
        return 
        [
            'id' => $this -> id,
            'title' => $this -> title,
            'brief' => $this -> brief,
            'word_level' => $this -> word_level,
            'mnemonics' => $this -> mnemonics,
            'example' => $this -> example

        ];
    }
    public function with($request){
        return [
            'version' => '1.0.0',
            'author_url' => url('https://wwww.alphateds.com')
        ];
    }
}
