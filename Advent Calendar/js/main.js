const cont = document.querySelector('#container') //# declare var
cont.classList.add('container') //# add class from css

const tasks = [   
    "decorate the Christmas tree 🎄",
    "bake 2 different flavoured Christmas cookies 🍪",
    "watch a Christmas movie (Grinch) 🎥",
    "write a letter to Santa 🎅",
    "make a Christmas playlist 🎶",
    "build a snowman ☃️ (or a paper one if there's no snow!)",
    "create homemade Christmas ornaments ✂️",
    "have a hot chocolate night ☕",
    "read a Christmas story 📖",
    "make a gingerbread house 🏠",
    "donate old toys or clothes 🎁",
    "sing Christmas carols 🎤",
    "make Christmas cards for friends and family 💌",
    "hang Christmas lights 🌟",
    "wrap Christmas presents 🎁",
    "plan a family game night 🎲",
    "watch a Christmas movie (Grinch, YES AGAIN) 🎥",
    "make paper snowflakes ❄️",
    "write down your Christmas wishes 📝",
    "visit a Christmas market or light display 🏙️",
    "have a Christmas movie marathon 🍿",
    "bake a Yule log cake 🎂",
    "take family holiday photos 📸",
    "celebrate with a special Christmas Eve dinner 🍽️, and tell 3 important people that you love them <3"]//# declare array 

const day = document.createElement('div');//# declare var
day.classList.add('day');//# add class from css

const modal =document.createElement ('div');//# declare var
modal.classList.add('modal');//# add class from css
console.log(modal) //! checking

const modalcont = document.createElement('div');//# declare var
modalcont.classList.add('modal-content');//# add class from css

const para = document.createElement('p');//# declare var
para.classList.add('para')//# add class from css

console.log(para)//! checking


modal.appendChild(modalcont); //# give modal a child modalcont
modalcont.appendChild(para) //#give modalcont a child para




const size = [200,124,174,80,143,132, 87, 212,146, 227,98]; //# declare array 

let nb = 1; //# declare nb

for (let i = 1; i <= 24; i++) { //# loop for each boxes 
    const days = day.cloneNode(); //# cloning 
    days.innerText = i; //# display numbers

    days.addEventListener('click', ()=> { //# on click something happens
        if (i == nb) {
            days.classList.add('clicked');
            modal.style.display = "block"; //# displays the modal
            para.innerText = `Task for the day ${i} is to ${tasks [i - 1]} `;//# Basically ${tasks [i - 1]}  means that since the array starts with 0 and out i starts with 1 we have then remove the 1 from i 
            
            nb++ //# makes it repeatable for every box
        } else{
            modal.style.display = "block"; //# displays the modal
            para.innerText = `Not yet, dont ruin the surprise :3!`;
        }
    })
    // days.forEach(day => {}); //! tried to do foreach while being in loop which isnt really nevessary. 
    cont.appendChild(days) 
    days.appendChild(modal) //# makes so that modal is displayed when clicked on box  
}

// window.onclick = function(event){
//     if (event.target == modal){ //# if the modal is present then do this //
//         modal.style.display = 'none' //# hides the modal
//     }

// }

window.addEventListener('click', function(event){
    if(event.target == modal){ //# target finds what element caused the event, and if the element == to modal then we do the action
        modal.style.display = 'none'
    }
})

let gifts = document.querySelectorAll('.day')
    
    gifts.forEach((gift, index) => {
    
        gift.style.width = `${size[index % size.length]}px`;
    });

function shuffleChildren(parent){ //# already explained
    let children = parent.children
    let i = children.length, k , temp
    while (--i > 0) {
       k = Math.floor(Math.random() * (i+1))
       temp = children[k]
       children[k] = children[i]
       parent.appendChild(temp)
    }
}

shuffleChildren(cont)

