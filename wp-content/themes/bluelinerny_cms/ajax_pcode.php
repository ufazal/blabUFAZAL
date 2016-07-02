<?php  ?><?php
/*
Template Name: Ajax-Pcode 
*/
$amount=199;
		date_default_timezone_set('UTC');
		$date_last= mktime(0, 0, 0, 5, 30, 2011);
		$date_current=mktime(0, 0, 0, date("m")  , date("d"), date("Y"));

		$discount_code=trim($_REQUEST['pcode']);

			if($date_current<=$date_last){		
				$amount=99;
				if($discount_code=="7pillars-academy"){	
					$amount=$amount-25;
				}		
			}else{
				if($discount_code=="blueliner-ny-11"){	
						$amount=99;
				}
				if($discount_code=="7p-roi11"){	
						$amount=149;
				}
				if($discount_code=="7pillars-academy"){	
						$amount=174;
				}	
			}
			if($discount_code=="7pillarsdigital"){	
				$amount=0;	
			}
			if($discount_code=="roiworkshop-ar"){	
				$amount=49;	
			}
	
	//echo $amount.".........".$date_last;




echo $amount;
?>
