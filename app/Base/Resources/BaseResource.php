<?php

namespace App\Base\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BaseResource extends JsonResource
{
    /**
     * @var array
     */
    protected array $withoutFields = [];

    /**
     * Set the keys that are supposed to be filtered out.
     *
     * @param array $fields
     *
     * @return void
     */
    public function hideField(array $fields)
    {
        $this->withoutFields = $fields;
    }

    /**
     * Remove the filtered keys.
     *
     * @param $array
     *
     * @return array
     */
    protected function filterFields($array): array
    {
        return collect($array)->forget($this->withoutFields)->toArray();
    }
}