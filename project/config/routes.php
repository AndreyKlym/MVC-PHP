<?php
//⊗ppOpUFmRP

	use \Core\Route;
	
	return [
        new Route('/test/:var1/:var2/:var3/', 'page', 'act'),

//        task #1
//        http://name1/nums/:n1/:n2/:n3/
        new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'),

//        http://name1/page/1/
//        new Route('/page/:id/', 'page', 'show'),

//        task #3
//        http://name1/user/1/
//        new Route('/user/:id/', 'user', 'show'),

//        task #4
//        http://name1/user/1/name/
//        http://name1/user/1/age/
//        http://name1/user/1/salary/
//        new Route('/user/:id/:key/', 'user', 'info'),

//        task #5
//        http://name1/user/all/
        new Route('/user/all/', 'user', 'all'),

//        task #6
//        http://name1/user/first/3/
        new Route('/user/first/:n/', 'user', 'first'),

	];
	
