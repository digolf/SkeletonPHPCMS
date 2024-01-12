
function mask(o, f) {
    setTimeout(function() {
        var v = mphone(o.value);
        if (v != o.value) {
            o.value = v;
        }
    }, 1);
}

function mphone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
        r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
        r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        r = r.replace(/^(\d*)/, "($1");
    }
    return r;
}

$(document).ready(function (){
    // AJAX

    // delete user
    $('.user-delete').on('click', function () {
        if (confirm('Ao deletar um usuário, a ação se torna irreversível. Deseja continuar?')) {
            $.ajax({
                method: 'POST',
                url: '/gerenciador/dashboard/users/delete',
                data: {
                    user_id: $(this).attr('data')
                },
                success: function(data){
                    data = JSON.parse(data);
                    $('#table_users_list').empty();
                    let user_level;
                    for(var k in data) {
                        if (data[k]["level"] === '1') {
                            user_level = "Administrador";
                        } else {
                            user_level = "Personalizado";
                        }

                        $('#table_users_list').append(
                            '<tr>' +
                                '<th scope="row">' + data[k]["id"] + '</th>' +
                                '<td class="text-left align-middle"> ' + data[k]["username"] + ' </td>' +
                                '<td class="text-left align-middle">' + data[k]["phone"] + '</td>' +
                                '<td class="text-left align-middle">' + user_level + '</td>' +
                                '<td class="d-flex align-items-center justify-content-around">' +
                                    '<button data="' + data[k]['id'] + '" class="user-delete btn btn-outline-danger">' +
                                    '    <img src="/_assets/cms/images/icons/trash-solid.svg" />' +
                                    '</button>' +
                                    '<a href="/gerenciador/dashboard/users/edit/' + data[k]['id'] + '" class="btn btn-outline-warning">' +
                                    '    <img src="/_assets/cms/images/icons/pen-to-square-solid.svg" />' +
                                    '</a>' +
                                '</td>' +
                            '</tr>'
                        )}
                }
            });
        }
    });

    // Mascáras
    $("#phone").inputmask({
        mask: ["(99) 9999-9999", "(99) 99999-9999", ],
        keepStatic: true
    });
    $("#email").inputmask("mask");
})