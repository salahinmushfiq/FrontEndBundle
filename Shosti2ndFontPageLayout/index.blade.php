<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" charset="utf-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--<script src="jquery.ripples.js"></script>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css"/>
<!--     <link rel="stylesheet" href="style1.css"/>-->
    <link rel="shortcut icon" href="images/lekhaporaonlinelogo.png" />
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    
    <title>Lekhapora Online</title>

    <style>
        :root{
            --primary_color_accent: linear-gradient(135deg,#4097f9,#0af0c7);
        }
        html{
         
            margin:0;
            padding:0;
        
        }
        body{
            font-family: 'Bangla', Arial, sans-serif ;
            margin:0;
            padding:0;
            background-image: url(images/back.jpg);
        }
        .main{
        
            height:auto;
            width: 100%;
            display: grid;
            grid-template-columns: 100%;
            grid-gap: 10px;
            box-sizing: border-box;
        
        }
        
        
/*
        .slider ul{
           
           position:relative;
           width:100%;
           height:700px;
           background-color:aliceblue;
        
        }
        .slider li:nth-child(1){
           
           position:relative;
           width:100%;
           height:700px;
           background:
        
        }
        .slider li:nth-child(2){
           
           position:relative;
           width:100%;
           height:700px;
           background-color:aliceblue;
        
        }
        .slider li:nth-child(3){
           
           position:relative;
           width:100%;
           height:700px;
           background-color:aliceblue;
        
        }
*/
        .cover{
            position:relative;
            width:100%;
            height:auto;
        }
        

        
    .nav-wrapper{
       z-index:10;
        position:fixed;
        width:100%;
/*        background:  rgba(255,255,255,.1);*/
       background:  rgba(255,255,255,.4);
        background:  #222322;
        
        height: 50px;
        /*padding-top:10px;*/
        padding-bottom:10px;
    
    }   
    .nav{
        z-index:10; 
        width:100%;
        height: 50px;
/*        background-color:grey;*/
        
        opacity:0.8;
        position:relative;
    }
    .nav-links{
        z-index:10;
        position: absolute;
        
        width:90%;
        left:8%;
        /*background-color: grey;*/
        z-index: 3;
        height: 40px;
        top:5px;
        bottom:5px;
        
        
        align-items: center;
        margin-left: auto;
        padding: 0;
        flex-direction: row;
        display: flex;
        justify-content: space-around;
    }
    .nav-links li a{
        color: white;
        text-decoration: none;
        font-size: 20px;
        font-weight: 600;
        line-height: 40px;
        /*color:black;*/
        color:#ffd302;
        
        
        
        
    }
    
    .nav-links li{
        z-index:10;
        list-style: none;
        width: inherit;
        height:inherit;
        margin-left: 15px;
        overflow: hidden;
          }
    
/* navbar button hover effect   */
    .btn-item{
        z-index:10;
        background:  rgba(255,255,255,0);
        
        color:white;
        border-left: 2px solid;
        border-right: 2px solid;
        
        transition: all 0.2s ease;
        
        display: block;
        width: inherit;
        height: 90%;
        
        text-align: center;
        


        
    }
    
    .btn-item:hover{
        
        
        
        
        
        background:  rgba(255,255,255,.2);
        transform:scaleX(.9);
        
        transform-style: preserve-3d;
/*
        transform: rotateX(15deg);
        box-shadow: 0 15px 15px lightblue;
*/
        box-shadow: 0 15px 15px rgba(255,255,255,.01);
        transition: all 1s ease-out;
        transform-origin: center;
    }
    html[data-useragent*='Android'] body {
    background-color: silver;
        border-top: 1em solid blue;
}
/* navbar button hover effect   */
    @media screen and (max-width: 768px){
        
/*        responsible for bubble effect*/
       /*        responsible for bubble effect*/
        .drawer{
           
            margin-bottom: auto;
            margin-top: auto;
            width:100%;
            height: inherit;
        }
        .nav-links{
            position:fixed;
            flex-direction:column;
            width:84%;
            height:75vh;
            color:white;
            top:12vh;
            
            align-content: left;
            clip-path:circle(0 at 90% -10%); 
            -webkit-clip-path:circle(0 at 90% 10%);
            align-content: center;
            transition: all 1s ease-out;
            text-align: center;
            opacity: 0.95;
            
            
        }
        .btn-item{
           margin-top:2px; 
           width: 80%;
            
            margin-right:10%; 
            margin-left:10%; 
        }
        .btn-item:hover{
        
/*        width:97%;*/
/*        border-color: dimgrey;*/
/*        transform: rotateY(15deg);*/
        transform: scale(.97);
        box-shadow: -2px 0 2px silver;

        transition: all 1s ease-out;
        }
        .nav-links.open{
            clip-path:circle(1000px at 90% 10%); 
            -webkit-clip-path:circle(1000px at 90% 10%);
            transition: all 1s ease-out;
/*            background: rgba(255,255,255,.1);*/
            background-color:#222322;
            
        }
        /*        responsible for bubble effect*/
        .line{
            width:30px;
            height:3px;
            background:white;
            margin: 5px;
            
        }
        .hamburger{
            position: absolute;
            cursor: pointer;
            right: 5%;
            top:5%;
            transform:translate(-5%,50%);
            z-index: 2;
            display: block;
            
        }
        .hamburger div{
            transition: all 0.3s ease;
        }
        
        .nav-links li{
            
            opacity:0;
        }
       .nav-links li a{
            font-size: 25px;
        }
        .nav-links li:nth-child(1){
            transition: all 0.5 2s;
        }
        .nav-links li:nth-child(2){
            transition: all 0.5 4s;
        }
        .nav-links li:nth-child(3){
            transition: all 0.5 6s;
        }
        .nav-links li:nth-child(4){
            transition: all 0.5 8s;
        }
        .nav-links li:nth-child(5){
            transition: all 0.5 10s;
        }
        .nav-links li.fade{
            opacity:1;
        }
        .toggle .line1{
            transform: rotate(-45deg) translate(-5px,6px);
        }
        .toggle .line2{
            opacity: 0;
        }
        .toggle .line3{
            transform: rotate(45deg) translate(-5px,-6px);
        }
    } 
        
        
        
        /* Our Digital services style begins here */

.services {
    position:relative;
    padding: 60px 0 90px 0;
    text-align: center;
    margin-top:50px;
    
}

.services h2 {
    color: #000;
    font: 68px/125% 'Futura PT book';
    margin-bottom: 90px;
}

.services .each-services img {
    width: 80px;
    height: auto;
    padding-bottom: 30px;
}

.services .each-services h3 {
    color: #000;
    font-size: 30px;
    line-height: 110%;
    font-family: 'Futura PT book';
    margin-bottom: 20px;
}

.services .each-services p {
    color: #000;
    font-size: 18px;
    line-height: 120%;
    font-family: 'Futura PT book';
    margin-bottom: 70px;
}

.services .fas ,.services .fab{ 
    
    transform:scale(8); 
    margin-bottom:70px;
    margin-top:70px;
    color:skyblue;

}

/* Our Digital services style ends here */
        
        
.process{
        
    position: relative;
    width:100%;
    height:auto;
}
.sdlcCycle{
    margin-left:15%;
    margin-right:15%;
    width:70%;
    height:auto;
    }
        
.process h2 {
    color: #000;
    font: 68px/125% 'Futura PT book';
    margin-bottom: 90px;
    width:100%;
    text-align: center;
}
/*@keyframes cycleAnimate{*/
          
/*
             from {
                 
                 transform: rotateZ(0deg);
             }
             to {
                 
                 transform: rotateZ(360deg);
             }
*/
/*             0%{*/
                 
/*                 transform: rotateZ(0deg);*/
/*             }*/
/*             25%{*/
                 
/*                 transform: rotateZ(60deg);*/
/*             }*/
/*            50%{*/
                 
/*                 transform: rotateZ(120deg);*/
/*             }*/
/*            75%{*/
                 
/*                 transform: rotateZ(240deg);*/
/*             }*/
/*             100% {*/
                 
/*                 transform: rotateZ(360deg);*/
/*             }*/
/*         }*/
/*#cycle{*/
      
/*    animation: cycleAnimate 12s linear ;*/
/*    animation-iteration-count: infinite;*/
/*    transform-origin: center;*/
/*    transform-box: fill-box;*/
/*    border: 2px black solid;*/

/*}*/
/*#planningText,#designText,#testingText,#maintenanceText,#implementText,#analysisText{*/
      
    
/*    transition: all 2s infinite;*/

/*}*/
/*#planning,#design,#testing{*/
        
/*     fill:#0b5793; */
        
/*}*/
/*#maintenance,#implementation,#analysis{*/
        
/*     fill:#2da2e2; */
        
/*}*/
/*@keyframes visibleImage{*/
          
/*             0% {*/
                 
/*                 visibility: hidden;*/
/*             }*/
/*             25% {*/
                
/*                 opacity:.7;*/
/*                 visibility: visible;*/
/*             }*/
/*             50% {*/
                 
/*                 opacity:.9;*/
/*                 visibility: visible;*/
/*             }*/
/*             75% {*/
                
/*                 opacity:1;*/
/*                 visibility: visible;*/
/*             }*/
/*             100% {*/
                
/*                 visibility: hidden;*/
/*             }*/
         
/*         }   */
/*#planningImage,#designImage,#testingImage,#maintenanceImage,#implementationImage,#analysisImage {*/
        
/*     visibility: hidden;  */
     
        
/*}       */
/*#planningImage{*/
    
/*    animation-delay: 0s;*/
/*    animation: visibleImage;  */
/*    animation-duration: 2s;*/
/*    animation-iteration-count: 1;*/
    
    
    
/*}*/
/*#analysisImage{*/
    
/*    animation: visibleImage;  */
/*    animation-delay: 2s;*/
/*    animation-duration: 2s;*/
/*    animation-iteration-count: 1;*/
    
    
/*        }*/
/*#designImage{*/
       
/*        animation: visibleImage; */
/*        animation-delay: 4s;*/
/*        animation-duration: 2s;*/
/*        animation-iteration-count: 1;*/
        
        
/*}*/
/*#implementationImage{*/
    
/*    animation: visibleImage; */
/*    animation-delay: 6s;*/
/*    animation-duration: 2s;*/
/*    animation-iteration-count: 1;*/
    
    
/*}*/
/*#maintenanceImage{*/
    
/*    animation: visibleImage;  */
/*    animation-delay: 8s;*/
/*    animation-duration: 2s;*/
/*    animation-iteration-count: 1;*/
    
    
/*} */
/*#testingImage{*/
   
/*    animation: visibleImage;  */
/*    animation-delay: 10s;*/
/*    animation-duration: 2s;*/
/*    animation-iteration-count: 1;*/
    
    

/* }        */

        
        
        
    /*image gallery starts         */
        
.products{
        
    width: 100%;
    background-image:url(images/hotelchain.PNG);
    background-image:url(images/cover.jpg);

    background-repeat: no-repeat;
    background-blend-mode: lighten;
    height:auto;
    margin-top: 100px;
    overflow: hidden; 
    margin-bottom:30px;
    background-size: cover;
    z-index: 10;
            
}
        
/*        // BASIC*/

.products ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding-top:4%;
  transform: rotate(25deg);
  width: 60%;
  margin-left: auto;
  height:auto;  
  overflow: hidden; 
  padding-bottom:4%;
  
/*  background-size: cover;    */
}

.products li {
  height: 40vh;
  flex-grow: 1;
  margin: 15px; 
  
}

.products li:last-child {
  
  flex-grow: 10;
}

.products img {
  max-height: 100%;
  width: 100%;
  object-fit: cover;
  vertical-align: bottom;
  border-radius: 15px;
  border-style: solid;
  border-color:whitesmoke;
  border-width: 5px;
  background-color:aliceblue;    
   
}

.products img:hover {
    
   transform: scale(1.02);
    
   transition-duration:1s;
   transition-timing-function: ease-in-out;
    
} 
        .coverQuote::after{
            content:"";
            position: absolute;
            right:0;
            top:0;
            
        }   
        
        
        
        
        
        
        
        
        
        
        
        
        
.videoWrapper {
  margin-top:20px;    
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  height: 0;
}
.videoWrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 97%;
  height: 96%;
  left:1.5%;
  right:1.5%;
}



        .slides {
            top:50px;
            position: relative;
            display: block;
height: auto;
            width: 70%;
            margin-left:15%;
            margin-right:15%;
            background: #fff;
            transition: background 1s cubic-bezier(0.99, 1, 0.92, 1);
        }
        .is-sliding .slides {
            background: #ededed;
            transition: background 0.3s cubic-bezier(0.99, 1, 0.92, 1);
        }

        .slide {
            z-index: -1;
            padding: 0;
            position: absolute;
            height: auto;
            width: 70%;
            width: 100%;
            
            transition: z-index 1s ease;
        }
        .slide.is-active {
            z-index: 2;
            transition: z-index 1s ease;
        }
        .slide__content {
            position: relative;
            margin: 0 auto;
            height: auto;
            width: 70%;
            
        }
        @media (min-width: 54em) {
            .slide__content {
                height: 300px;
                width: auto;
                
            }
        }
      
        
        .slide__figure {
            z-index: 1;
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
            height: 300px;
            width: auto;
            background-size:cover;
            transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        }
        .is-sliding .slide__figure {
            transform: scale(0.8);
            transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        }
        .slide__img {
            position: relative;
            display: block;
            
            background-attachment: fixed;
            /*background-position: 50%;*/
            -webkit-backface-visibility: hidden;

            background-repeat:no-repeat;
            filter: grayscale(0%);
            transition: height 1s 1.4s cubic-bezier(0.19, 1, 0.22, 1), filter 0.4s 0.1s ease;
        }
        .is-active .slide__img {
            height: 100%;
            opacity: 1;
            transition: height 0.5s 0.3s cubic-bezier(0.77, 0, 0.175, 1), filter 0.4s 0.1s ease;
        }
        .is-sliding .slide__img {
            filter: grayscale(100%);
        }
        
        
        @media screen and (max-width: 768px) {
              .main-content {
                flex-direction: column;
              }
              .content-1{
                width: 100%;
                
                  flex:5;
              }   
              .content-3{
               width: 100%;
              
                  flex:5;
              }    
            }
        
        
            .nav-2{
        z-index:10; 
        width:100%;
        height: 50px;
/*        background-color:grey;*/
        
        opacity:0.6;
        position:relative;
    }
        .nav-links-2{
        z-index:10;
        position: absolute;
        
        
        left:8%;
        /*background-color: grey;*/
        z-index: 3;
        height: 40px;
        top:5px;
        bottom:5px;
        
        
        align-items: center;
        margin-left: auto;
        padding: 0;
        flex-direction: row;
        display: inline-flex;
        justify-content: space-around;
    }
    .nav-links-2 li a{
        color: white;
        text-decoration: none;
        font-size: 20px;
        font-weight: 600;
        line-height: 40px;
        /*color:black;*/
        color:#ffd302;
        
        
        
        
    }
    
    .nav-links-2 li{
        z-index:10;
        list-style: none;

        margin-left: 15px;
        overflow: hidden;
          }
    
/* navbar button hover effect   */
    .btn-item-2{
        z-index:10;
        background:  rgba(255,255,255,0);
        
        color:white;
        border-left: 2px solid;
        border-right: 2px solid;
        
        transition: all 0.2s ease;
        
        display: inline-flex;
        
        height: 90%;
        flex: auto;
        text-align: center;
        


        
    }
        .btn-item-2::after{
            background-image:url(down.png);
        }
        
        .accordion-body{
           padding-left: 5px;
           padding-right: 5px;
           padding-top: 5px;
           padding-bottom: 5px;   
           background-color: #484848;
           
            
        }
       .accordion-button:not(.collapsed)::after{
            background-image:url(down.png);
        }
        
        .accordion-button:not(.collapsed) {
            background-color: #484848;
        
        }
        .accordion-button:focus{
            
            border-color: white;
            background-color: white;
            box-shadow: white;
        }
       .btn-item-2:hover{
        
        
        
        
        
        background:  rgba(255,255,255,.2);
        transform:scaleX(.99);
        
        transform-style: preserve-3d;
/*
        transform: rotateX(15deg);
        box-shadow: 0 15px 15px lightblue;
*/
        box-shadow: 0 15px 15px rgba(255,255,255,.01);
        transition: all 1s ease-out;
        transform-origin: center;
    }
        
        .btn-item-3{
        z-index:1;
        background:  rgba(255,255,255,0);
        
        color:white;
/*
        border-left: 2px solid;
        border-right: 2px solid;
*/
        
        transition: all 0.2s ease;
        transform:scaleX(1);
        display: inline-flex;
        
        height: 90%;
        flex: auto;
        text-align: center;
        


        
       }
        .btn-item-3::after{
            background-image:url(down.png);
        }
       .accordion-button.collapsed::after{
            background-image:url(down.png);
        }
       .btn-item-3:hover{
        background:  rgba(255,255,255,.2);
        transform:scaleX(.99);
        transform-style: preserve-3d;
        box-shadow: 0 15px 15px rgba(255,255,255,.01);
        transition: all 1s ease-out;
        transform-origin: center;
        }
        .accordion-button:focus{
            border-color:dimgrey;
            border: none;
        }
        
        .category.category-1{
            
            width:100%;
            height:auto;
            position: relative;
            transform: scaleX(0);
            transition: all .5s ease;
            
        }
        .category.category-1.is-active {
            
           position: relative;
             width:100%;
             height:auto;
            transform: scaleX(1);
            transition: all .5s ease;
        }
        .category.category-2{
            width:100%;
            height:auto;
            position: relative;
            transform: scaleX(0);
            transition: all .5s ease;
            
        }
         .category.category-2.is-active{
            
            position: relative;
             width:100%;
             height:auto;
            transform: scaleX(1);
            transition: all .5s ease;
        }
        .category.category-3{
            width:100%;
            height:auto;
            position: relative;

            
            transform: scaleX(0);
            transition: all .5s ease;
            
        }
         .category.category-3.is-active{
            
            position: relative;
             width:100%;
             height:auto;
            transform: scaleX(1);
            transition: all .5s ease;
        }
        
        
        

        .category.category-1{
            
           position: relative;
           width:100%;
           height:auto;
           transform: scaleX(1);
           transition: all .5s ease;
        }

         .category.category-2{
            
            position: relative;
            width:100%;
            height:auto;
            transform: scaleX(1);
            transition: all .5s ease;
        }
        
         .category.category-3{
            
            position: relative;
            width:100%;
            height:auto;
            transform: scaleX(1);
            transition: all .5s ease;
        }
        
        .classesContainer{
            display:flex;
            flex-direction: row;
            flex-wrap:wrap;
            justify-content:flex-start;
        }
        .classesContainer button{
            display:block; 
            border-style: solid;
            border-width:medium;
            border-color: #484848;
            width:150px;
            text-align: center;
            margin: 6px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            color:#ffd302;
            background-color: #222322;
            padding: 5px;
        }
        .classesContainer button:hover{
            color:white;
            transform: scaleX(1.02);
            transition: all .5s ease;
        }
        
        
     
        
.profile-container{
  
    height:auto;
    min-height: 300px;
}       
.profile-container img {
    height: 150px;
    width: 150px;
    border: 8px solid #eee;
    position: absolute;
    left: 50%;
    top: 0;
    transform: translate(-50%, -50%)
}
.profile-container .card: img{
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
} 
.profile-container .card:hover img{
    filter: grayscale(100%);
}        
        
.profile-container .card {
    position: relative;
    width: 100%;
    border-radius: 5px;
    border: none;
    padding:4px;
      margin-top:40px;
    margin-bottom:60px;
/*    padding:30px;*/
    
    
}

.profile-container .name {
    font-size: 20px;
    margin-bottom: 6px;
    padding-top: 90px;
}

.profile-container .job {
    color: #fa2525;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 8px
}

.profile-container .card .icons .icon {
    font-size: 14px;
    width: 30px;
    height: 30px;
    color: white;
    background-color: #ffd302;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer
}

.profile-container .dis {
    color: #7e7c7c;
    line-height: 2
}

.profile-container.card .icons .icon {
    background-color: #f06d6d;
    
}
.profile-container .card .text-center{
            
    background-color: #212529;
    color: white;
    transition: all .5s ease;
}

.profile-container .card:hover .text-center {
    background-color: #fa2525;
    background-color: #212529;
    color: white;
    transition: all .5s ease;
    
}

.profile-container .card:hover .job,
.profile-container .card:hover .name {
    color: white
}

.profile-container .card:hover .dis {
    color: #c4c4c4;
}

.profile-container .card .icons .icon:hover {
    background-color: rgb(235, 123, 103)
}

.profile-container .mt-80 {
    margin-top: 80px
}
        
        
        
        
        
/*
.reading-container .reading-1:hover .girlwithpc path{
            
    fill:#ffd302;
    transition-duration: 1.5s;  
    
} 
.reading-container .reading-2:hover .texts path{
            
    fill:#ffd302;
    transition-duration: 1.5s;  
    
}          
        

.reading-container .teaching:hover .drawing_on_board path{
            
    fill:#ffd302;
    transition-duration: 1.5s;  
    
}         
.reading-container .teaching:hover .wall path{
            
    fill:black;
    transition-duration: 1.5s;  
    
}  
*/

.reading-container{
    
    background-color: rgba(255,255,255,.08);
    position: relative; 
    width:80%; 
    height:auto;
    margin-left:10%;
    margin-right:10%;
    padding: 2%; 
    border-color:white;
    border-style: solid;
    border-radius: 8px;
    border-width: thin;


}  
.reading-container:hover{
    
    background-color: rgba(255,255,255,.08);
    position: relative; 
    width:80%; 
    height:auto;
    margin-left:10%;
    margin-right:10%;
    padding: 2%; 
    border-color:white;
    border-style: solid;
    border-radius: 6px;
    border-width: thin;
    transform:scale(1.01);
    transform-style: preserve-3d;
    box-shadow: 0 15px 15px rgba(255,255,255,.01);
    transition: all 1s ease-out;
    transform-origin: center;
    
}            
  
.reading-container:hover .teacher-drawing-on-the-board path{
            
    fill:#ffd302;
    transition-duration: .5s;  
    
}         
.reading-container:hover .girl-pc path{
            
    fill:#ffd302;
    transition-delay: .5s;
    transition-duration: .5s;  
    
} 
.reading-container:hover .boy-texts path{
            
    fill:#ffd302;
    
    transition-delay: .5s;
    transition-duration: .5s;  
    
}          
        

.reading-container:hover .arrows path{
            
    fill:#ffd302;
    transition-duration: .5s;  
    transform-origin:left;
    
}    
/*
.reading-container:hover .girl-pc path{
            
     fill:#ffd302;
    transition-duration: 1.5s;  
    
}           
.reading-container:hover .boy-texts path{
            
     fill:#ffd302;
    transition-duration: 1.5s;  
    
}          
*/

h2 {
  position: relative;
  padding: 0;
  margin: 0;
  font-family: "Raleway", sans-serif;
  font-weight: 300;
  font-size: 40px;
  color: #080808;
    color: white;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}

h2 span {
  display: block;
  font-size: 0.5em;
  line-height: 1.3;
}
h2 em {
  font-style: normal;
  font-weight: 600;
    
}
        
        
.header2 h2 {
  text-transform: capitalize;
}
.header2 h2:before {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 60px;
  height: 2px;
  content: "";
  background-color: #ffd302;
}

.header2 h2 span {
  font-size: 13px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 4px;
  line-height: 3em;
  padding-left: 0.25em;
  color: rgba(0, 0, 0, 0.4);
  color: rgba(255, 255, 255, 0.4);
  padding-bottom: 10px;
}
.alt-two h2 {
  text-align:center;
}
.alt-two h2:before {
  left:50%; margin-left:-30px;
}        
        
    </style>

</head>
<body>
<div class="main">
          
<div class="cover" >
<div class="nav-wrapper">      
<div class="nav">
     <div class="hamburger">
           <div class="line line1"></div>
           <div class="line line2"></div>
           <div class="line line3"></div>
       </div>
       <div class="drawer">
           <ul class="nav-links">
               <li><a class="btn-item" href="#home">Home</a></li>
               <!--<li><a class="btn-item" href="#categories">Categories</a></li>-->
               <li><a class="btn-item" href="#categories">Playlists</a></li>
               <li><a class="btn-item" href="#">Process</a></li>
               <li><a class="btn-item" href="#">About</a></li>
               <li><a class="btn-item" href="#">Contact</a></li>
            </ul>
       </div>
</div>  
</div> 

  
</div>

<div>
<div class="main-content" style="height:auto;display: flex;flex-direction: row;flex-wrap:wrap;">
<div class="content-1" style="flex:.5;margin-top:28px;">\
    <img src="left1.png" style="width:100%;margin-bottom: 10px;">
    <img src="left2.png" style="width:100%;">
</div>
<div class="content-2" style="flex: 5;width:60%;text-align: center;margin-top: 45px;margin-bottom: 20px;" >
    <div id="home" style="margin-left:auto;margin-right:auto; padding: 20px;opacity: .9;relative;">
        <img src="images//banner.jpg" style="width:100%;height:auto;" data-aos="fade-up" data-aos-mirror="true">
        

    </div>             
<!--    <h1 style="font-size: 40px;font-weight: 600;color: #ffd302;margin-left:auto;margin-right:auto; padding: 20px;opacity: .9"></h1>-->
    <div class="videoWrapper" data-aos="fade-up" data-aos-mirror="true">
        <iframe  
            src="https://www.youtube.com/embed?listType=playlist&list=PLTBUJ0ZBgvLhUSvThr6SeVkaUaHmRBPP3&index=0" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe> 
    </div>  
        
<!--    <h2 style="width:100%;text-align: center;margin-top: 45px;margin-bottom: 40px;font-size: 30px;font-weight: 600;">Playlists</h2>-->
    <div class="header2 alt-two" style="margin-bottom:30px;">
          <h2>
              Playlists
              <span>Categorized</span>
          </h2>
        </div>
    <div id="categories" class="categories" style="width: 96%;margin-left:2%;margin-right:2%;justify-content:space-around;position: relative;height:auto;" >
    
        <div class="accordion" style="z-index: 1;">
            <div class="accordion-item" style="margin-bottom:20px;border-color:#383838;">
                <h2 class="accordion-header" style="background-color:#222322;z-index: 1;">
                  <button class="accordion-button btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnglish" aria-expanded="false" aria-controls="collapseEnglish" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                    English
                  </button>
                </h2>
                <div id="collapseEnglish" class="accordion-collapse collapse" aria-labelledby="headingEnglish" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="category category-1">
<!--             <h1 style="width:100%;text-align: center;margin-top: 25px;margin-bottom: 20px;font-size: 35px;font-weight: 600;">English</h1>-->
            <div class="accordion" id="accordionExample">
              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                <h2 class="accordion-header" style="background-color:#222322;">
                  <button class="accordion-button btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                    VI
                  </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="classesContainer" >
                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</button>
                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Mathematics</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Science</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Information And Communication Technology</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>চারুপাঠ</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Bangladesh And Global Studies</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Islam and Moral Education</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Agriculture Studies</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Work and Life Oriented Education</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Physical Education and Health</button>
                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Home Science</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                <h2 class="accordion-header" id="heading2" style="background-color:#222322;">
                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                    VII
                  </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="classesContainer" >
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Mathematics</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Science</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Information And Communication Technology</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>সপ্তবর্ণা</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Bangladesh And Global Studies</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Islam and Moral Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Agriculture Studies</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Work and Life Oriented Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Physical Education and Health</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Home Science</button>
                        </div>
                    </div>    
                </div>
              </div>
              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                <h2 class="accordion-header" id="heading3" style="background-color:#222322;">
                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                    VIII
                  </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="classesContainer" >
                          
                         <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Mathematics</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Science</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Information And Communication Technology</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>সাহিত্য কনিকা</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>রচনাসম্ভার</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Career Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Islam and Moral Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Bangladesh And Global Studies</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Arts and Crafts</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>History of Bangladesh and World Civilization</button> 
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Physical Education and Health</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Home Science</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                <h2 class="accordion-header" id="heading4" style="background-color:#222322;">
                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseFour" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                    IX
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="classesContainer" >
                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Mathematics</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Science</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Information And Communication Technology</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>সাহিত্য কনিকা</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>রচনাসম্ভার</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Physics</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Chemistry</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Biology</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Higher Mathematics</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Geography and Environment</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Economy</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Home Science </button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Politics and Citizenship</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Accounting</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Finance and Banking</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Business Ventures</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Islam and Moral Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Career Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Islam and Moral Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Bangladesh And Global Studies</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Arts and Crafts</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>History of Bangladesh and World Civilization</button>
                    </div>
                  </div>
                </div>
              </div>   
              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                <h2 class="accordion-header" id="heading5" style="background-color:#222322;">
                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                    X
                  </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="classesContainer" >
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Mathematics</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Science</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Information And Communication Technology</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>সাহিত্য কনিকা</button>
                          <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>রচনাসম্ভার</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Physics</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Chemistry</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Biology</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Higher Mathematics</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Geography and Environment</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Economy</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Home Science </button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Politics and Citizenship</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Accounting</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Finance and Banking</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Business Ventures</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Islam and Moral Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Career Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Islam and Moral Education</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Bangladesh And Global Studies</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>Arts and Crafts</button>
                          <button><i class="fas fa-play" style="margin-right:10px;"></i>History of Bangladesh and World Civilization</button>
                    </div>
                  </div>
                </div>
              </div>  
              <!--<div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">-->
              <!--  <h2 class="accordion-header" id="heading6" style="background-color:#222322;">-->
              <!--    <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">-->
              <!--      XI-->
              <!--    </button>-->
              <!--  </h2>-->
              <!--  <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">-->
              <!--    <div class="accordion-body">-->
              <!--      <div class="classesContainer" >-->
              <!--          <button>Language</button>-->
              <!--          <button>Maths</button>-->
              <!--          <button>Physics</button>-->
              <!--          <button>Chemistry</button>-->
              <!--          <button>Biology</button>-->
              <!--          <button>Social Studies</button>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>    -->
              <!--<div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">-->
              <!--  <h2 class="accordion-header" id="heading7" style="background-color:#222322;">-->
              <!--    <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">-->
              <!--      XII-->
              <!--    </button>-->
              <!--  </h2>-->
              <!--  <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">-->
              <!--    <div class="accordion-body">-->
              <!--      <div class="classesContainer" >-->
              <!--          <button>Language</button>-->
              <!--          <button>Maths</button>-->
              <!--          <button>Physics</button>-->
              <!--          <button>Chemistry</button>-->
              <!--          <button>Biology</button>-->
              <!--          <button>Social Studies</button>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>       -->
           </div>
        </div>
                  </div>
                </div>
              </div>
            
            <div class="accordion-item" style="margin-bottom:20px;border-color:#383838;">
                 <h2 class="accordion-header" style="background-color:#222322;z-index: 1;">
                  <button class="accordion-button btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBangla" aria-expanded="false" aria-controls="collapseBangla" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;font-size: 18px;">
                    বাংলা
                  </button>
                 </h2>     
                 <div id="collapseBangla" class="accordion-collapse collapse" aria-labelledby="headingBangla" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="category category-2">
                          <div class="accordion" id="accordionExample">
                              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                                <h2 class="accordion-header" style="background-color:#222322;">
                                  <button class="accordion-button btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                                    ৬ষ্ঠ
                                  </button>
                                </h2>
                                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="classesContainer" >
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গণিত</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>তথ্য ও যোগাযোগ প্রযুক্তি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>চারুপাঠ</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলাদেশ ও বিশ্বপরিচয়</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ইসলাম ও নৈতিক শিক্ষা </button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>কৃষি শিক্ষা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>কর্ম ও জীবনমুখী শিক্ষা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>শারীরিক শিক্ষা ও স্বাস্থ্য</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গার্হস্থ্য বিজ্ঞান</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                                <h2 class="accordion-header" id="heading9" style="background-color:#222322;">
                                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                                    ৭ম
                                  </button>
                                </h2>
                                <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="classesContainer" >
                                       <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গণিত</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>তথ্য ও যোগাযোগ প্রযুক্তি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>সপ্তবর্ণা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলাদেশ ও বিশ্বপরিচয়</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ইসলাম ও নৈতিক শিক্ষা </button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>কৃষি শিক্ষা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>কর্ম ও জীবনমুখী শিক্ষা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>শারীরিক শিক্ষা ও স্বাস্থ্য</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গার্হস্থ্য বিজ্ঞান</button>
                                    </div>
                                  </div>
                                </div>
</div>
                              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                                <h2 class="accordion-header" id="heading10" style="background-color:#222322;">
                                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse3" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                                    ৮ম
                                  </button>
                                </h2>
                                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="classesContainer" >
                                       <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গণিত</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>তথ্য ও যোগাযোগ প্রযুক্তি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>সাহিত্য কনিকা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলাদেশ ও বিশ্বপরিচয়</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ইসলাম ও নৈতিক শিক্ষা </button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>কৃষি শিক্ষা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>কর্ম ও জীবনমুখী শিক্ষা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>শারীরিক শিক্ষা ও স্বাস্থ্য</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গার্হস্থ্য বিজ্ঞান</button>
                                    </div>
                                  </div>
                                </div>
</div>
                              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                                <h2 class="accordion-header" id="heading11" style="background-color:#222322;">
                                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                                    ৯ম
                                  </button>
                                </h2>
                                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="classesContainer" >
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা সাহিত্য</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা সহপাঠ</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গণিত</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>পদার্থ বিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>রসায়ন</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>জীববিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>উচ্চতর গণিত</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>তথ্য ও যোগাযোগ প্রযুক্তি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>সাহিত্য কনিকা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলাদেশ ও বিশ্বপরিচয়</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ইসলাম ও নৈতিক শিক্ষা </button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>কৃষি শিক্ষা</button>n>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গার্হস্থ্য বিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>রচনাসম্ভার</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ভূগোল ও পরিবেশ </button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>অর্থনীতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>পৌরনীতি ও নাগরিকতা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>হিসাববিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ফিন্যান্স ও ব্যাংকিং</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ব্যবসায় উদ্যোগ</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ক্যারিয়ার এডুকেশন </button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলাদেশের ইতিহাস ও বিশ্বসভ্যতা</button> 
                                    </div>
                                  </div>
                                </div>
</div>   
                              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">
                                <h2 class="accordion-header" id="heading12" style="background-color:#222322;">
                                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                                    ১০ম
                                  </button>
                                </h2>
                                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="classesContainer" >
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা সাহিত্য</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English for Today</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English Grammer and Composition</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা সহপাঠ</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গণিত</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>পদার্থ বিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>রসায়ন</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>জীববিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>উচ্চতর গণিত</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>তথ্য ও যোগাযোগ প্রযুক্তি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>সাহিত্য কনিকা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলা ব্যাকরণ ও নির্মিতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলাদেশ ও বিশ্বপরিচয়</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ইসলাম ও নৈতিক শিক্ষা </button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>কৃষি শিক্ষা</button>n>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>গার্হস্থ্য বিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>রচনাসম্ভার</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ভূগোল ও পরিবেশ </button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>অর্থনীতি</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>পৌরনীতি ও নাগরিকতা</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>হিসাববিজ্ঞান</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ফিন্যান্স ও ব্যাংকিং</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ব্যবসায় উদ্যোগ</button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>ক্যারিয়ার এডুকেশন </button>
                                        <button lang="bn"><i class="fas fa-play" style="margin-right:10px;"></i>বাংলাদেশের ইতিহাস ও বিশ্বসভ্যতা</button>
                                    </div>
                                  </div>
                                </div>
</div>  
<!--                              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">-->
<!--                                <h2 class="accordion-header" id="heading13" style="background-color:#222322;">-->
<!--                                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">-->
<!--                                    ১১দশ-->
<!--                                  </button>-->
<!--                                </h2>-->
<!--                                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">-->
<!--                                  <div class="accordion-body">-->
<!--                                    <div class="classesContainer" >-->
<!--                                        <button>Bangla</button>-->
<!--                                        <button>English</button>-->
<!--                                        <button>General Math</button>-->
<!--                                        <button>Higher Math</button>-->
<!--                                        <button>Physics</button>-->
<!--                                        <button>Chemistry</button>-->
<!--                                        <button>Biology</button>-->
<!--                                        <button>ICT</button>-->
<!--                                        <button>Finance</button>-->
<!--                                        <button>Business Entrepreneurship</button>-->
<!--                                        <button>Agricultural Studies</button>-->
<!--                                        <button>General Science</button>-->
<!--                                        <button>Bangladesh and Global Studies</button>-->
<!--                                    </div>-->
<!--                                  </div>-->
<!--                                </div>-->
<!--</div>    -->
<!--                              <div class="accordion-item" style="margin-bottom:2px;border-color:#383838;">-->
<!--                                <h2 class="accordion-header" id="heading14" style="background-color:#222322;">-->
<!--                                  <button class="accordion-button collapsed btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">-->
<!--                                    ১২দশ-->
<!--                                  </button>-->
<!--                                </h2>-->
<!--                                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">-->
<!--                                  <div class="accordion-body">-->
<!--                                    <div class="classesContainer" >-->
<!--                                        <button>Bangla</button>-->
<!--                                        <button>English</button>-->
<!--                                        <button>General Math</button>-->
<!--                                        <button>Higher Math</button>-->
<!--                                        <button>Physics</button>-->
<!--                                        <button>Chemistry</button>-->
<!--                                        <button>Biology</button>-->
<!--                                        <button>ICT</button>-->
<!--                                        <button>Finance</button>-->
<!--                                        <button>Business Entrepreneurship</button>-->
<!--                                        <button>Agricultural Studies</button>-->
<!--                                        <button>General Science</button>-->
<!--                                        <button>Bangladesh and Global Studies</button>-->
<!--                                    </div>-->
<!--                                  </div>-->
<!--                                </div>-->
<!--</div>       -->
                           </div>
                         </div> 
                    </div>
                </div>
            </div>
            
            
            <div class="accordion-item" style="margin-bottom:40px;border-color:#383838;">
                 <h2 class="accordion-header" style="background-color:#222322;z-index: 1;">
                  <button class="accordion-button btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOthers" aria-expanded="false" aria-controls="collapseOthers" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                    Others
                  </button>
                </h2>     
                <div id="collapseOthers" class="accordion-collapse collapse" aria-labelledby="headingOthers" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="category category-3">
                            <div class="accordion" id="accordionExample">
                              <div class="accordion-item" style="border-color:#383838;">
                                <h2 class="accordion-header" style="background-color:#222322;">
                                  <button class="accordion-button btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                                    DIY
                                  </button>
                                </h2>
                                <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="classesContainer" >
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Organize the Home</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Vintage Inspired Herb Prints</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Farmhouse Paper Towel Holder</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Stackable Laundry Basket Storage</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Wooden Spice Rack Build Plans</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item" style="border-color:#383838;">
                                <h2 class="accordion-header" style="background-color:#222322;">
                                  <button class="accordion-button btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                                    Skill Development
                                  </button>
                                </h2>
                                <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="classesContainer" >
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English Speaking</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Graphics Design</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Web Development</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Android Development</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Cross Platform Development</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>UI Design</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item" style="border-color:#383838;">
                                <h2 class="accordion-header" style="background-color:#222322;">
                                  <button class="accordion-button btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                                    Language Skill Development
                                  </button>
                                </h2>
                                <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="classesContainer" >
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>TOEFL</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>IELTS</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>CAE</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>CPE</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item" style="border-color:#383838;">
                                <h2 class="accordion-header" style="background-color:#222322;">
                                  <button class="accordion-button btn-item-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18" style="color: white; display: inline-flex;  color:#ffd302; border-style: none none none solid;border-color:#ffd302; padding: 10px;height:80px;line-height: 60px;background-color: #222322;">
                                    Admission
                                  </button>
                                </h2>
                                <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="classesContainer" >
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Bangla</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>English</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Math</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Physics</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Chemistry</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Biology</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>ICT</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Finance</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Business Entrepreneurship</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Agricultural Studies</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>General Science</button>
                                        <button><i class="fas fa-play" style="margin-right:10px;"></i>Bangladesh and Global Studies</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             </div>
                         </div>
                    </div>
                </div>
                
            </div>
              
        </div>
        
    </div>
    
   
</div>    
<div class="content-3" style="flex:.5;margin-top:50px;">
    <img src="right1.jpg" style="width:100%;margin-bottom: 10px;">
    <img src="right2.jpg" style="width:100%;">
</div>    
</div>  
</div>    
 <div class="profile-container" >
<!--        <h2 style="width:100%;text-align: center;margin-top: 85px;margin-bottom: 40px;font-size: 30px;font-weight: 600;" >Profiles</h2>-->
        
       <div class="header2 alt-two">
          <h2>Profiles
            <span>Best Of The Bests</span>
          </h2>
        </div>
        <div class="row" style="width: 80%;margin-left:auto;margin-right:auto;">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-80">
                <div class="card bg-white d-flex align-items-center justify-content-center ">
                    <div class="w-100"><img src="https://images.pexels.com/photos/7467850/pexels-photo-7467850.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="rounded-circle"></div>
                    <div class="text-center ">
                        <p class="name">Jason Smith</p>
                        <p class="job">ENGINE MECHANIC</p>
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon "><span class="fab fa-twitter"></span></li>
                            <li class="icon mx-2"><span class="fab fa-facebook"></span></li>
                            <li class="icon me-2"><span class="fab fa-google-plus"></span></li>
                            <li class="icon "><span class="fab fa-instagram"></span></li>
                        </ul>
                        <p class="dis pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-80">
                <div class="card bg-white d-flex align-items-center justify-content-center">
                    <div class="w-100"><img src="https://images.pexels.com/photos/7467850/pexels-photo-7467850.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="rounded-circle"></div>
                    <div class="text-center ">
                        <p class="name">Jason Smith</p>
                        <p class="job">ENGINE MECHANIC</p>
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon "><span class="fab fa-twitter"></span></li>
                            <li class="icon mx-2"><span class="fab fa-facebook"></span></li>
                            <li class="icon me-2"><span class="fab fa-google-plus"></span></li>
                            <li class="icon "><span class="fab fa-instagram"></span></li>
                        </ul>
                        <p class="dis pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur.</p>
                    </div>
                </div>
</div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-80">
                <div class="card bg-white d-flex align-items-center justify-content-center">
                    <div class="w-100"><img src="https://images.pexels.com/photos/7467850/pexels-photo-7467850.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="rounded-circle"></div>
                    <div class="text-center ">
                        <p class="name">Jason Smith</p>
                        <p class="job">ENGINE MECHANIC</p>
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon "><span class="fab fa-twitter"></span></li>
                            <li class="icon mx-2"><span class="fab fa-facebook"></span></li>
                            <li class="icon me-2"><span class="fab fa-google-plus"></span></li>
                            <li class="icon "><span class="fab fa-instagram"></span></li>
                        </ul>
                        <p class="dis pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur.</p>
                    </div>
                </div>
</div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-80">
                <div class="card bg-white d-flex align-items-center justify-content-center">
                    <div class="w-100"><img src="https://images.pexels.com/photos/7467850/pexels-photo-7467850.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="rounded-circle"></div>
                    <div class="text-center ">
                        <p class="name">Jason Smith</p>
                        <p class="job">ENGINE MECHANIC</p>
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon "><span class="fab fa-twitter"></span></li>
                            <li class="icon mx-2"><span class="fab fa-facebook"></span></li>
                            <li class="icon me-2"><span class="fab fa-google-plus"></span></li>
                            <li class="icon "><span class="fab fa-instagram"></span></li>
                        </ul>
                        <p class="dis pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header2 alt-two" style="margin-bottom:80px;">
          <h2>Mobile Education
            <span>Easy Accessible</span>
          </h2>
        </div>
<!--    <h2 style="width:100%;text-align: center;margin-top: 85px;margin-bottom: 20px;font-size: 30px;font-weight: 600;" ></h2>-->
<div class="reading-container" >
    <div class="row" style="width: 80%;margin-left:auto;margin-right:auto;">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-80 teaching" style="margin-top:auto;margin-bottom:auto;">
             
            <svg width="100%" height="auto" viewBox="0 0 913 606" fill="none" xmlns="http://www.w3.org/2000/svg">
           
        <g id="combined">
        <g id="girl_with_pc_grouped">
        <path id="Vector" d="M879.177 148.588C879.196 165.499 876.323 182.288 870.681 198.229C870.678 198.24 870.674 198.247 870.671 198.258C870.646 198.332 870.621 198.399 870.593 198.473V198.476C869.389 201.858 868.067 205.182 866.626 208.451C862.99 216.692 858.612 224.586 853.546 232.034C852.318 233.848 851.046 235.633 849.731 237.388C848.284 239.329 846.791 241.232 845.252 243.095C843.833 244.814 842.376 246.5 840.882 248.153C839.107 250.122 837.279 252.041 835.398 253.909C830.97 258.319 826.269 262.445 821.322 266.262C820.454 266.936 819.576 267.599 818.689 268.249C816.625 269.774 814.519 271.245 812.372 272.661C807.649 275.783 802.75 278.63 797.7 281.188C796.828 281.633 795.949 282.071 795.067 282.494C791.654 284.142 788.172 285.659 784.62 287.044C783.607 287.442 782.591 287.827 781.564 288.198C781.391 288.265 781.218 288.328 781.041 288.388C768.862 292.784 756.158 295.558 743.255 296.64C742.359 296.721 741.461 296.789 740.562 296.845C739.609 296.912 738.655 296.966 737.7 297.007C736.945 297.046 736.193 297.074 735.434 297.095C735.279 297.102 735.12 297.109 734.965 297.109C733.945 297.141 732.921 297.161 731.894 297.169C731.46 297.173 731.026 297.176 730.588 297.176C730.384 297.176 730.179 297.176 729.974 297.173C727.013 297.162 724.074 297.066 721.158 296.884C721.098 296.88 721.038 296.873 720.978 296.873C719.933 296.802 718.892 296.728 717.854 296.636C714.159 296.326 710.503 295.879 706.888 295.295C706.055 295.165 705.225 295.024 704.397 294.872C700.8 294.236 697.251 293.471 693.748 292.574C692.707 292.309 691.672 292.033 690.642 291.745C684.701 290.091 678.87 288.066 673.182 285.681C669.918 284.312 666.714 282.832 663.572 281.241C662.157 280.525 660.755 279.786 659.368 279.025C658.991 278.82 658.617 278.612 658.242 278.404C655.511 276.879 652.835 275.272 650.217 273.582C648.071 272.202 645.965 270.767 643.899 269.276C643.645 269.1 643.394 268.916 643.144 268.733C641.559 267.579 640 266.395 638.467 265.182C635.132 262.539 631.915 259.761 628.818 256.849C626.675 254.838 624.595 252.762 622.578 250.624C610.822 238.191 601.297 223.824 594.424 208.154C592.962 204.819 591.621 201.422 590.4 197.965C590.396 197.957 590.394 197.949 590.393 197.94C584.82 182.084 581.982 165.396 582 148.588C582 86.2024 620.449 32.7953 674.944 10.7718C694.364 2.95636 715.214 -0.678497 736.134 0.104165C757.053 0.886825 777.573 6.06942 796.355 15.3141C845.428 39.5718 879.177 90.1412 879.177 148.588Z" fill="#F2F2F2"/>
        <path id="Vector_2" d="M796.355 15.3141V203.082H674.944V10.7718C694.364 2.95636 715.214 -0.678497 736.134 0.104165C757.053 0.886825 777.573 6.06943 796.355 15.3141Z" fill="white"/>
        <path id="Vector_3" d="M704.161 100.941C707.455 95.4936 711.357 89.6774 717.469 87.8986C724.547 85.8388 731.819 89.9305 737.986 93.9685C756.431 106.045 774.193 119.132 791.192 133.17L791.174 133.382C777.939 132.469 764.705 131.556 751.471 130.644C741.909 129.984 732.018 129.234 723.568 124.711C720.362 122.994 717.236 120.701 713.603 120.541C709.088 120.343 705.152 123.496 702.059 126.79C683.761 146.274 678.466 176.071 657.938 193.19C670.882 161.266 686.338 130.42 704.161 100.941Z" fill="#6C63FF"/>
        <path id="Vector_4" d="M805.236 20.1034C804.929 19.8987 804.619 19.7045 804.311 19.5069C795.435 13.8301 785.921 9.21835 775.967 5.7669L773.658 37.6094H759.026V1.11867C758.104 0.928086 757.176 0.748086 756.248 0.578674V37.6094H738.858C729.285 37.6094 720.104 33.8064 713.335 27.0372C706.566 20.2681 702.763 11.0871 702.763 1.51401V1.51398C701.831 1.71515 700.907 1.93045 699.982 2.15985V37.6094H685.819L683.62 7.24572C673.389 11.1691 663.677 16.3286 654.7 22.6093C654.544 22.7151 654.389 22.8245 654.237 22.9304C653.457 23.4775 652.688 24.0352 651.922 24.5999V201.844H693.664L692.927 191.626L688.868 79.7612H770.606L766.547 191.626L765.809 201.844H807.089V21.3316C806.475 20.9152 805.857 20.5058 805.236 20.1034ZM699.982 70.4965H688.197L686.02 40.3906H699.982V70.4965ZM756.248 70.4965H736.455V69.9C736.455 69.6131 736.398 69.3293 736.288 69.0643C736.179 68.7996 736.018 68.5588 735.815 68.3563C735.612 68.1537 735.371 67.9931 735.106 67.8837C734.841 67.7743 734.557 67.7181 734.27 67.7188H725.666C725.379 67.7185 725.095 67.775 724.831 67.8844C724.566 67.9941 724.325 68.1547 724.123 68.3573C723.92 68.5599 723.76 68.8003 723.65 69.065C723.541 69.3297 723.484 69.6134 723.484 69.9V70.4965H702.763V40.3906H756.248V70.4965ZM759.026 70.4965V40.3906H773.457L771.28 70.4965H759.026Z" fill="#3F3D56"/>
        <path id="Vector_5" d="M870.682 198.229C870.678 198.239 870.675 198.246 870.671 198.257C870.646 198.331 870.622 198.398 870.593 198.472V198.476C869.39 201.857 868.067 205.182 866.626 208.45L594.424 208.153C592.963 204.818 591.622 201.422 590.401 197.964C590.397 197.956 590.394 197.948 590.393 197.939L870.682 198.229Z" fill="#3F3D56"/>
        <path id="Vector_6" d="M768.957 199.39H721.31V205.743H768.957V199.39Z" fill="white"/>
        <g id="girl-flower" class="girl-flower">
        <path id="Vector_7" d="M658.239 261.604C658.408 260.111 658.642 258.627 658.941 257.153C660.575 249.16 664.08 241.668 669.17 235.292C672.081 235.454 674.633 235.009 674.877 229.369C674.922 228.367 675.667 227.495 675.83 226.507C675.554 226.546 675.268 226.567 674.993 226.585C674.905 226.588 674.813 226.595 674.728 226.599H674.697C674.391 226.613 674.088 226.539 673.823 226.384C673.559 226.23 673.346 226.003 673.208 225.73C673.07 225.456 673.014 225.149 673.047 224.845C673.081 224.54 673.201 224.253 673.394 224.015C673.514 223.871 673.634 223.722 673.754 223.574C673.934 223.345 674.121 223.122 674.305 222.896C674.326 222.872 674.344 222.851 674.365 222.826C674.573 222.568 674.781 222.311 674.993 222.053C674.611 221.459 674.096 220.961 673.49 220.599C671.39 219.367 668.492 220.221 666.974 222.12C665.453 224.019 665.164 226.687 665.693 229.059C666.145 231.092 667.13 232.955 668.234 234.727C668.121 234.872 668.001 235.013 667.888 235.161C665.807 237.839 663.992 240.714 662.471 243.745C662.901 240.381 657.639 228.24 655.603 225.667C653.157 222.579 648.145 223.927 647.714 227.845C647.711 227.88 647.704 227.919 647.7 227.958C648.004 228.127 648.3 228.307 648.59 228.501C648.953 228.744 649.235 229.091 649.398 229.497C649.561 229.903 649.597 230.348 649.503 230.775C649.408 231.202 649.187 231.59 648.868 231.889C648.548 232.188 648.146 232.384 647.714 232.451L647.668 232.458C643.624 238.235 656.594 253.274 659.845 249.9C659.027 252.197 658.375 254.548 657.893 256.938C657.46 259.045 657.159 261.178 656.99 263.322C656.784 266.024 656.797 268.737 657.028 271.436C657.022 271.405 657.017 271.373 657.014 271.341C656.291 265.461 643.913 256.719 640.299 257.446C638.217 257.866 636.166 257.771 636.484 259.871C636.487 259.906 636.494 259.938 636.498 259.973C637.059 260.2 637.605 260.462 638.132 260.76C638.435 260.929 638.732 261.113 639.021 261.304C639.362 261.531 639.631 261.85 639.798 262.224C639.965 262.598 640.022 263.012 639.964 263.417C639.907 263.822 639.735 264.203 639.47 264.516C639.206 264.828 638.858 265.059 638.467 265.182C640.003 266.393 641.561 267.576 643.144 268.733C643.394 268.916 643.645 269.1 643.899 269.276C645.964 270.766 648.07 272.201 650.217 273.582C652.835 275.269 655.511 276.876 658.243 278.404C658.617 278.612 658.991 278.82 659.368 279.025C658.419 275.118 657.938 271.112 657.935 267.092C657.934 265.258 658.036 263.426 658.239 261.604ZM660.17 248.993L660.177 248.982C660.177 248.989 660.174 248.995 660.17 249V248.993ZM657.357 274.373L657.247 274.129C657.251 273.949 657.251 273.773 657.247 273.589C657.247 273.54 657.237 273.491 657.237 273.441C657.279 273.755 657.314 274.069 657.36 274.384L657.357 274.373ZM673.567 274.853C673.606 274.691 673.638 274.578 673.677 274.415C673.662 274.38 673.648 274.345 673.634 274.313C672.459 271.514 666.254 277.158 663.572 281.241C666.713 282.829 669.917 284.309 673.182 285.681C673.401 285.406 673.627 285.134 673.85 284.859C673.871 284.834 673.888 284.813 673.906 284.788C674.386 284.195 674.87 283.609 675.346 283.016C675.35 282.9 675.35 282.784 675.35 282.671C675.345 280.97 675.136 279.277 674.728 277.627C674.401 277.642 674.076 277.556 673.799 277.381C673.521 277.205 673.305 276.949 673.178 276.646C673.051 276.343 673.021 276.009 673.09 275.688C673.16 275.368 673.326 275.076 673.567 274.853Z" fill="#6C63FF"/>
        </g>
        <path id="Vector_8" d="M749.915 201.397C750.762 201.982 751.727 202.373 752.742 202.544C753.758 202.716 754.798 202.662 755.79 202.387C756.782 202.113 757.702 201.624 758.485 200.956C759.268 200.287 759.895 199.456 760.322 198.518L785.237 200.849L779.121 189.373L756.398 188.92C754.776 188.307 752.987 188.311 751.368 188.93C749.749 189.549 748.413 190.741 747.614 192.279C746.815 193.817 746.608 195.594 747.032 197.275C747.456 198.956 748.481 200.422 749.915 201.397V201.397Z" fill="#FFB6B6"/>
        <path id="Vector_9" d="M747.206 281.38L740.563 296.845C739.61 296.913 738.656 296.967 737.701 297.008C736.946 297.047 736.194 297.075 735.435 297.096L735.177 297.177L734.966 297.11C733.946 297.142 732.922 297.162 731.895 297.17C731.461 297.174 731.027 297.177 730.589 297.177C730.384 297.177 730.18 297.177 729.975 297.174L730.416 295.663L730.935 293.874L732.996 286.787L735.971 276.555L740.397 278.454L747.206 281.38Z" fill="#FFB6B6"/>
        <path id="Vector_10" d="M795.068 282.495C791.655 284.143 788.173 285.66 784.621 287.044L781.148 281.203L792.343 276.287L795.068 282.495Z" fill="#FFB6B6"/>
        <path id="Vector_11" d="M818.69 255.947V268.25C816.626 269.775 814.52 271.246 812.373 272.662V255.947H818.69Z" fill="#CACACA"/>
        <path id="Vector_12" d="M840.883 248.154C839.108 250.123 837.28 252.042 835.398 253.91C830.971 258.32 826.27 262.446 821.323 266.263H793.158C792.411 266.263 791.672 266.104 790.991 265.795C790.31 265.487 789.702 265.036 789.209 264.474L789.206 264.463C788.619 263.801 788.21 262.999 788.02 262.134L788.016 262.127C787.937 261.756 787.896 261.377 787.896 260.997V253.42C787.897 252.024 788.452 250.686 789.438 249.698C790.425 248.711 791.763 248.156 793.158 248.154H840.883Z" fill="#3F3D56"/>
        <path id="Vector_13" d="M852.488 218.577L849.435 231.657C849.734 233.552 849.833 235.474 849.731 237.389C848.284 239.33 846.791 241.232 845.253 243.096C843.834 244.815 842.378 246.501 840.883 248.154C839.108 250.123 837.28 252.042 835.398 253.91C830.5 255.449 824.726 256.077 818.69 256.12C816.608 256.137 814.494 256.081 812.373 255.968C803.771 255.516 795.071 254.136 787.946 252.703C786.061 252.329 784.289 251.948 782.658 251.577C779.57 250.882 776.987 250.232 775.116 249.738C773.009 249.188 771.809 248.831 771.809 248.831L763.794 262.254L756.516 274.437L747.139 286.405C746.242 286.487 745.345 286.555 744.446 286.61C743.493 286.677 742.539 286.732 741.583 286.772C740.828 286.811 740.076 286.84 739.317 286.861L739.06 286.942L738.848 286.875L735.446 285.791L734.299 285.428L730.173 284.115C730.173 284.115 731.094 281.214 732.707 276.375C733.3 274.6 737.5 261.474 741.894 250.014C743.196 246.611 744.544 243.16 745.931 239.725C747.068 236.905 748.226 234.096 749.397 231.325C751.434 226.522 761.274 223.931 772.861 222.572C773.45 222.505 774.043 222.438 774.64 222.375C780.544 221.754 786.809 221.432 792.668 221.284C795.601 221.21 798.431 221.182 801.064 221.178C801.915 221.178 802.742 221.181 803.546 221.185H803.549C805.72 221.196 807.717 221.228 809.475 221.263C809.817 221.27 810.149 221.281 810.474 221.288H810.477C810.696 221.291 810.911 221.298 811.123 221.302C814.967 221.401 817.324 221.521 817.324 221.521L818.238 214.349L818.426 212.902L818.602 211.525V211.522L818.623 211.349L818.768 211.345L821.309 211.296L842.669 210.88L851.767 210.494L852.488 218.577Z" fill="#2F2E41"/>
        <path id="Vector_14" d="M794.524 276.601C793.653 277.045 792.774 277.483 791.891 277.907C788.479 279.555 784.996 281.071 781.444 282.456C780.431 282.855 779.415 283.24 778.388 283.61C778.275 283.451 778.159 283.292 778.042 283.134C773.143 276.41 770.094 272.125 763.794 262.254C761.157 258.124 758.507 253.818 755.934 249.421L774.562 240.724L776.651 239.75L782.658 251.577L788.016 262.127L789.209 264.474L794.524 276.601Z" fill="#2F2E41"/>
        <path id="Vector_15" d="M824.74 134.137C834.219 134.137 841.902 126.453 841.902 116.975C841.902 107.496 834.219 99.8128 824.74 99.8128C815.262 99.8128 807.579 107.496 807.579 116.975C807.579 126.453 815.262 134.137 824.74 134.137Z" fill="#FFB6B6"/>
        <path id="Vector_16" d="M758.576 205.081C759.284 204.334 760.148 203.752 761.106 203.375C762.064 202.998 763.093 202.835 764.121 202.899C765.148 202.963 766.149 203.251 767.053 203.744C767.957 204.236 768.742 204.921 769.353 205.75L793.251 198.327L789.635 210.818L767.495 215.952C766.035 216.886 764.283 217.251 762.571 216.979C760.859 216.708 759.306 215.818 758.207 214.478C757.108 213.138 756.538 211.441 756.606 209.709C756.674 207.977 757.375 206.33 758.576 205.081Z" fill="#FFB6B6"/>
        <path id="Vector_17" d="M704.881 198.025C705.037 198.478 705.332 198.869 705.723 199.144C706.115 199.418 706.585 199.562 707.063 199.553L716.413 199.313C716.895 199.303 717.362 199.138 717.742 198.842C718.123 198.546 718.397 198.134 718.524 197.669L719.847 183.521C720.317 183.733 720.828 183.838 721.343 183.828C722.247 183.805 723.105 183.424 723.728 182.769C724.352 182.114 724.689 181.238 724.666 180.334C724.643 179.43 724.263 178.572 723.607 177.948C722.952 177.325 722.076 176.988 721.172 177.01C720.966 177.01 720.76 177.031 720.559 177.074C720.34 176.837 720.074 176.648 719.777 176.521C719.481 176.393 719.162 176.329 718.839 176.332L704.456 176.703C704.337 176.708 704.218 176.722 704.102 176.747C703.786 176.806 703.487 176.932 703.224 177.116C702.962 177.3 702.741 177.538 702.578 177.815C702.415 178.091 702.314 178.399 702.28 178.718C702.245 179.037 702.28 179.36 702.382 179.664L704.881 198.025ZM720.119 182.56L721.06 179.188C721.167 178.799 721.17 178.388 721.067 177.997C721.113 177.997 721.153 177.976 721.199 177.976C721.845 177.962 722.469 178.205 722.936 178.652C723.402 179.098 723.673 179.711 723.688 180.357C723.703 181.002 723.461 181.627 723.016 182.095C722.571 182.563 721.959 182.835 721.313 182.852C720.896 182.865 720.483 182.764 720.119 182.56Z" fill="#2F2E41"/>
        <path id="Vector_18" d="M704.102 176.747C704.408 178.499 707.853 179.731 711.995 179.517C715.805 179.341 718.919 178.004 719.49 176.419C719.279 176.356 719.059 176.327 718.839 176.332L704.456 176.703C704.337 176.708 704.218 176.722 704.102 176.747Z" fill="#3F3D56"/>
        <path id="Vector_19" d="M641.557 163.939V194.188C641.557 194.573 641.71 194.942 641.983 195.215C642.255 195.488 642.625 195.641 643.01 195.641H687.835C688.221 195.641 688.591 195.488 688.863 195.215C689.135 194.942 689.289 194.573 689.289 194.188V163.939C689.288 163.554 689.135 163.185 688.862 162.913C688.59 162.641 688.221 162.487 687.835 162.487H643.01C642.625 162.487 642.256 162.641 641.983 162.913C641.711 163.185 641.557 163.554 641.557 163.939Z" fill="#3F3D56"/>
        <g id="girl-pc" class="girl-pc">
        <path id="Vector_23" d="M642.608 164.315V193.814C642.608 194.02 642.691 194.218 642.836 194.363C642.982 194.509 643.179 194.591 643.385 194.591H687.462C687.668 194.591 687.866 194.509 688.011 194.363C688.157 194.218 688.239 194.02 688.239 193.814V164.315C688.239 164.109 688.157 163.912 688.012 163.765C687.866 163.62 687.668 163.537 687.462 163.537H643.385C643.179 163.537 642.981 163.62 642.836 163.765C642.69 163.912 642.608 164.109 642.608 164.315Z" fill="#CACACA"/>
        </g>
        <g id="girl-dress" class="girl-dress">
        <path id="Vector_20" d="M775.179 200.612L809.658 204.477L809.777 204.325C810.004 204.035 832.565 175.156 836.355 168.281C838.687 164.151 839.536 159.348 838.762 154.668L838.736 154.554L838.647 154.478C836.809 152.938 834.5 152.069 832.103 152.017C829.705 151.964 827.361 152.73 825.458 154.189C816.303 161.278 808.922 170.399 803.897 180.83L801.045 186.767L775.179 189.318V200.612Z" fill="#CACACA"/>
        <path id="Vector_21" d="M855.375 170.32C855.234 156.145 855.65 160.25 854.528 155.369C851.514 142.247 839.002 139.854 836.821 139.557C836.589 138.939 836.232 138.375 835.772 137.9C835.312 137.425 834.76 137.051 834.149 136.799C833.538 136.547 832.882 136.423 832.222 136.436C831.561 136.448 830.91 136.597 830.309 136.871L826.133 139.037C822.085 140.89 824.542 143.567 823.144 147.791L821.676 152.274L809.644 185.531L812.08 198.184L812.083 198.191L813.724 206.715L818.591 212.259L818.5 211.374L818.39 211.543L818.387 211.547L818.104 211.967C818.496 212.182 818.885 212.394 819.266 212.605C820.254 213.149 821.218 213.682 822.157 214.204C822.382 214.331 822.604 214.455 822.827 214.582H822.83C822.971 214.66 823.113 214.737 823.25 214.815C826.773 216.784 813.735 220.37 816.633 222.054C817.035 222.287 817.434 222.52 817.826 222.749C831.167 230.553 841.812 240.272 845.253 243.096C846.792 241.232 848.284 239.33 849.732 237.389C851.044 235.635 852.316 233.85 853.547 232.035C853.762 230.616 853.907 229.197 854.048 227.807C854.217 226.134 853.335 210.636 853.631 208.931C853.762 208.176 853.261 207.46 852.777 206.768C852.329 206.122 851.906 205.515 851.994 204.943C852.086 204.354 852.735 203.711 853.367 203.087C854.055 202.402 854.768 201.696 854.871 200.951C855.153 198.876 853.992 196.794 854.21 194.704C854.57 191.305 854.847 187.896 855.04 184.476C855.311 179.754 855.423 175.035 855.375 170.32Z" fill="#CACACA"/>
        <path id="Vector_22" d="M787.549 211.991L831.907 202.846L820.395 205.697C820.526 205.352 833.464 171.066 835.036 163.374C836.032 158.737 835.413 153.899 833.28 149.662L833.222 149.561L833.113 149.515C830.9 148.591 828.438 148.45 826.133 149.114C823.829 149.778 821.819 151.207 820.436 153.166C813.808 162.66 809.478 173.564 807.786 185.018L806.832 191.535L791.192 196.213L787.549 211.991Z" fill="#CACACA"/>
        </g>
        <path id="Vector_24" d="M640.619 200.087C640.701 200.19 640.805 200.273 640.924 200.33C641.043 200.387 641.173 200.416 641.305 200.415H689.302C689.433 200.415 689.563 200.386 689.681 200.329C689.8 200.272 689.904 200.19 689.987 200.088C690.07 199.986 690.129 199.867 690.159 199.74C690.19 199.612 690.192 199.479 690.165 199.351L689.42 195.812C689.39 195.667 689.323 195.533 689.227 195.421C689.131 195.309 689.008 195.223 688.87 195.17C688.771 195.131 688.664 195.111 688.557 195.111H642.047C641.94 195.111 641.834 195.131 641.734 195.17C641.596 195.223 641.473 195.309 641.377 195.421C641.281 195.533 641.215 195.667 641.184 195.812L640.439 199.351C640.412 199.479 640.414 199.612 640.446 199.739C640.477 199.866 640.536 199.985 640.619 200.087Z" fill="#2F2E41"/>
        <path id="Vector_25" d="M686.91 196.635H688.044C688.139 196.635 688.216 196.558 688.216 196.463V195.92C688.216 195.826 688.139 195.748 688.044 195.748H686.91C686.815 195.748 686.738 195.826 686.738 195.92V196.463C686.738 196.558 686.815 196.635 686.91 196.635Z" fill="#3F3D56"/>
        <path id="Vector_26" d="M683.954 196.635H685.087C685.183 196.635 685.259 196.558 685.259 196.463V195.92C685.259 195.826 685.183 195.748 685.087 195.748H683.954C683.858 195.748 683.781 195.826 683.781 195.92V196.463C683.781 196.558 683.858 196.635 683.954 196.635Z" fill="#3F3D56"/>
        <path id="Vector_27" d="M680.997 196.635H682.131C682.226 196.635 682.303 196.558 682.303 196.463V195.92C682.303 195.826 682.226 195.748 682.131 195.748H680.997C680.902 195.748 680.825 195.826 680.825 195.92V196.463C680.825 196.558 680.902 196.635 680.997 196.635Z" fill="#3F3D56"/>
        <path id="Vector_28" d="M678.04 196.635H679.174C679.269 196.635 679.346 196.558 679.346 196.463V195.92C679.346 195.826 679.269 195.748 679.174 195.748H678.04C677.945 195.748 677.868 195.826 677.868 195.92V196.463C677.868 196.558 677.945 196.635 678.04 196.635Z" fill="#3F3D56"/>
        <path id="Vector_29" d="M675.084 196.635H676.217C676.313 196.635 676.39 196.558 676.39 196.463V195.92C676.39 195.826 676.313 195.748 676.217 195.748H675.084C674.989 195.748 674.912 195.826 674.912 195.92V196.463C674.912 196.558 674.989 196.635 675.084 196.635Z" fill="#3F3D56"/>
        <path id="Vector_30" d="M672.127 196.635H673.261C673.356 196.635 673.433 196.558 673.433 196.463V195.92C673.433 195.826 673.356 195.748 673.261 195.748H672.127C672.032 195.748 671.955 195.826 671.955 195.92V196.463C671.955 196.558 672.032 196.635 672.127 196.635Z" fill="#3F3D56"/>
        <path id="Vector_31" d="M669.171 196.635H670.304C670.4 196.635 670.477 196.558 670.477 196.463V195.92C670.477 195.826 670.4 195.748 670.304 195.748H669.171C669.075 195.748 668.998 195.826 668.998 195.92V196.463C668.998 196.558 669.075 196.635 669.171 196.635Z" fill="#3F3D56"/>
        <path id="Vector_32" d="M666.214 196.635H667.348C667.443 196.635 667.52 196.558 667.52 196.463V195.92C667.52 195.826 667.443 195.748 667.348 195.748H666.214C666.119 195.748 666.042 195.826 666.042 195.92V196.463C666.042 196.558 666.119 196.635 666.214 196.635Z" fill="#3F3D56"/>
        <path id="Vector_33" d="M663.257 196.635H664.391C664.486 196.635 664.563 196.558 664.563 196.463V195.92C664.563 195.826 664.486 195.748 664.391 195.748H663.257C663.162 195.748 663.085 195.826 663.085 195.92V196.463C663.085 196.558 663.162 196.635 663.257 196.635Z" fill="#3F3D56"/>
        <path id="Vector_34" d="M660.301 196.635H661.434C661.53 196.635 661.607 196.558 661.607 196.463V195.92C661.607 195.826 661.53 195.748 661.434 195.748H660.301C660.206 195.748 660.129 195.826 660.129 195.92V196.463C660.129 196.558 660.206 196.635 660.301 196.635Z" fill="#3F3D56"/>
        <path id="Vector_35" d="M657.344 196.635H658.478C658.573 196.635 658.65 196.558 658.65 196.463V195.92C658.65 195.826 658.573 195.748 658.478 195.748H657.344C657.249 195.748 657.172 195.826 657.172 195.92V196.463C657.172 196.558 657.249 196.635 657.344 196.635Z" fill="#3F3D56"/>
        <path id="Vector_36" d="M654.388 196.635H655.521C655.617 196.635 655.694 196.558 655.694 196.463V195.92C655.694 195.826 655.617 195.748 655.521 195.748H654.388C654.292 195.748 654.215 195.826 654.215 195.92V196.463C654.215 196.558 654.292 196.635 654.388 196.635Z" fill="#3F3D56"/>
        <path id="Vector_37" d="M651.431 196.635H652.565C652.66 196.635 652.737 196.558 652.737 196.463V195.92C652.737 195.826 652.66 195.748 652.565 195.748H651.431C651.336 195.748 651.259 195.826 651.259 195.92V196.463C651.259 196.558 651.336 196.635 651.431 196.635Z" fill="#3F3D56"/>
        <path id="Vector_38" d="M648.475 196.635H649.608C649.703 196.635 649.78 196.558 649.78 196.463V195.92C649.78 195.826 649.703 195.748 649.608 195.748H648.475C648.379 195.748 648.302 195.826 648.302 195.92V196.463C648.302 196.558 648.379 196.635 648.475 196.635Z" fill="#3F3D56"/>
        <path id="Vector_39" d="M645.518 196.635H646.652C646.747 196.635 646.824 196.558 646.824 196.463V195.92C646.824 195.826 646.747 195.748 646.652 195.748H645.518C645.423 195.748 645.346 195.826 645.346 195.92V196.463C645.346 196.558 645.423 196.635 645.518 196.635Z" fill="#3F3D56"/>
        <path id="Vector_40" d="M642.561 196.635H643.695C643.79 196.635 643.867 196.558 643.867 196.463V195.92C643.867 195.826 643.79 195.748 643.695 195.748H642.561C642.466 195.748 642.389 195.826 642.389 195.92V196.463C642.389 196.558 642.466 196.635 642.561 196.635Z" fill="#3F3D56"/>
        <path id="Vector_41" d="M686.945 198.114H688.079C688.174 198.114 688.251 198.036 688.251 197.941V197.399C688.251 197.304 688.174 197.227 688.079 197.227H686.945C686.85 197.227 686.773 197.304 686.773 197.399V197.941C686.773 198.036 686.85 198.114 686.945 198.114Z" fill="#3F3D56"/>
        <path id="Vector_42" d="M683.989 198.114H685.122C685.217 198.114 685.294 198.036 685.294 197.941V197.399C685.294 197.304 685.217 197.227 685.122 197.227H683.989C683.893 197.227 683.816 197.304 683.816 197.399V197.941C683.816 198.036 683.893 198.114 683.989 198.114Z" fill="#3F3D56"/>
        <path id="Vector_43" d="M681.032 198.114H682.166C682.261 198.114 682.338 198.036 682.338 197.941V197.399C682.338 197.304 682.261 197.227 682.166 197.227H681.032C680.937 197.227 680.86 197.304 680.86 197.399V197.941C680.86 198.036 680.937 198.114 681.032 198.114Z" fill="#3F3D56"/>
        <path id="Vector_44" d="M678.075 198.114H679.209C679.304 198.114 679.381 198.036 679.381 197.941V197.399C679.381 197.304 679.304 197.227 679.209 197.227H678.075C677.98 197.227 677.903 197.304 677.903 197.399V197.941C677.903 198.036 677.98 198.114 678.075 198.114Z" fill="#3F3D56"/>
        <path id="Vector_45" d="M675.119 198.114H676.252C676.348 198.114 676.425 198.036 676.425 197.941V197.399C676.425 197.304 676.348 197.227 676.252 197.227H675.119C675.023 197.227 674.947 197.304 674.947 197.399V197.941C674.947 198.036 675.023 198.114 675.119 198.114Z" fill="#3F3D56"/>
        <path id="Vector_46" d="M672.162 198.114H673.296C673.391 198.114 673.468 198.036 673.468 197.941V197.399C673.468 197.304 673.391 197.227 673.296 197.227H672.162C672.067 197.227 671.99 197.304 671.99 197.399V197.941C671.99 198.036 672.067 198.114 672.162 198.114Z" fill="#3F3D56"/>
        <path id="Vector_47" d="M669.206 198.114H670.339C670.434 198.114 670.511 198.036 670.511 197.941V197.399C670.511 197.304 670.434 197.227 670.339 197.227H669.206C669.11 197.227 669.033 197.304 669.033 197.399V197.941C669.033 198.036 669.11 198.114 669.206 198.114Z" fill="#3F3D56"/>
        <path id="Vector_48" d="M666.249 198.114H667.383C667.478 198.114 667.555 198.036 667.555 197.941V197.399C667.555 197.304 667.478 197.227 667.383 197.227H666.249C666.154 197.227 666.077 197.304 666.077 197.399V197.941C666.077 198.036 666.154 198.114 666.249 198.114Z" fill="#3F3D56"/>
        <path id="Vector_49" d="M663.292 198.114H664.426C664.521 198.114 664.598 198.036 664.598 197.941V197.399C664.598 197.304 664.521 197.227 664.426 197.227H663.292C663.197 197.227 663.12 197.304 663.12 197.399V197.941C663.12 198.036 663.197 198.114 663.292 198.114Z" fill="#3F3D56"/>
        <path id="Vector_50" d="M660.336 198.114H661.469C661.565 198.114 661.642 198.036 661.642 197.941V197.399C661.642 197.304 661.565 197.227 661.469 197.227H660.336C660.241 197.227 660.164 197.304 660.164 197.399V197.941C660.164 198.036 660.241 198.114 660.336 198.114Z" fill="#3F3D56"/>
        <path id="Vector_51" d="M657.379 198.114H658.513C658.608 198.114 658.685 198.036 658.685 197.941V197.399C658.685 197.304 658.608 197.227 658.513 197.227H657.379C657.284 197.227 657.207 197.304 657.207 197.399V197.941C657.207 198.036 657.284 198.114 657.379 198.114Z" fill="#3F3D56"/>
        <path id="Vector_52" d="M654.423 198.114H655.556C655.652 198.114 655.729 198.036 655.729 197.941V197.399C655.729 197.304 655.652 197.227 655.556 197.227H654.423C654.327 197.227 654.25 197.304 654.25 197.399V197.941C654.25 198.036 654.327 198.114 654.423 198.114Z" fill="#3F3D56"/>
        <path id="Vector_53" d="M651.466 198.114H652.6C652.695 198.114 652.772 198.036 652.772 197.941V197.399C652.772 197.304 652.695 197.227 652.6 197.227H651.466C651.371 197.227 651.294 197.304 651.294 197.399V197.941C651.294 198.036 651.371 198.114 651.466 198.114Z" fill="#3F3D56"/>
        <path id="Vector_54" d="M648.509 198.114H649.643C649.738 198.114 649.815 198.036 649.815 197.941V197.399C649.815 197.304 649.738 197.227 649.643 197.227H648.509C648.414 197.227 648.337 197.304 648.337 197.399V197.941C648.337 198.036 648.414 198.114 648.509 198.114Z" fill="#3F3D56"/>
        <path id="Vector_55" d="M645.553 198.114H646.687C646.782 198.114 646.859 198.036 646.859 197.941V197.399C646.859 197.304 646.782 197.227 646.687 197.227H645.553C645.458 197.227 645.381 197.304 645.381 197.399V197.941C645.381 198.036 645.458 198.114 645.553 198.114Z" fill="#3F3D56"/>
        <path id="Vector_56" d="M642.596 198.114H643.73C643.825 198.114 643.902 198.036 643.902 197.941V197.399C643.902 197.304 643.825 197.227 643.73 197.227H642.596C642.501 197.227 642.424 197.304 642.424 197.399V197.941C642.424 198.036 642.501 198.114 642.596 198.114Z" fill="#3F3D56"/>
        <path id="Vector_57" d="M662.405 199.888H673.887C673.982 199.888 674.06 199.81 674.06 199.715V199.173C674.06 199.078 673.982 199.001 673.887 199.001H662.405C662.31 199.001 662.233 199.078 662.233 199.173V199.715C662.233 199.81 662.31 199.888 662.405 199.888Z" fill="#3F3D56"/>
        <path id="Vector_58" d="M748.927 198.442L768.988 180.903C769.942 180.069 768.123 182.554 768.957 183.508C769.791 184.462 772.962 183.523 772.008 184.357L751.947 201.896L746.867 203.056L748.927 198.442Z" fill="#3F3D56"/>
        <path id="Vector_59" d="M748.927 198.442L749.413 198.017C750.062 198.342 750.641 198.791 751.118 199.339C751.682 199.983 752.092 200.747 752.316 201.573L751.947 201.896L747.898 202.82L746.867 203.056L747.297 202.09L748.927 198.442Z" fill="#CCCCCC"/>
        <path id="Vector_60" d="M747.297 202.09C747.447 202.156 747.58 202.257 747.684 202.383C747.789 202.51 747.862 202.66 747.898 202.82L746.867 203.056L747.297 202.09Z" fill="#3F3D56"/>
        <path id="Vector_61" d="M879.819 142.228C877.927 145.059 874.899 147.018 871.638 147.988C870.313 148.382 868.945 148.615 867.565 148.68C867.394 147.119 866.986 145.593 866.354 144.155C866.418 145.686 866.206 147.215 865.726 148.669C863.653 148.552 861.626 148.009 859.772 147.074C856.154 145.221 853.37 141.678 852.752 137.658C852.025 132.964 854.153 128.354 854.922 123.667C855.695 118.98 854.245 113.044 849.657 111.812C846.162 110.873 846.554 111.279 843.65 113.435C846.671 117.903 835.511 134.275 830.944 132.847C828.362 132.04 826.708 129.671 826.175 129.671C822.586 135.854 829.345 146.273 822.533 148.436L823.094 147.875C827.206 142.818 818.612 132.113 822.724 127.055C823.871 125.64 825.092 123.964 824.753 122.174C824.432 120.473 821.732 119.573 820.941 120.971C822.364 117.713 820.264 113.365 816.787 112.528C813.699 111.784 813.755 112.701 810.657 113.1C810.454 111.761 810.076 110.454 809.531 109.214C809.587 110.55 809.431 111.887 809.068 113.174C807.973 113.153 806.916 112.771 806.061 112.087C803.534 110.051 804.046 105.773 806.301 103.44C808.56 101.107 811.917 100.267 815.118 99.7235C816.048 93.2432 833.928 92.5673 836.298 99.0424C837.307 94.2071 843.36 91.6977 848.065 93.1977C852.769 94.6977 856.034 99.0918 857.753 103.722C859.472 108.349 859.952 113.329 861.011 118.151C862.07 122.972 863.859 127.881 867.544 131.167C871.228 134.449 877.232 135.536 881.114 132.487C882.339 135.664 881.707 139.394 879.819 142.228Z" fill="#2F2E41"/>
        </g>
        <g id="teacher_taking_class">
        <g id="teacher-wall" class="teacher-wall" >
        <g id="Vector_62" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M114.575 282.736H92.0864C90.7893 282.736 89.7376 283.788 89.7376 285.085V288.607C89.7376 289.904 90.7893 290.955 92.0864 290.955H114.575C115.872 290.955 116.924 289.904 116.924 288.607V285.085C116.924 283.788 115.872 282.736 114.575 282.736Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_2_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M86.1243 274.517H63.6354C62.3384 274.517 61.2866 275.569 61.2866 276.866V280.388C61.2866 281.685 62.3384 282.736 63.6354 282.736H86.1243C87.4214 282.736 88.4731 281.685 88.4731 280.388V276.866C88.4731 275.569 87.4214 274.517 86.1243 274.517Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_3_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M86.1243 433.21H63.6354C62.3384 433.21 61.2866 434.262 61.2866 435.559V439.081C61.2866 440.378 62.3384 441.43 63.6354 441.43H86.1243C87.4214 441.43 88.4731 440.378 88.4731 439.081V435.559C88.4731 434.262 87.4214 433.21 86.1243 433.21Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_4_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M174.639 286.846H152.15C150.853 286.846 149.801 287.898 149.801 289.195V292.716C149.801 294.013 150.853 295.065 152.15 295.065H174.639C175.936 295.065 176.987 294.013 176.987 292.716V289.195C176.987 287.898 175.936 286.846 174.639 286.846Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_5_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M174.639 274.517H152.15C150.853 274.517 149.801 275.569 149.801 276.866V280.388C149.801 281.685 150.853 282.736 152.15 282.736H174.639C175.936 282.736 176.987 281.685 176.987 280.388V276.866C176.987 275.569 175.936 274.517 174.639 274.517Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_6_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M203.09 282.736H180.601C179.304 282.736 178.252 283.788 178.252 285.085V288.607C178.252 289.904 179.304 290.955 180.601 290.955H203.09C204.387 290.955 205.438 289.904 205.438 288.607V285.085C205.438 283.788 204.387 282.736 203.09 282.736Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_7_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M86.1243 258.079H63.6354C62.3384 258.079 61.2866 259.13 61.2866 260.428V263.949C61.2866 265.246 62.3384 266.298 63.6354 266.298H86.1243C87.4214 266.298 88.4731 265.246 88.4731 263.949V260.428C88.4731 259.13 87.4214 258.079 86.1243 258.079Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_8_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M114.575 266.298H92.0864C90.7893 266.298 89.7376 267.35 89.7376 268.647V272.168C89.7376 273.466 90.7893 274.517 92.0864 274.517H114.575C115.872 274.517 116.924 273.466 116.924 272.168V268.647C116.924 267.35 115.872 266.298 114.575 266.298Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_9_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M231.541 262.188H209.052C207.755 262.188 206.703 263.24 206.703 264.537V268.059C206.703 269.356 207.755 270.408 209.052 270.408H231.541C232.838 270.408 233.889 269.356 233.889 268.059V264.537C233.889 263.24 232.838 262.188 231.541 262.188Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_10_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M143.026 274.517H120.537C119.24 274.517 118.189 275.569 118.189 276.866V280.388C118.189 281.685 119.24 282.736 120.537 282.736H143.026C144.323 282.736 145.375 281.685 145.375 280.388V276.866C145.375 275.569 144.323 274.517 143.026 274.517Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_11_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M231.541 274.517H209.052C207.755 274.517 206.703 275.569 206.703 276.866V280.388C206.703 281.685 207.755 282.736 209.052 282.736H231.541C232.838 282.736 233.889 281.685 233.889 280.388V276.866C233.889 275.569 232.838 274.517 231.541 274.517Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_12_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M114.575 253.969H92.0864C90.7893 253.969 89.7376 255.021 89.7376 256.318V259.84C89.7376 261.137 90.7893 262.188 92.0864 262.188H114.575C115.872 262.188 116.924 261.137 116.924 259.84V256.318C116.924 255.021 115.872 253.969 114.575 253.969Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_13_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M174.639 258.079H152.15C150.853 258.079 149.801 259.13 149.801 260.428V263.949C149.801 265.246 150.853 266.298 152.15 266.298H174.639C175.936 266.298 176.987 265.246 176.987 263.949V260.428C176.987 259.13 175.936 258.079 174.639 258.079Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_14_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M143.026 262.188H120.537C119.24 262.188 118.189 263.24 118.189 264.537V268.059C118.189 269.356 119.24 270.408 120.537 270.408H143.026C144.323 270.408 145.375 269.356 145.375 268.059V264.537C145.375 263.24 144.323 262.188 143.026 262.188Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_15_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M203.09 266.298H180.601C179.304 266.298 178.252 267.35 178.252 268.647V272.168C178.252 273.466 179.304 274.517 180.601 274.517H203.09C204.387 274.517 205.438 273.466 205.438 272.168V268.647C205.438 267.35 204.387 266.298 203.09 266.298Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_16_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M174.639 245.75H152.15C150.853 245.75 149.801 246.802 149.801 248.099V251.62C149.801 252.918 150.853 253.969 152.15 253.969H174.639C175.936 253.969 176.987 252.918 176.987 251.62V248.099C176.987 246.802 175.936 245.75 174.639 245.75Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_17_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M203.09 253.969H180.601C179.304 253.969 178.252 255.021 178.252 256.318V259.84C178.252 261.137 179.304 262.188 180.601 262.188H203.09C204.387 262.188 205.438 261.137 205.438 259.84V256.318C205.438 255.021 204.387 253.969 203.09 253.969Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_18_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M114.575 441.43H92.0864C90.7893 441.43 89.7376 442.481 89.7376 443.778V447.3C89.7376 448.597 90.7893 449.649 92.0864 449.649H114.575C115.872 449.649 116.924 448.597 116.924 447.3V443.778C116.924 442.481 115.872 441.43 114.575 441.43Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_19_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M143.026 449.649H120.537C119.24 449.649 118.189 450.701 118.189 451.998V455.519C118.189 456.816 119.24 457.868 120.537 457.868H143.026C144.323 457.868 145.375 456.816 145.375 455.519V451.998C145.375 450.701 144.323 449.649 143.026 449.649Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_20_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M86.1243 420.882H63.6354C62.3384 420.882 61.2866 421.933 61.2866 423.23V426.752C61.2866 428.049 62.3384 429.101 63.6354 429.101H86.1243C87.4214 429.101 88.4731 428.049 88.4731 426.752V423.23C88.4731 421.933 87.4214 420.882 86.1243 420.882Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_21_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M114.575 429.101H92.0864C90.7893 429.101 89.7376 430.153 89.7376 431.45V434.971C89.7376 436.268 90.7893 437.32 92.0864 437.32H114.575C115.872 437.32 116.924 436.268 116.924 434.971V431.45C116.924 430.153 115.872 429.101 114.575 429.101Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_22_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M143.026 437.32H120.537C119.24 437.32 118.189 438.372 118.189 439.669V443.19C118.189 444.488 119.24 445.539 120.537 445.539H143.026C144.323 445.539 145.375 444.488 145.375 443.19V439.669C145.375 438.372 144.323 437.32 143.026 437.32Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_23_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M174.639 433.21H152.15C150.853 433.21 149.801 434.262 149.801 435.559V439.081C149.801 440.378 150.853 441.43 152.15 441.43H174.639C175.936 441.43 176.987 440.378 176.987 439.081V435.559C176.987 434.262 175.936 433.21 174.639 433.21Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_24_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M203.09 441.43H180.601C179.304 441.43 178.252 442.481 178.252 443.778V447.3C178.252 448.597 179.304 449.649 180.601 449.649H203.09C204.387 449.649 205.438 448.597 205.438 447.3V443.778C205.438 442.481 204.387 441.43 203.09 441.43Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_25_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M231.541 449.649H209.052C207.755 449.649 206.703 450.701 206.703 451.998V455.519C206.703 456.816 207.755 457.868 209.052 457.868H231.541C232.838 457.868 233.889 456.816 233.889 455.519V451.998C233.889 450.701 232.838 449.649 231.541 449.649Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_26_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M174.639 420.882H152.15C150.853 420.882 149.801 421.933 149.801 423.23V426.752C149.801 428.049 150.853 429.101 152.15 429.101H174.639C175.936 429.101 176.987 428.049 176.987 426.752V423.23C176.987 421.933 175.936 420.882 174.639 420.882Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_27_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M203.09 429.101H180.601C179.304 429.101 178.252 430.153 178.252 431.45V434.971C178.252 436.268 179.304 437.32 180.601 437.32H203.09C204.387 437.32 205.438 436.268 205.438 434.971V431.45C205.438 430.153 204.387 429.101 203.09 429.101Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_28_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M231.541 437.32H209.052C207.755 437.32 206.703 438.372 206.703 439.669V443.19C206.703 444.488 207.755 445.539 209.052 445.539H231.541C232.838 445.539 233.889 444.488 233.889 443.19V439.669C233.889 438.372 232.838 437.32 231.541 437.32Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_29_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M86.1243 404.443H63.6354C62.3384 404.443 61.2866 405.495 61.2866 406.792V410.314C61.2866 411.611 62.3384 412.663 63.6354 412.663H86.1243C87.4214 412.663 88.4731 411.611 88.4731 410.314V406.792C88.4731 405.495 87.4214 404.443 86.1243 404.443Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_30_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M114.575 412.663H92.0864C90.7893 412.663 89.7376 413.714 89.7376 415.011V418.533C89.7376 419.83 90.7893 420.882 92.0864 420.882H114.575C115.872 420.882 116.924 419.83 116.924 418.533V415.011C116.924 413.714 115.872 412.663 114.575 412.663Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_31_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M143.026 420.882H120.537C119.24 420.882 118.189 421.933 118.189 423.23V426.752C118.189 428.049 119.24 429.101 120.537 429.101H143.026C144.323 429.101 145.375 428.049 145.375 426.752V423.23C145.375 421.933 144.323 420.882 143.026 420.882Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_32_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M86.1243 392.115H63.6354C62.3384 392.115 61.2866 393.166 61.2866 394.463V397.985C61.2866 399.282 62.3384 400.334 63.6354 400.334H86.1243C87.4214 400.334 88.4731 399.282 88.4731 397.985V394.463C88.4731 393.166 87.4214 392.115 86.1243 392.115Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_33_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M114.575 400.334H92.0864C90.7893 400.334 89.7376 401.386 89.7376 402.683V406.204C89.7376 407.501 90.7893 408.553 92.0864 408.553H114.575C115.872 408.553 116.924 407.501 116.924 406.204V402.683C116.924 401.386 115.872 400.334 114.575 400.334Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_34_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M143.026 408.553H120.537C119.24 408.553 118.189 409.605 118.189 410.902V414.423C118.189 415.72 119.24 416.772 120.537 416.772H143.026C144.323 416.772 145.375 415.72 145.375 414.423V410.902C145.375 409.605 144.323 408.553 143.026 408.553Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_35_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M174.639 404.443H152.15C150.853 404.443 149.801 405.495 149.801 406.792V410.314C149.801 411.611 150.853 412.663 152.15 412.663H174.639C175.936 412.663 176.987 411.611 176.987 410.314V406.792C176.987 405.495 175.936 404.443 174.639 404.443Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_36_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M203.09 412.663H180.601C179.304 412.663 178.252 413.714 178.252 415.011V418.533C178.252 419.83 179.304 420.882 180.601 420.882H203.09C204.387 420.882 205.438 419.83 205.438 418.533V415.011C205.438 413.714 204.387 412.663 203.09 412.663Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_37_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M174.639 392.115H152.15C150.853 392.115 149.801 393.166 149.801 394.463V397.985C149.801 399.282 150.853 400.334 152.15 400.334H174.639C175.936 400.334 176.987 399.282 176.987 397.985V394.463C176.987 393.166 175.936 392.115 174.639 392.115Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_38_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M203.09 400.334H180.601C179.304 400.334 178.252 401.386 178.252 402.683V406.204C178.252 407.501 179.304 408.553 180.601 408.553H203.09C204.387 408.553 205.438 407.501 205.438 406.204V402.683C205.438 401.386 204.387 400.334 203.09 400.334Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_39_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M86.1243 286.846H63.6354C62.3384 286.846 61.2866 287.898 61.2866 289.195V292.716C61.2866 294.013 62.3384 295.065 63.6354 295.065H86.1243C87.4214 295.065 88.4731 294.013 88.4731 292.716V289.195C88.4731 287.898 87.4214 286.846 86.1243 286.846Z" fill="#A8A8A8"/>
        </g>
        <g id="Vector_40_2" style="mix-blend-mode:darken" opacity="0.1">
        <path d="M86.1243 245.75H63.6354C62.3384 245.75 61.2866 246.802 61.2866 248.099V251.62C61.2866 252.918 62.3384 253.969 63.6354 253.969H86.1243C87.4214 253.969 88.4731 252.918 88.4731 251.62V248.099C88.4731 246.802 87.4214 245.75 86.1243 245.75Z" fill="#A8A8A8"/>
        </g>
        </g>
        <path id="Vector_41_2" opacity="0.1" d="M114.575 295.065H92.0864C90.7893 295.065 89.7376 296.117 89.7376 297.414V300.935C89.7376 302.233 90.7893 303.284 92.0864 303.284H114.575C115.872 303.284 116.924 302.233 116.924 300.935V297.414C116.924 296.117 115.872 295.065 114.575 295.065Z" fill="#6C63FF"/>
        <path id="Vector_42_2" opacity="0.1" d="M143.026 303.284H120.537C119.24 303.284 118.189 304.336 118.189 305.633V309.155C118.189 310.452 119.24 311.503 120.537 311.503H143.026C144.323 311.503 145.375 310.452 145.375 309.155V305.633C145.375 304.336 144.323 303.284 143.026 303.284Z" fill="#6C63FF"/>
        <path id="Vector_43_2" opacity="0.1" d="M143.026 290.955H120.537C119.24 290.955 118.189 292.007 118.189 293.304V296.826C118.189 298.123 119.24 299.175 120.537 299.175H143.026C144.323 299.175 145.375 298.123 145.375 296.826V293.304C145.375 292.007 144.323 290.955 143.026 290.955Z" fill="#6C63FF"/>
        <path id="Vector_44_2" opacity="0.1" d="M203.09 295.065H180.601C179.304 295.065 178.252 296.117 178.252 297.414V300.935C178.252 302.233 179.304 303.284 180.601 303.284H203.09C204.387 303.284 205.438 302.233 205.438 300.935V297.414C205.438 296.117 204.387 295.065 203.09 295.065Z" fill="#6C63FF"/>
        <path id="Vector_45_2" opacity="0.1" d="M231.541 303.284H209.052C207.755 303.284 206.703 304.336 206.703 305.633V309.155C206.703 310.452 207.755 311.503 209.052 311.503H231.541C232.838 311.503 233.889 310.452 233.889 309.155V305.633C233.889 304.336 232.838 303.284 231.541 303.284Z" fill="#6C63FF"/>
        <path id="Vector_46_2" opacity="0.1" d="M231.541 290.955H209.052C207.755 290.955 206.703 292.007 206.703 293.304V296.826C206.703 298.123 207.755 299.175 209.052 299.175H231.541C232.838 299.175 233.889 298.123 233.889 296.826V293.304C233.889 292.007 232.838 290.955 231.541 290.955Z" fill="#6C63FF"/>
        <path id="Vector_47_2" opacity="0.1" d="M231.541 408.553H209.052C207.755 408.553 206.703 409.605 206.703 410.902V414.423C206.703 415.72 207.755 416.772 209.052 416.772H231.541C232.838 416.772 233.889 415.72 233.889 414.423V410.902C233.889 409.605 232.838 408.553 231.541 408.553Z" fill="#6C63FF"/>
        <path id="Vector_48_2" opacity="0.1" d="M152.488 485.371C229.045 485.371 291.108 480.275 291.108 473.99C291.108 467.705 229.045 462.61 152.488 462.61C75.9304 462.61 13.8683 467.705 13.8683 473.99C13.8683 480.275 75.9304 485.371 152.488 485.371Z" fill="#6C63FF"/>
        <path id="Vector_49_2" d="M26.7597 304.802C39.8314 310.467 47.3425 322.188 47.3425 322.188C47.3425 322.188 33.6575 324.717 20.5827 319.056C7.5079 313.394 0 301.669 0 301.669C0 301.669 13.6849 299.137 26.7597 304.802Z" fill="#6C63FF"/>
        <path id="Vector_50_2" d="M66.8756 283.052C70.9188 276.414 77.804 273.253 77.804 273.253C77.804 273.253 78.1201 280.821 74.0895 287.44C70.059 294.06 63.158 297.218 63.158 297.218C63.158 297.218 62.8293 289.653 66.8756 283.052Z" fill="#6C63FF"/>
        <path id="Vector_51_2" d="M37.1538 290.156C40.0463 300.48 48.0189 307.277 48.0189 307.277C48.0189 307.277 51.3034 297.329 48.4109 287.001C45.5184 276.673 37.5426 269.88 37.5426 269.88C37.5426 269.88 34.2581 279.828 37.1538 290.156Z" fill="#46455B"/>
        <g id="teacher-board" class="teacher-board">
        <path id="Vector_52_2" d="M265.751 289.691H39.8567C38.5979 289.691 37.5775 290.711 37.5775 291.97V402.796C37.5775 404.055 38.5979 405.076 39.8567 405.076H265.751C267.01 405.076 268.031 404.055 268.031 402.796V291.97C268.031 290.711 267.01 289.691 265.751 289.691Z" fill="#3F3D56"/>
        </g>
        <path id="Vector_53_2" opacity="0.1" d="M37.5775 398.121H268.031V402.796C268.031 403.401 267.79 403.981 267.363 404.408C266.936 404.835 266.356 405.076 265.751 405.076H39.8567C39.2523 405.076 38.6725 404.835 38.2451 404.408C37.8177 403.981 37.5775 403.401 37.5775 402.796V398.121Z" fill="black"/>
        <path id="Vector_54_2" d="M248.785 438.901C248.785 454.783 258.749 467.636 271.062 467.636L248.785 438.901Z" fill="#46455B"/>
        <path id="Vector_55_2" d="M271.062 467.639C271.062 451.577 282.183 438.581 295.925 438.581L271.062 467.639Z" fill="#6C63FF"/>
        <path id="Vector_56_2" d="M256.859 440.342C256.859 455.431 263.213 467.639 271.062 467.639L256.859 440.342Z" fill="#6C63FF"/>
        <path id="Vector_57_2" d="M271.062 467.639C271.062 447.117 283.916 430.508 299.798 430.508L271.062 467.639Z" fill="#46455B"/>
        <path id="Vector_58_2" opacity="0.1" d="M270.098 473.127C273.157 473.127 275.636 472.708 275.636 472.192C275.636 471.675 273.157 471.256 270.098 471.256C267.039 471.256 264.56 471.675 264.56 472.192C264.56 472.708 267.039 473.127 270.098 473.127Z" fill="#6C63FF"/>
        <path id="Vector_59_2" d="M266.377 467.842C266.377 467.842 269.538 467.744 270.487 467.067C271.435 466.391 275.346 465.578 275.583 466.666C275.82 467.753 280.325 472.075 276.762 472.103C273.199 472.131 268.473 471.547 267.525 470.968C266.576 470.39 266.377 467.842 266.377 467.842Z" fill="#A8A8A8"/>
        <path id="Vector_60_2" opacity="0.2" d="M276.828 471.724C273.262 471.752 268.543 471.167 267.591 470.589C266.867 470.149 266.58 468.566 266.482 467.839H266.377C266.377 467.839 266.576 470.386 267.528 470.965C268.479 471.543 273.199 472.128 276.765 472.1C277.796 472.1 278.15 471.724 278.131 471.183C277.988 471.512 277.612 471.717 276.828 471.724Z" fill="black"/>
        <path id="Vector_61_2" d="M7.10956 448.182C7.10956 460.827 15.0347 471.044 24.8314 471.044L7.10956 448.182Z" fill="#46455B"/>
        <path id="Vector_62_2" d="M24.8314 471.044C24.8314 458.266 33.6828 447.926 44.6112 447.926L24.8314 471.044Z" fill="#6C63FF"/>
        <path id="Vector_63" d="M13.53 449.333C13.53 461.345 18.588 471.05 24.8314 471.05L13.53 449.333Z" fill="#6C63FF"/>
        <path id="Vector_64" d="M24.8314 471.044C24.8314 454.716 35.058 441.502 47.6934 441.502L24.8314 471.044Z" fill="#46455B"/>
        <path id="Vector_65" opacity="0.1" d="M24.0632 475.413C26.497 475.413 28.47 475.079 28.47 474.667C28.47 474.255 26.497 473.921 24.0632 473.921C21.6294 473.921 19.6565 474.255 19.6565 474.667C19.6565 475.079 21.6294 475.413 24.0632 475.413Z" fill="#6C63FF"/>
        <path id="Vector_66" d="M21.1043 471.205C21.1043 471.205 23.6175 471.126 24.373 470.573C25.1285 470.02 28.2423 469.388 28.4289 470.257C28.6154 471.126 32.2065 474.559 29.3772 474.581C26.5479 474.604 22.7829 474.139 22.0274 473.68C21.2719 473.222 21.1043 471.205 21.1043 471.205Z" fill="#A8A8A8"/>
        <path id="Vector_67" opacity="0.2" d="M29.4183 474.306C26.5732 474.329 22.824 473.864 22.0685 473.402C21.4931 473.055 21.2655 471.793 21.1865 471.215H21.1043C21.1043 471.215 21.2624 473.241 22.0179 473.703C22.7734 474.164 26.5321 474.626 29.3677 474.604C30.1865 474.604 30.471 474.306 30.4552 473.873C30.3414 474.126 30.0284 474.287 29.4183 474.306Z" fill="#6C63FF"/>
        <g id="mitchel">
        <path id="Vector_68" d="M207.373 467.194C206.576 467.693 205.666 467.974 204.844 468.414C204.022 468.853 203.222 469.514 202.988 470.424C202.901 470.707 202.916 471.011 203.03 471.284C203.234 471.614 203.547 471.862 203.915 471.986C205.584 472.728 207.388 473.121 209.215 473.141C211.042 473.162 212.853 472.81 214.54 472.106C215.133 471.821 215.746 471.578 216.373 471.379C217.146 471.221 217.933 471.141 218.722 471.139C219.551 471.09 220.376 470.985 221.191 470.823C221.6 470.777 221.988 470.616 222.31 470.358C222.603 470.02 222.779 469.596 222.812 469.15C223.186 466.688 222.622 464.174 221.232 462.107C221.057 461.818 220.822 461.569 220.543 461.377C220.203 461.201 219.828 461.101 219.446 461.083C217.865 460.89 216.209 460.536 214.612 460.498C213.468 460.473 212.893 461.017 212.083 461.804C210.411 463.476 209.434 465.907 207.373 467.194Z" fill="#323444"/>
        <path id="Vector_69" d="M230.668 466.96C230.668 468.509 230.855 470.149 231.793 471.385C232.223 471.92 232.743 472.375 233.33 472.729C235.315 473.993 237.945 474.458 240.038 473.387C240.376 473.235 240.665 472.992 240.873 472.685C241.189 472.135 241.021 471.449 240.844 470.842L237.816 460.346C235.859 460.647 232.982 460.859 231.243 461.851C229.982 462.569 230.668 465.575 230.668 466.96Z" fill="#323444"/>
        <path id="Vector_70" d="M205.596 402.335C205.413 402.913 204.749 403.182 204.386 403.669C203.959 404.241 204.003 405.035 204.158 405.73C204.349 406.755 204.831 407.704 205.546 408.464C205.908 408.841 206.356 409.125 206.851 409.293C207.346 409.461 207.874 409.509 208.391 409.432C209.409 409.239 210.288 408.338 210.322 407.304C210.304 406.834 210.204 406.371 210.025 405.935L207.869 399.702C207.86 399.658 207.842 399.616 207.816 399.579C207.79 399.543 207.756 399.512 207.718 399.49C207.636 399.472 207.551 399.486 207.48 399.531C206.972 399.771 205.95 400.024 205.653 400.552C205.356 401.08 205.811 401.763 205.596 402.335Z" fill="#FBB3B2"/>
        <path id="Vector_71" d="M204.588 402.022C205.375 401.899 206.064 401.437 206.801 401.134C207.537 400.83 208.46 400.713 209.08 401.219C209.257 401.364 209.428 401.563 209.659 401.56C209.345 400.014 208.87 398.506 208.242 397.059C208.22 396.989 208.177 396.929 208.119 396.885C208.033 396.85 207.937 396.85 207.85 396.885L205.723 397.441C204.936 397.647 204.844 397.583 204.904 398.358C204.92 398.703 205.097 402.022 204.588 402.022Z" fill="#323444"/>
        <path id="Vector_72" d="M204.354 357.006C204.038 357.493 204.038 358.1 204.038 358.672C204.038 361.47 204.066 364.283 204.481 367.052C204.579 367.716 204.702 368.38 204.765 369.05C204.837 369.983 204.851 370.92 204.809 371.854L204.493 384.025C204.455 385.514 204.379 387.114 203.459 388.283C203.181 388.675 203.049 389.153 203.09 389.633C203.33 392.687 203.836 395.715 204.338 398.734C205.148 398.369 206.032 398.201 206.918 398.243C207.805 398.286 208.669 398.537 209.44 398.978C211.035 393.963 211.918 388.748 212.061 383.488C212.134 380.899 212.023 378.294 212.421 375.736C213.089 371.431 212.817 367.014 212.327 362.684C212.172 361.312 211.843 359.899 210.964 358.836C210.132 357.907 209.024 357.269 207.803 357.016C206.633 356.709 205.587 357.025 204.354 357.006Z" fill="#5B5583"/>
        <path id="Vector_73" opacity="0.1" d="M204.354 357.006C204.038 357.493 204.038 358.1 204.038 358.672C204.038 361.47 204.066 364.283 204.481 367.052C204.579 367.716 204.702 368.38 204.765 369.05C204.837 369.983 204.851 370.92 204.809 371.854L204.493 384.025C204.455 385.514 204.379 387.114 203.459 388.283C203.181 388.675 203.049 389.153 203.09 389.633C203.33 392.687 203.836 395.715 204.338 398.734C205.148 398.369 206.032 398.201 206.918 398.243C207.805 398.286 208.669 398.537 209.44 398.978C211.035 393.963 211.918 388.748 212.061 383.488C212.134 380.899 212.023 378.294 212.421 375.736C213.089 371.431 212.817 367.014 212.327 362.684C212.172 361.312 211.843 359.899 210.964 358.836C210.132 357.907 209.024 357.269 207.803 357.016C206.633 356.709 205.587 357.025 204.354 357.006Z" fill="black"/>
        <path id="Vector_74" d="M208.217 392.301C206.097 403.166 207.254 414.416 211.543 424.621C211.913 425.377 212.173 426.182 212.314 427.011C212.488 428.56 211.773 430.049 211.366 431.548C210.417 434.955 210.964 438.585 211.571 442.071C211.824 443.526 212.084 444.979 212.352 446.431C212.614 447.847 212.867 449.386 212.21 450.67C212.776 453.028 213.111 455.364 213.676 457.723C213.737 457.909 213.755 458.107 213.73 458.301C213.616 458.61 213.415 458.879 213.152 459.076C212.73 459.503 212.427 460.033 212.272 460.614C212.118 461.194 212.117 461.805 212.27 462.385C213.714 461.349 215.728 461.712 217.378 462.385C219.028 463.059 220.653 463.966 222.436 463.966C222.177 461.873 221.927 459.676 222.699 457.713C223.148 456.575 223.938 455.5 223.916 454.283C223.894 453.193 223.227 452.219 223.065 451.141C223.005 450.47 223.031 449.795 223.141 449.13C223.565 445.261 223.084 441.354 222.604 437.491C222.549 436.729 222.37 435.981 222.073 435.278C221.848 434.823 221.513 434.386 221.519 433.877C221.519 433.286 221.997 432.806 222.174 432.243C222.49 431.206 221.908 429.796 222.784 429.155C225.092 427.46 224.207 423.414 224.156 420.553C224.116 418.085 224.011 415.619 223.84 413.156C225.293 417.241 225.887 421.583 225.585 425.908C225.484 427.324 225.297 428.813 225.85 430.122C226.274 431.127 227.115 431.955 227.342 433.021C227.485 433.678 227.384 434.358 227.415 435.028C227.447 435.698 227.674 436.429 228.253 436.767C228.297 439.814 228.569 443.073 228.616 446.121C228.586 447.679 228.713 449.236 228.996 450.768C229.138 451.255 229.216 451.759 229.23 452.266C229.158 452.903 228.99 453.524 228.73 454.109C228.179 455.741 228.035 457.482 228.311 459.182C228.586 460.881 229.273 462.488 230.311 463.862C231.057 462.537 232.612 461.835 234.13 461.725C235.647 461.614 237.145 461.997 238.615 462.382C238.391 460.535 238.758 458.665 239.665 457.04C239.908 456.674 240.095 456.273 240.218 455.851C240.389 455.048 239.991 454.248 239.776 453.455C239.425 452.19 239.548 450.828 239.63 449.507C239.906 445.081 239.71 440.639 239.045 436.255C238.943 435.391 238.74 434.543 238.442 433.726C238.328 433.435 238.189 433.157 238.094 432.863C237.945 432.335 237.86 431.792 237.841 431.244L237.477 426.186C237.221 422.643 238.385 419.143 239.197 415.685C239.561 414.136 239.956 412.59 240.199 411.016C240.531 408.872 240.585 406.681 241.072 404.567C241.508 402.67 242.295 400.821 242.459 398.876C242.712 395.864 241.46 392.952 240.247 390.189C239.741 389.051 237.828 389.165 236.599 388.963C227.877 387.531 218.69 387.521 210.465 390.749C209.614 391.101 208.848 391.63 208.217 392.301Z" fill="#3C354C"/>
        <path id="Vector_75" d="M214.505 336.193L215.472 339.954C215.735 340.817 215.881 341.711 215.905 342.613C215.915 342.942 215.842 343.268 215.693 343.561C215.534 343.802 215.33 344.011 215.093 344.175C214.432 344.677 213.974 345.85 213.218 346.198C213.607 346.874 214.144 346.435 214.846 346.773C216.082 347.374 217.214 348.237 218.554 348.534C219.819 348.812 221.146 348.55 222.401 348.218C224.181 347.734 225.952 347.067 227.384 345.901C228.816 344.734 229.631 343.704 229.625 341.861C228.044 342.047 226.637 340.451 225.939 339.016C225.697 338.47 225.518 337.898 225.408 337.312L224.561 333.585C223.637 333.787 222.885 334.448 222.003 334.792C221.121 335.137 220.078 335.168 219.098 335.213C217.358 335.292 215.629 335.516 213.926 335.883C213.692 335.93 213.398 336.079 213.455 336.306" fill="#FBB3B2"/>
        <path id="Vector_76" opacity="0.1" d="M214.505 336.193L215.472 339.954C215.735 340.817 215.881 341.711 215.905 342.613C215.915 342.942 215.842 343.268 215.693 343.561C215.534 343.802 215.33 344.011 215.093 344.175C214.432 344.677 213.974 345.85 213.218 346.198C213.607 346.874 214.144 346.435 214.846 346.773C216.082 347.374 217.214 348.237 218.554 348.534C219.819 348.812 221.146 348.55 222.401 348.218C224.181 347.734 225.952 347.067 227.384 345.901C228.816 344.734 229.631 343.704 229.625 341.861C228.044 342.047 226.637 340.451 225.939 339.016C225.697 338.47 225.518 337.898 225.408 337.312L224.561 333.585C223.637 333.787 222.885 334.448 222.003 334.792C221.121 335.137 220.078 335.168 219.098 335.213C217.358 335.292 215.629 335.516 213.926 335.883C213.692 335.93 213.398 336.079 213.455 336.306" fill="black"/>
        <path id="Vector_77" d="M218.659 338.266C223.282 338.266 227.029 334.518 227.029 329.895C227.029 325.272 223.282 321.524 218.659 321.524C214.036 321.524 210.288 325.272 210.288 329.895C210.288 334.518 214.036 338.266 218.659 338.266Z" fill="#FBB3B2"/>
        <path id="Vector_78" d="M220.963 343.694C221.411 342.727 222.057 341.866 222.86 341.165C224.039 340.131 225.651 339.294 225.929 337.751L228.484 340.726C228.622 340.864 228.73 341.03 228.8 341.213C228.832 341.384 228.827 341.561 228.786 341.73C228.744 341.9 228.667 342.059 228.56 342.196C227.927 343.204 226.932 343.925 225.989 344.655C223.83 346.365 221.763 348.189 219.797 350.118C219.71 350.218 219.594 350.289 219.465 350.32C219.343 350.324 219.222 350.289 219.12 350.222C217.424 349.331 215.922 348.11 214.704 346.631C214.612 346.52 214.498 346.394 214.35 346.403C214.26 346.42 214.178 346.463 214.113 346.527C213.262 347.222 212.333 348.053 211.242 347.946C212.655 346.931 213.455 345.237 213.752 343.52C213.811 342.933 213.932 342.353 214.113 341.791C214.206 341.51 214.368 341.256 214.583 341.052C214.798 340.848 215.06 340.7 215.346 340.621C214.657 341.674 215.128 343.166 216.054 344.017C216.954 344.78 218.033 345.304 219.19 345.537C220.264 345.739 220.581 344.522 220.963 343.694Z" fill="#323444"/>
        <path id="Vector_79" d="M210.073 393.161C211.265 393.455 212.393 393.954 213.55 394.324C215.659 394.985 217.878 395.218 220.078 395.01C220.755 394.995 221.414 394.786 221.975 394.406C222.123 394.286 222.259 394.144 222.417 394.033C222.682 393.875 222.968 393.757 223.268 393.683C226.166 392.775 228.594 390.818 230.949 388.903C231.025 388.84 231.111 388.761 231.104 388.659C231.094 388.59 231.06 388.527 231.009 388.479L229.77 387.057C226.521 387.61 223.192 387.401 219.895 387.319C219.218 387.289 218.539 387.307 217.865 387.373C217.214 387.449 216.572 387.613 215.93 387.752C213.493 388.283 211.002 388.485 208.533 388.833C208.361 388.846 208.193 388.898 208.043 388.985C207.939 389.066 207.85 389.164 207.781 389.276L206.915 390.493C206.578 390.902 206.331 391.377 206.188 391.887C205.985 392.835 206.409 393.151 207.215 393.028C208.167 392.889 209.137 392.934 210.073 393.161Z" fill="#323444"/>
        <path id="Vector_80" d="M219.762 348.67C218.795 347.679 217.699 346.823 216.503 346.125C216.02 345.818 215.483 345.604 214.922 345.493C214.639 345.437 214.348 345.444 214.068 345.513C213.789 345.581 213.528 345.711 213.303 345.891C213.022 346.141 212.845 346.489 212.573 346.751C212.231 347.038 211.839 347.26 211.416 347.405C209.977 348.02 208.613 348.798 207.351 349.723C206.663 350.204 206.043 350.776 205.508 351.423C204.076 353.257 203.861 355.751 203.899 358.078C203.927 359.696 205.479 360.898 206.548 362.108C207.55 363.3 208.457 364.568 209.26 365.902C209.836 366.812 210.436 367.798 210.364 368.883C210.303 369.771 209.785 370.606 209.867 371.491C209.896 371.807 209.997 372.098 210.025 372.404C210.082 373.037 209.832 373.669 209.769 374.301C209.684 375.196 209.975 376.084 209.991 376.985C209.979 377.602 209.9 378.215 209.757 378.815C209.15 381.705 208.388 384.61 208.543 387.559L206.791 387.875C206.957 388.038 207.082 388.237 207.157 388.457C207.232 388.677 207.253 388.912 207.22 389.142C207.187 389.372 207.101 389.591 206.967 389.781C206.834 389.971 206.658 390.127 206.453 390.237C209.188 391.15 212.143 390.689 215.042 390.686C217.442 390.686 219.831 391.002 222.228 390.958C224.624 390.913 227.096 390.48 229.072 389.124C229.609 388.757 230.102 388.327 230.668 388.008C231.426 387.616 232.243 387.348 233.086 387.218C234.649 386.92 236.238 386.778 237.828 386.794C238.606 386.794 239.453 386.826 240.073 386.358C240.756 385.84 240.929 384.901 241.021 384.05C241.113 383.153 241.17 382.252 241.185 381.351C241.212 380.649 241.175 379.946 241.075 379.252C240.98 378.744 240.856 378.241 240.705 377.747L239.513 373.549C239.02 371.816 239.706 369.916 239.851 368.121C239.886 367.697 239.893 367.204 239.567 366.932C239.45 366.834 239.289 366.768 239.251 366.616C239.234 366.544 239.232 366.469 239.245 366.396C239.258 366.324 239.286 366.254 239.327 366.193C239.959 364.928 240.907 363.812 241.773 362.671C243.228 360.669 244.579 358.594 245.82 356.453C245.431 351.973 243.545 347.754 240.465 344.478C239.832 343.792 239.109 343.135 238.223 342.825C237.645 342.648 237.045 342.551 236.44 342.537C233.962 342.37 231.382 342.221 229.223 340.975C229.068 340.868 228.893 340.794 228.708 340.757C228.231 340.704 227.883 341.175 227.573 341.548C226.777 342.496 225.604 343.04 224.573 343.738C222.651 345.044 221.15 346.84 219.762 348.67Z" fill="#5B5583"/>
        <path id="Vector_81" d="M246.035 357.746C246.528 359.307 246.481 360.977 246.642 362.605C246.737 363.587 246.909 364.56 247.157 365.516C247.27 366.041 247.473 366.543 247.758 366.999C248.042 367.416 248.45 367.754 248.63 368.225C248.729 368.544 248.772 368.878 248.76 369.212L248.798 371.393C248.879 372.549 248.703 373.708 248.282 374.788L246.92 378.932C246.183 381.177 245.428 383.456 244.1 385.41C243.913 385.74 243.63 386.006 243.288 386.172C243.02 386.242 242.746 386.285 242.469 386.298C241.987 386.384 241.55 386.635 241.233 387.009C240.916 387.382 240.74 387.854 240.733 388.343C240.417 387.881 240.022 387.478 239.567 387.151L236.795 384.939C235.846 384.167 234.857 383.383 233.706 382.938C235.254 382.454 236.628 381.532 237.661 380.283C238.695 379.034 239.344 377.511 239.529 375.901C239.528 375.421 239.636 374.948 239.845 374.516C240.076 374.143 240.503 373.859 240.534 373.419C240.572 372.866 239.946 372.449 239.946 371.895C239.946 371.529 240.218 371.225 240.338 370.881C240.45 370.455 240.45 370.007 240.338 369.581L239.956 367.457C239.933 367.244 239.869 367.038 239.766 366.85C239.623 366.67 239.464 366.503 239.292 366.351C238.634 365.614 238.925 364.454 239.292 363.547C240.134 361.533 241.219 359.629 242.523 357.879C242.987 357.291 243.416 356.676 243.809 356.039C244.144 355.457 244.22 354.651 244.574 354.142C245.029 355.337 245.646 356.516 246.035 357.746Z" fill="#5B5583"/>
        <path id="Vector_82" d="M233.608 383.067C233.467 383.172 233.345 383.3 233.248 383.447C232.875 383.914 232.379 384.268 231.816 384.468C232.132 384.695 232.419 384.92 232.717 385.15C234.915 386.848 236.929 388.774 238.723 390.894C238.922 390.183 240.114 390.234 240.405 389.554C240.473 389.36 240.495 389.152 240.468 388.947C240.407 387.882 240.255 386.825 240.013 385.786C239.917 385.251 239.701 384.745 239.38 384.306C238.938 383.772 238.249 383.516 237.591 383.295C236.595 382.947 234.62 382.457 233.608 383.067Z" fill="#323444"/>
        <path id="Vector_83" d="M229.656 385.552C228.708 386.254 227.877 387.133 226.811 387.613C226.059 387.954 225.202 388.103 224.545 388.612C224.902 389.399 225.831 389.807 226.694 389.775C227.558 389.691 228.386 389.387 229.1 388.893C229.666 388.546 230.33 388.141 230.946 388.384C231.041 388.865 230.63 389.317 230.63 389.804C230.63 390.291 231.035 390.645 231.433 390.901C233.33 392.124 235.77 392.023 238.031 391.881C238.16 391.885 238.288 391.848 238.394 391.773C238.443 391.716 238.48 391.65 238.504 391.578C238.527 391.506 238.536 391.431 238.53 391.356C238.558 390.856 238.571 390.36 238.574 389.861C238.638 389.458 238.586 389.045 238.424 388.671C238.261 388.297 237.995 387.977 237.658 387.749C236.431 386.695 235.108 385.758 233.706 384.951C232.315 384.145 230.905 384.622 229.656 385.552Z" fill="#FBB3B2"/>
        <path id="Vector_84" d="M221.599 326.396C220.195 326.563 219.174 327.66 219.316 328.852C219.458 330.044 220.71 330.866 222.114 330.695C223.517 330.524 224.538 329.431 224.396 328.242C224.254 327.053 223.002 326.228 221.599 326.396ZM222.076 330.366C220.887 330.509 219.828 329.81 219.705 328.805C219.582 327.8 220.451 326.87 221.636 326.728C222.822 326.586 223.884 327.284 224.007 328.29C224.131 329.295 223.261 330.224 222.076 330.366Z" fill="#3C354C"/>
        <path id="Vector_85" d="M214.758 327.218C213.354 327.385 212.333 328.482 212.475 329.671C212.617 330.86 213.869 331.685 215.273 331.517C216.676 331.35 217.698 330.253 217.555 329.061C217.413 327.869 216.161 327.05 214.758 327.218ZM215.235 331.185C214.046 331.327 212.987 330.629 212.867 329.627C212.747 328.625 213.61 327.692 214.799 327.547C215.987 327.401 217.046 328.103 217.166 329.108C217.287 330.114 216.42 331.043 215.235 331.185Z" fill="#3C354C"/>
        <path id="Vector_86" d="M209.678 327.828L212.728 328.479L212.428 329.282L209.551 328.438L209.678 327.828Z" fill="#3C354C"/>
        <path id="Vector_87" d="M226.682 325.786L223.868 327.142L224.352 327.85L226.947 326.349L226.682 325.786Z" fill="#3C354C"/>
        <path id="Vector_88" d="M217.274 328.277L219.414 328.021L219.303 328.552L217.467 328.675L217.274 328.277Z" fill="#3C354C"/>
        <path id="Vector_89" d="M213.123 327.559C213.325 327.126 213.432 326.655 213.439 326.178C213.447 325.892 213.496 325.609 213.585 325.337C213.74 324.992 213.976 324.689 214.274 324.455C215.26 323.62 216.673 323.19 218.067 323.13C219.588 323.061 221.1 323.387 222.455 324.079C222.869 324.273 223.24 324.548 223.546 324.888C223.988 325.429 224.083 326.127 224.529 326.661C224.833 326.986 225.216 327.226 225.64 327.359C226.064 327.492 226.516 327.513 226.95 327.42C227.105 326.87 226.903 326.288 226.982 325.726C227.107 325.244 227.275 324.774 227.485 324.322C227.975 322.878 227.26 321.202 225.787 320.339C225.272 320.023 224.662 319.817 224.276 319.391C223.89 318.964 223.799 318.521 223.533 318.095C222.828 316.966 221.004 316.438 219.616 316.96C219.18 317.124 218.795 317.374 218.352 317.551C217.53 317.889 216.594 317.949 215.69 318.063C214.799 318.145 213.928 318.374 213.111 318.739C212.33 319.125 211.675 319.745 211.495 320.484C211.41 320.826 211.429 321.18 211.344 321.518C210.907 323.235 208.091 324.069 207.933 325.821C207.876 326.453 208.22 327.06 208.65 327.575C208.947 327.926 209.659 328.865 210.161 329.001C210.664 329.137 211.046 328.659 211.527 328.495C212.286 328.258 212.744 328.207 213.123 327.559Z" fill="#CBCEDA"/>
        </g>
        <g id="teacher-drawing-on-the-board" class="teacher-drawing-on-the-board">
        <path id="Vector_90" d="M76.3024 389.586H60.8124C60.3758 389.586 60.0221 389.939 60.0221 390.376V397.331C60.0221 397.767 60.3758 398.121 60.8124 398.121H76.3024C76.7389 398.121 77.0927 397.767 77.0927 397.331V390.376C77.0927 389.939 76.7389 389.586 76.3024 389.586Z" fill="#A8A8A8"/>
        <path id="Vector_91" d="M92.8988 396.856H82.4668C82.1175 396.856 81.8345 397.139 81.8345 397.489C81.8345 397.838 82.1175 398.121 82.4668 398.121H92.8988C93.2481 398.121 93.531 397.838 93.531 397.489C93.531 397.139 93.2481 396.856 92.8988 396.856Z" fill="#A8A8A8"/>
        <path id="Vector_92" d="M71.4499 312.256C79.7924 313.795 88.3024 312.256 96.6101 311.213L121.859 308.051C122.88 307.922 124.366 307.312 124.966 308.56C125.305 309.259 125.077 310.773 125.102 311.576C125.169 313.789 125.162 316.002 125.102 318.215C124.988 322.444 124.679 326.665 124.283 330.875C123.515 339.117 122.428 347.314 121.884 355.587C121.606 359.797 121.467 364.021 121.59 368.232C121.619 369.237 121.66 370.242 121.72 371.244C121.786 372.366 122.289 374.032 121.065 374.782C120.367 375.212 118.992 375.189 118.192 375.316C116.927 375.515 115.663 375.673 114.373 375.803C105.872 376.653 97.2613 376.299 88.7292 376.248L62.9652 376.116L56.6807 376.081C56.1117 376.081 54.06 376.422 53.7092 375.746C53.5606 375.458 53.9557 374.111 54.0253 373.751C54.1223 373.157 54.2276 372.563 54.3414 371.971C55.0748 367.814 55.941 363.683 56.8135 359.554C58.6881 350.703 60.6069 341.807 61.3783 332.766C61.7608 328.229 61.5079 323.652 61.9758 319.125C62.1939 317.023 62.4531 312.332 65.2508 312.145C67.6217 311.987 70.0622 312.145 72.4394 312.145C72.5652 312.145 72.6857 312.095 72.7748 312.006C72.8636 311.917 72.9136 311.797 72.9136 311.671C72.9136 311.545 72.8636 311.425 72.7748 311.336C72.6857 311.247 72.5652 311.197 72.4394 311.197C70.1949 311.197 67.9473 311.137 65.7028 311.181C64.2107 311.209 63.1739 311.563 62.4626 312.935C60.6449 316.457 60.8314 321.155 60.7745 324.999C60.6386 334.201 59.2255 343.207 57.3857 352.207C56.4594 356.737 55.4605 361.252 54.5406 365.785C54.1075 367.95 53.6933 370.122 53.314 372.3C53.137 373.337 52.2423 375.622 53.0295 376.574C53.8166 377.526 56.2381 377.013 57.3224 377.02L64.8651 377.064L79.3182 377.146C88.6565 377.2 98.0263 377.462 107.361 377.187C111.819 377.055 116.529 376.871 120.869 375.806C122.162 375.49 122.785 374.895 122.836 373.517C122.911 371.38 122.564 369.177 122.519 367.03C122.203 348.664 126.518 330.553 126.076 312.18C126.047 310.931 126.518 307.783 125.153 307.027C124.539 306.686 123.743 306.872 123.098 306.948C121.865 307.09 120.635 307.264 119.403 307.41L103.391 309.408C98.2729 310.04 93.158 310.723 88.0305 311.304C82.6027 311.936 77.1212 312.313 71.7123 311.304C71.1148 311.194 70.8588 312.107 71.4594 312.218L71.4499 312.256Z" fill="#A8A8A8"/>
        <path id="Vector_93" d="M61.3846 323.431L124.552 320.333C125.162 320.301 125.165 319.353 124.552 319.384L61.3846 322.482C60.7777 322.511 60.7745 323.459 61.3846 323.431Z" fill="#A8A8A8"/>
        <path id="Vector_94" d="M80.8451 315.613C80.6684 315.8 80.5401 316.028 80.4715 316.276C80.4029 316.524 80.3956 316.785 80.4509 317.037C80.5059 317.288 80.6216 317.522 80.7879 317.718C80.9542 317.915 81.166 318.068 81.4046 318.164C82.255 318.553 83.254 318.227 84.098 318.016C85.3625 317.699 86.627 317.418 87.9262 317.187C90.754 316.687 93.6183 316.42 96.49 316.391C97.7987 316.375 99.098 316.435 100.407 316.492C101.355 316.53 102.376 316.606 103.179 316.018C104.096 315.347 104.393 314.039 103.495 313.223C102.231 312.069 99.5058 312.739 98.0453 312.86C92.7458 313.3 87.4805 314.086 82.2835 315.212C81.6892 315.338 81.9389 316.255 82.5364 316.125C85.9653 315.385 89.4206 314.791 92.902 314.342C94.6132 314.131 96.3278 313.953 98.0453 313.808C98.8546 313.742 99.6639 313.681 100.473 313.634C100.789 313.615 101.124 313.58 101.447 313.59C102.449 313.612 102.566 313.432 101.965 314.643C101.431 315.714 101.602 315.591 100.675 315.556C100.283 315.556 99.8915 315.512 99.4995 315.493C98.6965 315.459 97.8936 315.441 97.0906 315.439C95.3814 315.439 93.6765 315.521 91.9758 315.686C90.5343 315.825 89.0959 316.021 87.6702 316.274C86.7787 316.432 85.8936 316.615 85.0116 316.817C84.6228 316.909 84.2308 317.004 83.8419 317.102C83.6554 317.153 83.4658 317.197 83.2793 317.244C82.5879 317.484 81.999 317.168 81.5121 316.296C81.9357 315.856 81.2687 315.183 80.8419 315.626L80.8451 315.613Z" fill="#A8A8A8"/>
        <path id="Vector_95" d="M92.295 329.105C87.7207 328.928 82.7797 330.164 79.7671 333.847C77.4088 336.727 76.0653 341.668 78.5627 344.911C81.2466 348.389 87.1327 347.775 90.6828 346.293C94.4383 344.712 98.5479 341.453 99.6765 337.375C101.083 332.282 96.5153 328.432 91.7576 328.375C91.1475 328.375 91.1475 329.323 91.7576 329.323C94.4699 329.355 97.1317 330.518 98.3962 333.044C99.7207 335.706 98.5795 338.5 96.8156 340.631C93.9894 344.023 89.5701 346.58 85.0685 346.508C82.3656 346.467 79.3783 345.54 78.5405 342.689C77.8514 340.378 78.3762 337.852 79.5774 335.804C82.176 331.378 87.4647 329.88 92.314 330.069C92.9241 330.091 92.9241 329.143 92.314 329.121L92.295 329.105Z" fill="#A8A8A8"/>
        <path id="Vector_96" d="M87.7523 336.129C87.5573 336.057 87.3471 336.035 87.1416 336.066C86.9358 336.097 86.7411 336.179 86.5757 336.305C86.4104 336.432 86.2798 336.598 86.1961 336.788C86.112 336.978 86.0775 337.187 86.0959 337.394C86.1907 338.627 87.55 338.974 88.5711 338.902C89.4531 338.826 90.4836 338.5 90.1738 337.397C90.1169 337.202 90.0183 337.021 89.8852 336.867C89.7521 336.713 89.5874 336.59 89.4025 336.506C89.1196 336.393 88.8126 336.355 88.511 336.395C88.3941 336.395 87.3224 336.787 87.7776 336.316L87.0316 336.218C87.1144 336.299 87.1779 336.399 87.2171 336.508C87.2567 336.617 87.2709 336.734 87.2592 336.85C87.2608 336.933 87.2835 337.014 87.3256 337.085C87.3676 337.156 87.4274 337.215 87.4991 337.256C87.5709 337.297 87.6518 337.319 87.7346 337.319C87.8171 337.32 87.8984 337.298 87.9705 337.258C88.0789 337.212 88.1978 337.198 88.3141 337.217C88.4301 337.235 88.5389 337.286 88.6277 337.363C88.7168 337.439 88.7826 337.54 88.8177 337.652C88.8531 337.764 88.8562 337.884 88.8272 337.998C88.8015 338.107 88.8158 338.222 88.8667 338.322C88.9176 338.422 89.0026 338.502 89.106 338.545C89.2097 338.589 89.3254 338.595 89.4325 338.562C89.54 338.529 89.6323 338.459 89.6933 338.364C90.0095 337.795 90.392 336.664 89.9178 336.069C89.6017 335.668 88.9915 335.788 88.6122 336.022C88.3779 336.187 88.1601 336.375 87.961 336.581C87.5785 336.92 87.3287 337.078 87.471 336.43C87.7081 335.251 88.8335 334.312 89.8609 333.841L89.1654 333.306C88.8009 334.676 88.1488 335.954 87.2529 337.052L88.0621 337.387C88.0391 336.953 88.1506 336.523 88.3814 336.155C88.6125 335.786 88.9514 335.498 89.3519 335.33H88.8872L89.1338 335.734C89.0421 336.332 89.9557 336.588 90.0474 335.984C90.1675 335.203 89.6744 334.188 88.7608 334.571C87.6701 335.026 87.1043 336.275 87.1264 337.387C87.1264 337.767 87.6638 338.061 87.9388 337.726C88.9441 336.504 89.6782 335.083 90.0916 333.556C90.1138 333.465 90.1087 333.371 90.0777 333.283C90.0468 333.195 89.9905 333.118 89.9165 333.061C89.8425 333.004 89.7537 332.971 89.6608 332.964C89.5675 332.957 89.4746 332.977 89.393 333.022C88.4459 333.45 87.6458 334.147 87.0916 335.026C86.706 335.658 86.2223 336.645 86.6143 337.372C86.6785 337.488 86.7651 337.59 86.8694 337.673C86.9734 337.756 87.0929 337.817 87.2206 337.853C87.3486 337.889 87.4824 337.9 87.6142 337.884C87.7463 337.868 87.8737 337.826 87.9894 337.761C88.2818 337.587 88.5487 337.375 88.7829 337.128C88.8999 337.024 89.0295 336.844 89.1844 336.812C89.3235 336.717 89.3171 336.771 89.1622 336.98C89.1603 337.307 89.0649 337.627 88.8872 337.903L89.7534 338.266C89.8315 337.971 89.8223 337.66 89.7272 337.369C89.632 337.08 89.455 336.823 89.2173 336.632C88.9795 336.44 88.6912 336.321 88.3874 336.29C88.084 336.259 87.7776 336.316 87.5058 336.455L88.2202 336.866C88.2351 336.463 88.1089 336.069 87.863 335.75C87.8257 335.689 87.7751 335.636 87.7147 335.597C87.6547 335.557 87.5864 335.532 87.5149 335.523C87.4438 335.514 87.3711 335.52 87.3028 335.543C87.2345 335.565 87.1719 335.602 87.1201 335.652C86.6396 336.155 86.5479 337.024 87.1517 337.489C87.6038 337.833 87.8251 337.489 88.3214 337.41C90.0063 337.192 89.0232 337.95 88.4288 337.975C88.163 338.004 87.8943 337.985 87.6354 337.919C86.9756 337.695 86.9345 337.407 87.5121 337.056C88.0779 337.286 88.3214 336.37 87.765 336.142L87.7523 336.129Z" fill="#A8A8A8"/>
        <path id="Vector_97" d="M86.9905 337.862C87.3793 339.126 85.7734 339.543 85.0116 339.98C84.477 340.279 84.0107 340.687 83.6428 341.178C82.8462 342.246 82.549 343.606 82.2866 344.886C82.1665 345.483 83.0801 345.736 83.2034 345.139C83.3478 344.198 83.6169 343.281 84.0032 342.411C84.5722 341.279 85.3878 340.9 86.4499 340.318C87.5121 339.736 88.2803 338.835 87.9041 337.609C87.7271 337.027 86.8103 337.277 86.9905 337.862Z" fill="#A8A8A8"/>
        <path id="Vector_98" d="M88.5711 337.226C88.3451 337.258 88.1387 337.372 87.9923 337.547C87.8463 337.723 87.7707 337.946 87.7808 338.175C87.7808 338.551 88.0306 338.791 88.2013 339.091C88.6065 339.706 88.9157 340.378 89.118 341.086C89.2698 341.766 89.4183 342.983 89.0643 343.615C88.4099 344.788 87.2276 344.563 86.2192 344.563C85.2708 344.563 84.5374 344.88 84.569 343.558C84.588 342.815 85.1064 342.063 85.5174 341.478L84.6512 341.364C84.8339 342.329 84.9304 343.309 84.9389 344.292C84.9389 344.731 85.6122 344.974 85.8209 344.529C86.3292 343.46 86.7326 342.344 87.0253 341.197L86.0927 341.07L86.2571 343.473C86.26 343.575 86.2957 343.674 86.3589 343.755C86.4221 343.836 86.51 343.894 86.609 343.921C86.7079 343.948 86.8129 343.942 86.9083 343.905C87.0038 343.867 87.0847 343.8 87.1391 343.713C87.2497 343.591 87.331 343.445 87.3762 343.286C87.4078 343.138 87.117 342.136 87 342.493L87.9294 342.619L87.9958 340.337L87.0474 340.463C87.2478 341.107 87.3082 341.786 87.2245 342.455C87.1644 342.983 88.0527 343.103 88.1728 342.581L88.7671 339.515L87.901 339.626C88.1067 340.05 88.1637 340.531 88.0622 340.991C87.9926 341.598 88.941 341.592 89.0105 340.991C89.0912 340.362 88.9903 339.722 88.7197 339.148C88.6717 339.069 88.6015 339.006 88.518 338.966C88.4346 338.926 88.3413 338.911 88.2496 338.923C88.1576 338.935 88.0713 338.973 88.0012 339.034C87.9307 339.094 87.8795 339.173 87.8535 339.262L87.2561 342.329L88.1886 342.455C88.2835 341.701 88.2111 340.936 87.9768 340.214C87.9452 340.105 87.8757 340.011 87.7805 339.949C87.6857 339.887 87.5716 339.861 87.459 339.876C87.3468 339.891 87.2434 339.946 87.1679 340.03C87.0923 340.115 87.0496 340.223 87.0474 340.337L86.981 342.619C86.981 343.173 87.7492 343.252 87.9136 342.746L87.9642 342.591C87.986 342.51 87.9866 342.425 87.9654 342.344C87.9443 342.263 87.9025 342.189 87.8441 342.129C86.8609 341.061 86.6618 342.762 86.3203 343.233L87.2055 343.473L87.0411 341.07C87.0063 340.558 86.2476 340.4 86.1085 340.944C85.8414 342.013 85.4709 343.054 85.0021 344.051L85.8873 344.292C85.8771 343.224 85.7712 342.16 85.5711 341.111C85.4889 340.675 84.9168 340.694 84.705 340.998C84.0727 341.908 82.9789 343.896 83.823 344.987C84.5595 345.935 86.8767 345.569 87.8662 345.509C89.4278 345.42 89.9937 344.431 90.1644 342.958C90.2456 342.252 90.2061 341.538 90.0474 340.846C89.9621 340.473 89.0991 338.108 88.8398 338.156C89.4405 338.045 89.1844 337.128 88.5869 337.239L88.5711 337.226Z" fill="#A8A8A8"/>
        <path id="Vector_99" d="M86.7344 339.357L84.1454 342.774L84.9641 343.252L86.8609 340.508L85.9947 340.141L85.0495 343.748C85.0239 343.857 85.0381 343.972 85.089 344.073C85.1399 344.173 85.225 344.252 85.3283 344.296C85.432 344.339 85.5477 344.345 85.6549 344.312C85.7624 344.279 85.8547 344.209 85.9157 344.115C86.3459 343.402 86.8286 342.722 87.3604 342.082L86.5701 341.62C86.3579 342.437 85.9486 343.189 85.3783 343.811L86.1717 344.273C86.2204 343.836 86.3364 343.409 86.5163 343.008C86.7597 342.461 85.9884 341.978 85.6976 342.528C85.4301 343.029 85.1247 343.509 84.784 343.963L85.6501 344.077L85.843 343.176L84.9768 343.062L85.1159 343.852C85.1387 343.932 85.182 344.004 85.2411 344.062C85.3002 344.12 85.3732 344.161 85.4532 344.182C85.5332 344.203 85.6173 344.203 85.6972 344.182C85.7772 344.16 85.8502 344.119 85.9094 344.061C86.711 343.231 87.354 342.261 87.8061 341.2H86.9905C87.2048 341.595 87.3553 342.022 87.4362 342.464C87.55 343.033 88.3056 342.822 88.3656 342.338C88.5016 341.279 88.5711 340.213 88.5743 339.145H87.6259V341.134C87.6259 341.649 88.4699 341.801 88.5585 341.26C88.6211 340.78 88.7791 340.318 89.0232 339.901H88.1918C88.3922 340.224 88.5012 340.595 88.5079 340.975C88.5079 341.101 88.5578 341.222 88.6467 341.311C88.7358 341.4 88.8562 341.45 88.9821 341.45C89.1079 341.45 89.2283 341.4 89.3175 341.311C89.4063 341.222 89.4562 341.101 89.4562 340.975L89.5764 340.343H88.6628C88.7545 340.903 89.1022 344.055 87.8662 343.685C87.6575 343.634 87.5974 343.647 87.686 343.719L87.9673 343.119L88.628 341.718L87.7429 341.478C87.7998 342.129 87.8598 343.059 87.4678 343.615C87.1517 344.067 86.1781 344.247 85.6818 343.982C85.3542 343.748 85.0742 343.454 84.8567 343.116L84.2086 343.748C84.7334 344.13 85.5837 345.069 86.2602 345.123C86.7755 345.164 87.2086 344.737 87.5469 344.396C88.0656 343.86 88.4703 343.224 88.7361 342.527C89.0017 341.829 89.123 341.086 89.0927 340.34C89.0927 340.214 89.0428 340.094 88.9539 340.005C88.8648 339.916 88.7443 339.866 88.6185 339.866C88.4927 339.866 88.3723 339.916 88.2831 340.005C88.1943 340.094 88.1443 340.214 88.1443 340.34V341.421C88.1443 341.547 88.1943 341.667 88.2831 341.757C88.3723 341.845 88.4927 341.895 88.6185 341.895C88.7443 341.895 88.8648 341.845 88.9539 341.757C89.0428 341.667 89.0927 341.547 89.0927 341.421V338.769C89.0927 338.643 89.0428 338.523 88.9539 338.434C88.8648 338.345 88.7443 338.295 88.6185 338.295C88.4927 338.295 88.3723 338.345 88.2831 338.434C88.1943 338.523 88.1443 338.643 88.1443 338.769C88.1428 339.405 88.0878 340.039 87.98 340.666L88.9125 340.792C88.8382 340.037 88.8034 339.278 88.8082 338.519C88.8066 338.406 88.7646 338.296 88.6893 338.211C88.6138 338.126 88.5104 338.071 88.3979 338.055C88.2853 338.04 88.1709 338.066 88.0757 338.128C87.9806 338.19 87.9107 338.284 87.8788 338.393C87.7365 338.997 87.5627 339.591 87.3951 340.182L88.2613 340.068L88.1949 339.815C88.1507 339.212 87.2023 339.208 87.2465 339.815C87.257 340.071 87.324 340.322 87.4425 340.549C87.6259 340.934 88.1981 340.798 88.3087 340.435C88.4889 339.841 88.6501 339.246 88.7924 338.646L87.8598 338.519C87.8551 339.278 87.8899 340.037 87.9642 340.792C88.0116 341.279 88.7956 341.488 88.8936 340.919C89.0197 340.204 89.0864 339.481 89.0927 338.756H88.1443V341.409H89.0927V340.327H88.1443C88.2 341.52 87.7859 342.687 86.9905 343.577C86.8672 343.717 86.7341 343.848 86.5922 343.969C86.3677 344.184 86.1623 344.153 85.9821 343.871C85.5332 343.685 85.0685 343.204 84.6765 342.923C84.2845 342.641 83.7471 343.198 84.0253 343.571C84.7523 344.538 85.8366 345.616 87.1865 345.151C88.6059 344.649 88.7987 342.727 88.6912 341.462C88.6565 341.042 88.0274 340.757 87.8092 341.225C87.4931 341.892 87.177 342.556 86.8609 343.226C86.7502 343.46 86.5448 343.783 86.5764 344.061C86.6807 344.772 87.5437 344.655 88.0748 344.614C90.1327 344.459 89.8071 341.541 89.57 340.075C89.491 339.588 88.7829 339.664 88.6565 340.075C88.5559 340.363 88.5038 340.667 88.5016 340.972H89.4499C89.4155 340.429 89.2634 339.899 89.0042 339.42C88.9618 339.349 88.9018 339.291 88.83 339.25C88.7582 339.21 88.6773 339.188 88.5948 339.188C88.5123 339.188 88.4314 339.21 88.3596 339.25C88.2879 339.291 88.2278 339.349 88.1854 339.42C87.9028 339.908 87.7119 340.444 87.6227 341.001L88.5711 341.127V339.139C88.5711 339.013 88.5212 338.893 88.4323 338.803C88.3432 338.715 88.2227 338.665 88.0969 338.665C87.9711 338.665 87.8507 338.715 87.7615 338.803C87.6727 338.893 87.6227 339.013 87.6227 339.139C87.6196 340.206 87.55 341.273 87.4141 342.332L88.3467 342.205C88.2395 341.688 88.0574 341.19 87.8061 340.726C87.7637 340.655 87.7037 340.596 87.6319 340.556C87.5601 340.515 87.4792 340.494 87.3967 340.494C87.3142 340.494 87.2333 340.515 87.1615 340.556C87.0898 340.596 87.0297 340.655 86.9873 340.726C86.5751 341.716 85.9824 342.621 85.2392 343.394L86.0326 343.602L85.8935 342.812C85.8208 342.392 85.2265 342.379 85.0274 342.698C84.8703 342.936 84.7637 343.204 84.7141 343.484C84.6648 343.765 84.6733 344.052 84.7397 344.33C84.8187 344.778 85.3878 344.731 85.6059 344.443C85.9467 343.99 86.252 343.511 86.5195 343.011L85.7007 342.531C85.482 343.003 85.3331 343.505 85.2581 344.02C85.2012 344.437 85.6976 344.873 86.0516 344.481C86.7313 343.738 87.2232 342.843 87.4868 341.87C87.6038 341.44 87.0095 341.032 86.6933 341.409C86.1117 342.106 85.5834 342.845 85.1127 343.621L85.9789 343.988L86.9431 340.394C86.9687 340.284 86.9545 340.169 86.9036 340.069C86.8527 339.969 86.7676 339.89 86.6643 339.846C86.5606 339.802 86.4449 339.796 86.3377 339.83C86.2302 339.863 86.1379 339.933 86.0769 340.027L84.1802 342.774C83.8261 343.283 84.6385 343.723 84.9989 343.252L87.5785 339.837C87.9452 339.351 87.1233 338.889 86.7597 339.357H86.7344Z" fill="#A8A8A8"/>
        <path id="Vector_100" d="M127.065 350.766C130.859 348.445 133.875 344.984 137.225 342.088C140.861 338.949 144.676 336.025 148.606 333.256C156.237 327.882 164.251 323.073 172.258 318.278C172.362 318.212 172.436 318.109 172.465 317.99C172.494 317.87 172.476 317.744 172.414 317.638C172.352 317.532 172.252 317.454 172.134 317.421C172.016 317.387 171.889 317.401 171.781 317.459C163.773 322.255 155.757 327.053 148.125 332.437C144.525 334.966 141.009 337.647 137.64 340.492C133.973 343.59 130.707 347.447 126.575 349.947C126.054 350.263 126.531 351.085 127.053 350.766H127.065Z" fill="#A8A8A8"/>
        <path id="Vector_101" d="M184.502 303.553C180.392 303.97 175.966 305.017 173.437 308.611C171.253 311.703 171.3 317.096 173.352 320.269C175.682 323.876 180.443 324.006 184.141 322.84C187.84 321.673 191.668 319.628 191.633 315.208C191.614 312.837 190.758 310.369 189.812 308.219C188.997 306.363 187.552 304.742 185.365 304.947C184.761 305.004 184.754 305.952 185.365 305.895C188.295 305.624 189.237 309.104 189.933 311.301C190.565 313.353 191.15 315.781 190.157 317.82C189.164 319.859 186.771 320.899 184.726 321.645C182.513 322.448 180.082 322.938 177.771 322.277C173.194 320.997 171.929 315.196 173.248 311.08C174.765 306.338 180.139 304.944 184.517 304.501C185.118 304.441 185.124 303.493 184.517 303.553H184.502Z" fill="#A8A8A8"/>
        <path id="Vector_102" d="M190.824 340.223C186.714 340.64 182.289 341.687 179.76 345.281C177.575 348.373 177.623 353.766 179.674 356.94C182.004 360.547 186.765 360.676 190.464 359.51C194.162 358.343 197.991 356.298 197.956 351.879C197.937 349.508 197.08 347.039 196.135 344.889C195.319 343.033 193.875 341.412 191.687 341.617C191.083 341.674 191.077 342.622 191.687 342.566C194.617 342.294 195.56 345.774 196.255 347.971C196.887 350.023 197.472 352.451 196.479 354.49C195.487 356.529 193.094 357.569 191.048 358.315C188.836 359.118 186.405 359.608 184.094 358.947C179.516 357.667 178.252 351.866 179.57 347.75C181.087 343.008 186.462 341.614 190.84 341.171C191.44 341.111 191.447 340.163 190.84 340.223H190.824Z" fill="#A8A8A8"/>
        <path id="Vector_103" d="M178.302 312.787L181.296 316.201C181.355 316.258 181.429 316.299 181.508 316.32C181.588 316.34 181.672 316.34 181.751 316.319C181.831 316.297 181.903 316.256 181.962 316.198C182.021 316.14 182.064 316.068 182.086 315.989C182.719 314.326 182.599 312.604 182.747 310.855C182.911 309.048 183.364 307.28 184.091 305.617C185.549 302.245 188.022 299.411 191.165 297.509C191.687 297.193 191.21 296.371 190.688 296.69C187.589 298.556 185.102 301.288 183.534 304.549C182.767 306.135 182.234 307.825 181.954 309.566C181.637 311.617 181.925 313.767 181.166 315.736L181.96 315.524L178.982 312.117C178.577 311.658 177.91 312.332 178.312 312.787H178.302Z" fill="#A8A8A8"/>
        <path id="Vector_104" d="M128.592 354.461C144.898 353.964 161.207 353.858 177.522 354.145C178.132 354.145 178.132 353.197 177.522 353.197C161.212 352.906 144.902 353.011 128.592 353.513C127.982 353.532 127.979 354.48 128.592 354.461Z" fill="#A8A8A8"/>
        <path id="Vector_105" d="M180.929 345.11C186.503 347.298 191.865 349.992 196.947 353.159C197.466 353.475 197.943 352.663 197.425 352.34C192.276 349.134 186.843 346.408 181.195 344.197C180.629 343.972 180.382 344.889 180.945 345.11H180.929Z" fill="#A8A8A8"/>
        <path id="Vector_106" d="M191.052 340.814C185.399 347.404 182.125 355.701 181.754 364.375C181.729 364.985 182.678 364.985 182.703 364.375C183.062 355.95 186.238 347.89 191.722 341.484C192.117 341.023 191.45 340.35 191.052 340.814Z" fill="#A8A8A8"/>
        <path id="Vector_107" d="M64.6185 351.019L99.9515 350.557L104.014 350.503C104.744 350.503 105.474 350.478 106.204 350.475C107.232 350.475 107.924 351.328 107.905 352.372C107.858 354.585 106.467 354.506 104.646 354.585L100.255 354.784L82.3751 355.571C79.1728 355.713 75.9673 355.887 72.765 355.998C69.8757 356.086 64.3815 355.144 65.6649 350.94C65.8419 350.355 64.9284 350.105 64.7482 350.687C64.1159 352.754 65.235 354.853 67.0369 355.938C69.5943 357.474 72.9642 356.952 75.7871 356.826L97.7387 355.83L103.068 355.593C104.434 355.53 106.334 355.808 107.589 355.173C109.062 354.43 109.321 351.48 108.392 350.238C107.915 349.606 107.244 349.549 106.495 349.52C104.529 349.444 102.528 349.574 100.558 349.599L89.6143 349.745L64.6059 350.061C63.9958 350.061 63.9958 351.009 64.6059 351.009L64.6185 351.019Z" fill="#A8A8A8"/>
        </g>
        </g>
        <g id="standing_child_browsing">
        <path id="Vector_108" d="M795.578 388H616.222C615.368 388.001 614.549 388.341 613.945 388.945C613.341 389.549 613.001 390.368 613 391.222V497.189C613.001 498.043 613.341 498.861 613.945 499.465C614.549 500.069 615.368 500.409 616.222 500.411H795.578C796.432 500.409 797.25 500.069 797.854 499.465C798.458 498.861 798.798 498.043 798.8 497.189V391.222C798.798 390.368 798.458 389.549 797.854 388.945C797.25 388.341 796.432 388.001 795.578 388ZM798.084 497.189C798.083 497.853 797.819 498.49 797.349 498.96C796.879 499.43 796.242 499.694 795.578 499.695H616.222C615.558 499.694 614.921 499.43 614.451 498.96C613.981 498.49 613.717 497.853 613.716 497.189V391.222C613.717 390.558 613.981 389.921 614.451 389.451C614.921 388.981 615.558 388.717 616.222 388.716H795.578C796.242 388.717 796.879 388.981 797.349 389.451C797.819 389.921 798.083 390.558 798.084 391.222V497.189Z" fill="#6C63FF"/>
        <path id="Vector_2_3" d="M798.442 400.172H613.358V400.888H798.442V400.172Z" fill="#6C63FF"/>
        <g id="boy-three-dots" class="boy-three-dots">
        <path id="Vector_3_3" d="M619.444 396.055C620.432 396.055 621.234 395.253 621.234 394.265C621.234 393.276 620.432 392.475 619.444 392.475C618.455 392.475 617.654 393.276 617.654 394.265C617.654 395.253 618.455 396.055 619.444 396.055Z" fill="#CCCCCC"/>
        <path id="Vector_4_3" d="M624.814 396.055C625.802 396.055 626.604 395.253 626.604 394.265C626.604 393.276 625.802 392.475 624.814 392.475C623.825 392.475 623.024 393.276 623.024 394.265C623.024 395.253 623.825 396.055 624.814 396.055Z" fill="#CCCCCC"/>
        <path id="Vector_5_3" d="M630.184 396.055C631.172 396.055 631.974 395.253 631.974 394.265C631.974 393.276 631.172 392.475 630.184 392.475C629.195 392.475 628.394 393.276 628.394 394.265C628.394 395.253 629.195 396.055 630.184 396.055Z" fill="#CCCCCC"/>
        </g>
        <path id="Vector_6_3" d="M749.217 543.191H662.582C661.775 543.19 661.002 542.869 660.432 542.299C659.861 541.728 659.54 540.955 659.539 540.148V443.131C659.54 442.324 659.861 441.551 660.432 440.98C661.002 440.41 661.775 440.089 662.582 440.088H749.217C750.024 440.089 750.797 440.41 751.368 440.98C751.938 441.551 752.259 442.324 752.26 443.131V540.148C752.259 540.955 751.938 541.728 751.368 542.299C750.797 542.869 750.024 543.19 749.217 543.191Z" fill="#6C63FF"/>
        <g id="boy-texts" class="boy-texts">
        <path id="Vector_7_3" d="M731.317 489.85H680.482C679.295 489.85 678.157 489.378 677.318 488.539C676.479 487.7 676.007 486.561 676.007 485.375C676.007 484.188 676.479 483.05 677.318 482.21C678.157 481.371 679.295 480.9 680.482 480.9H731.317C732.504 480.9 733.643 481.371 734.482 482.21C735.321 483.05 735.792 484.188 735.792 485.375C735.792 486.561 735.321 487.7 734.482 488.539C733.643 489.378 732.504 489.85 731.317 489.85Z" fill="#CCCCCC"/>
        <path id="Vector_8_3" d="M731.317 506.496H680.482C679.295 506.496 678.157 506.025 677.318 505.186C676.479 504.347 676.007 503.208 676.007 502.021C676.007 500.835 676.479 499.696 677.318 498.857C678.157 498.018 679.295 497.547 680.482 497.547H731.317C732.504 497.547 733.643 498.018 734.482 498.857C735.321 499.696 735.792 500.835 735.792 502.021C735.792 503.208 735.321 504.347 734.482 505.186C733.643 506.025 732.504 506.496 731.317 506.496Z" fill="#CCCCCC"/>
        <path id="Vector_9_3" d="M731.317 523.322H680.482C679.295 523.322 678.157 522.851 677.318 522.012C676.479 521.172 676.007 520.034 676.007 518.847C676.007 517.661 676.479 516.522 677.318 515.683C678.157 514.844 679.295 514.372 680.482 514.372H731.317C732.504 514.372 733.643 514.844 734.482 515.683C735.321 516.522 735.792 517.661 735.792 518.847C735.792 520.034 735.321 521.172 734.482 522.012C733.643 522.851 732.504 523.322 731.317 523.322Z" fill="#CCCCCC"/>
        <path id="Vector_10_3" d="M715.745 467.833H696.055C694.868 467.833 693.73 467.361 692.891 466.522C692.051 465.683 691.58 464.545 691.58 463.358C691.58 462.171 692.051 461.033 692.891 460.194C693.73 459.355 694.868 458.883 696.055 458.883H715.745C716.931 458.883 718.07 459.355 718.909 460.194C719.748 461.033 720.22 462.171 720.22 463.358C720.22 464.545 719.748 465.683 718.909 466.522C718.07 467.361 716.931 467.833 715.745 467.833Z" fill="#CCCCCC"/>
        <path id="Vector_11_3" d="M779.647 413.418H632.153C630.077 413.418 628.394 415.101 628.394 417.177C628.394 419.253 630.077 420.936 632.153 420.936H779.647C781.723 420.936 783.406 419.253 783.406 417.177C783.406 415.101 781.723 413.418 779.647 413.418Z" fill="#CCCCCC"/>
        </g>
        <path id="Vector_12_3" d="M877.779 558.414C878.234 558.188 878.632 557.865 878.948 557.468C879.264 557.071 879.489 556.61 879.607 556.117C879.726 555.624 879.734 555.111 879.633 554.614C879.531 554.117 879.322 553.648 879.02 553.241L887.104 508.5L879.56 508.401L873.946 552.643C873.296 553.197 872.871 553.969 872.751 554.815C872.632 555.66 872.827 556.52 873.3 557.231C873.772 557.942 874.489 558.456 875.315 558.674C876.14 558.892 877.018 558.799 877.779 558.414Z" fill="#A0616A"/>
        <path id="Vector_13_3" d="M854.366 556.292L851.502 569.896L851.86 600.326H857.23L859.736 570.612L863.674 558.082L854.366 556.292Z" fill="#A0616A"/>
        <path id="Vector_14_3" d="M872.266 556.292L869.402 569.896L869.76 600.326H875.129L877.635 570.612L881.573 558.082L872.266 556.292Z" fill="#A0616A"/>
        <path id="Vector_15_3" d="M850.103 599.48L858.559 599.863L858.317 605.187L844.538 604.562C844.569 603.863 844.739 603.177 845.035 602.543C845.332 601.909 845.751 601.34 846.268 600.868C846.784 600.396 847.389 600.031 848.047 599.792C848.705 599.554 849.404 599.448 850.103 599.48Z" fill="#2F2E41"/>
        <path id="Vector_16_3" d="M868.003 599.48L876.459 599.863L876.217 605.187L862.437 604.562C862.469 603.863 862.638 603.177 862.935 602.543C863.232 601.909 863.651 601.34 864.168 600.868C864.684 600.396 865.289 600.031 865.947 599.792C866.605 599.554 867.304 599.448 868.003 599.48Z" fill="#2F2E41"/>
        <path id="Vector_17_3" d="M867.433 489.578C872.288 489.578 876.225 485.641 876.225 480.785C876.225 475.929 872.288 471.992 867.433 471.992C862.576 471.992 858.64 475.929 858.64 480.785C858.64 485.641 862.576 489.578 867.433 489.578Z" fill="#A0616A"/>
        <path id="Vector_18_3" d="M886.864 502.533C883.954 497.968 874.275 486.593 859.915 495.97C859.915 495.97 863.316 524.431 855.082 539.825C855.082 539.825 874.056 545.553 884.437 540.183C884.437 540.183 880.857 516.197 884.437 511.543C885.631 510.056 886.598 508.4 887.306 506.629C887.554 505.959 887.644 505.24 887.567 504.529C887.491 503.818 887.25 503.135 886.864 502.533Z" fill="#CCCCCC"/>
        <path id="Vector_19_3" d="M883.363 502.235L886.876 503.699C887.11 503.797 887.312 503.959 887.456 504.167C887.601 504.375 887.684 504.619 887.694 504.873L888.017 512.617L880.141 511.901L883.363 502.235Z" fill="#CCCCCC"/>
        <path id="Vector_20_3" d="M856.514 539.109C856.514 539.109 848.638 553.787 850.07 567.391L861.168 569.181L869.044 550.207L867.254 569.539L878.709 569.897C878.709 569.897 886.227 541.973 883.721 539.467L856.514 539.109Z" fill="#2F2E41"/>
        <path id="Vector_21_3" d="M854.51 554.834C854.964 554.608 855.363 554.285 855.679 553.889C855.995 553.492 856.219 553.03 856.338 552.537C856.456 552.044 856.465 551.531 856.363 551.034C856.262 550.537 856.053 550.068 855.75 549.661L863.835 504.921L856.291 504.821L850.677 549.063C850.026 549.617 849.601 550.389 849.482 551.235C849.362 552.08 849.558 552.94 850.03 553.651C850.503 554.363 851.22 554.876 852.045 555.094C852.871 555.312 853.748 555.219 854.51 554.834Z" fill="#A0616A"/>
        <path id="Vector_22_3" d="M863.316 496.149L860.094 495.791C860.094 495.791 857.23 495.075 856.156 499.013C855.082 502.951 855.082 510.827 855.082 510.827L865.106 510.469L863.316 496.149Z" fill="#CCCCCC"/>
        <path id="Vector_23_3" d="M868.841 485.018C869.157 483.922 869.065 482.439 868.003 482.025C867.449 481.808 866.831 481.979 866.24 482.039C865.083 482.153 863.925 481.834 862.989 481.145C861.89 480.327 861.211 479.078 860.566 477.87L859.591 476.042C859.374 475.661 859.189 475.263 859.038 474.851C858.495 473.238 859.084 471.369 860.291 470.168C861.551 468.995 863.21 468.345 864.931 468.348C866.639 468.361 868.327 468.722 869.89 469.411C872.668 470.543 875.185 472.234 877.284 474.378C878.655 475.781 879.904 477.609 879.618 479.551C879.395 481.062 878.293 482.272 877.242 483.381L873.432 487.404C872.757 488.117 872.036 488.858 871.093 489.132C870.151 489.406 868.937 489.003 868.68 488.056C868.68 488.056 868.525 486.114 868.841 485.018Z" fill="#2F2E41"/>
        <path id="Vector_24_3" d="M912.821 604.945C912.821 605.04 912.783 605.131 912.716 605.197C912.649 605.265 912.558 605.302 912.463 605.303H809.36C809.265 605.303 809.174 605.265 809.107 605.198C809.04 605.131 809.002 605.04 809.002 604.945C809.002 604.85 809.04 604.759 809.107 604.692C809.174 604.625 809.265 604.587 809.36 604.587H912.463C912.558 604.587 912.649 604.625 912.716 604.692C912.783 604.759 912.821 604.85 912.821 604.945Z" fill="#3F3D56"/>
        </g>
        <g id="arrows" class="arrows">
        <g id="curved-arrow-2" class="curved-arrow-2">
        <g id="Vector_109" filter="url(#filter0_dd_2_211)">
        <path d="M334.145 375.115C328.547 371.831 328.62 370.666 334.305 372.515L434.648 408.025C440.984 406.838 449.737 411.307 459.45 420.26C469.163 429.213 465.8 432.355 480.361 435.786L541.229 454.553L534.829 448.624L572.265 464.757L601.911 479.014L553.672 469.06L546.988 460.956L485.125 442.976C481.274 441.726 468.646 436.674 463.238 434.215C451.975 429.093 446.417 412.76 437.749 415.275L418.362 406.742L354.508 384.375C348.847 382.538 339.733 378.394 334.145 375.115Z" fill="#6C63FF"/>
        </g>
        </g>
        <g id="curved-arrow-1" class="curved-arrow-1">
        <g id="Vector_110" filter="url(#filter1_d_2_211)">
        <path d="M596.556 283.005L577.692 295.798C536.597 317.708 517.671 324.631 460.775 324.793C423.824 320.704 445.943 296.5 471.719 290.758C557.504 271.647 514.412 341.317 328.973 343.877C543.295 318.595 495.669 285.122 483.496 289.33C446.337 302.177 439.299 311.208 460.812 317.114C494.577 319.952 532.274 314.843 568.608 294.907L583.903 285.605C566.663 287.825 553.608 304.475 544.298 295.495C553.791 292.213 565.834 288.011 571.847 285.971L590.544 279.508C590.544 279.508 611.579 270.644 611.218 273.852C610.356 281.502 610.376 278.604 608.297 281.554L606.697 287.933C605.033 292.197 587.831 293.331 594.046 292.553C600.819 291.704 597.375 288.993 596.556 283.005Z" fill="#6C63FF"/>
        </g>
        </g>
        </g>
        </g>
        <defs>
        <filter id="filter0_dd_2_211" x="325.994" y="371.636" width="279.917" height="115.377" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feOffset dy="4"/>
        <feGaussianBlur stdDeviation="2"/>
        <feComposite in2="hardAlpha" operator="out"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_211"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feOffset dy="4"/>
        <feGaussianBlur stdDeviation="2"/>
        <feComposite in2="hardAlpha" operator="out"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
        <feBlend mode="normal" in2="effect1_dropShadow_2_211" result="effect2_dropShadow_2_211"/>
        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_2_211" result="shape"/>
        </filter>
        <filter id="filter1_d_2_211" x="324.973" y="273.152" width="290.249" height="78.7245" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feOffset dy="4"/>
        <feGaussianBlur stdDeviation="2"/>
        <feComposite in2="hardAlpha" operator="out"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_211"/>
        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_211" result="shape"/>
        </filter>
        </defs>
        </svg>
        </div>
    </div>    
    

</div>    

<div class="contact-section my-5" >
  <div class="header2 alt-two" style="margin-bottom:30px;">
          <h2>Contact
            <span>A Click Away</span>
          </h2>
    </div>
  <!-- Form with header -->
  <div class="card" style="background-color:#222322;color: #ffd302;width:80%;margin-left:auto;margin-right:auto;">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">

          <!-- Header -->
          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-name" class="form-control">
                <label for="form-contact-name" class="">Your name</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-email" class="form-control">
                <label for="form-contact-email" class="">Your email</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-phone" class="form-control">
                <label for="form-contact-phone" class="">Your phone</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-company" class="form-control">
                <label for="form-contact-company" class="">Your company</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-contact-message">Your message</label>
                <a class="btn-floating btn-lg blue">
                  <i class="far fa-paper-plane" style="color:#ffd302"></i>
                </a>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Contact information</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fas fa-map-marker-alt pr-2" style="margin-right:5px;"></i>#house:117, Road-No:7,Block-B,Mirpur-12</p>
            </li>
            <li>
              <p><i class="fas fa-phone pr-2" style="margin-right:5px;"></i>01711068</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pr-2" style="margin-right:5px;"></i>contact@example.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic">
                <i class="fab fa-twitter" style="color:#ffd302"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic">
                <i class="fab fa-linkedin-in" style="color:#ffd302"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic">
                <i class="fab fa-instagram" style="color:#ffd302"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</div>
<!-- Section: Contact v.3 -->
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>   

 <script>
      AOS.init();
     
 
        const hamburger= document.querySelector(".hamburger");
        const navLinks= document.querySelector(".nav-links");
        const links= document.querySelectorAll(".nav-links li");
     
     
        // const planningImage= document.querySelector("#planningImage");
        // const designImage= document.querySelector("#designImage");
        // const testingImage= document.querySelector("#testingImage");
        // const maintenanceImage= document.querySelector("#maintenanceImage");
        // const implementationImage= document.querySelector("#implementationImage");
        // const analysisImage= document.querySelector("#analysisImage");
        // planningImage.style.animationDelay="0s";
        // analysisImage.style.animationDelay="2s";
        // designImage.style.animationDelay="4s";
        // implementationImage.style.animationDelay="6s";
        // testingImage.style.animationDelay="8s";
        // maintenanceImage.style.animationDelay="10s";
     
     
        hamburger.addEventListener("click",()=>{
            navLinks.classList.toggle("open");
            
            links.forEach(function(element){
            
                element.classList.toggle("fade");
            });
            
            hamburger.classList.toggle("toggle");
        });
        
// let refreshRate = 12000;        
// setInterval(imageChange, refreshRate);   
// function imageChange(){
    
//     console.log("planningImage delay: "+planningImage.style.animationDelay.split("s")[0]);
//     console.log("analysisImage delay: "+analysisImage.style.animationDelay.split("s")[0]);
//     console.log("designImage delay: "+designImage.style.animationDelay.split("s")[0]);
//     console.log("implementationImage delay: "+(implementationImage.style.animationDelay.split("s")[0]));
//     console.log("testingImage delay: "+testingImage.style.animationDelay.split("s")[0]);
//     console.log("maintenanceImage delay: "+maintenanceImage.style.animationDelay.split("s")[0]);
    
//     planningImage.style.animationDelay=parseInt(planningImage.style.animationDelay.split("s")[0])+12+"s";
//     analysisImage.style.animationDelay=parseInt(analysisImage.style.animationDelay.split("s")[0])+12+"s";
//     designImage.style.animationDelay=parseInt(designImage.style.animationDelay.split("s")[0])+12+"s";
//     implementationImage.style.animationDelay=parseInt(implementationImage.style.animationDelay.split("s")[0])+12+"s";
//     testingImage.style.animationDelay=parseInt(testingImage.style.animationDelay.split("s")[0])+12+"s";
//     maintenanceImage.style.animationDelay=parseInt(maintenanceImage.style.animationDelay.split("s")[0])+12+"s";
    

// }   
     

     
//const API_KEY = 'AIzaSyDDe92VicPTWBeGVQMZmNAwfpZ8PCXm0t8';
//const API_ID = '791151266987-0hij9eds8afn71vn5njrf7ld0iahl10m.apps.googleusercontent.com';
//const PLAYLIST_ID = 'PLkAvMXRQ_dnVUlM9TyAG6MdA4ggVKPZPQ';
     
     
const API_KEY = 'AIzaSyADwL8r-cgNt8Z8o30CMXZtLXJ18FXkx1E';
const API_ID = '796338627495-46b6r8c1l4pk0eg43pfd78p9qsj752np.apps.googleusercontent.com';
const PLAYLIST_ID = 'PLTBUJ0ZBgvLhUSvThr6SeVkaUaHmRBPP3';     
     

var videoVisible = 0;
var maxVideoVisible = 50;

const playlistItems = [];
const playlist = document.getElementsByClassName("playlist")[0];

// From Google API Docs
function initAPIClient() {
  gapi.load("client:auth2", function() {
    gapi.auth2.init({client_id: API_ID});
    loadClient().then(getPlaylistItems);
  });  
};

// From Google API Docs
function loadClient() {
  gapi.client.setApiKey(API_KEY);
  return gapi.client.load("https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest")
    .then(
    function() { 
      console.log("GAPI client loaded for API"); },
    function(err) { 
      console.error("Error loading GAPI client for API", err); 
    });
}

function getPlaylistItems(pageToken) {
    return gapi.client.youtube.playlistItems.list({
      "part": "snippet,contentDetails",
      "maxResults": 50, // This is the maximum available value, according to the google docs
      "playlistId": PLAYLIST_ID,
      pageToken
    })
      .then(function(response) {
      const { items, nextPageToken } = response.result;
      
      // The items[] is an array of a playlist items.
      // nextPageToken - if empty - there are no items left to fetch
      
      playlistItems.push(...items);
      
      // It's up to you, how to handle the item from playlist. 
      // Add `onclick` events to navigate to another video, or use another thumbnail image quality 
      var index = 0;
      items.forEach(function(item) {
          const thumbnailItem = createPlaylistItem(item, index);
          playlist.appendChild(thumbnailItem);
          index++;
        });
      
      maxVideoVisible = index - 3;
      

      // Recursively get another portion of items, if there any left
      if (nextPageToken) {
        getPlaylistItems(nextPageToken);        
      }
    },
  function(err) { console.error("Execute error", err); });
}

function createPlaylistItem(i, index) {
  var changeIndex = index;
  const item = document.createElement('div');
  item.classList.add('playlist-item');
  item.style.background = `url(https://i.ytimg.com/vi/${i.snippet.resourceId.videoId}/mqdefault.jpg) no-repeat center`;
  item.style.backgroundSize = 'contain';
  item.id = index.toString();
  item.addEventListener("click", function(){ 
    document.getElementById('iframe_yt').src = "https://www.youtube.com/embed?listType=playlist&list=PLTBUJ0ZBgvLhUSvThr6SeVkaUaHmRBPP3&autoplay=1&index=" + changeIndex.toString();
  });
  return item;
};


// Before doing any action with the API ->
initAPIClient();

function goUp(){
  if (videoVisible > 0){
    videoVisible--;
    document.getElementById(videoVisible.toString()).style.height = "90px";
  }
}
function goDown(){
    if (videoVisible < maxVideoVisible){
      document.getElementById(videoVisible.toString()).style.height = "0px";
     videoVisible++;    
  }  
}

     
     
    </script>   
<!--
<script>
    delta= 0;
    currentSlideIndex=0;
    scrollThreshold=40;
    slides=$('.category');
    numSlides=$('.category').length;
    console.log("length: "+numSlides);
    
    $('.category').each(function(i, slide) {
        if(i===0)
        $(slide).addClass('is-active'); 
    });
    //every 10s
    window.setInterval(sliderFunction, 10000);


    
    // navPrev=$('.js-prev');
    // navNext= $('.js-next');
    
    function sliderFunction() {
        // s = this.settings;
        // this.bindEvents();
        console.log("entered function");
        currentSlideIndex++;
        console.log("Current Slide Index: "+currentSlideIndex);
        // If on last slide, loop to first
        if (currentSlideIndex >= numSlides-1) {
            console.log("entered if condition");
            currentSlideIndex = 0;
        }
        console.log("entered else condition");
        $('.category').each(function(i, slide) {
             console.log("entered foreach");
            // Toggle the is-active class to show slide
            console.log(slide);
            if(!$(slide).hasClass('is-active')){
                 $(slide).addClass('is-active');
                
                console.log("category slide No.: "+currentSlideIndex+"Is Active: "+$(slide).hasClass('is-active'));
               }
            else{
                $(slide).removeClass('is-active');
                console.log("remove class");
            }
            
//            console.log("category slide No.: "+currentSlideIndex+"  "+i+" Is Active"+$(slide).hasClass('is-active'));
//            console.log("add class");
             
            const timeElapsed = Date.now();
            const today = new Date(timeElapsed);
            
            
            ar
            
            console.log(today.toLocaleTimeString('en-BD')) ;
//            setTimeout(function(){
//                
//                console.log("timeout");
//                console.log(Date.now()/1000000000000);
//                $('body').removeClass('is-active');
//                console.log("remove class");
//            },4000);
        });
        //This part is used for shrinking the slider
    }

</script>
-->


</body>
</html>

