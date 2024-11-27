const cont = document.querySelector('#container');

const boxes = [document.createElement('div'),document.createElement('div'),document.createElement('div')]; //! THIS IS HOW I WANTED TO AUTONOMATE THE MAKING DIVS MULTIPLE TIMES INSTEAD OF WRITING IT MULTIPLE TIME ITS AN ARRAY
 
const icons = ['fa-brands fa-facebook', 'fa-brands fa-twitter','fa-brands fa-instagram'] //# array

const names = ['facebook', 'twitter', 'instagram']//# array

const color = [ '#4893f5', '#fd5050 ', '#65bff6']//# array

boxes.forEach((box, index) => {
    box.classList.add('box')

    if ( index === 0){
        box.style.backgroundColor = ('#1877F2');
    } else if ( index === 1 ){
        box.style.backgroundColor = ('#FD1D1D')
    } else if ( index === 2 ){
        box.style.backgroundColor = ('#1DA1F2')
    } //# a little fun stuff that lets us add different colors to boxes without making additional code, how it works is that you have index of 3 (or 2 in theory) and if index as in our table equals 0 it means that we will add a style to our box, in this case background color to whatever we want 

    let icon = document.createElement('i');
    icon.className = icons[index];
    box.appendChild(icon); //? I dont undestand how does it know which icon to add to each box 
    
    let name = document.createElement ('p');
    name.innerText = names[index];
    name.style.display = 'none' //# like in css display none basically means it wont be visable for the user 


    cont.appendChild(box)

    box.addEventListener('click', function(){
        box.classList.toggle('toggledBox')
        box.appendChild(name)
        name.style.display = box.classList.contains('toggledBox') ? 'block' : 'none' //# So doing this is like asking a question (since ? mark) meaning, does box contain class called 'toggledBox?" if yes then style of display is changed to block" the 'block : 'none' is called the ternary operator meaning that its and if and if else statement, imagine it like this if (box.classList.contains('toggledBox')) { name.style.display = 'block';} else {name.style.display = 'none';} 

        // let color = window.getComputedStyle(box).backgroundColor
        // cont.style.backgroundColor = cont.style.contains(color) ? 'color' : 'grey';  
        //# this doesnt work i cant explain why
        //TODO find explaination 

        // let color = window.getComputedStyle(box).backgroundColor
        // let contColor = window.getComputedStyle(cont).backgroundColor

        // if (contColor === color){
        //     cont.style.backgroundColor = 'gray';
        // } else {
        //     cont.style.backgroundColor = color
        // } 
        //# this works but it has the same opacity so i have to redo it 

        let contColor = window.getComputedStyle(cont).backgroundColor //# This is how to get backgroundColor of any element and i believe you can use this to get whatever computed style u want 

        if (contColor === color){
            cont.style.backgroundColor = 'gray';
        } else {
            cont.style.backgroundColor = color[index]
        }  //? It works but it doesnt reset to gray, no idea why nor is chatgpt of any help

    })
})

