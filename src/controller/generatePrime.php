class generatePrime{
  
  function __construct(){
  
    $model = new primeModel(0);
    $prime_arr = $model->generatePrime();
    $view = new primeView();
    $view_data = $view->ListPrimeMatrix($prime_arr);
    print_r($view_data);
  }
  
}
