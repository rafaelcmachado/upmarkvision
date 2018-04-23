
<!-- Bootstrap core JavaScript -->
<script src="<?php echo BASEURL; ?>js/jquery/jquery.min.js"></script>
<script src="<?php echo BASEURL; ?>js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASEURL; ?>js/main.js"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
});
</script>

</body>

</html>
