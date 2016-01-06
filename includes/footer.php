			
			<!-- Social bar -->
			<div class="rst-socials-bar">
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-facebook"></i></a>	
				</div>
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-twitter"></i></a>	
				</div>
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-dribbble"></i></a>	
				</div>
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-instagram"></i></a>	
				</div>
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-behance"></i></a>	
				</div>
				<div class="clear"></div>
			</div>
			<!-- Social bar -->
			
		</section>
		<!-- Main page -->
		
		<!-- Footer -->
		<footer id="rst-footer">
		
			<!-- Footer content -->
			<div class="rst-footer-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-sm-4 widget widget-footer-box">
							<h3>categories</h3>
							<ul>
								<li><a href="#">The Basics</a></li>
								<li><a href="#">Billing</a></li>
								<li><a href="#">Customization</a></li>
								<li><a href="#">Account</a></li>
								<li><a href="#">Account</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-4 widget widget-footer-box">
							<h3>knowledge popular</h3>
							<ul>
								<li><a href="#">Where do I Begin?</a></li>
								<li><a href="#">How do I create a free account?</a></li>
								<li><a href="#">How do I raise a support?</a></li>
								<li><a href="#">What is Wordpress?</a></li>
								<li><a href="#">How do I delete a free account?</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-4 widget widget-footer-box">
							<h3>Recent arcticles</h3>
							<ul>
								<li><a href="#">Where do I Begin?</a></li>
								<li><a href="#">How do I create a free account?</a></li>
								<li><a href="#">How do I raise a support?</a></li>
								<li><a href="#">What is Wordpress?</a></li>
								<li><a href="#">How do I delete a free account?</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-4 widget widget-footer-box">
							<h3>Stay friends</h3>
							<p>Duis egestas orci eros venenatis tincidunt nulla sagittis suspendisse vitae facilisis erat integer dictum imperdiet.</p>
							<div class="rst-footer-newletter">
								<form action="shortcodes.html">
									<input type="text" name="email" id="email" placeholder="Your email adress" />
									<input type="submit" value="start" />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer content -->
			
			<!-- Footer copyright bar -->
			<div class="rst-footer-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<div class="rst-copyright">
								<p>© Skeets 2015. All Right Reserved.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<nav class="rst-footer-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">about</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-sm-3">
							<div class="rst-back-top">
								<a href="#">Back to top<i class="fa fa-long-arrow-up"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer copyright bar -->
		</footer>
		<!-- Footer -->
		
	</div>
	<!-- Wrapper -->


    </div> <!-- /container -->
  </body>
</html>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>

    <!-- Bootstrap Js Compiled Plugins -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- WoW Js -->
    <script type="text/javascript" src="js/wow.min.js"></script>
	
	<!-- Add Fancybox -->
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	
	<!-- Owl Slider Js -->
    <script type="text/javascript" src="js/owl.carousel.js"></script>
	
	<!-- Validation Js -->
    <script type="text/javascript" src="js/jquery.validate.js"></script>
	
	<!-- Custom Google Maps js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgGyzOzpWh_mTpdx-UPt92W6GI8hE7P3M"></script>
	<!-- Custom scroll bar js -->
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>	
	
	<!-- Custom dropdown input js -->
	<script type="text/javascript" src="js/jquery.ddslick.min.js"></script>
	<script type="text/javascript" src="js/countrySelect.js"></script>
	
	<!-- Hoverdir js -->
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
	<script type="text/javascript" src="js/modernizr.js"></script>	
	
    <!-- Custom Js -->
	<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
	<script type="text/javascript" src="js/custom-form-elements.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script type="text/javascript" src="js/jquery.counterup.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    </div> <!-- /container -->


    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/select2.min.js"></script>

    <!-- Add and remove input fields Flashcards  -->
    <script type="text/javascript">
		$(document).ready(function(){
		    var maxField = 100; //Input fields increment limitation
		    var addButton = $('.add_button'); //Add button selector
		    var wrapper = $('.field_wrapper'); //Input field wrapper
		    var count = 0; //Initial field counter is 1
		    var front = '';
		    var back = '';
		    $(addButton).click(function(){ //Once add button is clicked
		        if(count < maxField){ //Check maximum number of input fields
		            count++; //Increment field counter
		            $(wrapper).append('<div><div class="col-sm-6 rst-input-field"><label for="front">Front</label><input type="text" name="rows[' + count + '][front]" value="' + front + '" id="card-front" class="text required"/></div><div class="col-sm-6 rst-input-field"><label for="back">Back</label><input type="text" name="rows[' + count + '][back]" value="' + back + '" id="card-back" class="text required"/></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="images/remove-icon.png"/></a></div></div>'); // Add field html
		        }
		    });
		    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		        e.preventDefault();
		        $(this).parent('div').remove(); //Remove field html
		        count--; //Decrement field counter
		    });
		});
	</script>
  
    <script type="text/javascript">

        $(document).ready(function() {

        // Select
        $(".js-example-basic-single").select2();
		});


        $('.flashcard').on('click', function() {
        $('.flashcard').toggleClass('flipped');
        });
	</script>

    <script type="text/javascript">

		$("#next").click(function(event) { 
		 	event.preventDefault();
            var maxNext = "<?php echo $total; ?>";
            var startElement = $("#counter");
            var value = parseInt(startElement.val());
            if (value <= maxNext) {
            startElement.val(value + 1)};
            var formData = $("#shuffle").serialize();
			var category=$("#category").val();
			var 	total= $("#total").val();
			var 	counter =$("#counter").val();
			$.post(
			'display.php',
			{
				category:category,
				total : total,
				counter : counter
			},
			function(data){	
				 $("#fc").empty().append(data);
			});	
		});


        // Set up an event listener for the contact form. By clicking previous substract -1 and show the previous word
       $("#previous").click(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();
            // Serialize the form data.
            var startElement = $("#counter");
            var value = parseInt(startElement.val());
            if (value > 1) {
            startElement.val(value - 1)};
            var formData = $("#shuffle").serialize();
           	var category=$("#category").val();
			var 	total= $("#total").val();
			var 	counter =$("#counter").val();
			$.post(
			'display.php',
			{
				category:category,
				total : total,
				counter : counter
			},
			function(data){	
				 $("#fc").empty().append(data);
			});	

        });

       $("#first").click(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();
            // Serialize the form data.
            var startElement = $("#counter");
            var value = parseInt(startElement.val());
            startElement.val(value - value + 1)
            var formData = $("#shuffle").serialize();
           	var category=$("#category").val();
			var 	total= $("#total").val();
			var 	counter =$("#counter").val();
			$.post(
			'display.php',
			{
				category:category,
				total : total,
				counter : counter
			},
			function(data){	
				 $("#fc").empty().append(data);
			});	
        });

        $("#last").click(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();
            // Serialize the form data.
            var maxNext = "<?php echo $total; ?>";
            var startElement = $("#counter");
            var value = parseInt(startElement.val());
            startElement.val(value = maxNext)
            var formData = $("#shuffle").serialize();
           	var category=$("#category").val();
			var 	total= $("#total").val();
			var 	counter =$("#counter").val();
			$.post(
			'display.php',
			{
				category:category,
				total : total,
				counter : counter
			},
			function(data){	
				 $("#fc").empty().append(data);
			});	
        });

       // Use keyboard arrows instead of buttons
       $(document).keydown(function (e) {
           if (event.keyCode == 39) {
           $('#next').click(); //on left arrow, click next (since your next is on the left)
           } 
           if (event.keyCode == 37) {
           $('#previous').click(); //on right arrow, click prev
            }
           if (event.keyCode == 32) {
           $('.flashcard').click(); //on right arrow, click prev
            }
           if (event.keyCode == 38) {
           $('.flashcard').click(); //on right arrow, click prev
            }
           if (event.keyCode == 40) {
           $('.flashcard').click(); //on right arrow, click prev
            }
          var key = e.which;
          if([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
          e.preventDefault();
          return false;
      }


});

    </script>