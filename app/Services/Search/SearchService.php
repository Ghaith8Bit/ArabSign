<?php

namespace App\Services\Search;

use Exception;
use RuntimeException;

use function PHPUnit\Framework\isNull;

/**
 * Class SearchService
 *
 * @package App\Services\Search
 */
class SearchService
{
    /**
     * @var ?string The search query.
     */
    private ?string $query;

    /**
     * @var string The search model.
     */
    private string $model;

    /**
     * @var string The search column.
     */
    private string $column;

    /**
     * @var ?int The search paginate number.
     */
    private ?int $paginate;

    /**
     * Set the search query.
     *
     * @param ?string $query
     * @return $this
     */
    public function setQuery(?string $query) : self
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Set the search model.
     *
     * @param string $model
     * @return $this
     */
    public function setModel(string $model) : self
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Set the search column.
     *
     * @param string $column
     * @return $this
     */
    public function setColumn(string $column) : self
    {
        $this->column = $column;
        return $this;
    }

    /**
     * Set the search paginate number.
     *
     * @param ?int $paginate
     * @return $this
     */
    public function setPaginate(?int $paginate) : self
    {
        $this->paginate = $paginate;
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
            // Perform the search based on the query, only if a query is provided
            ($this->query)
                ? ($resources = $this->model::where($this->column, 'LIKE', '%' . $this->query . '%')->paginate($this->paginate)->appends(['query' => $this->query]))
                : (($this->paginate ?? null)
                    ? ($resources = $this->model::paginate($this->paginate))
                    : ($resources = $this->model::all()));

            return [$resources, $this->query];
        } catch (Exception $exception) {
            throw new RuntimeException($exception);
        }
    }

}
