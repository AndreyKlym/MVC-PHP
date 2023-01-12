<?php
//⊗ppOpUFmRP
//task #1
	namespace Project\Controllers;
	use \Core\Controller;

    class NumController extends Controller
    {
        public function sum($params)
        {
//            var_dump($params);
            $sum = 0;
            foreach ($params as $param){
                $sum += $param;
            }
            echo $sum;
        }
	}
