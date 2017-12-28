<?php
/**
 * Created by PhpStorm.
 * User: RogerGu
 * Date: 2017/12/28
 * Time: 下午2:22
 */

namespace SSRoute;

interface Parser {

    /**解析路由方法
     * @param $route
     * @return mixed
     */
    public function parse($route);
}