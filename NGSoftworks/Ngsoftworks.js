
const hamburger= document.querySelector(".hamburger");
const navLinks= document.querySelector(".nav-links");
const links= document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click",()=>{
    navLinks.classList.toggle("open");

    links.forEach(function(element){

        element.classList.toggle("fade");
    });

        hamburger.classList.toggle("toggle");
});

    // cursor follower//




jQuery(document).ready(function() {

    //ripple effect starts
     
       $('.contacts').ripples({
            resolution: 512,
            dropRadius: 20,
            perturbance: 0.04,
        });
    
    //ripple effect ends
    
    
    
    // cursor follower starts//
    
var mouseX = 0, mouseY = 0;
var xp = 0, yp = 0;

$(document).mousemove(function(e){
mouseX = e.pageX-5 ;
mouseY = e.pageY-10; 
});

setInterval(function(){
xp += ((mouseX - xp)/6);
yp += ((mouseY - yp)/6);
$("#circle").css({left: xp +'px', top: yp +'px'});
}, 5);

const cursor=document.querySelector('.circle2');       
document.addEventListener('click',()=>{ 

    cursor.classList.add("pulse");
    console.log("pulse added");
    
setTimeout(()=>{
 
        cursor.classList.remove("pulse");
        console.log("pulse removed");
    },500);
    
    
}) ;  

    // cursor follower ends//
    
    // nav button to sections starts//
    
       $(".homeBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".header").offset().top},
        'slow');
});  
    
   
     $(".packagesBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".packages-wrapper").offset().top},
        'slow');
});
      $(".productBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".product-wrapper").offset().top},
        'slow');
});
    $(".developmentBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".development-wrapper").offset().top},
        'slow');
});
   
    $(".galleryBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".image-gallery-wrapper").offset().top},
        'slow');
});
     $(".contactBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".contacts").offset().top},
        'slow');
});
    
});
 // nav button to sections starts//   
   
     


    
    
//image Gallery starts//  
    
  
let image_gallery_wrapper = document.getElementById('image-gallery-wrapper');
const image_gallery_wrapper_ul =image_gallery_wrapper.getElementsByTagName('ul');
const image_gallery_wrapper_li =image_gallery_wrapper_ul[0].getElementsByTagName('li');
const image_gallery_wrapper_image1 =image_gallery_wrapper_li[0].getElementsByTagName('img');  
const gallery_image_modal_close=document.getElementById("gallery-image-modal-close")
const gallery_image_modal_go_to=document.getElementById("gallery-image-modal-go-to")
const gallery_image_modal_image=document.getElementById("gallery-image-modal-image");
const gallery_image_modal=document.getElementById("gallery-image-modal");
const load=document.getElementById("loading");

function loadDone(){
    
      load.style.display="none";
}



image_gallery_wrapper_ul[0].addEventListener('click',galleryImageOnClick);    
    
function galleryImageOnClick(e){

   console.log("image clicked");
    e = e || window.event;
    var target = e.target || e.srcElement,
    text = target.textContent || target.innerText; 
    console.log(target.src);
    
    gallery_image_modal_image.src=target.src;
    gallery_image_modal_go_to.href="https://"+target.id;

    gallery_image_modal.style.display = "block";
    


}  
gallery_image_modal_close.addEventListener('click',galleryImageOnClose);
function galleryImageOnClose(){
        
        gallery_image_modal.style.display = "none";
    
    }
gallery_image_modal_go_to.addEventListener('click',galleryImageOnGoTo);
function galleryImageOnGoTo(){
        
         window.location.href = gallery_image_modal_go_to.href;
    
}

//image Gallery ends//     
    
    
// product slider starts

//let refreshRate = 8000;
//let closeFlag=0;
//const slider_image = document.getElementById('product-slider-back');
//let currentPercent=0;
//  
//slider_image.addEventListener('click',slider2Click);
//        function slider2Click() {
//            window.location.href = "https://travelerschoicebd.com/";  
//        }    
//setInterval(sliderChange, refreshRate);   
//function sliderChange(){
//
//     if(currentPercent===0){
//        currentPercent=1;
//        console.log("slider1 ends"); 
//        slider_image.addEventListener('click',slider2Click);
//        function slider2Click() {
//            window.location.href = "https://hotelchainbd.com/";
//        }
//         
//      }
//      else {
//        currentPercent = 0;
//        console.log("slider2 ends"); 
//        slider_image.addEventListener('click',slider1Click);
//        function slider1Click() {
//            window.location.href = "https://travelerschoicebd.com/";
//        }
//      }
//}      
    
//
//let imageCounter=1;
//const product_slider_wrapper=document.getElementById("product-slider-wrapper");
//const modal=document.getElementById("modal");
//let modalLink=document.getElementById("modalLink");
//let modalCloseBtn=document.getElementById("modalClose"); 
//let modalTitle=document.getElementById("modalTitle"); 
//
//const modalBody= document.getElementById("modal-body");
//const slider_back_big=document.getElementById("slider-back-big")
// 
//var myVar=setInterval(sliderChange, refreshRate);
//console.log("Global myvar: "+myVar);        

//slider_image.addEventListener('click',onClickSliderImage);
//function onClickSliderImage() {
//
//    if(slider_image.style.animationName ==="changeSliderImageWide2"){
//        
//        slider_back_big.src="slide-image-2.png";
//        modalLink.href="https://hotelchainbd.com";
//        modalTitle.innerHTML="Hotelchain";
//        modal.style.display = "block";
//        slider_image.style.animationPlayState="paused";
//        console.log("paused");
//        console.log("even my var: "+myVar);
//        
//        clearInterval(myVar); 
//        
//
//    }
//    else if(slider_image.style.animationName ==="changeSliderImageWide1"){
//        
//        slider_back_big.src="slide-image-1.png";
//        modalLink.href="https://travelerschoicebd.com";
//        modalTitle.innerHTML="Travelerschoice";
//        modal.style.display = "block";
//        slider_image.style.animationPlayState="paused";
//        console.log("paused");
//        console.log("odd my var: "+myVar);
//        
//        clearInterval(myVar); 
//
//    }
//
//
//}         
//function resetInterval(){
//    
//    modal.style.display = "none";
//    
//    refreshRate = 10000;
//    console.log("RefreshRate: "+refreshRate);
////    if(slider_image.style.animationName ==="changeSliderImageWide2"){
////        clearInterval(myVar); 
////        slider_image.style.animationPlayState="running";
////        imageCounter=1;
////        setInterval(sliderChange, refreshRate);
////    }
////    else{
////        clearInterval(myVar); 
//        slider_image.style.animationPlayState="running";
////        imageCounter=2;
//        setInterval(sliderChange, refreshRate);
////    }
//    
//}
//
//function closeModal(){
//    if(slider_image.style.animationPlayState==="paused"){
//        modal.style.display = "none";
//        console.log("paused");
//        resetInterval();
//
//    }
//    else{
//        console.log("Already Running");
//    }
//
//}
//function sliderChange()
//{
//
//
//    if(imageCounter===2)
//    {
//
//        modal.style.display = "none";
//        slider_image.style.animationPlayState="running";
//        slider_image.style.animationName ="changeSliderImageWide2";
//        
//        document.getElementById("product-slider-back").style.animationDuration="4s";
//        console.log("Image Counter: "+imageCounter);
//        console.log(slider_image.style.animationPlayState="running");
////        slider_back_big.src="slide-image-2.png";
////        modalLink.href="https://hotelchainbd.com";
////        modalTitle.innerHTML="Hotelchain";
////        modal.style.display = "block";
//        imageCounter=1;
//         
//
//    }
//    else
//    {
//        modal.style.display = "none";
//        slider_image.style.animationPlayState="running";
//        slider_image.style.animationName ="changeSliderImageWide1";
//        document.getElementById("product-slider-back").style.animationDuration="4s";
//        console.log("Image Counter: "+imageCounter);
//        console.log(slider_image.style.animationPlayState="running");
////        slider_back_big.src="slide-image-1.png";
////        modalLink.href="https://travelerschoicebd.com";
////        modalTitle.innerHTML="TravelersChoice";
////        modal.style.display = "block";
//        imageCounter=2;
//
//    }
//
//}
    
// product slider ends
    
AOS.init();

