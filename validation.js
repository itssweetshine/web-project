
const btn = function(){
    document.getElementById('cancel').addEventListener('click', reset);
    document.getElementById('send').addEventListener('click', send);
}

const reset = function(e){
    e.preventDefault();
    document.getElementById('users').reset();
}

const send = function(e){
    e.preventDefault();
    e.stopPropagation();

    let fails = validate();
    if(fails.length === 0){
        //good to go
        document.getElementById('users').submit();
    }else{
        fails.forEach(function(obj){
            let field = document.getElementById(obj.input);
            field.parentElement.classList.add('error');
            field.parentElement.setAttribute('err', obj.msg);
        })
    }
}

const validate = function(e){
    let failures = [];

    let user = document.getElementById('username');
    let email = document.getElementById('email');
    let password = document.getElementById('password');

    if(user.value === ""){
        failures.push({input:'username', msg:'Required Field'})
    }
    if(email.value === ""){
        failures.push({input:'email', msg:'Required Field'})
    }
    if(password.value === ""|| password.value.length < 8){
        failures.push({input:'password', msg:'The password doesn\'t strong'})
    }
    return failures;
}

document.addEventListener('DOMContentLoaded', btn);

