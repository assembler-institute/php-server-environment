const account = document.getElementsByClassName("account")[0];
account.addEventListener("click", OpenAccount);
const menuAccount = document.getElementsByClassName("menu-account")[0];
const unlogin = document.getElementsByClassName("unlogin")[0];
unlogin.addEventListener("click", disconect);
function OpenAccount(){
    menuAccount.classList.toggle("menu-account_show");
}

function disconect(){
    window.location="close_session.php";
}