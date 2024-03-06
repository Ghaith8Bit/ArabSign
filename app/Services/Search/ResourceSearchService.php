<?php

namespace App\Services\Search;

use Exception;
use RuntimeException;

/**
 * Class ResourceSearchService
 *
 * @package App\Services\Search
 */
class ResourceSearchService extends AbstractSearchService
{
    /**
     * Perform the search based on the query, model, column, and paginate number.
     *
     * @return array An array of the resources and the query.
     * @throws RuntimeException If the parameters are not set properly.
     */
    public function search() : array
    {
        try {
            $query = $this->query;

            // Use the model class directly here
            $resources = ($query)
                ? $this->model::where($this->column, 'LIKE', '%' . $query . '%')->paginate($this->paginate)->appends(['query' => $query])
                : (($this->paginate ?? null)
                    ? $this->model::paginate($this->paginate)
                    : $this->model::all());

            return [$resources, $query];
        } catch (Exception $exception) {
            throw new RuntimeException($exception);
        }
    }
}
