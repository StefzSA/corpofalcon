$(document).ready(function () {
  startModal();
});

function startModal() {
  openModal();
  closeModal();
}
function openModal() {
  $(".open_modal").on("click", function () {
    let data = $(this).data("dep");
    let lastDep = $('#form_section').data('last-dep');
    $("body").css("overflow-y", "hidden");
    $("#openModal").fadeIn();
    if(data != lastDep ){
      $("#modalWindow").find('#form_section').css('min-height', '550px');
      $("#modalWindow").find('#form_section').html('<div class="loader" style="display:none;"></div>');
      $("div.loader").show(800, function(){
        $.ajax({
          type: "post",
          url: modal_ajax.ajax_url,
          data: {
            action: modal_ajax.action,
            nonce: modal_ajax.nonce,
            type: data,
          },
          success: function (result) {
            $("div.loader").hide(800, function(){
              $('#form_section').html(result);
              $('#form_section').data('last-dep', data);
              $form = $('.wpcf7-form').eq(0);
              wpcf7.init($form[0]);
            });
          },
        });
      });
    }
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
