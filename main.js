{
let scrollFuwa = document.querySelectorAll('.scroll-fuwa');

document.addEventListener("scroll",()=>{
    for(let i=0;i<scrollFuwa.length;i++){

        let topDistance = scrollFuwa[i].getBoundingClientRect().top
        //コンテンツから上までの距離
        if(window.innerHeight > topDistance+300){
            scrollFuwa[i].classList.remove("scroll-fuwa");
            scrollFuwa[i].classList.add("scroll-fuwa-show");

        }
    }
})

    //ウィンドウの高さ
    
}