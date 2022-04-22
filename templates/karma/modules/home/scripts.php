



<?php 
    global $template_directory;
    echo Templates::script("js/vendor/jquery-2.2.4.min.js");
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>';
    echo Templates::script("js/vendor/bootstrap.min.js");
    echo Templates::script("js/jquery.ajaxchimp.min.js");
    echo Templates::script("js/jquery.nice-select.min.js");
    echo Templates::script("js/jquery.sticky.js");
    echo Templates::script("js/nouislider.min.js");
    echo Templates::script("js/countdown.js");
    echo Templates::script("js/jquery.magnific-popup.min.js");
    echo Templates::script("js/owl.carousel.min.js");
    //<!--gmaps Js-->
    echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>';
    echo Templates::script("js/gmaps.min.js");
    echo Templates::script("js/main.js");
    echo "<script>main('$template_directory');</script>";
?>

