function checkLogin(login){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkLogin', login:login},
        success: function(data){
            document.getElementById("loginSignal").innerHTML = data;
        }
    });
}

function checkPassword(password){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkPassword',password:password},
        success: function(data){
            document.getElementById("passwordSignal").innerHTML = data;
        }
    });
}
    
function checkConfirm_password(password, confirm_password){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkConfirm_password', password:password, confirm_password:confirm_password},
        success: function(data){
            document.getElementById("confirm_passwordSignal").innerHTML = data;
        }
    });
}

function checkEmail(email){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkEmail', email:email},
        success: function(data){
            document.getElementById("emailSignal").innerHTML = data;
        }
    });
}

function checkName(name){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkName', name:name},
        success: function(data){
            document.getElementById("nameSignal").innerHTML = data;
        }
    });
} 

function addUser(login, password, email, name){
    $.ajax({
        url: '../php/ajaxProcessing/CRUD.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'addUser', login:login, password:password, email:email, name:name},
        success: function(data){
            if(data.length>0){
                alert(data);
                window.location.href = 'Authorization.php';
            }
        }
    });
}

function verify(){
    checkLogin(document.getElementById('login').value)
    checkPassword(document.getElementById('password').value)
    checkConfirm_password(document.getElementById('password').value, document.getElementById('confirm_password').value)
    checkEmail(document.getElementById('email').value)
    checkName(document.getElementById('name').value)
    addUser(document.getElementById('login').value, document.getElementById('password').value, document.getElementById('email').value, document.getElementById('name').value);
    
}