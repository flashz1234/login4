 var Menu = document.getElementById("menubar")

 Menu.style.maxHeight = "0px"

 function menutoggle(){
    if (Menu.style.maxHeight == "0px")
       {
         Menu.style.maxHeight = "200px";
       }
    
    else
       {
         Menu.style.maxHeight = "0px";
       }
  }