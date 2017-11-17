<?php 
error_reporting(0);
	include_once 'header.php'; 
	include_once '../controller/seat_allotment_HL_controller.php';
	echo "<input type='button' id='btn' value='Print' onclick='printDiv();'>";
	echo "<div id='print_this'>";
	HL_seat_arrangement();
	echo "</div>";

?>
<script type="text/javascript">
	
	function printDiv() 
	{

	  var divToPrint=document.getElementById('print_this');

	  var newWin=window.open('','Print-Window');

	  newWin.document.open();

	  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

	  newWin.document.close();

	  setTimeout(function(){newWin.close();},10);

	}

	
</script>

<?php include_once 'footer.php'; ?>
