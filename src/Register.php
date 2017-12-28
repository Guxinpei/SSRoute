<?php
/**
 * Created by PhpStorm.
 * User: RogerGu
 * Date: 2017/12/28
 * Time: 上午9:58
 */

namespace SSRoute;

interface Register {

    /**注册路由方法
     * @param $urlRoute string 路由路径
     * @param $method   string http method
     * @param $handler  mixed handler
     * @return boolean
     */
    public function registe($urlRoute, $method, $handler);

    /**获取所有注册路由的数据
     * @return array
     */
    public function getAllData();


}

