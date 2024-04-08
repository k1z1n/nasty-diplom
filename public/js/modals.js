/* Открытие/Закрытие модалки */
function openModal(thisId){
    document.getElementById(thisId).classList.add('active');
}

function openReg(){
    document.getElementById('auth').classList.remove('active');
    document.getElementById('reg').classList.add('active');
}

function openAuth(){
    document.getElementById('reg').classList.remove('active');
    document.getElementById('auth').classList.add('active');
}

document.querySelectorAll('.close').forEach(element => {
    element.addEventListener('click', function() {
        this.parentNode.parentNode.classList.remove('active');
    });
})