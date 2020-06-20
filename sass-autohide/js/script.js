const lock = document.getElementById('lock');
const navigation = document.getElementById('navigation');
let isLocked = false;

lock.addEventListener('click', function(){

    if (isLocked)
    {
        navigation.classList.remove('nav--locked');
        navigation.classList.add('nav--autohide');
        this.innerHTML = 'LOCK';
        isLocked = false;
    }
    else {
        navigation.classList.remove('nav--autohide');
        navigation.classList.add('nav--locked');
        this.innerHTML = 'UNLOCK';
        isLocked = true;
    }
});

