var $j = jQuery.noConflict();
jQuery(document).ready(function () {
  startModal();
});

function startModal() {
  openModal();
  closeModal();
}
function openModal() {
  jQuery(".open_modal").on("click", function () {
    let data = jQuery(this).data("dep");
    let lastDep = jQuery("#form_section").data("last-dep");
    jQuery("body").css("overflow-y", "hidden");
    if (screen.width <= 480) {
      jQuery("body").css("position", "fixed");
    }
    document.ontouchmove = function (event) {
      event.preventDefault();
    };
    jQuery("#openModal").fadeIn();
    if (data != lastDep) {
      jQuery("#inner_form").addClass("hidden");
      jQuery("#inner_form").removeClass("FadeInLeft");
      if (screen.width <= 480) {
        jQuery("#form_section").css("min-height", "480px");
      } else {
        jQuery("#form_section").css("min-height", "550px");
      }
      jQuery("#inner_form").html('<div class="loader" style="display:none;"></div>');
      jQuery("#inner_form").removeClass("hidden");
      jQuery("div.loader").show(800, function () {
        jQuery.ajax({
          type: "post",
          url: modal_ajax.ajax_url,
          data: {
            action: modal_ajax.action,
            nonce: modal_ajax.nonce,
            type: data,
          },
          success: function (result) {
            jQuery("div.loader").hide(800, function () {
              jQuery("#inner_form").addClass("hidden");
              jQuery("#inner_form").html(result);
              jQuery("#inner_form").removeClass("hidden");
              jQuery("#inner_form").addClass("FadeInLeft");
              jQuery("#form_section").data("last-dep", data);
              jQueryform = jQuery(".wpcf7-form").eq(0);
              wpcf7.init(jQueryform[0]);
            });
          },
        });
      });
    }
  });
}

function closeModal() {
  jQuery("#openModal")
    .find(".close")
    .on("click", function () {
      jQuery("body").css("overflow-y", "scroll");
      jQuery("body").css("position", "unset");
      jQuery("#openModal").fadeOut();
    });

  jQuery(".modalDialog").click(function () {
    jQuery("body").css("overflow-y", "scroll");
    jQuery("body").css("position", "unset");
    jQuery("#openModal").fadeOut();
  });
  jQuery("#modalWindow").click(function (e) {
    e.stopPropagation();
  });
}
