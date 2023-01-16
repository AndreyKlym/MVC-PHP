<?php
//⊗ppOpUFmLy
	namespace Project\Controllers;
	use \Core\Controller;

    class PageController extends Controller
    {
        private $pages;

        // task #3
        public function __construct()
        {
            // $this->title = "Action Show controler Page";

            $this->pages = [
                1 => ['title' => 'страница 1', 'text' => 'текст страницы 1'],
                2 => ['title' => 'страница 2', 'text' => 'текст страницы 2'],
                3 => ['title' => 'страница 3', 'text' => 'текст страницы 3'],
                ];
        }

        public function show($param){
            $pageNum = $param['n'];
            $pageInfo = $this->pages[$pageNum];

            $this->title = $pageInfo['title'];

            return $this->render('page/show', [
                'var1'=>$pageInfo['text'],
            ]);
        }



	}
