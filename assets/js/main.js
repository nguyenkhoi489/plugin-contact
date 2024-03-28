jQuery(document).ready(function ($) {
  $(".btn-add").click(function () {
    $.ajax({
      url: ajaxurl,
      data: {
        action: "loadComponent",
      },
      type: "get",
      success: function (response) {
        console.log(response);
      },
    });
  });
  $(".select2").select2({
    placeholder: "Please select the list of information to show",
    maximumSelectionLength: 4,

  });
});
