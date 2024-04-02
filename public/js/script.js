// let tombolUbah = document.querySelector(`.updateData`);

// tombolUbah.addEventListener(`click`, function () {
//   const elements = document.querySelectorAll(`[data-id]`);
//   const ids = [...elements].map((element) => element.getAttribute("data-id"));
//   const id = ids[0];

//   const xhr = new XMLHttpRequest();
//   xhr.open("POST", "http://localhost/mvc/public/mahasiswa/update");
//   xhr.onload = function () {
//     if (this.status == 200) {
//       const response = this.response;
//       console.log(response);
//     } else {
//       console.log("gagal");
//     }
//   };
//   const data = JSON.stringify({ id: id });
//   xhr.send(data);
//   console.log(id);
// });
$(function () {
  $(".updateData").on("click", function () {
    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/mvc/public/mahasiswa/update",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $(".id").val(data.id);
        $(".nama").val(data.nama);
        $(".nip").val(data.nip);
        $(".email").val(data.email);
      },
    });
  });
});
