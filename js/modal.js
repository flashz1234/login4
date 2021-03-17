var datamap = new Map
([
	[document.getElementById("myBtn"), document.getElementById("myModal")],
    [document.getElementById("myBtn1"), document.getElementById("myModal1")],
    [document.getElementById("myBtn2"), document.getElementById("myModal2")],
	[document.getElementById("myBtn3"), document.getElementById("myModal3")],
	[document.getElementById("myBtn4"), document.getElementById("myModal4")],
	[document.getElementById("myBtn5"), document.getElementById("myModal5")],
	[document.getElementById("myBtn6"), document.getElementById("myModal6")],
	[document.getElementById("myBtn7"), document.getElementById("myModal7")],
	[document.getElementById("myBtn8"), document.getElementById("myModal8")],
	[document.getElementById("myBtn9"), document.getElementById("myModal9")],
	[document.getElementById("myBtn10"), document.getElementById("myModal10")],
	
		[document.getElementById("myBtn11"), document.getElementById("myModal11")],
		[document.getElementById("myBtn12"), document.getElementById("myModal12")],
		[document.getElementById("myBtn13"), document.getElementById("myModal13")],
		[document.getElementById("myBtn14"), document.getElementById("myModal14")],
		[document.getElementById("myBtn15"), document.getElementById("myModal15")],
		[document.getElementById("myBtn16"), document.getElementById("myModal16")],
		[document.getElementById("myBtn17"), document.getElementById("myModal17")],
		[document.getElementById("myBtn18"), document.getElementById("myModal18")],
		[document.getElementById("myBtn19"), document.getElementById("myModal19")],
		[document.getElementById("myBtn20"), document.getElementById("myModal20")],
			
			[document.getElementById("myBtn21"), document.getElementById("myModal21")],
			[document.getElementById("myBtn22"), document.getElementById("myModal22")],
			[document.getElementById("myBtn23"), document.getElementById("myModal23")],
			[document.getElementById("myBtn24"), document.getElementById("myModal24")],
			[document.getElementById("myBtn25"), document.getElementById("myModal25")],
			[document.getElementById("myBtn26"), document.getElementById("myModal26")],
			[document.getElementById("myBtn27"), document.getElementById("myModal27")],
			[document.getElementById("myBtn28"), document.getElementById("myModal28")],
			[document.getElementById("myBtn29"), document.getElementById("myModal29")],
			[document.getElementById("myBtn30"), document.getElementById("myModal30")],
			
				[document.getElementById("myBtn31"), document.getElementById("myModal31")],
				[document.getElementById("myBtn32"), document.getElementById("myModal32")],
				[document.getElementById("myBtn33"), document.getElementById("myModal33")],
				[document.getElementById("myBtn34"), document.getElementById("myModal34")],
				[document.getElementById("myBtn35"), document.getElementById("myModal35")],
				[document.getElementById("myBtn36"), document.getElementById("myModal36")],
				[document.getElementById("myBtn37"), document.getElementById("myModal37")],
				[document.getElementById("myBtn38"), document.getElementById("myModal38")],
				[document.getElementById("myBtn39"), document.getElementById("myModal39")],
				[document.getElementById("myBtn40"), document.getElementById("myModal40")],
					
					[document.getElementById("myBtn41"), document.getElementById("myModal41")],
					[document.getElementById("myBtn42"), document.getElementById("myModal42")],
					[document.getElementById("myBtn43"), document.getElementById("myModal43")],
					[document.getElementById("myBtn44"), document.getElementById("myModal44")],
					[document.getElementById("myBtn45"), document.getElementById("myModal45")],
					[document.getElementById("myBtn46"), document.getElementById("myModal46")],
					[document.getElementById("myBtn47"), document.getElementById("myModal47")],
					[document.getElementById("myBtn48"), document.getElementById("myModal48")],
					[document.getElementById("myBtn49"), document.getElementById("myModal49")],
					[document.getElementById("myBtn50"), document.getElementById("myModal50")],
						
						[document.getElementById("myBtn51"), document.getElementById("myModal51")],
						[document.getElementById("myBtn52"), document.getElementById("myModal52")],
						[document.getElementById("myBtn53"), document.getElementById("myModal53")]
						
				
]);

datamap.forEach((value, key) => {
      doModal(key, value);
});

function doModal(anchor, popupbox) {

// Get the <span> element that closes the modal
            var span = popupbox.getElementsByClassName("close")[0];

            anchor.addEventListener("click", function (event) {
                popupbox.style.display = "block";
            });

            span.addEventListener("click", function (event) {
                popupbox.style.display = "none";
            });

            window.addEventListener("click", function (event) {
                if (event.target == popupbox) {
                    popupbox.style.display = "none";
                }
            });
}
