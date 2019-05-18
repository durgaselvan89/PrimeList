<?php 
$stdin = fopen('php://stdin', 'r');
fscanf(STDIN, "%d\n", $number);
$primeobj = new getPrime();
$primeobj->listPrime($number);
class getPrime {
public function listPrime($number) {
	if($number >= 1)
	{
		$prime_arr = self::GetPrimeNumbers($number);
		if($prime_arr)
		{
			echo "     |     ";
			for($i=0;$i<count($prime_arr);$i++){
			echo $prime_arr[$i]."     ";
			}
			  echo PHP_EOL;
			for($i=0;$i<count($prime_arr);$i++){
			echo $prime_arr[$i]."    |     ";
			for($j=0;$j<count($prime_arr);$j++){
			$multiple = $prime_arr[$i] * $prime_arr[$j];
			echo $multiple."     ";
			}
			  echo PHP_EOL;
			}
		}
		else
		{
			echo "No prime number available in given range";
		}
	}
	else
	{
		echo "No prime number available in given range";
	}
 }
	protected function GetPrimeNumbers($number) {
		$count = 0;  
		$num = 2;  
		$prime = array();
		while ($count < $number )  
		{  
			$div_count=0;  
			for ( $i=1; $i<=$num; $i++)  
			{  
				if (($num%$i)==0)  
				{  
					$div_count++;  
				}  
			}  
			if ($div_count<3)  
			{  
				$prime[] = $num;  
				$count=$count+1;  
			}  
			$num=$num+1;  
		}  
		if(count($prime) >0 )
		{
			return $prime;
		}
		return false;
		
	}
}
?>
