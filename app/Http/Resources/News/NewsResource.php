<?php

namespace App\Http\Resources\News;

use Illuminate\Http\Resources\Json\JsonResource;
use DB;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//         $ids = DB::table('news')->where('id', 1)->first();

// echo $ids->id;
        // $ids = DB::table('news')->pluck('news', 'id');

        // foreach ($ids as $id => $title) {
        //     echo $title;
        // }
        return parent::toArray($request);
        // return[
        //     'id'=>$this->id,
        //     'ndate'=>$this->ndate
        // ];
    }
}
