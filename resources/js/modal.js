$(document).ready(function () {
  startModal();
});

function startModal() {
  openModal();
  closeModal();
}
function openModal() {
  $(".open_modal").on("click", function () {
    $("body").css("overflow-y", "hidden");
    let data = $(this).data("dep");
    $.ajax({
      type: "post",
      url: modal_ajax.ajax_url,
      data: {
        action: modal_ajax.action,
        nonce: modal_ajax.nonce,
        type: data,
      },
      success: function (result) {
        $("#modalWindow").find('#form_section').html(result);
        $form = $('.wpcf7-form').eq(0);
        wpcf7.init($form[0]);
      },
    });
    $("#openModal").fadeIn();
  });
}

function closeModal() {
  $("#openModal")
    .find(".close")
    .on("click", function () {
      $("body").css("overflow-y", "scroll");
      $("#openModal").fadeOut();
    });

  $(".modalDialog").click(function () {
    $("body").css("overflow-y", "scroll");
    $("#openModal").fadeOut();
  });
  $("#modalWindow").click(function (e) {
    e.stopPropagation();
  });
}
