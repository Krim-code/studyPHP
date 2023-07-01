<?php 
    $v = 14;
    for($i= 0; $i<=15; $i++){
        if($i % 2 === 0){
            echo  '<p style="background:red;">'.$v+$i.'</p>';
        }
        elseif($i %3 === 0){
            echo  '<p style="background:blue;">'.$v+$i.'</p>';
        }
        else{
            echo  '<p>'.$v+$i.'</p>';
        }
    }
    
    for ($i= 0 ,$j=1; $i<3,$j< 10 ;  $i++,$j++ ){
        echo '<p>'.$i."---".$j.'</p>';
    }
    $k = 2;
    while($k<145){
        echo $k.'---';
        $k++;
    }
    
    function table_draw($i_stop,$j_stop){
        echo '<table>';
        for($i=1; $i<$i_stop;$i++){
            echo '<tr>';
            for($j=1;$j<$j_stop;$j++){
                echo "<td>" . $i * $j . "</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    
    table_draw(10,10);
    echo '<br/>';
    table_draw(15,15);

    $array_example = [1,2,3,4,5,'5jfijfeijfi'];
    $words = ["red" => "красный", "blue" => "синий", "green" => "зеленый"];

    function output_array($arr,$color){
        foreach ($arr as $key => $value) {
            echo '<p style="color:'.$color.'";>'.$key.'---'.$value.'</p>';
        }
    }
    output_array($array_example,'green');
    output_array($words,'red');

    $phones = array(
        "apple"=> array("iPhone 12", "iPhone X", "iPhone 12 Pro") , 
        "samsumg"=>array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
        "nokia" => array("Nokia 8.3", "Nokia 3.4"));

    $ph = function($arr){
        foreach($arr as $cat => $names){
            echo '<b>'.$cat.'</b>';
            echo '<ul>';
            foreach ($names as $name) {
                echo '<li>'.$name.'</li>';
            }
            echo '</ul>';
        }
    };
    $ph($phones);

    $array_example = array(1,2,3,4,5,6,8,15878787);
    $a = 2;
    $sum_and_add_a = function($arr) use($a){
        $count = 0;
        foreach ($arr as $value) {
            $count+=$value;
        }
        return $count + $a;
    };

   echo $sum_and_add_a($array_example);

   $temp = 1345;
   $temp_two = & $temp;
   $temp_two = 234232;
   echo '<br>'.$temp;
   echo $temp_two;
   
   define('constanta',243);
   if(!defined(constanta)){
    echo "NOT DEFINED";
   }
   else{
    echo "DEFINED";
   }
?>