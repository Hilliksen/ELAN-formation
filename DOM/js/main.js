
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
//* yes


const box = document.createElement("div") //# we made const named box which then got and element div (u can do other elements most likely)
box.classList.add("box") //# because of this we gave the box we created a class called box, remember we already god a div but we didnt get a class but with this code we add the class box!

// board.appendChild(box) //# here we are "giving" a child to the board so we are putting the div inside the id 
// box.innerText = 1 //# like said previously we find the part called innerText from console and we gave it a propriety
//! made previously an error of doing (1), remember this is not a function so dont use it 
//? ask micheal why i cant do that in css, most likely because we have an animation?


let nb = 1 

const board = document.querySelector("#board") //# We are chosing the element with id! important to write the # since we can mess it up by having a div with class board above our targerthi 0-

for (let i = 1; i <= 10; i++) { //# made a loop that generates us 10 boxes
    //! made an error = if you put i as zero you will have 1 0 1 2 3 since its needs to start from zero instead of starting from 2 so remember, because the i will be generated as well
    const newBox = box.cloneNode() //# this is used to clone the already existing node box and we name the new box newBox
    newBox.innerText = i //# we automate the creation of numbers by using i since we have i less or equal to 10 
    board.appendChild(newBox) //# we add everysingle new child to our container

    newBox.addEventListener('click', function () {
        if ( i == nb ){ //! previous error : nb == 1
            newBox.classList.add("box-valid")
            nb++
        }
    })
    
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
    let children = Array.from(board.children)
    // console.log(children)
    let i = children.length, k, temp //# .length is a proprety that lets us count the length/size of given array (at least most of the time its used for array but its not exclusive), 
    while (--i > 0 ){

        k = Math.floor(Math.random() * (i + 1))
        // console.log(k) //# use console.log more often to understand whats going on 
        temp = children[k]
        // console.log(temp)
        children[k] = children[i]
        // console.log(children[k])
        parent.appendChild(temp)

       
        // children.forEach(child=> {
        //     child.addEventListener('click', function(){
                
        //         child.classList.add("box-clicked")
                
        //     })
        // })
            
        }
    }

    shuffleChildren(board)


 //# Normally this would be at the top for readability etc but since theres a ton of my notes ill just leave it here, if i need to clarify something look at the previous version 


 //# EXPLAINATION FOR THE SHUFFLE
 //# Globally we call this type of algorithm "Fisher-Yates (Knuth) shuffle algorithm" which is a way to shuffle something (using something since it depends on situation), first we declared the function with a name and a variable that we gonna target, since there is just a div with id board it is our parent, the children we gave using code above the shuffle, then we said that our variable is childrent = parent.children to be clear and have that in our function. then we declared that i has 3 variables, first one counts our size of array, second one k is just a variable we gonna need and we gave it a placeholder name and lastly temp like the name suggests is a temporary variable we gonna need later to hold onto. We then did a loop saying that if i -1  is greater than 0  then do the loop, the --i means that i is decressed by 1 but if its still greater than 0 then do the loop. Start of the loop we declare that our k variable will contain i we shuffled and we did this by declaring that what ever number is in math.floor wil be rounded down (ex 1.23 is gonna be 1). We get that number by saying math.random() which means choses at random time * i, if we didnt do (i+1) it would go 1 to i but i wouldnt be included so u need to do i + 1. LAter we contain our shuffled array in a variable temp which we needed to be able to store our result. then we declare that                   . After all this we say that parent will get a child from the shuffled list (temp)


 //! MATH.RANDOM() IS NOT RANDOM NUMBER ITS RANDOM NUMBER BETWEEN 0 INCLUDED AND 1 EXCLUDED SO ITS GONNA BE GREATER OR EQUAL TO 0 AND LESS THAN 1 


