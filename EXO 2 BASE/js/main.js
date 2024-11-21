const cont = document.querySelector("#container");

const box = document.createElement("div")
box.classList.add('box', 'yellow')
const box2 = document.createElement("div")
box2.classList.add('box', 'red')
const box3 = document.createElement("div")
box3.classList.add('box', 'blue')
const box4 = document.createElement("div")
box4.classList.add('box', 'green')

cont.appendChild(box)
cont.appendChild(box2)
cont.appendChild(box3)
cont.appendChild(box4)

let boxes = [box, box2, box3, box4];

boxes.forEach(getAdd);

function getAdd() {
    box.addEventListener('click', ()=>{
        window.getComputedStyle
    })
}

console.log(getAdd)