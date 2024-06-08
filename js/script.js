// live search produk user
$(document).ready(function () {
  // event ketika cari ditulis
  $("#keyword").on("keyup", function () {
    $.get("../ajax/produk.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
    });
  });
});
