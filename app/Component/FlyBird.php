<?php
/**
 * Created by PhpStorm.
 * User: emilyc
 * Date: 7/15/2015
 * Time: 4:47 PM
 */

namespace App\Component\Birds;

class FlyBird implements BirdInterface {
    public $how_to_fly;

    public function fly() {
        if(!empty($this->how_to_fly)){
            return $this->how_to_fly;
        }else{
            return 'just fly without any tool';
        }

    }

    public function withWhichTool($tool) {
        $this->how_to_fly = 'with ' . $tool . ' to fly';
    }
}