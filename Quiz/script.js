const id1 = document.getElementById("tombol1");
const id2 = document.getElementById("tombol2");
const id3 = document.getElementById("tombol3");

function border1(){
    id1.style.border = "#E2E0DC solid 2px";
    id2.style.border = "";
    id3.style.border = "";
}
function border2(){
    id1.style.border = "";
    id2.style.border = "#E2E0DC solid 2px";
    id3.style.border = "";
}
function border3(){
    id1.style.border = "";
    id2.style.border = "";
    id3.style.border = "#E2E0DC solid 2px";
}
function gantiGambar1() {
    const img = document.getElementById("myImage");
    img.src = "https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800";
}
function gantiGambar2() {
    const img = document.getElementById("myImage");
    img.src = "https://images.unsplash.com/photo-1524805444758-089113d48a6d?w=800";
}
function gantiGambar3() {
    const img = document.getElementById("myImage");
    img.src = "https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?w=800";
}