<script type="text/javascript">
	localStorage.removeItem("token");
	localStorage.removeItem("idUser");
	localStorage.removeItem("idUserRole");
	localStorage.clear();
	
	window.location.pathname = '';
	myLocation = "#!/home";
	window.location = myLocation;

</script>