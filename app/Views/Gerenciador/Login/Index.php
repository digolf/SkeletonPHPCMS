<?php include('Header.php'); ?>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                    <span class="login100-form-title p-b-34 p-t-27">
						Gerenciador Skeleton
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="username" placeholder="Usuário">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Senha">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Acessar
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="#">
                            Esqueceu sua senha?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include('Footer.php'); ?>