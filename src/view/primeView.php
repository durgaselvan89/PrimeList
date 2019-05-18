/***********generate prime number list view ****************/

class primeView {
  
  public function ListPrimeMatrix($prime){
  
    if(count($prime) <=0 ){
    
      return false;
    }
  
  $data = "<table border=1px>";

    
    $data .= '<tr><td></td>' ;

    foreach($prime as $head) {
      $data .=  '<th>' . $head . '</th>' ;
    }
    $data .=  '</tr>';

    foreach ($prime as $vert) {
      $data .=  "<tr>";

      $data .=  '<td>' . $vert . '</td>' ;

      foreach ($prime as $hor) {
        $data .=  "<td>". ($vert * $hor) ."</td>";
      }
      $data .=  "</tr>";
    }
    $data .=  "</table>";
    
    return $data;
  }
}
