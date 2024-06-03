const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function() {
    // ajax
    // xmlhttprequest
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
           console.log(xhr.responseText);
            
        }
    };

    xhr.open('get','ajax/ajax_cari.php?keyword=' + keyword.value);
    xhr.send();

});