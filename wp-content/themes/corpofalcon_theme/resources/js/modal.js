$(document).ready(function () {
    startModal();
});

function startModal() {
    openModal();
    closeModal();
}
function openModal() {
    $('.open_modal').on('click', function () {
        $('body').css('overflow-y', 'hidden');
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
