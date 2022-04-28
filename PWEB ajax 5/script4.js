var keyword = document.getElementById("keyword");

keyword.addEventListener("keyup", function () {
  $("#data").html("");
  $.get("./data4.php?keyword=" + keyword.value,  function (response) {
    var panjang = response.length;
    if (panjang == 0) {
      const card = document.createElement('div');
      card.classList.add('col');
      card.innerHTML = `
      <div class="text-center" style="color:white;">
        <h2>Film Tidak Ditemukan</h2>
      </div>`;
      $("#data").html(card);
      
    } else {
      for (var i = 0; i < panjang; i++) {
        $("#data").append(
        `<div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mx-0.5 my-1">
          <div class="card">
            <img src="` + response[i]["img"] + `" class="card-img-top" alt="No connection">
            <div class="card-body">
                <h4 class="card-title">` + response[i]["title"] + `</h4>
                <p class="card-text">` + response[i]["rating"] + `</p>
                <div class="icon">
                    <button type="button" class="edit-icon">
                        <i class="bi bi-pencil-square mx-1"></i>
                    </button>
                    <button type="button" class="trash-icon">
                        <i class="bi bi-trash3-fill red mx-1"></i>
                    </button>
                </div>
            </div>
          </div>
        </div>`);
      }
    }
  });
}); 

