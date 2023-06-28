function alertExternal(){
    let a=alert ("How are you?")
    document.getElementById("b1").style.backgroundColor="red"
    
}
function confirmExternal(){
    a=confirm("Enter ans")
    if(a){
        alert ("Fine")
        document.getElementById("b2").style.backgroundColor="green"
    }
    else{
        alert ("error")
        document.getElementById("b2").style.backgroundColor="yellow"
    }      
}
function promptExternal(){
    let fname=prompt("Enter First name")
    let lname=prompt("Enter Last name")
    alert(fname+" "+lname)
    document.getElementById("b3").style.backgroundColor="blue"
}