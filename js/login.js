var btnn = document.getElementById('btnn');
btnn.addEventListener('click', function()
{
    let password = document.getElementById('UserPassword');
    if(password.type == "password")
    {
        password.type = "text"
        this.style.opacity = "1"
    } else{
        password.type = "password"
        this.style.opacity ".4"
    }
});