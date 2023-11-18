<?php
include "Baseheader.php";
?>
<!--SLIDER-->
<section id="Slider">
    <div class="slider-container">
        <img src="../image/slider.jpg">
        <img src="../image/slider1.png">
        <img src="../image/slider2.png">
        <img src="../image/slider3.png">
        <img src="../image/slider4.png">
        <img src="../image/slider5.jpg">
    </div>
    <div class="dot-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

</section>
<br>
<!--JavaScript-->
<script>
    const header = document.querySelector("header");
    window.addEventListener("scroll",function(){
        x = window.pageYOffset
        if(x > 0){
            header.classList.add("sticky")
        }
        else {
            header.classList.remove("sticky")
        }    
    })


    const imgPos = document.querySelectorAll(".slider-container img")
    const imgContainer = document.querySelector(".slider-container")
    const dotItem = document.querySelectorAll(".dot")

    let index = 0
    let imgNumber = imgPos.length
    //format picture
    imgPos.forEach(function(image,index){
        image.style.left = index * 100 +"%"
        dotItem[index].addEventListener("click",function(){
            Slider(index)
        })
    })
    //picture auto moving
    function ImgSlide(){
        index++;
        if(index >= imgNumber){
            index = 0
        }
        Slider(index)
    }
    function Slider(index){
        imgContainer.style.left = "-" + index*100 + "%"
        const dotActived = document.querySelector(".active")
        dotActived.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(ImgSlide,5000)

    
</script>
<?php
include "Basefooter.php";
?>