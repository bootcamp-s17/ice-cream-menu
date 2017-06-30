var regFlavorAnchor  = document.getElementById('regFlavorAnchor');
var seasonalFlavorAnchor  = document.getElementById('seasonalFlavorAnchor');
var regularFlavors  = document.getElementById('regularFlavors');
var seasonalFlavors  = document.getElementById('seasonalFlavors');
var toppingAnchor  = document.getElementById('toppingAnchor');
var toppingRight  = document.getElementById('toppingRight');
var toppingLeft  = document.getElementById('toppingLeft');



//displays reg flavors on click
regFlavorAnchor.addEventListener("click", function(){ 
  regularFlavors.style.display = "block";

})

//displays season flavors on click
seasonalFlavorAnchor.addEventListener("click", function(){ 
  seasonalFlavors .style.display = "block";

})

//displays toppings and cones on click 
toppingAnchor.addEventListener("click", function(){ 
  toppingRight .style.display = "block";
  toppingLeft .style.display = "block";


})




//Header Carousel 
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 10000); // Change image every 10 seconds
}