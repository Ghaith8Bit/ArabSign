<?php

namespace App\Services\Media;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * Class AbstractMediaService
 *
 * @package App\Services\Media
 */
abstract class AbstractMediaService
{
    /**
     * The disk where the media is stored.
     *
     * @var string
     */
    protected $disk = 'public';


    /**
     * Set the disk.
     *
     * @param string $disk
     * @return $this
     */
    public function setDisk(string $disk) : self
    {
        $this->disk = $disk;
        return $this;
    }


    /**
     * Get the disk.
     *
     * @return string
     */
    public function getDisk() : ?string
    {
        return $this->disk;
    }


    /**
     * The uploaded file.
     *
     * @var UploadedFile
     */
    protected UploadedFile $file;


    /**
     * Set the file.
     *
     * @param string $file
     * @return $this
     */
    public function setFile(UploadedFile $file) : self
    {
        $this->file = $file;
        return $this;
    }


    /**
     * The path where the media is stored.
     *
     * @var string
     */
    protected string $path;


    /**
     * Set the path.
     *
     * @param string $path
     * @return $this
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }


    /**
     * The filename of the media.
     *
     * @var string
     */
    protected string $filename;


    /**
     * Set the filename.
     *
     * @param string $filename
     * @return $this
     */
    public function setFilename(string $filename) : self
    {
        $this->filename = $filename;
        return $this;
    }


    /**
     * Save the media and return the storage path.
     *
     * @return string The storage path of the saved media.
     */
    protected function saveMedia() : string
    {
        $this->validateSaveParameters();
        $storagePath = Storage::disk($this->disk)->putFileAs($this->path, $this->file, $this->filename);

        return $storagePath;
    }

    /**
     * Delete the media and return a boolean indicating success.
     *
     * @return bool True if the media is successfully deleted, false otherwise.
     */
    protected function deleteMedia() : bool
    {
        $this->validateDeleteParameters();
        if (Storage::disk($this->disk)->delete($this->path)) {
            $directoryPath = pathinfo($this->path, PATHINFO_DIRNAME);
            $this->deleteEmptyDirectories($directoryPath);
            return true;
        }
        return false;
    }

    /**
     * Check if a directory is empty.
     *
     * @param string $directoryPath The path to the directory.
     *
     * @return bool True if the directory is empty, false otherwise.
     */
    private function isDirectoryEmpty(string $directoryPath) : bool
    {
        $files = Storage::disk($this->disk)->allFiles($directoryPath);
        $directories = Storage::disk($this->disk)->allDirectories($directoryPath);

        return empty($files) && empty($directories);
    }

    /**
     * Delete empty directories recursively.
     *
     * @param string $directoryPath The path to the directory.
     */
    private function deleteEmptyDirectories(string $directoryPath)
    {
        while ($directoryPath !== 'storage' && $this->isDirectoryEmpty($directoryPath)) {
            Storage::disk($this->disk)->deleteDirectory($directoryPath);
            $directoryPath = pathinfo($directoryPath, PATHINFO_DIRNAME);
        }
    }

    /**
     * Validate parameters required for the saveMedia method.
     *
     * @throws \RuntimeException If required parameters are not set.
     */
    private function validateSaveParameters() : void
    {
        if (! isset($this->disk, $this->file, $this->path, $this->filename)) {
            throw new \RuntimeException('لم يتم تعيين المعلمات اللازمة لحفظ الوسائط.');
        }
    }

    /**
     * Validate parameters required for the deleteMedia method.
     *
     * @throws \RuntimeException If required parameters are not set.
     */
    private function validateDeleteParameters() : void
    {
        if (! isset($this->disk, $this->path)) {
            throw new \RuntimeException('لم يتم تعيين المعلمات اللازمة لحذف الوسائط.');
        }
    }
}
