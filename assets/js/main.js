
function carousel1(){
    var landing = document.getElementById('landing')
    document.getElementById("carouselImage").src = "assets/images/11.jpg"
    document.getElementById("carouselImage").style.maxHeight ="600px"
    landing.style.backgroundImage = "url(\'assets/images/11.jpg\')"

    setTimeout(() => {
        carousel2()
    }, 3000);
}

function carousel2(){
    document.getElementById("carouselImage").src = "assets/images/12.jpg"
    document.getElementById("carouselImage").style.maxHeight ="600px"

    setTimeout(() => {
        carousel3()
    }, 3000);
}

function carousel3(){
    document.getElementById("carouselImage").src = "assets/images/13.jpg"
    document.getElementById("carouselImage").style.maxHeight ="600px"
    setTimeout(() => {
        carousel1()
    }, 3000);
}

carousel1()



// alert("voila ue ca ndem")