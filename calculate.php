  <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
<div class="box" style="width: 500px; height: 120px; border:1px solid #BCBEC0; margin: 250px auto 0; text-align: center; font-size: 30px; padding-top: 80px; background-color:#fff;">
<?php
  $bath=$_POST['bath'];   
  $type=$_POST['type'];

  $USD = 0.03;
  $VND = 600;
  $MYR = 0.11;

  if ($bath == "") {
    echo "กรุณากรอกจำนวนเงิน (บาท)";
  }else{
    
  switch ($type) {
    case 1:
    $sum=$bath*$USD;
    echo $bath." Bath = ".($sum)." USD";
    break;

    case 2: 
    $sum=$bath*$VND;
    echo $bath." Bath = ".($sum)." VND";
    break;

    case 3: 
    $sum=$bath*$MYR;
    echo $bath." Bath = ".($sum)." MYR";
    break;

    default:
    echo "Try again"; 
}
}
?>
<br>
<br>
<a href="index4.html"><input type="submit" value="Back" style="width:50px; height:20px; clear: both;font-size: 15px; border-style:none; background-color:#fff; cursor:pointer; color:#adadad; ">
</a>

</div>
