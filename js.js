
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