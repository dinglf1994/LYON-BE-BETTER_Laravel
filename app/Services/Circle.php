<?php
/**
 * Created by PhpStorm.
 * User: lyon
 * Date: 16-12-16
 * Time: 下午8:52
 */
namespace App\Services;
use App\Repositories\GraphRepository;

class Circle implements GraphRepository
{
    public static function area()
    {
        return 'Circle Area';
        // TODO: Implement area() method.
    }
    public static function perimeter()
    {
        return 'Circle Primeter';
        // TODO: Implement perimeter() method.
    }
    public function come()
    {
        echo 'Hello LYON';
    }
}