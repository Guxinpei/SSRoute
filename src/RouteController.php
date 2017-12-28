<?php
/**
 * Created by PhpStorm.
 * User: RogerGu
 * Date: 2017/12/28
 * Time: 下午3:00
 */

namespace SSRoute;

use SSRoute\Parser;
use SSRoute\Dispather;
use SSRoute\Register;

Class RouteController {

    var $register;



    public function __construct(Register $register,Dispather $dispather) {

    }

}