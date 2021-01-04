let keyword = document.querySelector(".keyword");
let btn = document.querySelector(".cari");
let ctn = document.querySelector(".container");

keyword.addEventListener("keyup", () => {
    // buat obj ajax
    let xhr = new XMLHttpRequest();
    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                ctn.innerHTML = xhr.responseText;
            }
        }
        // eksekusi ajax
    xhr.open('GET', 'ajax/cari.php?keyword=' + keyword.value, true);
    xhr.send();
})