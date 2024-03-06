<?php

namespace App\Services\Search;

use RuntimeException;

/**
 * Class AbstractSearchService
 *
 * @package App\Services\Search
 */
abstract class AbstractSearchService
{
    /**
     * @var ?string The search query.
     */
    protected ?string $query;

    /**
     * @var string The search model.
     */
    protected string $model;

    /**
     * @var string The search column.
     */
    protected string $column;

    /**
     * @var ?int The search paginate number.
     */
    protected ?int $paginate;

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
     * @throws RuntimeException If the parafmeters are not set properly.
     */
    abstract public function search() : array;

}
