<?php


namespace App\Helper;


class CustomHelper {

    public static function storeImage($image, $path) {
        $path = '/uploads' . $path;
        try {
          $name = time() . '.' . $image->getClientOriginalExtension();
          $destinationPath = public_path($path);
          $image->move($destinationPath, $name);
          if (isset($name)) {
            return $path . $name;
          }
          return false;
        } catch (\Exception $e) {
          return false;
        }
      }

      public static function deleteFile($image = null) {
        if ($image !== null) {
          $old_image_path = public_path($image);
          if (file_exists($old_image_path)) {
            @unlink($old_image_path);
          }
        }
      }
    
    
}