
const addBtn = document.querySelector('#btn'); //TODO What is querySelector, cloneNode, addEvent,  deleteTask, appendChild
addBtn.addEventListener('click', addTask);

//# EXPLANATION = we declare the constant addBtn and it will get us the element of DOM with id btn, for that we used querySelector, afterwards we told that the addBtn will have a method that in event that its clicked we will execute a function that we have declared later on 
//# And to add to that you can do stuff like 
//* addBtn.querySelectorAll() (ofc u need like a new variable for it so addBtnElements = ....)
//# IF our variable was a ul and we wanted to select every single li under it because remember, querySelector choses the first corresponding ul nodem that is unless u have an id for it, while querySelectorAll choses every single one of the nodes you indicate CHECK THE FOLDER: DOM 

const taskCard = document.querySelector(".todoCard"); //# check EXP  
const taskContainer = document.querySelector("#todoCards"); //# check EXP

function addTask (){
    const newTask = taskCard.cloneNode(true) //! clones the task card
    const newDelBtn = newTask.querySelector('.delBtn') //# check EXP
    const newTextArea = newTask.querySelector('.task') //# check EXP

    newTextArea.value = "New Task" //! sets new task text to "New Task"
    newDelBtn.addEventListener('click', function(){
        deleteTask(newTask); //# check EXP
    });

    taskContainer.appendChild(newTask) //! append new task to the tasks container
}

//! =======================DELETE BUTTON========================

const delBtn = document.querySelector('.delBtn');
delBtn.addEventListener('click', function(){    //# addEvent = add to a button with class delBtn event that if you click then start a function, and we define that function in the same line that we have it  
    deleteTask(taskCard); //! targets the right task
});

function deleteTask(task) {

    task.remove(); //# .remove is a methode to do what it says so basically removes node or element 
    
}

 //# EXPLANATION ode = element from html but also attributes or text, but to be safe and secure just target the 
