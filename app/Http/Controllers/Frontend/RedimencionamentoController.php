<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class RedimencionamentoController extends Controller {
    
    private function imagem($path){
        $path = public_path(
                    str_replace(['/', '\\'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], "$path")
                );
        return file_exists($path) ? Image::make($path) : abort(404);
    }
    
    private function extensao($path){
        return pathinfo($path, PATHINFO_EXTENSION);
    }
    
    public function fit($size, $path){   
        $img = $this->imagem($path);
        
        // prevent possible upsizing
        $img->resize(
                    $img->width() >= $img->height() ? $size : null, 
                    $img->width() <= $img->height() ? $size : null, 
                    function ($constraint) {$constraint->aspectRatio();$constraint->upsize();}
                );
        return Image::canvas($size, $size)
                            ->insert($img, 'center')
                            ->response($this->extensao($path));
    }
    
    public function width($size, $path){        
        return $this
                    ->imagem($path)
                    ->resize(
                        $size, 
                        null, 
                        function ($constraint) {$constraint->aspectRatio();$constraint->upsize();}
                    )
                    ->response($this->extensao($path))
        ;
    }
    
    public function height($size, $path){        
        return $this
                    ->imagem($path)
                    ->resize( 
                        null,
                        $size, 
                        function ($constraint) {$constraint->aspectRatio();$constraint->upsize();}
                    )
                    ->response($this->extensao($path))
        ;
    }
}
