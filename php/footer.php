    <?php include_once ("subfooter.php") ?>

    <div class="container">
        
        <div class="row">
        
                <div class="col-md-12" id="footer-end">
                    <p>© The Hacker News, 2022. All Rights Reserved.</p>
                </div>
        </div>
    </div>


    <script>
        jQuery("#newsScoll").click(function() {
            jQuery('html, body').animate({
                scrollTop: jQuery(".main-header-color-bottom").offset().top
            }, 2000);
        });


        function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


</script>
    </body>
</html>