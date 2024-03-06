<?php

namespace App\Services\Search;

use Exception;
use RuntimeException;

/**
 * Class ContentSearchService
 *
 * @package App\Services\Search
 */
class ContentSearchService extends AbstractSearchService
{
    /**
     * @var string The search filter model.
     */
    private string $filterModel;

    /**
     * @var string The search filterKey.
     */
    private string $filterKey;

    /**
     * @var ?array The search filterIds.
     */
    private ?array $filterIds;

    /**
     * @var string The search relation model.
     */
    private string $relationModel;

    /**
     * @var array The search with attribute.
     */
    private array $with = [];

    /**
     * Set the search relation model.
     *
     * @param string $filterModel
     * @return $this
     */
    public function setFilterModel(string $filterModel) : self
    {
        $this->filterModel = $filterModel;
        return $this;
    }

    /**
     * Set the search filterKey.
     *
     * @param string $filterKey
     * @return $this
     */
    public function setFilterKey(string $filterKey) : self
    {
        $this->filterKey = $filterKey;
        return $this;
    }

    /**
     * Set the search filterIds.
     *
     * @param ?array $filterIds
     * @return $this
     */
    public function setFilterIds(?array $filterIds) : self
    {
        $this->filterIds = $filterIds;
        return $this;
    }

    /**
     * Set the search relation model.
     *
     * @param string $relationModel
     * @return $this
     */
    public function setRelationModel(string $relationModel) : self
    {
        $this->relationModel = $relationModel;
        return $this;
    }

    /**
     * Set the search with attribute.
     *
     * @param array $with
     * @return $this
     */
    public function setWith(array $with) : self
    {
        $this->with = $with;
        return $this;
    }

    /**
     * Perform the search based on the query, model, column, and paginate number.
     *
     * @return array An array of the resources and the query.
     * @throws RuntimeException If the parameters are not set properly.
     */
    public function search() : array
    {
        try {
            //TODO: MAKE THE QUERY AS ARRAY AND EXECUTE THE SEARCH ON ARRAY OF KEYWORDS NOT SINGLE WORD
            $query = $this->query;

            $filterIds = ($this->filterIds)
                ? $this->filterModel::whereIn('id', $this->filterIds)->pluck('id')
                : $this->filterModel::all()->pluck('id');

            // Search in content_keywords table for matching keywords and get distinct content_ids
            $contentIds = ($query)
                ? $this->relationModel::where($this->column, 'LIKE', "%{$query}%")->distinct('content_id')->pluck('content_id')
                : $this->relationModel::distinct('content_id')->pluck('content_id');

            // Use the model class directly here to retrieve content records based on content_ids
            $resources = ($query)
                ? $this->model::with($this->with)
                    ->whereIn('id', $contentIds)
                    ->whereIn($this->filterKey, $filterIds)
                    ->paginate($this->paginate)
                    ->appends(['query' => $query])
                : ($this->paginate
                    ? $this->model::with($this->with)
                        ->whereIn('id', $contentIds)
                        ->whereIn($this->filterKey, $filterIds)
                        ->paginate($this->paginate)
                    : $this->model::with($this->with)
                        ->whereIn('id', $contentIds)
                        ->whereIn($this->filterKey, $filterIds)
                        ->get()
                );

            return [$resources, $query];
        } catch (Exception $exception) {
            throw new RuntimeException($exception);
        }
    }
}
