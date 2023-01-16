<?php
//⊗ppOpUFmLy
//task #2
	namespace Project\Controllers;
	use \Core\Controller;

    class TestController extends Controller
    {
        public function act()
        {
            $this->title = "Action Act controler Test";

            return $this->render('test/act', [
                'var1'=>'eee',
                'var2'=>'ccc',
                'var3'=>'qqq',
            ]);
        }


	}
