<?php
/**
 * Created by PhpStorm.
 * User: RogerGu
 * Date: 2017/12/28
 * Time: 下午1:46
 */

namespace SSRoute;

interface Dispather {

    /**注册路由方法
     * @param $urlRoute string 路由路径
     * @param $method   string http method
     * @return mixed
     */
    public function dispatch($urlRoute, $method);


}