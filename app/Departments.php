<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\EmployeesRepository;

class Departments extends Model implements EmployeesRepository
{
    public function _paraCheck($where)
    {
        // TODO: Implement _paraCheck() method.
    }
    public static function findOne($where, $value)
    {
        // TODO: Implement findOne() method.
    }
    public static function findAll($where, $value)
    {
        // TODO: Implement findAll() method.
    }
}
