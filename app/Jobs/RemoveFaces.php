<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class RemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

   private $announcement_image_id;
    
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id ;
    }

    
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);
        if (!$i){
            return;
        }

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('2023-05-11-hkpt-presto-user-story-7.json'));
        
        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->faceDetection($image);
        $faces = $response->getFaceAnnotations();

        foreach ($faces as $face) {
            $vertices = $face->getBoundingPoly()->getVertices();

            $bounds = [];
            foreach ($vertices as $vertex) {
                $bounds[] = [$vertex->getX(), $vertex->getY()];
            }

            $w = $bounds[2][0] - $bounds[0][0];
            $h = $bounds[2][1] - $bounds[0][1];

            $image = SpatieImage::load($srcPath);
            
          /*  $image->watermark(base_path('resources/img/watermark.png'))
            ->watermarkPosition(Manipulations::POSITION_CENTER);*/

            $image->save($srcPath);

            $image->watermark(base_path('resources/img/smile.png'))
                ->watermarkPosition('top-left')
                ->watermarkPadding($bounds[0][0], $bounds[0][1])
                ->watermarkWidth($w, Manipulations::UNIT_PIXELS)
                ->watermarkHeight($h, Manipulations::UNIT_PIXELS)
                ->watermarkFit( Manipulations::FIT_STRETCH);

                $image->save($srcPath);
        }
        
        $imageAnnotator->close();
    } 
}
