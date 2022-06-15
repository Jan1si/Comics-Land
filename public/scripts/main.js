const   moduleUser = document.querySelector('.user_module'),
        panelUser = document.querySelector('.panel'),
        arrowPanel = document.querySelector('.arrow');

moduleUser.addEventListener('click', function(){
    panelUser.classList.toggle('show-panel');
    arrowPanel.classList.toggle('rotate-arrow');
});
