  <?php

  // ---------only conditional statement use---------
    
    $marks= 67;

    if($marks>=100){
      echo 'Invalid Number';
    }
    elseif ($marks>=80){
      echo 'A+<br>';
    }
    elseif ($marks>=70){
      echo 'A<br>';
    } 
    elseif ($marks>=60){
      echo 'A-<br>';
    }
    elseif ($marks>=50){
      echo 'B<br>';
    }elseif ($marks>=40){
      echo 'C<br>';
    }
    elseif ($marks>=33){
      echo 'D<br>';
    }   
    else{
      echo 'fail<br>';
    }
    echo'<br>';

// --------------switch/case------------------
  $colour = 'Yellow';

  switch ($colour) {
    case 'Green';
      echo 'Sucsess<br>';
      break;

    case 'Yellow';
      echo 'Warning<br>';
      break;

    case 'Blue';
      echo 'Info<br>';
      break;

    case 'Red';
      echo 'Denger<br>';
      break;

    default:
      echo 'Failure<br>';
      break;
  }
  echo'<br>';
// ---------------------
  $marks = 98;

  switch ($marks) {
    case 80;
      echo 'A+<br>';
      break;

    case 70;
      echo 'A<br>';
      break;

    case 60;
      echo 'A-<br>';
      break;

    case 50;
      echo 'B<br>';
      break;

      case 40;
      echo 'C<br>';
      break;

      case 33;
      echo 'D<br>';
      break;

    default:
      echo 'Failure<br>';
      break;
  }
  echo'<br>';

  $array = [50,15,10,54,60,81,57,63];
  $keynum = count($array);

  echo 'This is for loop <br>';
  for($i=0; $i<$keynum; $i++){
    echo $array[$i].'<br>';
  }
  echo'<br>';
    echo 'This is foreach loop <br>';
  foreach ($array as $element) {
    echo $element.'<br>';
  }
  echo'<br>';
  echo 'This is while loop <br>';
  $i=0;
  while($i<$keynum){
    echo $array[$i].'<br>';
    $i++;
  }
  echo'<br>';
  echo 'This is do/while loop <br>';
  $i= 0;
  do{
    echo $array[$i].'<br>';
    $i++;
  }
  while($i<$keynum);
  
  ?>