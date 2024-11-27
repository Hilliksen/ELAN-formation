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

const boxes = [box, box2, box3, box4];

const newBox = document.querySelector('.box2');
const colorText = document.querySelector('.color');

boxes.forEach(box=>{
    box.addEventListener('click', function(){
        const color = window.getComputedStyle(box).backgroundColor
        
        newBox.style.backgroundColor = color;

        colorText.style.backgroundColor = color;
    })
})

 
boxes.forEach(box => {
    box.addEventListener("click", () => {
      const color = window.getComputedStyle(box).backgroundColor;
 
      newBox.style.backgroundColor = color;
 
      colorText.textContent = color;
    });
  });