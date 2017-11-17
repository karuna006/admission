
                <div class="row">
                    <div class="col-lg-4">
                        <section class="panel">
</section>
                        <section class="panel">
                            <div id="owl-demo">
</div>
                        </section>
                    </div>
                </div>
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer always-bottom">
            <div class="text-center">
                2017 &copy; Greefi Technologies.
                <a href="greefitech.com" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    
    
</body>
<script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/jquery.customSelect.min.js"></script>
    <script src="../js/respond.min.js"></script>
    <!--right slidebar-->
    <script src="../js/slidebars.min.js"></script>
    <!--common script for all pages-->
    <script src="../js/common-scripts.js"></script>
    <!--script for this page-->
    <script src="../js/sparkline-chart.js"></script>
    <script src="../js/easy-pie-chart.js"></script>
    <script src="../js/count.js"></script>
    <script src="../js/custom.js"></script>
    <script>

    $(document).ready(function() {
        $('#bus_stop').hide();
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true

        });
    });

    //custom select box

    $(function() {
        $('select.styled').customSelect();
    });

    $(window).on("resize", function() {
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });
    </script>
</html>
