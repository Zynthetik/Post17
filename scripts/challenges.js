
function openFeed() {    
    open("feed.html");

}
function openChannels() {    
    open("channels.html");
 
}
function openMyAccount() {    
    open("myaccount.html");
  
}

function newChallenge() {
    // do stuff here 
    return 1;
}

var searchfor;
var newtext;
function searching() {
    searchfor = document.getElementById("searchinput").value;
    if (searchfor != "") {
        newtext = "Showing results for: "+searchfor+" . . . \n1 result found";
        document.getElementById("searchresult").innerHTML = newtext;
        document.getElementById("image1").style.display = "block";
    }
    else if (searchfor == "") {
        newtext = "You didnt enter any key words to search for . . .  ";
        document.getElementById("searchresult").innerHTML = newtext;
    }
    // check with database for match
    
    return 1;
}