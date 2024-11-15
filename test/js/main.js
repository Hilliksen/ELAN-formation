
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
function showReaction(type, clickedBox){
    clickedBox.classList.add(type)
    if(type !== "success"){
        setTimeout(function(){
            clickedBox.classList.remove(type)
        }, 800)
    }
}

const box =  document.createElement("div")
box.classList.add("box")

const board = document.querySelector("#board")

let nb = 1

for (let i = 1; i <= 10; i++) {
    const newBox = box.cloneNode();
    newBox.innerText = i
    board.appendChild(newBox)

    newBox.addEventListener('click', function(){
        
        if( i == nb){
            newBox.classList.add("box-valid")
            if(nb == board.children.length){
                board.querySelectorAll(".box").forEach(function(box){
                    showReaction("success", box)
                })
            }
            nb++
        }
        else if (i > nb){
            showReaction("error", newBox)
            nb = 1 
            board.querySelectorAll(".box-valid").forEach(function(validBox){
                validBox.classList.remove("box-valid")
            })
        }
        else{
            showReaction("notice", newBox)
        }
    })
}

shuffleChildren(board)