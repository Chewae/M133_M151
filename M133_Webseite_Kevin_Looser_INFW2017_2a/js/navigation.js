function showLogin() {
    document.getElementById("signinBlock").style.display = "block";
    document.getElementById("registerBlock").style.display = "none";
    disableButton("button01");
}

function showBlog() {
    document.getElementById("registerBlock").style.display = "none";
    document.getElementById("signinBlock").style.display = "none";
}

function register() {
    document.getElementById("registerBlock").style.display = "block";
    document.getElementById("signinBlock").style.display = "none";
    disableButton("button02");
}

function goHome() {
    document.getElementById("registerBlock").style.display = "none";
    document.getElementById("signinBlock").style.display = "none";
}