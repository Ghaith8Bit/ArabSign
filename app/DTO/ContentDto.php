<?php

namespace App\DTO;

class ContentDto
{
    private ?string $title;
    private ?string $body;
    private ?int $resource_id;
    private ?int $category_id;
    private ?string $thumbnail;
    private ?int $views;
    private ?string $published_at;

    public function __construct(
        ?string $title,
        ?string $body,
        ?int $resource_id,
        ?int $category_id,
        ?string $thumbnail,
        ?int $views,
        ?string $published_at,
    ) {
        $this->title = $title;
        $this->body = $body;
        $this->resource_id = $resource_id;
        $this->category_id = $category_id;
        $this->thumbnail = $thumbnail;
        $this->views = $views;
        $this->published_at = $published_at;
    }

    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle() : ?string
    {
        return $this->title;
    }

    public function setBody(?string $body) : self
    {
        $this->body = $body;
        return $this;
    }

    public function getBody() : ?string
    {
        return $this->body;
    }

    public function setResourceId(?int $resource_id) : self
    {
        $this->resource_id = $resource_id;
        return $this;
    }

    public function getResourceId() : ?int
    {
        return $this->resource_id;
    }

    public function setCategoryId(?int $category_id) : self
    {
        $this->category_id = $category_id;
        return $this;
    }

    public function getCategoryId() : ?int
    {
        return $this->category_id;
    }

    public function setThumbnail(?string $thumbnail) : self
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    public function getThumbnail() : ?string
    {
        return $this->thumbnail;
    }

    public function setViews(?int $views) : self
    {
        $this->views = $views;
        return $this;
    }

    public function getViews() : ?int
    {
        return $this->views;
    }

    public function setPublishedAt(?string $published_at) : self
    {
        $this->published_at = $published_at;
        return $this;
    }

    public function getPublishedAt() : ?string
    {
        return $this->published_at;
    }

    public function toArray() : array
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            'resource_id' => $this->resource_id,
            'category_id' => $this->category_id,
            'thumbnail' => $this->thumbnail,
            'views' => $this->views,
            'published_at' => $this->published_at,
        ];
    }
}
