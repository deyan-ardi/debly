<footer class="footer">
    <div class="container-fluid">
        <nav>
            <p class="copyright text-center">
                ©
                <script>
                document.write(new Date().getFullYear())
                </script>
                Ganatech, desain by <a href="http://www.creative-tim.com">Creative Tim</a>
            </p>
        </nav>
    </div>
</footer>

<div class="fixed-plugin">
    <div class="dropdown ">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary"
                            data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/images/dashboard/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/images/dashboard/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/images/dashboard/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/images/dashboard/sidebar-5.jpg" alt="" />
                </a>
            </li>
        </ul>
    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?= base_url() ?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="<?= base_url() ?>assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url() ?>assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?= base_url() ?>assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url() ?>assets/js/demo.js"></script>
<script type="text/javascript">
const baseURL = "<?php echo base_url(); ?>";
$(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    var data = $('#body').attr('data-id')
    if (data == 1) {
        demo.initDashboardPageCharts();
        demo.showNotification();
    }

});
</script>

</html>