<?php
/**
 * Created by PhpStorm.
 * User: lyon
 * Date: 16-12-16
 * Time: 下午6:23
 */
namespace App\Services;
use App\Repositories\GraphRepository;

class Tangle implements GraphRepository
{
    public static function area()
    {
        return '面积';
        // TODO: Implement area() method.
    }
    public static function perimeter()
    {
        return '周长';
        // TODO: Implement perimeter() method.
    }
}