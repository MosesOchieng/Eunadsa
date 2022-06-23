let popUp = documentElementById("cookie");
//when user clciks the accept button
documentElementById("acceptCookie").
$addEventListener("click",() =>{
    //create date object 
    let d = new Date();
    //increament the current time by 1 minute (cookie will expire after one minute)
    d.setHours(22 + d.getHours());
    //create Cookie with name 
document.cookie = "mycookiename=thisIsMyCookie;expires = "+ d + ";";
//Hide pop up
popUp.classList.add
})