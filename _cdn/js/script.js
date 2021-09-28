function toggle(btn){
    if(btn.innerHTML === "Mostra mais..."){
        document.querySelector('.toggled_text').style.display = 'block';
        btn.innerHTML = "Mostra menos...";
    }else{
        document.querySelector('.toggled_text').style.display = 'none';
        btn.innerHTML = "Mostra mais..."

    }
}

document.querySelector('.fale_conosoco').addEventListener('submit', function (e){
    let elemets = this.querySelectorAll('[required]');
    if(!validaForm(elemets))
        e.preventDefault();
});

let inputs = document.querySelectorAll('.inputUser');
for(let i = 0; i < inputs.length; i++){
    inputs[i].addEventListener('blur', function (){
        validaInput(inputs[i]);
    });
}
for(let i = 0; i < inputs.length; i++){
    inputs[i].addEventListener('keyup', function (){
        validaInput(inputs[i]);
    });
}

function validaForm(elemets){
    let stopSubmit = true;
    for(let i = 0; i < elemets.length; i++){
        if(!validaInput(elemets[i])){
            stopSubmit = false;
        }
    }
    console.log(stopSubmit);
    return stopSubmit;
}

function validaInput(input){
    if(input.value === "" || input.value === undefined){
        input.style.border = "1px solid red";
        input.parentElement.querySelector('.with-errors').style.display = 'block';
        return false;
    }else{
        input.style.border = "1px solid #cecece";
        input.parentElement.querySelector('.with-errors').style.display = 'none';
        return true;
    }
}

function openModal(mn) {
    let modal = document.getElementById(mn);

    if (typeof modal == 'undefined' || modal === null)
        return;

    modal.style.display = 'Block';
    document.body.style.overflow = 'hidden';
}

function closeModal(mn) {
    let modal = document.getElementById(mn);

    if (typeof modal == 'undefined' || modal === null)
        return;

    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

document.querySelector('.validated').addEventListener('load', function (){
    openModal('dv-modal')
});