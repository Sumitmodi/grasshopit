<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/22/14
 * Time: 10:56 AM
 */

class siteupload extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function createDirectory($folder){
        $rootDir = 'assets/site';
        if(!is_dir($rootDir)){
            mkdir($rootDir);
        }
        $rootBusinessDir = $rootDir."/".$folder;
        $directories=array(
            'logo',
            'thumbnails',
            'images',
            'videos',
            'sliders'
        );
        if(!is_dir($rootBusinessDir)){
            mkdir($rootBusinessDir);
        }
        foreach($directories as $dir){
            $imageDir = $rootBusinessDir.'/'.$dir;
            if(!is_dir($imageDir)){
                mkdir($imageDir);
            }
        }
    }
    public function uploadImages($files){
        if(is_null($files)) return false;
        if(is_array($files)){
            if(empty($files)){
                return false;
            } else {

            }

        }
    }
    public function uploadLogo($logo){
        if(is_null($logo)) return false;
    }
    public function removeLogo(){

    }
    public function removeImage($file){
        if(is_null($file))
            return false;
        if(is_array($file)){
            if(empty($file))
                return false;
        }
    }
    public function checkFiles($files){
        if(isset($files)){
            if(empty($files)){
                return false;
            }
            return true;
        }
        return false;
    }
    public function checkImageExtension($file){
        return true;
    }
}