(function ($) {
    $(document).ready(function () {
        startModal();
    });

    function startModal() {
        openModal();
        closeModal();
    }
    function openModal() {
        $('.open_modal').on('click', function () {
            let data = $(this).data('dep');
            $('body').css('overflow-y', 'hidden');
            $.ajax({
                type: 'post',
                url: modal_ajax.url,
                data: 'action=' + modal_ajax.action + '&nonce=' + modal_ajax.nonce + '&type=' + data ,
                success: function (result) {
                    $('#form_section').html(result);
                }
            });
            $('#openModal').fadeIn();
        });
    }
    function closeModal() {
        $('#openModal').find('.close').on('click', function () {
            $('body').css('overflow-y', 'scroll');
            $('#openModal').fadeOut();
        });

        $('.modalDialog').click(function () {
            $('body').css('overflow-y', 'scroll');
            $('#openModal').fadeOut();
        });
        $('#modalWindow').click(function (e) {
            e.stopPropagation();
        });
    }

})(jQuery);