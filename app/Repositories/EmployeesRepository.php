<?php
/**
 * Created by PhpStorm.
 * User: lyon
 * Date: 16-12-16
 * Time: 下午5:53
 */
namespace App\Repositories;
/**
 * Interface EmployeesRepository
 * @package App\Repositories
 *
 *employees表的数据操作服务提供者
 *
 */
interface EmployeesRepository
{
    /**
     * @param $where
     * @return mixed
     * 参数过滤
     */
    public function _paraCheck($where);

    /**
     * @param $where
     * @param $value
     * @return mixed
     * 返回一条数据
     */
    public static function findOne($where, $value);

    /**
     * @param $where
     * @param $value
     * @return mixed
     * 返回所有数据
     */
    public static function findAll($where, $value);
}
