const lock = document.getElementById("lock");
const navigation = document.getElementById("navigation");

lock.addEventListener("click", function(){
    navigation.classList.remove("nav--autohide");
    navigation.classList.add("nav--locked");
});

