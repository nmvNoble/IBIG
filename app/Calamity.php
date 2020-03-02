<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Calamity extends Model implements Searchable
{
    public function getSearchResult(): SearchResult
     {
        $url = route('calamities.show', $this->id);
     
         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url
         );
     }
}
