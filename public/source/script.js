const cursorDot = document.querySelector("[data-cursor-dot]");
const cursorOutline = document.querySelector("[data-cursor-outline]");

window.addEventListener("mousemove", function(e){
    const posX = e.clientX;
    const posY = e.clientY;

    // cursorDot.style.left = `${posX}px`;
    // cursorDot.style.top= `${posY}px`;

    // cursorOutline.style.left = `${posX}px`;
    // cursorOutline.style.top = `${posY}px`;

    cursorDot.animate({
        left: `${posX}px`,
        top: `${posY}px`
    }, {duration: 500, fill:"forwards"});

    // cursorOutline.style.boxShadow = "0 0 20px rgba(255, 255, 255, 0.9), 0 0 30px rgba(255, 255, 255, 0.8) , 0 0 40px rgba(255, 255, 255, 0.7)";
});



var typed = new Typed('.text-typing', {
    strings: ['JUNIOR DEVELOPER', 'GRAPHIC DESIGNER', 'MOBILE DEVELOPER'],
    typeSpeed: 200,
    loop:true,
    loopCount: Infinity,
    startDelay: 100,
    backSpeed: 100,
  });

// Pilih elemen yang ingin disembunyikan saat di-scroll
const elementToHide = document.getElementById('onScrol-hide');

let isScrolling;

let opacity = 0;

// Fungsi untuk mengatur animasi fadeIn
function fadeIn() {
    elementToHide.style.opacity = opacity;
    
    if (opacity < 1) {
        opacity += 0.01; // Adjust the increment value for faster or slower fade
        requestAnimationFrame(fadeIn);
    }
}

// Tambahkan event listener untuk mendeteksi scroll
window.addEventListener('scroll', function() {


    elementToHide.style.display = 'none';

    // Hentikan timeout sebelumnya (jika ada) dan atur timeout baru
    clearTimeout(isScrolling);
    
    // Setelah 1 detik scroll berhenti, elemen akan kembali disembunyikan
    isScrolling = setTimeout(function() {
        elementToHide.style.display = 'block';
        fadeIn()
    }, 500); // 1000ms = 1 detik
});
