<?php
//⊗ppOpUFmVw
	namespace Project\Controllers;
	use \Core\Controller;

    class PageController extends Controller
    {
//        task #1
        public function act()
        {
            return $this->render('page/act',[
//            task #2
//                'var1'=>'eee',
//                'var2'=>'bbb',
//                'var3'=>'kkk',

//            task #3
                'header'=>'users list',
                'users'=>['user1', 'user2', 'user3'],
            ]);
        }

	}
