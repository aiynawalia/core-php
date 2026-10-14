<!-- footer -->
<div class="footer text-center">
			<div class="wthree-copyright">
			  <p>© <span id="year"></span> Visitors. All rights reserved | Design &amp; Development by <a href="http://www.clientscode.in/" target="_blank">ClientsCode</a></p>
            </div>
             <!--year display-->

		  <script>

var d = new Date();

var n = d.getFullYear();

document.getElementById("year").innerHTML = n;

</script>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	function existuser()
	{
		$.ajax({
			url:"user_active.php",
			type:'post',
			data:'type=ajax',
			success:function(result)
			{ if(result=='logout')
			{
				window.location.href='logout.php';
			}
			}
		})
	}
</script>
</body>
</html>
