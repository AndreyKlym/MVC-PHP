<?php
//⊗ppOpUFmVw

	use \Core\Route;
	
	return [

        //task #1
        new Route('/act/', 'page', 'act'),

        //task #2
        //http://name1/product/1/
        // new Route('/product/', 'product', 'show'),
        // new Route('/product/:n/', 'product', 'show'),

        //task #4
        //http://name1/product/all/
        new Route('/product/all/', 'product', 'all'),


	];
	
