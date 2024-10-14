window.onscroll = function() {
    var scrollPosition = window.scrollY;
    var windowHeight = window.innerHeight;
    var opacity = Math.min(scrollPosition / windowHeight, 0.7); // Máxima opacidade de 0.7
    document.querySelector('.overlay').style.backgroundColor = `rgba(0, 0, 0, ${opacity})`;
};
