
const box = document.querySelector(".carrier");  //# DECLARE THE BOX VAR
box.addEventListener ('click', () => { //# USE THE FUNCTION U MADE EARLIER SO IT WORKS WHEN YOU CLICK THE FUNCTION WILL BE UTILISED 
    whatStyle(box);
}); 


function whatStyle(element){ //# HERE YOU MADE THE FUNCTION OR STARTED TO MAKE IT. It does NOT matter that there is element name since it works either way, for clarity you can change it to box 
    const boxStyle = window.getComputedStyle(element); //# THIS IS YOUR COMPUTING STYLE VAR. computing style var makes it so you pull out every single css property your element has
    //! console.log (boxStyle) IF UNSURE USE THIS EVER SINGLE TIME 
    console.log (boxStyle.getPropertyValue("background-color")) //# getPropertyValue MAKES IT SO THAT YOU SEE WHATS THE PROPERTY OF THE CSS ELEMNT YOU INDICATE SO EX BACKGROUND-COLOR ETC
    console.log (boxStyle.getPropertyValue("font-size")) //# =//=

    let properties = `background-color ${boxStyle.getPropertyValue("background-color")} \n font-size  -  ${boxStyle.getPropertyValue("font-size")}` + "\n" + "height  -  " +  boxStyle.getPropertyValue("height") + "\n" + "width  -  " + boxStyle.getPropertyValue("width") + "\n" + "display  -  " + boxStyle.getPropertyValue("display")  //# HERE ARE SOME DIFFERENT WAYS OF COMMENTING THE INFO, FIRST IS `texttext ${var} ` ALWAYS REMEMEBER TO WELL CLOSE IT, SECOND ON IS "text text " + "\n" + variable. THIRD ONE MORE CLEAR ONE IS THE MOST CLEAR ONE : ` text text ${var} \n ENTER INTO NEW LINE text text ${var} \n`

    alert(properties); //# HERE BY USING ALERT WE SHOW A LITTLE BOX THAT BELONG TO THE BROWSER THUS YOU CANNOT CHANGE IT EITHER WITH CSS OR NONETHING ELSE
    
}

