let a = 5;
let b = 7;
 
let c = a > b ? True : false;
console.log(c)


function draw(a) {
    const body = document.body
    

    
        for (let index = 0; index < a; index++) {
        setTimeout(()=>{
        let justDiv = document.createElement("div")
        justDiv.classList.add('justDiv')
        justDiv.innerHTML = index;
        body.appendChild(justDiv)
        } ,"1000")}
}