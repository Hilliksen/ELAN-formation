console.log("Hello World!") //in js there are 2 things, block and instructions, instruction are a way to do something and ends with ; and blocks allow to apply logic to something and the are between {}

/*! example of block 

nameBlock (settings){
    instructions go here
} 

just like in php there are a lot of different variables u can use:

the variable let: allows u to store value example:

let animal = "dog";          but you can change that:

animal = "cat";          the value was changed 

animal = "bird";       changed again


the second thing is constant "const" as the name suggests its used to make sure the value/element is constant and not changed  example:

const two = 2; 

also important note, const is used globally so you will have it in global scope of the code, while let is used once and for specific loop etc

there are things in javascript called scopes, so global scope block scope etc, later during the exercises i will higlight which is which


in js you have ofc nb ,"string" , booleans


in js when u have a variable it has also a little scope, which helps define a zone of coding where its gonna be affected 
it opens with (for example) let and ends with } so ex:

{
    OPENS THE SCOPE =>  let age = 32;
    {
        {}
    }
} <= ENDS THE SCOPE 


Also a new VERY FUN AND UNDERSTANBLE THING is ? and :

basically when u have a condition like 

const ageJohn = 20; 

console.log("John is" + (ageJohn >= 18 ? "adult" : "minor") + "in France");
     1         2      3           4    5         6     

1 bascially echo in js

2 declaring text in js

3 just like in php you add your variable/result in to text

4 bigger or equal 

5 the ? mark means that if true then add the adult into the text

6 the : means that if false then =/=

lets do a function :
*/


function resultAddition (number1, number2){
    return number1 + number2;
}

function resultMultiplication (number1, number2) {
    return number1 * number2;
} // As you can see we made a simple function of addition and multiplication, by declaring it we can later on call upon it like this:

function resultCalculations (number1, operation, number2) {
    switch (operation) {
        case "addition":
            return  resultAddition(number1, number2); //! we are calling upon the previous function
        case "substraction":
            return resultAddition(number1, -number2); //! by using -number2 we make the number negitave we basically mean a-b = a + -b
        case "multiplication":
            return resultMultiplication(number1, number2);
        case "division":
            return resultMultiplication(number1, 1 / number2); //! by using 1/number2 we basically mean a/b = a * 1/b
        
        //! default = no operation loaded/defined by function 
        default:
            console.log(`Operation "${operation}" non existant `

            );
            return null;
    }
}



//! BTW ` AND ' ARE TWO DIFFERENT THINGS, YOU NEED TO USE THIS ` ONE 

//! so we are done with making the function, lets see how it works

console.log(`7 + 2 = ${resultCalculations(7, "addition", 2)}`); 
//! lets explain, console.log = echo, we give a text 7+2= and then we call upon the function by using ${} and when we are in () of the function we declared what number 1 and 2 are and also we specified which case of the function we want thus the "addition"
console.log (`6 - 1 = ${resultCalculations (6, "substraction", 1 )}`)

console.log(`3 * 9 = ${resultCalculations( 3, "multiplication", 9)}`)

console.log(`10 / 2.5 = ${ resultCalculations( 10, "division", 2.5)}`)

console.log(`2 ** 5 = ${resultCalculations(2, "charge", 5 )}`)
//! this one will display our "error" message and show us the 2**5 = null so nothing 




//* Array here works exactly like in php so:

const emptyArray = [];

const nmbArr = [11, 22, 33, 44, 55, 66, 77];

emptyArray.push(2); 
emptyArray.push(3);
emptyArray.push(7);

console.log("emptyArray =", emptyArray);


//! you can ofc take a specific element from array and ofc the array starts from [0]
console.log("emptyArray[1] = ", emptyArray[1]);

//! you can aswell modify the value in the table like this

emptyArray[2]= "abc"

console.log(emptyArray); //! dont need to write the array = etc, waste of time


//! you can aswell use loop for array so 

for(let i=0; i<emptyArray.length; i++) {
    const elementEmptyArray = emptyArray[i]

    console.log("empty array[" + i + "] = ", elementEmptyArray); //! DISPLAYED on console in inspect section, also you can use + or , to "add" another element in console.log
}


//** In javascript u have methods like .push .join .includes, and they work like this: 

    //! =============anArray.aMethod()=================

    //! .push
      emptyArray.push(7);
      console.log(emptyArray); //* now our array has another element because we pushed one into it
    
    //! .join
        console.log(` Array with numbers = ${nmbArr.join("_|_")}`);  //* add a little thingy in there so .join as name says joins a chosen thingy in the array not adds it to it 

    //! .includes
        console.log(
            `Element ${77} ${nmbArr.includes(77) ? "is" : "is not"} present in the [${nmbArr.join(", ")}]`
            
        ); //* the includes checks if something is in the array or not

    //! .indexOf 
         //*index off searches the array for the place that element holds (from 0 to n)

         const indexOf77 = nmbArr.indexOf(77); 

         if (indexOf77 != -1) {
            console.log(` The element has the index ${indexOf77} in the array ${nmbArr.join(", ")}`);
        
         } else{
            console.log(`The element ${84} does not have the index in array [${nmbArr.join(", ")}]`);
         }


    //! .slice 
         //* .slice gives us a copy of an array without changing our original array, rememeber start is included but not the end so like this:

         const copyArr = nmbArr.slice (2, 4); //! we are taking second element and our end is 4 but it will not be included in the copy, 2nd and 3rd will be shown in the console

         console.log(copyArr);

          

    //! ================== Associative Arrays ======================

         //* the role of associative arrays is the role of a dictionary, you have a key (word) and then u have a value (definition) so example 
         emptyAssoc = {};

         emptyAssoc.name = "Brian";
         emptyAssoc.age = 23;

         console.log("emptyAssoc =", emptyAssoc);
         //* as you can see it displays the name and age (key words you can change) and the value/definitions (which u can change aswell)

         console.log("My name is", emptyAssoc.name);

         //! lets create a bigger one : 

         let anime = {
            nameAnime: "Code Geass",
            score: 10,
            mainCharacter: 10,
            supportingCast: 9, 
            music: 9,
            pizzaHut: "Pizza Hut",
            
             /*! here example of what they did in supp for javascript  
             attacks: [
                {
                    name : "fast attack",
                    damage: 10,
                },
                {
                    name: "power attack",
                    damage: 20,
                },
            ], */

        }

        console.log ("anime =", anime);




