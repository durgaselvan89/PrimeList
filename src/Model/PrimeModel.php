/********** Model for generating prime number */
class primeModel {
 
 private $number;
 private $prime_arr;
  
 function __construct($num){
  $this->assignDefault();
  $this->number = $num;
  
 }
 
 private function assignDefault() {
  
  $this->number =0;
  $this->prime_arr=array();
 }
  
 public function generatePrime(){
  $i=1; 
  $count =0; 
  while($count < $this->number)
  {
    $is_prime = self::checkPrime($i);
    if($is_prime) {
      $this->prime_arr[] = $i;
      $count++;
    }
    $i++;
  }
   if(count($this->prime_arr) > 0)
     return $this->prime_arr;
   
   return false;
   
 }
  
 public function checkPrime($number)
 {  
    if ($number < 2) return false;
    if ($number == 2) return true;
    if ($number % 2 == 0) return false;
    for ($i=3; ($i*$i) <= $number; $i+=2) {
        if ($number % $i == 0 ) return false;
    }
    return true;
 }
  
}
