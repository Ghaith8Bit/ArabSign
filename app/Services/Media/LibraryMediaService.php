<?php

namespace App\Services\Media;

use App\Enums\LibraryTypeEnum;

/**
 * Class LibraryMediaService
 *
 * @package App\Services\Media
 */
class LibraryMediaService extends AbstractMediaService
{
    /**
     * @var LibraryTypeEnum The library type for the media.
     */
    private LibraryTypeEnum $type;


    /**
     * Set the type.
     *
     * @param LibraryTypeEnum $type
     * @return $this
     */
    public function setType(LibraryTypeEnum $type) : self
    {
        $this->type = $type;
        return $this;
    }


    /**
     * @var string The keyword associated with the media.
     */
    private string $keyword;


    /**
     * boot create method.
     *
     * @return void
     */
    public function bootCreate() : void
    {
        list($this->path, $this->filename) = $this->buildPath();
    }


    /**
     * Set the keyword.
     *
     * @param string $keyword
     * @return $this
     */
    public function setKeyword(string $keyword) : self
    {
        $this->keyword = ucfirst(strtolower($keyword));
        return $this;
    }


    /**
     * Save the media and return the storage path.
     *
     * @return string The storage path of the saved media.
     */
    public function saveMedia() : string
    {
        return parent::saveMedia();
    }


    /**
     * Delete the media and return a boolean indicating success.
     *
     * @return bool True if the media is successfully deleted, false otherwise.
     */
    public function deleteMedia() : bool
    {
        return parent::deleteMedia();
    }


    /**
     * Build the path and filename for the media.
     *
     * @return array [path, filename]
     */
    private function buildPath() : array
    {
        $path = $this->keyword . '/' . $this->type->name;
        $extension = $this->file->getClientOriginalExtension();
        $filename = uniqid() . '.' . $extension;

        $this->validateExtension($extension);

        return [$path, $filename];
    }


    /**
     * Validate the file extension based on the library type.
     *
     * @param string $extension
     * @throws \InvalidArgumentException
     */
    protected function validateExtension(string $extension) : void
    {
        if (! $this->type->isValidExtension($extension)) {
            throw new \InvalidArgumentException('امتداد ملف غير صالح لنوع المورد المحدد.');
        }
    }
}
