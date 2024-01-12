<?php include(APPPATH.'views/gerenciador/dashboard/Header.php'); ?>
<?php include(APPPATH.'views/gerenciador/dashboard/MenuDashboard.php'); ?>

<div class="content-right">
    <?php if (isset($title)) { ?>
        <h3><?php echo $title; ?></h3>
    <?php } ?>
    <?php if (isset($subtitle)) { ?>
        <small class="fs-15"><?php echo $subtitle; ?></small>
    <?php } ?>
    <div class="w-100 d-flex align-items-center justify-content-end">
        <a href="/gerenciador/dashboard/users/add" class="btn btn-outline-success col-md-2">Adicionar +</a>
    </div>
    <table class="mt-5 table">
        <thead>
        <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-left" scope="col">Nome</th>
            <th class="text-left" scope="col">Telefone</th>
            <th class="text-left" scope="col">Nível</th>
            <th width="130px" class="text-center" scope="col">Ações</th>
        </tr>
        </thead>
        <tbody id="table_users_list">
        <?php foreach($users as $user) { ?>
            <tr>
                <th scope="row"><?php echo $user->id; ?></th>
                <td class="text-left align-middle"><?php echo $user->username; ?></td>
                <td class="text-left align-middle"><?php echo $user->phone; ?></td>
                <td class="text-left align-middle"><?php echo ($user->level == 1) ? 'Administrador' : 'Personalizado'; ?></td>
                <td class="d-flex align-items-center justify-content-around">
                    <button data="<?php echo $user->id; ?>" class="user-delete btn btn-outline-danger">
                        <img src="/_assets/cms/images/icons/trash-solid.svg" />
                    </button>
                    <a href="/gerenciador/dashboard/users/edit/<?php echo $user->id; ?>" class="btn btn-outline-warning">
                        <img src="/_assets/cms/images/icons/pen-to-square-solid.svg" />
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include(APPPATH.'views/gerenciador/dashboard/Footer.php'); ?>