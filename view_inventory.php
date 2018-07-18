<?php include "connection.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Model</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container top-margin border">
    <div class="text-center">
    <h2>Car Inventory System</h2>
  </div>
   <table id="mytable">
  <tr>
    <th>SR. NO.</th>
    <th>MANUFACTURER</th>
    <th>MODEL</th>
    <th>QUANTITY</th>
    <th>AVAILABILITY</th>
  </tr>
  
    <?php 
     $result = mysqli_query($con,"SELECT * FROM `car_model`");
    
          while ($row = mysqli_fetch_array($result))
        {
          echo "<tr class='result'>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['manufac_cmp']."</td>";
          echo "<td>".$row['model']."</td>";
          echo "<td class='qnty'><input type='text' name ='quantity' class='qunti' value=".$row['qnty']." disabled='disabled'></td>";
          // echo "<a href='#'>"."<td>".$row['sold']."</td>"."</a>";
          echo "<td><input type='submit' class='btn btn-danger sold' value='Sold'><td>";
          // echo "<td>string</td>";
          echo "</tr>";
        }
          
     ?>
</table>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>

$(".sold").click(function() {   

// $(function () { 
//  $('.result').each(function() {
//     var customerId = $(this).find("td[class='qnty']").html(); 
//     alert(customerId);
//   });
// });

//  $('.qnty').on('click',function(){
//         var $qty=$(this).closest('td').find('.qty');
//         var currentVal = parseInt($qty.val());
//         if (!isNaN(currentVal) && currentVal > 0) {
//            var b = $qty.val(currentVal - 1);
//            alert(b);
//         }
//     });
  // console.log($(".qnty").val());
  // alert(<?php //echo $_POST['quantity']; ?>);
  console.log(<?php echo $_POST['quantity']; ?>);

});

//    $(document).ready(function() {

//     $("#sold").click(function() {                

//       $.ajax({    
//         type: "GET",
//         url: "car.php",             
//         dataType: "html",             
//         success: function(response){                    
//             alert(response);
//         }

//     });
// });
// });
</script>
<script>
  // var quantity = $("#qnty").val();
  // if(quantity>1) {
    // $("#result").hide();
  // }
</script>
</body>
</html>