<?php

  if(isset($_GET['mode'])){

  	$htmlMode = ($_GET['mode'] !== 'text');

		require dirname(__DIR__) . '/ref.php';
		require __DIR__ . '/example.class.php';

		/**
		 * Test class
		 */ 
		final class Today extends \Tests\ClassTest{

		}

		/**
		 * Test function
		 *
		 * @param   $test  Test argument
		 * @return  void   Nothing
		 */ 
		function today($test){

		}

		$array = array(
		  'hèllo world'                       => '(͡°͜ʖ͡°)',		  
		  'empty string'                      => '',
		  'multi'                             => array(1, 2, 3, array(4, 5, 6), 'FUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU'),  
		  'matching class'                    => 'DateTime',
		  'matching file'                     => 'file.txt',
		  'matching date/file/function/class' => 'today',
		);

		$array['reference to self'] = &$array;

		$obj = new \Tests\ClassTest($array);		

		if($htmlMode){
	  
			r(true, false, 'I can haz a 강남스타일 string', '2012-12-26 04:20:00', null, 17, 4.20);			
			r(array(), $array, serialize(array('A', 'serialized', 'string')));
			r(fopen('php://stdin', 'r'), function($x, $d){}); 
			r(new \DateTimeZone('Pacific/Honolulu'));
			r($obj, new ref('A ref instance'));	

    }else{

			rt(true, false, 'I can haz a 강남스타일 string', '2012-12-26 04:20:00', null, 17, 4.20);
			rt(array(), $array, serialize(array('A', 'serialized', 'string')));			
			rt(fopen('php://stdin', 'r'), function($x, $d){}); 
			rt(new \DateTimeZone('Pacific/Honolulu'));
			rt($obj, new ref('A ref instance'));

    }		

    exit(0);
  }   

?>

<!DOCTYPE HTML>
<html>
  <head>
  	<title>REF by digitalnature</title>
	  <style>

	    body{
	      font: 40px "Helvetica Neue", Helvetica, Arial, sans-serif;    	
	    	text-align: center;
	    	color: #ccc;
	    }

	    a{
	    	color: #2183cf;
	    	text-decoration: none;
	    }

	    a:hover{
	    	background: #2183cf;
	    	color: #fff;
	    }

	    h1{
	    	font-size: 400%;
	    }

	    h3{
	    	border-top: 1px solid #ccc;
	    	padding-top: 20px;
	    }

	  </style>
  </head>
  <body>
  	<h1><a href="https://github.com/digitalnature/php-ref">REF</a></h1>
    <h2><a href="index.php?mode=html">HTML output</a> ~ <a href="index.php?mode=text">TEXT output</a></h2>
    <h3> created by <a href="http://digitalnature.eu/">digitalnature</digitalnature></h3>
  </body>
</html>  