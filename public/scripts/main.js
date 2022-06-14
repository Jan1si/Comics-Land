const   moduleUser = document.querySelector(".user_module"),
        panelUser = document.querySelector('.panel');

moduleUser.addEventListener('click', function(){
    panelUser.classList.toggle('show-panel');
});
