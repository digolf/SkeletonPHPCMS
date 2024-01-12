<?php include(APPPATH.'views/gerenciador/dashboard/Header.php'); ?>
<?php include(APPPATH.'views/gerenciador/dashboard/MenuDashboard.php'); ?>

<div class="content-right">
    <h3><?php echo $title; ?></h3>
    <small class="fs-15"><?php echo $subtitle; ?></small>
    <form class="mt-5 row col-md-12 d-flex align-items-center flex-wrap">
        <small class="fs-15 mb-2">Informações pessoais</small>
        <div class="col-md-12 form-group">
            <label for="name">Nome completo</label>
            <input id="name"
                   value="<?php echo (!empty($user->name)) ? $user->name : ''; ?>"
                   class="form-control form-control-lg"
                   type="text"
                   name="name"
            >
        </div>
        <div class="col-md-12 form-group">
            <label for="email">E-mail</label>
            <input id="email"
                   value="<?php echo (!empty($user->email)) ? $user->email : ''; ?>"
                   class="form-control form-control-lg"
                   type="email"
                   name="email"
            >
        </div>
        <div class="col-md-12 form-group">
            <label for="phone">Telefone</label>
            <input id="phone"
                   value="<?php echo (!empty($user->phone)) ? $user->phone : ''; ?>"
                   class="form-control form-control-lg"
                   type="text"
                   name="phone"
            >
        </div>

        <small class="row fs-15 mb-2 mt-5 col-md-12">Trocar senha</small>
        <div class="col-md-6 form-group">
            <label for="new-password">Nova senha</label>
            <input id="new-password"
                   value="<?php echo (!empty($user->phone)) ? $user->phone : ''; ?>"
                   class="form-control form-control-lg"
                   type="text"
                   name="new_pass"
            >
        </div>
        <div class="col-md-6 form-group">
            <label for="new-password-confirmation">Confirmar nova senha</label>
            <input id="new-password-confirmation"
                   value="<?php echo (!empty($user->phone)) ? $user->phone : ''; ?>"
                   class="form-control form-control-lg"
                   type="text"
                   name="new_pass_confirmation"
            >
        </div>
        <div class="col-md-12 pt-4 d-flex align-items-center justify-content-end form-group">
            <button type="submit" class="p-2 w-25 ml-auto btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php include(APPPATH.'views/gerenciador/dashboard/Footer.php'); ?>