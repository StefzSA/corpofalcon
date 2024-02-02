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
    let lastDep = $("#form_section").data("last-dep");
    $("body").css("overflow-y", "hidden");
    if (screen.width <= 480) {
      $("body").css("position", "fixed");
    }
    document.ontouchmove = function (event) {
      event.preventDefault();
    };
    $("#openModal").fadeIn();
    if (data != lastDep) {
      $("#inner_form").addClass("hidden");
      $("#inner_form").removeClass("FadeInLeft");
      if (screen.width <= 480) {
        $("#form_section").css("min-height", "480px");
      } else {
        $("#form_section").css("min-height", "550px");
      }
      $("#inner_form").html('<div class="loader" style="display:none;"></div>');
      $("#inner_form").removeClass("hidden");
      $("div.loader").show(800, function () {
        $.ajax({
          type: "post",
          url: modal_ajax.ajax_url,
          data: {
            action: modal_ajax.action,
            nonce: modal_ajax.nonce,
            type: data,
          },
          success: function (result) {
            $("div.loader").hide(800, function () {
              $("#inner_form").addClass("hidden");
              $("#inner_form").html(result);
              $("#inner_form").removeClass("hidden");
              $("#inner_form").addClass("FadeInLeft");
              $("#form_section").data("last-dep", data);
              $form = $(".wpcf7-form").eq(0);
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
      $("body").css("position", "unset");
      $("#openModal").fadeOut();
    });

  $(".modalDialog").click(function () {
    $("body").css("overflow-y", "scroll");
    $("body").css("position", "unset");
    $("#openModal").fadeOut();
  });
  $("#modalWindow").click(function (e) {
    e.stopPropagation();
  });
}
