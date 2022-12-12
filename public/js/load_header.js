var currentUrl = window.location.href.split("/").at(-1).split("#")[0].split("?")[0]
console.log("Current Url is " + currentUrl)
var header_section = document.getElementById("header");
var journal_btn = document.getElementById("journal-btn");
var login_link = document.getElementById("login-link")

function loadHeaderSection(){
    console.log("Loading Header Section")
    if (header_section.style.visibility === "hidden" || header_section.style.visibility === "") {
        $("#header").slideUp(0);
        header_section.style.visibility = "visible";
        $("#header").slideDown(1000);
        setTimeout(function(){
            journal_btn.classList.add("btn")
        }, 3000) 
    }
}

function hideHeaderSection(){
    $("#header").slideUp(1000);
    console.log("sliding up")
    setTimeout(function(){
        header_section.style.visibility = "hidden";
        journal_btn.classList.remove("btn")
        return
    }, 1000)
}



$(document).ready(function() {

        if (currentUrl == "login"){
            login_link.innerText = "Signup"
            login_link.href = "register"

        }

        if (currentUrl != "/"){
            loadHeaderSection()
            header_section.style.position = "relative";
            header_section.style.top = 0;            
            if (currentUrl == "show"){
                journal_btn.innerText =  "Add"
                journal_btn.href = "/journal/create"
            }
            return
        }

        setInterval(function(){
            var top  = window.pageYOffset || document.documentElement.scrollTop
            if (top > 40){
                loadHeaderSection()
            } else {
                hideHeaderSection()
                }
            return top;
        }, 1000)
    }
);