        <div id="dropDownSelect1"></div>

        <script src="<?php echo base_url('_assets/cms/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/vendor/animsition/js/animsition.min.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/vendor/bootstrap/js/popper.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/vendor/select2/select2.min.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/vendor/daterangepicker/moment.min.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/vendor/countdowntime/countdowntime.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/js/main.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/js/toastr.min.js'); ?>"></script>
    </body>

    <?php if (isset($user_invalid)) { ?>
        <script>
            toastr["error"]("Credencias inválidas! <br/> Tente novamente.", "OOPS...")

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
    <?php } ?>
</html>