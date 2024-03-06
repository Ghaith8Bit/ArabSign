<?php

namespace App\Services\Media;

/**
 * Class LibraryMediaService
 *
 * @package App\Services\Media
 */
class ContentMediaService extends AbstractMediaService
{

    /**
     * boot create method.
     *
     * @return void
     */
    public function bootCreate() : void
    {
        $this->filename = $this->generateName();
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
     * Generate filename for the media.
     *
     * @return string filename
     */
    private function generateName() : string
    {
        $extension = $this->file->getClientOriginalExtension();
        $filename = uniqid() . '.' . $extension;
        return $filename;
    }
}
