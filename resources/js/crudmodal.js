const spinnerButtonContent = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';

$( document ).ready(function() {

    function ajaxLoad(filename, modalId, content) {
        content = typeof content !== 'undefined' ? content : 'content';
        $('.loading').show();
        $.ajax({
            type: "GET",
            url: filename,
            contentType: false,
            success: function (data) {
                $("#" + content).html(data);
                $('#' + modalId).modal();
                $('.loading').hide();
                $('.datepicker').datetimepicker({
                    format: 'DD/MM/YYYY'
                });
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }

    $(document).on('click', '.showCreateModal', function(event) {
        var formUrl = $(this).attr('href');
        ajaxLoad(formUrl, 'modalCreate', 'modalCreateBody');
        event.preventDefault();
    });

    $(document).on('click', '.showEditModal', function(event) {
        var formUrl = $(this).attr('href');
        ajaxLoad(formUrl, 'modalUpdate', 'modalUpdateBody');
        event.preventDefault();
    });

    $(document).on('click', '.showViewModal', function(event) {
        var formUrl = $(this).attr('href');
        ajaxLoad(formUrl, 'modalView', 'modalViewBody');
        event.preventDefault();
    });

    $(document).on('click', '.showDeleteModal', function(event) {
        event.preventDefault();
        var formUrl = $(this).attr('href');
        bootbox.confirm("Apakah anda yakin untuk menghapus rekod ini?", function(result){
            if (result) {
                axios.get(formUrl)
                    .then(res => {
                        $.pjax.reload('#gridWrapper');
                        toastr.success('Data berhasil dihapus', 'Sukses');
                    })
                    .catch(err => {

                    });
            }
        });

    });

    $(document).on('click', '.widgetHeader', function(event) {
        $( this ).next('.widgetBody').collapse('toggle');

        if( $(this).hasClass('open') ) {
            $( this ).removeClass('open');
        } else {
            $( this ).addClass('open');
        }

    });

    $(document).on('submit', 'form.ajax-form', function(event) {
        var formData = new FormData(event.target);
        $formUrl = $(this).attr('action');
        var redirectTo = $(this).attr('data-redirect') != null ? $(this).attr('data-redirect') : window.location;
        $(this).find('button[type="submit"]').addClass('disabled');
        $(this).find('button[type="submit"]').prop("disabled", true);
        $(this).find('button[type="submit"]').html(spinnerButtonContent);
        var formEl = $(this);

        var pjaxTarget = $(this).attr('data-pjax-target') ? '#' + $(this).attr('data-pjax-target') : '#gridWrapper';
        // Clear error feedback
        $('.ajax-form input, .ajax-form select').each(function( index ) {
            $(this).removeClass('is-invalid');
            $(this).closest('div').find('.invalid-feedback').html('');
        });

        axios.post($formUrl, formData)
            .then(res => {
                $('.modal-form').modal('hide');
                $.pjax.reload(pjaxTarget);
                toastr.success('Data berhasil disimpan', 'Sukses');
            })
            .catch(err => {
                formEl.find('button[type="submit"]').removeClass('disabled');
                formEl.find('button[type="submit"]').prop("disabled", false);
                formEl.find('button[type="submit"]').html('Submit');
                var errObj = err.response.data;

                if (errObj.hasOwnProperty('message')) {
                    var errMessage = errObj.message;
                    var arrMessage = errMessage.split('.');
                    if (arrMessage.length > 1) {
                        toastr.error(arrMessage[1], arrMessage[0]);
                    } else {
                        toastr.error(arrMessage[0]);
                    }
                }

                for (var key in errObj) {
                    var errorMessage = errObj[key][0];
                    $('.ajax-form input[name="' +key+ '"], .ajax-form select[name="' +key+ '"]').addClass('is-invalid');
                    $('.ajax-form input[name="' +key+ '"], .ajax-form select[name="' +key+ '"]').closest('div').find('.invalid-feedback').html(errorMessage);
                }
            });

        event.preventDefault();
    });
});