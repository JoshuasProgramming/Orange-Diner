/**
 * Show Password on signed_out/ShopOnline.html Page
 */
const register_password = document.getElementById('register_password');
const register_confirm_password = document.getElementById('register_confirm_password');
const checkbox_register = document.getElementById('checkbox_register').addEventListener("click", (e)=>{
    showPasswordRegister();
});

const login_password = document.getElementById('login_password');
const checkbox_login = document.getElementById('checkbox_login').addEventListener("click", (e)=>{
    showPasswordLogin();
});

//showPassword grabs the input type and changes it from 'password' to 'text', 
//vice versa, once the user presses a specifc button within the HTML
function showPasswordRegister(){ //Show Register Password
    let show_register_password = register_password;
    let show_register_confirm_password = register_confirm_password;
    if((show_register_password.type === "password") && (show_register_confirm_password.type === "password")){
        show_register_password.type = "text";
        show_register_confirm_password.type = "text";
    } else {
        show_register_password.type = "password";
        show_register_confirm_password.type = "password";
    }
}

function showPasswordLogin(){ //Show Login password
    let show_hide = login_password;
    if(show_hide.type === "password"){
        show_hide.type = "text";
    } else {
        show_hide.type = "password";
    }
}