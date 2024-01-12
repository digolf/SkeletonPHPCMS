<?php include(APPPATH.'views/gerenciador/dashboard/Header.php'); ?>
<?php include(APPPATH.'views/gerenciador/dashboard/MenuDashboard.php'); ?>

    <div class="content-right">
        <h3><?php echo $title; ?></h3>
        <small class="fs-15"><?php echo $subtitle; ?></small>
        <form method="POST" class="mt-5 row col-md-12 d-flex align-items-center flex-wrap">
            <small class="fs-15 mb-2">Informações pessoais</small>
            <div class="col-md-12 form-group">
                <label for="name">Nome completo</label>
                <input required
                       id="name"
                       value="<?php echo $user->username ?>"
                       class="form-control form-control-lg fs-16"
                       type="text"
                       name="name"
                >
            </div>
            <div class="col-md-12 form-group">
                <label for="email">E-mail</label>
                <input required
                       id="email"
                       value="<?php echo (!empty($user->email)) ? $user->email : ''; ?>"
                       class="form-control form-control-lg fs-16"
                       type="email"
                       name="email"
                >
            </div>
            <div class="col-md-12 form-group">
                <label for="phone">Telefone</label>
                <input required
                       id="phone"
                       value="<?php echo (!empty($user->phone)) ? $user->phone : ''; ?>"
                       class="form-control form-control-lg fs-16"
                       type="text"
                       name="phone"
                >
            </div>

            <div class="col-md-12 form-group">
                <label for="new-password-confirmation">Nível do usuário</label>
                <select name="level" class="form-control-lg fs-16 col-md-12 form-select">
                    <option>Selecione</option>
                    <option <?php echo ($user->level == 1) ? 'selected' : ''; ?> value="1">Administrador</option>
                    <option  <?php echo ($user->level == 9) ? 'selected' : ''; ?> value="9">Personalizado</option>
                </select>
            </div>

            <small class="fs-15 w-100">Alterar Senha</small>
            <div class="col-md-6 form-group">
                <label for="new-password">Senha temporária</label>
                <input id="new-password"
                       class="form-control form-control-lg fs-16"
                       type="password"
                       name="new_pass"
                >
            </div>
            <div class="col-md-6 form-group">
                <label for="new-password-confirmation">Confirmar senha temporárias</label>
                <input id="new-password-confirmation"
                       class="form-control form-control-lg fs-16"
                       type="password"
                       name="new_pass_confirmation"
                >
            </div>

            <div class="col-md-6 form-group">
                <label for="new-password-confirmation">Disponibilidade do usuário: </label>
                <div class="mt-2 form-check form-check-inline">
                    <input required
                        <?php echo ($user->active == 1) ? 'checked' : ''; ?>
                            class="form-check-input"
                            type="radio"
                            name="active"
                            id="activeBtn"
                            value="1"
                    >
                    <label class="form-check-label" for="activeBtn">Ativo</label>
                </div>
                <div class="form-check form-check-inline">
                    <input required
                        <?php echo ($user->active == 9) ? 'checked' : ''; ?>
                            class="form-check-input"
                            type="radio"
                            name="active"
                            id="invativeBtn"
                            value="9"
                    >
                    <label class="form-check-label" for="invativeBtn">Inativo</label>
                </div>
            </div>

            <div class="col-md-12 pt-4 d-flex align-items-center justify-content-end form-group">
                <div class="ml-auto col-md-6 d-flex align-items-center justify-content-end row">
                    <a href="/gerenciador/dashboard/users" class="mr-2 col-md-4 btn btn-outline-warning">Voltar</a>
                    <button type="submit" class="col-md-6 btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>

<?php include(APPPATH.'views/gerenciador/dashboard/Footer.php'); ?>