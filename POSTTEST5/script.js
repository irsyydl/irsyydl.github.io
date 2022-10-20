alert("WEB MASIH KOSONG")

var icon = document.getElementById("icon");
icon.onclick = function(){
    document.body.classList.toggle("dark-theme")
    if(document.body.classList.contains("dark-theme")){
        icon.src = "assets/sun.png";
    }else{
        icon.src = "assets/moon.png"
    }
}

const bigtext = document.getElementById('teks');
bigtext.addEventListener('click', function handleClick() {
    if(this.textContent === "Cuma Jual Roti"){
        bigtext.textContent = "Gak Jual Yang Lain";
    }else{
        bigtext.textContent = "Cuma Jual Roti"
    }
});

const smalltext = document.getElementById('midteks');
smalltext.addEventListener('click', function showInfo() {
    if(smalltext.style.display == 'none'){
        smalltext.style.display = 'block';
    } else {
        smalltext.style.display = 'none'
    }
});