<script type="text/javascript">
// jQuery Document 
$(document).ready(function(){
	//If user wants to end session 
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'index.php?logout=true';}		
	});
});
</script>
