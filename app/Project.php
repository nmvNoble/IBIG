<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Project extends Model implements Searchable
{
    public function getSearchResult(): SearchResult
     {
        $url = route('projects.show', $this->id);
     
         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url
         );
     }
}
