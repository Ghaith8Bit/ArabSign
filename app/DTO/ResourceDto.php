<?php

namespace App\DTO;

use App\Enums\LibraryTypeEnum;

class ResourceDto
{
    private ?string $keyword;
    private ?LibraryTypeEnum $type;
    private ?string $path;


    public function __construct(?string $keyword, ?string $type, ?string $path)
    {
        $this->keyword = strtolower($keyword);
        $this->type = LibraryTypeEnum::match($type);
        $this->path = $path;
    }
    public function setKeyword(string $keyword) : self
    {
        $this->keyword = strtolower($keyword);
        return $this;
    }
    public function setType(string $type) : self
    {
        $this->type = LibraryTypeEnum::match($type);
        return $this;
    }
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    public function getKeyword() : string
    {
        return $this->keyword;
    }
    public function getType() : LibraryTypeEnum
    {
        return $this->type;
    }
    public function getPath() : string
    {
        return $this->path;
    }

    public function toArray() : array
    {
        return [
            'keyword' => $this->keyword,
            'type' => $this->type->name,
            'path' => $this->path,
        ];
    }
}
