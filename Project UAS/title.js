var search = document.getElementById("search");

search.addEventListener("keyup", function () {
  $("#data").html("");
  $.get("./dataTitle.php?search=" + search.value,  function (response) {
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
          <a href="detailFilm.php?id=` + response[i]["film_id"] +`" style="text-decoration: none !important; color:black;">
          <div class="card">
            <img src="./img/no-image.png" 
            class="card-img-top" alt="` + response[i]["title"] + `">
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
          </div></a>
        </div>`);
      }
    }
  });
}); 

