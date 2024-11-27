const cont = document.querySelector('#container')
cont.classList.add('container')

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
    "celebrate with a special Christmas Eve dinner 🍽️, and tell 3 important people that you love them <3"]

const day = document.createElement('div');
day.classList.add('day');

const modal =document.createElement ('div');
modal.classList.add('modal');
console.log(modal)

const modalcont = document.createElement('div');
modalcont.classList.add('modal-content');

const para = document.createElement('p');
para.classList.add('para')

console.log(para)


modal.appendChild(modalcont);
modalcont.appendChild(para)




const size = [200,124,174,80,143,132, 87, 212,146, 227,98];

let nb = 1;

for (let i = 1; i <= 24; i++) {
    const days = day.cloneNode();
    days.innerText = i;

    days.addEventListener('click', ()=> {
        if (i == nb) {
            days.classList.add('clicked');
            modal.style.display = "block";
            para.innerText = `Task for the day ${i} is to ${tasks [i - 1]} `;

            // alert(`Task for the day ${i} is to ${tasks [i - 1]} `); //# Basically ${tasks [i - 1]}  means that since the array starts with 0 and out i starts with 1 we have then remove the 1 from i 
            
            nb++
        } else{
            // alert('Not yet. Dont ruin the suprise!')
        }
    })
    // days.forEach(day => {}); //! tried to do foreach while being in loop which isnt really nevessary. 
    cont.appendChild(days)
    days.appendChild(modal)  
}

window.onclick = function(event){
    if (event.target == modal){
        modal.style.display = 'none'
    }
}

 let gifts = document.querySelectorAll('.day')
    
    gifts.forEach((gift, index) => {
    
        gift.style.width = `${size[index % size.length]}px`;
    });

function shuffleChildren(parent){
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

