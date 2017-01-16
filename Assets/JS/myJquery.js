$(document).ready(function () {
    $(document).on('change', '#file', function () {
        file = $(this).val();
        if (file == 'select') {
            alert('please choose a valid file');
        } else {
            $.ajax({
                method: 'post',
                url: sitePath + "/Admin/getTxt",
                data: {'fileName': file}
            })

                    .done(function (msg) {
                        $('#fileTxt').html(msg);
                        $('#txtEditFile').val(msg);
                        $('#fileTxt').show();
                        $('#txtEditFile').hide();
                        $('#resp').hide();
                        $('#btnEdit').show();
                        $('#btnSave').hide();
                        $('#btnArea').css('display', 'block');
                    });
        }
    });

    $(document).on('click', '#btnEdit', function () {
        $('#fileTxt').hide();
        $(this).hide();
        $('#txtEditFile').show();
        $('#btnSave').show();
    });

    $(document).on('click', '#btnSave', function () {
        data = $('#txtEditFile').val();
        file = $('#file').val();
        if (file == 'select') {
            alert('please choose a valid file');
        } else {
            $.ajax({
                method: 'post',
                url: sitePath + "/Admin/writeTxt",
                data: {'fileName': file, 'data': data}
            })

                    .done(function (msg) {
                        $('#resp').text(msg);
                        $('#resp').show();
                        $('#resp').css('color','green');
                    });
        }
    });
});