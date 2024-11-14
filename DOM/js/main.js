
/*
//# EXAMPLE OF WHAT I WAS TALKING ABOUT IN TODO
let list = document.querySelector("ul");
let listElement = list.querySelectorAll("li");

console.log("the list", list); //# in the console there should be a pseudo element ::marker which is basically the styling dot for list
console.log("the list elements", listElement); //! YOU CAN CHANGE THE DIFFERENT PROPRIOTIES TO THIS LIKE: 

listElement.forEach(function(element){  //? Im guessing that js detects already what is an element of declared variable since its in the array not sure tho 
    console.dir(element) //# if you check on console and click the little arrow on the node you will be shown every single element u can change propriety of! 
    element.style.color = "red"  //*changes the color of the text :3!
})

*/ 


//! IMPORTANT 
//# in the console in the long list of everything that a searchenginge needs to go through u will find outerHTML outerText parentNode style and tagName , if you were feel lost and dont know what is what just do console.dir and treat it liek var dump ()
//? did mickael say im right? 
//* ........... 

const box = document.createElement("div") //# we made const named box which then got and element div (u can do other elements most likely)
box.classList.add("box") //# because of this we gave the box we created a class called box, remember we already god a div but we didnt get a class but with this code we add the class box!

const board = document.querySelector("#board") //# We are chosing the element with id! important to write the # since we can mess it up by having a div with class board above our targerthi 0-
board.appendChild(box) //# here we are "giving" a child to the board so we are putting the div inside the id 
box.innerText = 1 //# like said previously we find the part called innerText from console and we gave it a propriety
//! made previously an error of doing (1), remember this is not a function so dont use it 
//? ask micheal why i cant do that in css, most likely because we have an animation?

for (let i = 2; i <= 10; i++) { //# made a loop that generates us 10 boxes
    //! made an error = if you put i as zero you will have 1 0 1 2 3 since its needs to start from zero instead of starting from 2 so remember, because the i will be generated as well
    let newBox = box.cloneNode() //# this is used to clone the already existing node box and we name the new box newBox
    newBox.innerText = i //# we automate the creation of numbers by using i since we have i less or equal to 10 
    board.appendChild(newBox) //# we add everysingle new child to our container
}


//TODO DO THE NOTES CAUSE ITS LATE AND I NEED TO GO HOME 
// let i = board.children.length, k, temp 
// while(--i > 0) { //#while i is positive! 
//     k = Math.floor(Math.random() * (i + 1))

//     temp = board.children[k]

//     board.children[k] = board.children [i]

//     board.appendChild(temp)
// }

//! ALTHOUGH THIS IS SAID TO BE OK WE ISOLATED AND IMPROVED THE PERFORMENCE OF THE CODE AND ITS ABLE TO BE REUSED IN THIS BUT ALSO OTHER PROJECTS 

function shuffleChildren(parent){
    let children = parent.children
    let i = children.length, k, temp
    while (--i > 0 ){
        k = Math.floor(Math.random() * (i + 1))
        temp = children[k]
        children[k] = children[i]
        parent.appendChild(temp)
    }
}
 //# Normally this would be at the top for readability etc but since theres a ton of my notes ill just leave it here, if i need to clarify something look at the previous version 


