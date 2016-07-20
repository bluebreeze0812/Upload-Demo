<?php

class CheckAndStore {
    
    function check($path, $type, $size) {
        //check whether it is a valid file and stored in tmp folder for now.
        if (is_uploaded_file($path)) {
            //check whether this file is a png image
            if ($type == 'image/png') {
                //check whether the file is bigger than 2M
                if ($size < 2 * 1024 * 1024) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    function store($path, $destination) {
        //divide path from destination string
        $i = strrpos($destination, '/');
        $str = substr($destination, 0, $i);
        
        //check whether the destination that you want to move to is exists
        if (file_exists($str)) {
            //if it exists, then do the move operation
            if (move_uploaded_file($path, $destination)) {
                return true;
            } else {
                return false;
            }
        } else {
            //if is doesn't exists, then try to originate one.
            if (mkdir($str)) {
                //if successfully originated, then do the move operation
                if (move_uploaded_file($path, $destination)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
    
}

?>