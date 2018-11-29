<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    //
    public function render(){

     return 
     ['error' => 'Product does not belomg to User']	;
    }
   
}
