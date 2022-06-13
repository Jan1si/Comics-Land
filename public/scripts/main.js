const   moduleUser = document.querySelector(".module"),
        panelUser = document.querySelector('.panel');

moduleUser.addEventListener('click', function(){
    panelUser.classList.toggle('show-panel');
});
