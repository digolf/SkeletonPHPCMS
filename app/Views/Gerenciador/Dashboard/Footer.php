        <div id="dropDownSelect1"></div>

        <script src="<?php echo base_url('_assets/cms/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/js/inputmask.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/js/manager.js'); ?>"></script>
        <script src="<?php echo base_url('_assets/cms/js/toastr.min.js'); ?>"></script>

        <?php if (isset($password_does_not_match)) { ?>
            <script>
                toastr["warning"]("As senhas não coincidem. <br/> Tente novamente.", "OOPS...")

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

        <?php if (isset($success_profile_editing)) { ?>
            <script>
                toastr["success"]("As alterações foram salvas com sucesso!", "Sucesso!")

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

        <?php if (isset($user_already_exists)) { ?>
            <script>
                toastr["warning"]("Usuário já existe!", "Sucesso")

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

        <?php if (isset($inserted)) { ?>
            <script>
                toastr["success"]("Usuário inserido com sucesso!", "Sucesso")

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

        <?php if (isset($user_updated)) { ?>
            <script>
                toastr["success"]("Usuário editado com sucesso!", "Sucesso")

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
    </body>
</html>