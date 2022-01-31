register_password = document.getElementById('register_password')
register_confirm_password = document.getElementById('register_confirm_password');
const checkbox_register = document.getElementById('checkbox_register').addEventListener("click",(e)=>{
    showPasswordUpdateAccount();
});

function showPasswordUpdateAccount(){
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