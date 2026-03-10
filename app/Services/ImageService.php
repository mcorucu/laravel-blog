<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageService
{
    protected ImageManager $manager;

    public function __construct()
    {
        $this->manager = new ImageManager(new Driver());
    }

    /**
     * Process and store an uploaded image.
     *
     * @param UploadedFile $file
     * @param string $directory
     * @param string|null $title
     * @param int|null $width
     * @param int|null $height
     * @param int $quality
     * @return string The stored path
     */
    public function processAndStore(
        UploadedFile $file,
        string $directory = 'uploads',
        ?string $title = null,
        ?int $width = null,
        ?int $height = null,
        int $quality = 80
    ): string {
        try {
            $extension = strtolower($file->getClientOriginalExtension());
            $filename = $this->generateFilename($title ?? 'image');
            
            // If it's a standard image format, process it with Intervention
            if (in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                $image = $this->manager->read($file->getRealPath());

                // Resize if dimensions are provided
                if ($width || $height) {
                    $image->scale(width: $width, height: $height);
                }

                $encoded = $image->toWebp($quality);
                $path = "{$directory}/{$filename}.webp";
                
                Storage::disk('public')->put($path, $encoded->toStream());
                
                return $path;
            }

            // Fallback for SVG or other files
            return $file->storeAs($directory, "{$filename}.{$extension}", 'public');
        } catch (\Exception $e) {
            Log::error("Image processing failed: " . $e->getMessage(), [
                'exception' => $e,
                'file' => $file->getClientOriginalName(),
                'directory' => $directory
            ]);
            
            // Fallback: store original file if processing fails
            $extension = $file->getClientOriginalExtension();
            $filename = $this->generateFilename($title ?? 'image_fallback');
            return $file->storeAs($directory, "{$filename}.{$extension}", 'public');
        }
    }

    /**
     * Generate a URL for a stored path.
     */
    public function getUrl(string $path): string
    {
        return Storage::disk('public')->url($path);
    }

    /**
     * Generate a unique but readable filename.
     */
    protected function generateFilename(string $title): string
    {
        $slug = Str::slug($title);
        $timestamp = time();
        $random = Str::random(4);
        
        return "{$slug}-{$timestamp}-{$random}";
    }
}
