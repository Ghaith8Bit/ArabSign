<?php

namespace App\DTO;

class ContentKeywordDto
{
    private ?int $content_id;
    private ?array $keywords;

    public function __construct(
        ?int $content_id,
        ?array $keywords
    ) {
        $this->content_id = $content_id;
        $this->keywords = $keywords;
    }


    public function setContentId(?int $content_id) : self
    {
        $this->content_id = $content_id;
        return $this;
    }

    public function getContentId() : ?int
    {
        return $this->content_id;
    }
    public function setKeywords(?array $keywords) : self
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function getKeywords() : ?array
    {
        return $this->keywords;
    }

    public function toArray(string $keyword) : array
    {
        return [
            'content_id' => $this->content_id,
            'keyword' => $keyword
        ];
    }
}
