// Live search Elements

let keyword = document.getElementById("keyword");
let searchBtn = document.getElementById("searchBtn");
let container = document.getElementById("container");
keyword.addEventListener("keyup", function () {
    // * Deklarasi variabel XMLHttpRequest
    let xhr = new XMLHttpRequest();

    // * Persiapan Ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }
    xhr.open("GET", "ajax/ajax.php?keyword=" + keyword.value, true);
    xhr.send();
})