<?php
/**
 * Created by PhpStorm.
 * User: RogerGu
 * Date: 2017/12/28
 * Time: 下午2:22
 */

namespace SSRoute;

interface Parser {

    const ERROR_NOT_FOUND = 0;

    const HTTP_METHOD_ERROR = -1;

    const SUCCESS = 1;

    /**解析路由方法
     * @param $route
     * @return mixed
     */
    public function parse($route);
}