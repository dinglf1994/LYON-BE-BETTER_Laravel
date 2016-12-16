<?php

namespace App;
use App\Repositories\EmployeesRepository;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model implements EmployeesRepository
{
    protected $table = 'employees';
//    public function __construct(array $attributes = [])
//    {
//        parent::__construct($attributes);
//        $this->timestamps = false;
//    }
    public function _paraCheck($where)
    {
        // TODO: Implement _paraCheck() method.
    }
    public static function findOne($where, $value=null)
    {
        if (null === $value)
        {
            $employee = Employees::where($where)->take(1)->get();
        }
        else
        {
            $employee = Employees::where($where)->take(1)->select($value)->get();
        }
        return $employee;
    }
    public static function findAll($where, $value)
    {
        if (null === $value)
        {
            $employee = Employees::where($where)->get();
        }
        else
        {
            $employee = Employees::where($where)->select($value)->get();
        }
        return $employee;
    }
}
