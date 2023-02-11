<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monyics</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="js.js"></script>
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.querySelector(".menu_bar").style.top = "0";
          } else {
            document.querySelector(".menu_bar").style.top = "-700px";
          }
          prevScrollpos = currentScrollPos;
        }
        </script>
        <script>
          function myFunction(x) {
            console.log(x.substr((x.length)-1,x.length)+'hi');
            if (x.substr((x.length)-1,x.length)=='a'){
              document.getElementById(x).style.cssText = 'background-color: transparent; color: rgba(220, 53, 69,1); ';
              document.getElementById(x).id=x.substr(0,(x.length)-1);
            }
            else{
              document.getElementById(x).style.cssText = 'background-color: rgba(220, 53, 69,.9); color: white; ';
              document.getElementById(x).id=x+'a';
            }
        }
        function Menubar(x) {
            console.log(x.substr((x.length)-1,x.length)+'hi2');
            console.log(window.innerWidth)
          if (window.innerWidth<700){
            if (x.substr((x.length)-1,x.length)=='a'){
              document.getElementById('menu_bar').style.left ='-200px';
              document.getElementById(x).id=x.substr(0,(x.length)-1);
            }
            else{
              document.getElementById('menu_bar').style.left='0px';
              document.getElementById(x).id=x+'a';
            }
          }
        }
      function OpenImg(id){
        console.log(id);
        let scrollPos = window.pageYOffset
        console.log(scrollPos);
        document.getElementById("imgSec2").src = id;
        document.getElementById("imgSec1").style.cssText="position:absolute;top:"+scrollPos+"px;height:120vh ;width:100vw;backdrop-filter: blur(5px);";
      }
      function CloseImg(){
        document.getElementById("imgSec1").style.display=("none");
      }
        </script>
</head>
<body style="blur(10px);">
    <div class="menu_bar" id="menu_bar">
      <button type="button" class="btn btn-secondary" id="mu" onclick="Menubar(id)">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-app" viewBox="0 0 16 16">
<path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h2A1.5 1.5 0 0 1 5 1.5v2A1.5 1.5 0 0 1 3.5 5h-2A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-2zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"></path>
</svg>
      </button>
    <ul>
        <li class="active"><a href="#">Home</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses" viewBox="0 0 16 16">
            <path d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708L5.793 1Zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207l-4.5-4.5Z"/>
          </svg></li>
        <li><a href="#">About Us </a>
        <div class="sub_menu1">
            <ul>

                <li>Mission1</li>
                <li class="hover-me">Mission2<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                    <div class="sub_menu2">
                        <ul>
            
                            <li>Mission</li>
                            <li>Mission</li>
                            <li>Mission</li>
                            <li>Mission</li>
                        </ul>
            
            
            
                    </div></li>
            

                </li>
                <li>Mission3</li>
                <li>Mission4</li>
            </ul>



        </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
            <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
          </svg></li>


        <li><a href="#">Services</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-app" viewBox="0 0 16 16">
            <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h2A1.5 1.5 0 0 1 5 1.5v2A1.5 1.5 0 0 1 3.5 5h-2A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-2zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
          </svg></li>

        <li><a href="Profile.html">Profile</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg></li>

        <li><a href="#">Create</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
          </svg></li>

        <li><a href="#">Pricing</a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
          </svg></li>

        <li><a href="#">Contact</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
            <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
          </svg></li>

    </ul>
</div>
    <div class="page1">

        <input type="search" placeholder="Search For "/>

    </div>
    <div class="page2">

        <div class="hea2">
            <div class="selc">
                <select >
                    <option value="All Category">All Category</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Film">Film</option>
                    <option value="Fine Art">Fine Art</option>
                    <option value="Food">Food</option>
                    <option value="HDRI">HDRI</option>
                    <option value="Industrial">Industrial</option>
                    <option value="Interior">Interior</option>
                    <option value="Journalism">Journalism</option>
                    <option value="Landscape">Landscape</option>
                    <option value="Lomo">Lomo</option>
                    <option value="Nature">Nature</option>
                    <option value="People">People</option>
                    <option value="Portrait">Portrait</option>
                    <option value="Product">Product</option>
                    <option value="Publicity">Publicity</option>
                    <option value="Rural">Rural</option>
                    <option value="Sea and Sand">Sea and Sand</option>
                    <option value="Sports">Sports</option>
                    <option value="Still Life">Still Life</option>
                    <option value="Street Photography">Street Photography</option>
                    <option value="Travel">Travel</option>
                    <option value="Underwater">Underwater</option>
                    <option value="Urban">Urban</option>
                    <option value="Vehicle">Vehicle</option>
                    <option value="Vintage">Vintage</option>
                    <option value="Wedding">Wedding</option>
                </select>
            </div>
            <ul class="up2">
                <li class="ip1">INSPIRATION</li>
                <li >HOT</li>
                <li >NEWEST</li>
                <li >PHOTOGRAPHERS</li>
                <li >MODELS</li>
                <li >STORIES</li>
            </ul>
        </div>
        <hr>
        <div class="bod">
            <div class="grille">
                <div class="grid-item"><button type="button" id="img/9.jpg" onclick="OpenImg(id)"><img src="img/9.jpg"></button><div class="imgdetaille"><button type="button" id="Like1"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px ; padding-top: 0px; width: 60px !important; height: 40px !important; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><button type="button" id="img/1.jpeg" onclick="OpenImg(id)"><img src="img/1.jpeg"></button><div class="imgdetaille"><button type="button" id="Like2"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><button type="button" id="img/1.jpg" onclick="OpenImg(id)"><img src="img/1.jpg" ></button><div class="imgdetaille"><button type="button" id="Like3"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><img src="img/2.jpg" ><div class="imgdetaille"><button type="button" id="Like4"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><img src="img/3.jpg" ><div class="imgdetaille"><button type="button" id="Like5"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><img src="img/4.jpg" ><div class="imgdetaille"><button type="button" id="Like6"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><img src="img/6.jpg" ><div class="imgdetaille"><button type="button" id="Like7"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><img src="img/7.jpg" ><div class="imgdetaille"><button type="button" id="Like8"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>









                <?php 
                    mysql_connect("localhost","root","");
                    mysql_select_db("monics");
                    $res=mysql_query("SELECT *FROM post");
                    /*$res1=mysql_query("")*/
                    while($row =mysql_fetch_array($res)){
                        $res2=mysql_query("SELECT  ProfileImgPath FROM appuser WHERE  IdUser  = $row[1]");
                        $row2=mysql_fetch_array($res2);
                      
                        echo(' <div class="grid-item"><img src="'.$row[6].'"><div class="imgdetaille"><button type="button" id="Like'.$row[0].'"class="btn-outline-danger" onclick="myFunction(id)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                    </svg>
                                        </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com'.$row[0].'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    
                      </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans'.$row[0].'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
                    </svg>
                      
                      </button><button type="button" class="outline-danger" style="padding: 0px ; padding-top: 0px; width: 60px !important; height: 40px !important; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                        <a href="Profile.html"> <img src="'.$row2[0].'" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                      
                      </button></div></div>');
                    }
?>



                <div class="grid-item"><button type="button" id="img/8.jpg" onclick="OpenImg(id)"><img src="8.jpg" ></button><div class="imgdetaille"><button type="button" id="Like9"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com9">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans9">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><img src="img/10.jpg"><div class="imgdetaille"><button type="button" id="Like10"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><img src="img/11.jpg"><div class="imgdetaille"><button type="button" id="Like11"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com11">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans11">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
                <div class="grid-item"><img src="img/5.jpg" ><div class="imgdetaille"><button type="button" id="Like12"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com12">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans12">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px; padding-top: 0px; width: 60px; height: 40px; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="img/5.jpg" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>
            </div>
        </div>
    </div>
    <section id="imgSec1"style="position:absolute;top:100vh;height:100vh ;width:100vw;backdrop-filter: blur(5px);display:none"><section style="height:80%;top:10%;margin-left:20vw;width:60vw;position:absolute;background:transparant"><button type="button" onclick=CloseImg() style="float:right;border-radius:50%;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/>
  </svg></button><img id="imgSec2" src="img/11.jpg" style="width:100%;height:auto"></section></section>
</body>
<footer>
    <p>Copyright : <sub>EssayesMedWajih</sub></p>
</footer>
</html>