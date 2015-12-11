        $(document).ready(function() {
        $('.flashcard').on('click', function() {
        $('.flashcard').toggleClass('flipped');
        });
        });

        // Set up an event listener for the contact form. By clicking next add +1 and show the next word
        $("#next").click(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();
            // Serialize the form data.
            var maxNext = "<?php echo $total; ?>";
            var startElement = $("#counter");
            var value = parseInt(startElement.val());
            if (value <= maxNext) {
            startElement.val(value + 1)};
            var formData = $("#shuffle").serialize();
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: 'display.php',
                data: formData,
                context: '#wrapper',
                success: function(data) {
                    $("#wrapper").html(data);
                }
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
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: 'display.php',
                data: formData,
                context: '#wrapper',
                success: function(data) {
                    $("#wrapper").html(data);
                }
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
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: 'display.php',
                data: formData,
                context: '#wrapper',
                success: function(data) {
                    $("#wrapper").html(data);
                }
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
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: 'display.php',
                data: formData,
                context: '#wrapper',
                success: function(data) {
                    $("#wrapper").html(data);
                }
            });

        });

       // Use keyboard arrows instead of buttons
       $(document).keydown(function (e) {
            e.preventDefault();
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
          return false;
      }


});