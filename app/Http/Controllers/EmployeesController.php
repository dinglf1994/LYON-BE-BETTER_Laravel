<?php
/**
 *实现Laravel服务容器
 * GraphRepository 注意注入的是接口 通过绑定实际注册了接口的一个实现
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;
use App\Repositories\GraphRepository;

class EmployeesController extends Controller
{
    protected $employees;
    protected $tangle;
    protected $circle;
    public function __construct(Employees $employees, GraphRepository $tangle, GraphRepository $circle)
    {
        $this->tangle = $tangle;
        $this->circle = $circle;
        $this->employees = $employees;
    }
    public function employeesList()
    {
        $area = $this->circle->area();
        $employees = $this->_employeesList();
        return view('employees.emplist', ['employees' => $employees, 'area' => $area]);
    }
    public function _employeesList()
    {
        $where = array(['emp_no', '!=', '10001'], ['first_name', '=', 'Bezalel']);
        $value = array('emp_no', 'first_name');
        return $this->employees->findOne($where, $value);
    }
}
