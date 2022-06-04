let hamburger= document.querySelector(".hamburger");
let navLinks= document.querySelector(".nav-links");
let links= document.querySelectorAll(".nav-links li");
let load=document.getElementById("loading");   
 
hamburger.addEventListener("click",()=>{
    navLinks.classList.toggle("open");

    links.forEach(function(element){

        element.classList.toggle("fade");
    });

    hamburger.classList.toggle("toggle");
});
    
function loadDone(){
    
      load.style.display="none";
}    
    
window.onscroll = function() {scrollFunction()};    
function scrollFunction() {
//    
//    if(window.screen.width<=768)
//    {
//        if ((document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) && document.getElementById("nav-links").className.includes('open')) {
//            
//            document.getElementById("nav-wrapper").style.background = "black";
//            document.getElementById("nav-links").style.background = "black";
//            document.getElementById("nav-wrapper").style.zIndex = "100";
//            document.getElementById("nav-links").style.zIndex = "7";
//            document.getElementById("nav-wrapper").style.width = "100%";
//            
//        } 
//        else if ((document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) && !document.getElementById("nav-links").className.includes('open')) {
//            
//            document.getElementById("nav-wrapper").style.background = "black";
//            document.getElementById("nav-links").style.background = "black";
//            document.getElementById("nav-wrapper").style.zIndex = "100";
//            document.getElementById("nav-links").style.zIndex = "7";
//            document.getElementById("nav-wrapper").style.width = "100%";   
//         
//        }
//        else{
//         
//            document.getElementById("nav-wrapper").style.width = "100%";   
//            document.getElementById("nav").style.background = "dimgray";
//            document.getElementById("nav").style.opacity = "0.5";
//            document.getElementById("nav-links").style.background = "dimgray"; 
//            
//            document.getElementById("nav").style.height = "8vh"; 
//            document.getElementById("nav").style.transition= "all .5s";
//            const nodes = document.querySelectorAll('.nav-links a');
//         
//        }
//    
//    }
//    else{
//        
//        if ((document.body.scrollTop > 750 && window.screen.width>768) || (document.documentElement.scrollTop > 750 && window.screen.width>768)) {
//           
//            document.getElementById("nav").style.background = "black";
//            document.getElementById("nav-links").style.background = "black"; 
//            document.getElementById("nav").style.height = "7vh"; 
////            document.getElementById("nav-links").style.height = "7vh"; 
//            document.getElementById("nav").style.transition= "all .5s";
//            const nodes = document.querySelectorAll('.nav-links a');
//
//            for (const node of nodes) {
//                  
//                node.classList.add('shrink');
//                
//            }
//   
//        }
//        else
//        {
//            
//            document.getElementById("nav").style.background = "dimgray";
//            document.getElementById("nav").style.opacity = "0.5";
//            document.getElementById("nav-links").style.background = "dimgray"; 
//            
//            document.getElementById("nav").style.height = "8vh"; 
////            document.getElementById("nav-links").style.height = "8vh";
//            document.getElementById("nav").style.transition= "all .5s";
//            const nodes = document.querySelectorAll('.nav-links a');
//
//            for (const node of nodes) {
//                 
//                node.classList.remove('shrink');
//                
//            }
//        
//        }
//    }
//  
//    console.log("screen scroll: "+document.body.scrollTop);
    if(window.screen.width<=768){
        console.log("test 4 in if");
        if ((document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) && document.getElementById("nav-links").className.includes('open')) {
            document.getElementById("nav-wrapper").style.background = "black";
            document.getElementById("nav-links").style.background = "black";
            document.getElementById("nav-wrapper").style.zIndex = "100";
            document.querySelector(".nav-links.open").style.background = "black";
            document.querySelector(".nav-links.open").style.zIndex = "90";
            document.querySelector(".nav-links.open").style.background = "black";
//            alert("1st "+document.body.scrollTop);
            
        }else if((document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) && !document.getElementById("nav-links").className.includes('open')){
//                document.getElementById("nav-wrapper").style.background = "transparent";
                document.getElementById("nav-links").style.background = "black";
                document.getElementById("nav-wrapper").style.background = "transparent";
                document.getElementById("nav").style.background = "black";
                document.getElementById("nav").style.height =  "6.6vh";
                document.getElementById("nav-wrapper").style.zIndex = "100";
//                alert("2nd "+document.body.scrollTop);
                
                 }
        else if((document.body.scrollTop < 50 || document.documentElement.scrollTop < 50) && !document.getElementById("nav-links").className.includes('open')){
                document.getElementById("nav-wrapper").style.background = "transparent";
                document.getElementById("nav-links").style.background = "transparent";
                document.getElementById("nav").style.background = "dimgray";
                document.getElementById("nav-wrapper").style.zIndex = "100";
//                alert("new "+document.body.scrollTop);
                
                 }
        else if((document.body.scrollTop < 50 || document.documentElement.scrollTop < 50) && document.getElementById("nav-links").className.includes('open')){
                document.getElementById("nav-wrapper").style.background = "black";
                document.getElementById("nav-links").style.background = "black";
                document.getElementById("nav-wrapper").style.zIndex = "100";
//                alert("3rd "+document.body.scrollTop);
                 }
        else{
            console.log("Screen width lower than 768. Yet it doesn't fulfill any conditions.");
            
//            alert("4th "+document.body.scrollTop);
        }
    }else{
        console.log("test 4 in else");
        if(document.body.scrollTop > 70 || document.documentElement.scrollTop > 70){
            document.getElementById("nav-wrapper").style.background = "transparent";
            document.getElementById("nav-links").style.background = "black";
            document.getElementById("nav").style.background = "black";
            document.getElementById("nav").style.height = "6.6vh";
            document.getElementById("nav-links").style.height =  "6vh";
            document.getElementById("nav-wrapper").style.height =  "6.6vh";
            document.getElementById("nav").style.transition= "300ms linear";
            const nodes = document.querySelectorAll('.nav-links a');

            for (const node of nodes) {
                  
                node.classList.add('shrink');
                
            }
//            alert("5th");
        }else{
                document.getElementById("nav-wrapper").style.background = "transparent";
                document.getElementById("nav-links").style.background = "dimgray";
                document.getElementById("nav").style.background = "dimgray";
                const nodes = document.querySelectorAll('.nav-links a');
                document.getElementById("nav").style.height = "8vh"; 
                document.getElementById("nav-links").style.height = "7vh";
                document.getElementById("nav").style.transition= "300ms linear";
                for (const node of nodes) {

                    node.classList.remove('shrink');

                }
//            alert("6th");
        }
        
    }
}    
  
    
var main_categories=document.querySelectorAll('.main-list');
var secondary_categories=document.querySelectorAll('.secondary-list');    
var main_category_items=document.querySelectorAll('.main-category-item');
var main_category_item_images=document.querySelectorAll('.main-category-item img');
//var secondary_category_items=document.querySelectorAll('.secondary-category-item');
    
for (let category of main_categories) {
         
        category.addEventListener('click',function(){
            for (let category_inner of main_categories){
                category_inner.classList.remove('active');
            }
            this.classList.add('active');
            let main_data_filter=this.getAttribute('data-filter');
            
            console.log("main filter: "+main_data_filter);
            for (let secondary_category of secondary_categories) {
                secondary_category.addEventListener('click',function(){
                    for (let secondary_category_inner of secondary_categories){
                        secondary_category_inner.classList.remove('active');
                    }
                    this.classList.add('active');
                    let secondary_data_filter=this.getAttribute('data-filter');
                    console.log("secondary filter: "+secondary_data_filter);
                    
                    for (var main_category_item of main_category_items)
                    {
                        main_category_item.classList.add('hide-main-category-items-item');
                        main_category_item.classList.remove('active');
                        if(((main_category_item.getAttribute('data-item')==main_data_filter) && main_category_item.getAttribute('data-item-2')==secondary_data_filter)||  ((main_category_item.getAttribute('data-item')==main_data_filter) && secondary_data_filter=="all") || ((main_data_filter=="all") && secondary_data_filter==main_category_item.getAttribute('data-item-2')) || (main_data_filter=="all" && secondary_data_filter=="all") ){

                            console.log("data item: "+main_category_item.getAttribute('data-item'));
                            console.log("data item-2: "+main_category_item.getAttribute('data-item-2'));
                            
                                main_category_item.classList.remove('hide-main-category-items-item');
                                main_category_item.classList.add('active');
                            
                            
                            
                        }
                    }
                });
            }
            
        });            
    }
     
AOS.init();    


function getPrevPrice(min, max) {
  return Math.random() * (max - min) + min;
}

function getHTML(prev_price, disc_price){
    let html="<div class='main-category-item-extension'><div class='left-extension' style='position: absolute;top:0;left:0;padding: 5px;'><p style='margin:0;font-size: 18px;'>Label</p><p2>Sub-Label</p2></div><span></span><div class='plus-minus-holder'><i class='fa-solid fa-plus'></i><i class='fa-solid fa-minus'></i><p style='line-height: 1px;font-size: 18px;margin-top:12px;height:2px;flex:2;width;100%;text-align: end;padding-right:5px;'>100</p></div><div class='shopping-cart-icon-holder'><i class='fa-solid fa-cart-plus'></i><p style='text-decoration-line: line-through;text-decoration-color: dimgray;'>$"+prev_price+"</p> <p >$"+disc_price+"</p></div></div>";  
    return html;
}
for(let product_image of main_category_item_images){
      let prev_price=Math.floor(getPrevPrice(900,2400));
      let disc_price=Math.floor(prev_price-((prev_price*10)/100));
      let html= getHTML(prev_price, disc_price);
      product_image.insertAdjacentHTML("afterend", html);
      
  }
  




   