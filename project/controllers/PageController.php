<?php
	namespace Project\Controllers;
	use \Core\Controller;

    class PageController extends Controller
    {
        private $pages;

        public function __construct()
        {
            $this->pages = [
                1=>'page 1',
                2=>'page 2',
                3=>'page 3',
            ];
        }

        public function show($params)
        {
            echo $this->pages[$params['id']];
        }
	}
