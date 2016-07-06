<?php
/**
 * Created by PhpStorm.
 * User: emilyc
 * Date: 7/15/2015
 * Time: 5:41 PM
 */

namespace App\Component\Birds;

interface BirdInterface
{

    public function fly();

    public function withWhichTool($tool);

}