const cont = document.querySelector('#container') //? YOU SHOULD KNOW THIS SO ITS OK IF NOT DO IT ON PAPER

const box = document.createElement('div');
box.classList.add('box');
box.innerText = "1"

const box2 = document.createElement('div');
box2.classList.add('box');
box2.innerText = "2"

const box3 = document.createElement('div');
box3.classList.add('box');
box3.innerText = "3"

const box4 = document.createElement('div');
box4.classList.add('box');
box4.innerText = "4"

cont.appendChild(box) //# SEEMS LIKE U HAVE TO TYPE EACH AND EVERYONE OF THIS THINGS 
cont.appendChild(box2)
cont.appendChild(box3)
cont.appendChild(box4)

// const boxes = ['box','box2','box3','box4']  //# USE querySelectorAll since you already made the boxes appended by cont, SUGGESTION BY CHATGPT
const boxes = document.querySelectorAll('.box')
// boxes.classList.add('box') //! THIS DOESNT WORK SINCE SELECTOR ALL RETURNS A NODE LIST MEANING YOU CANNOT USE CLASSADD TO A NODE LIST YOU HAVE TO MAKE A FOREACH LOOP
//TODO boxes.forEach(box=> {
//TODO    box.classList.add('smallerBox')})
//? WILL NOT USE THIS IN THIS EXERCISE SINCE IT WAS EXPLAINED USING CHATGPT, WILL DO IN NEXT ONE  

const smallerBox = document.createElement('div')
smallerBox.classList.add('smallerBox')


boxes.forEach(box =>(
    box.addEventListener('click', function(){
        box.classList.toggle('smallerBox') //# TOGGLE SUGGESTED BY CHATGPT
    })
))

// boxes.forEach(box=>  technically shouldve worked
//     box.classList.add('box')

// )





