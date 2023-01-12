<?php
//⊗ppOpUFmRP
namespace Project\Controllers;
use \Core\Controller;

//task #2
class UserController extends Controller
{
    private $users;

    public function __construct()
    {
        $this->users = [
            1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
            2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
            3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
            4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
            5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
        ];
    }

    //task #3
//        public function show($params)
//        {
//            $user = $this->users[$params['id']];
//            echo $user['name'];
//        }

    //task #4
//        public function info($params)
//        {
//            var_dump($params);
//            $user = $this->users[$params['id']];
//            $key=($params['key']);
//            echo $user['name'] ."'s $key is ". $user[$key];
//        }

    //task #5
    public function all()
    {
        $usersArr = $this->users;
        foreach ($usersArr as $user) {
            echo $user['name'] . '<br>';
        }
    }

    //task #6
    public function first($params)
    {
        $usersArr=$this->users;
        $userCount = $params['n'];
        for($i=1; $i<=count($usersArr); $i++){
            if($i <= $userCount){
                echo $usersArr[$i]['name'] . '<br>';
            }
        }
    }

}
