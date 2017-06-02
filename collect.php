// convert background png 
public function convertRGB($filePath,$savePath){
      $colorRgb = array('red' => 255, 'green' => 255, 'blue' => 255);  //background color

      $img = @imagecreatefrompng($filePath);
      $width  = imagesx($img);
      $height = imagesy($img);

      //create new image and fill with background color
      $backgroundImg = @imagecreatetruecolor($width, $height);
      $color = imagecolorallocate($backgroundImg, $colorRgb['red'], $colorRgb['green'], $colorRgb['blue']);
      imagefill($backgroundImg, 0, 0, $color);

      //copy original image to background
      imagecopy($backgroundImg, $img, 0, 0, 0, 0, $width, $height);

      //save as png
      imagepng($backgroundImg, $savePath, 0);
  }
  // Convert png 2 jpg and backgroud white
  public function png2jpg($originalFile, $outputFile, $quality) {
        self::convertRGB($originalFile,$originalFile); // covert background of png file
        $image = imagecreatefrompng($originalFile);
        imagejpeg($image, $outputFile, $quality);
        imagedestroy($image);
    }
