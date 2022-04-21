<?php
  echo
  "<head>
  <link rel='stylesheet' href='style3.css'>
  </head>";
  $user = $_POST["Username"];
  $pw = $_POST["Password"];
  $countItemOne = $_POST["Item1"];
  $countItemTwo = $_POST["Item2"];
  $countItemThree = $_POST["Item3"];
  $subOne = $countItemOne * 120;
  $subTwo = $countItemTwo * 50;
  $subThree = $countItemThree * 200;
  $postal = explode("-", $_POST["Ship"]);
  if($postal[0] == "$50.00 ") $postalCost = 50;
  else if($postal[0] == "$5.00 ") $postalCost = 5;
  else $postalCost = 0;
  $total = $subOne + $subTwo + $subThree + $postalCost;
  echo "<div id='Container'>
  <h2>Welcome, $user!</h2><br>
  <h4>Your password is: $pw</h4>
  <table id='phpTable' border='1'>
         <tr>
            <td>           </td>
            <td>Quantity   </td>
            <td>Cost Per Item</td>
            <td>Sub Total</td>
         </tr>

         <tr>
            <td>Item 1</td>
            <td>$countItemOne</td>
            <td>$120</td>
            <td>$$subOne</td>
         </tr>
         <tr>
            <td>Item 2</td>
            <td>$countItemTwo</td>
            <td>$50</td>
            <td>$$subTwo</td>
         </tr>
         <tr>
            <td>Item 3</td>
            <td>$countItemThree</td>
            <td>$200</td>
            <td>$$subThree</td>
         </tr>
         <tr>
            <td>Shipping</td>
            <td colspan='2'>$postal[1]</td>
            <td>$postal[0]</td>
         </tr>
         <tr>
            <td colspan='3'>Total Cost</td>
            <td>$$total</td>
      </tr>
      </table>
      </div>
   ";
?>
