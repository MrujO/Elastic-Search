<?php

namespace App\Places;

use Illuminate\Database\Eloquent\Collection;

interface PlacesRepository
{
    public function search(string $query = ''): Collection;
}
