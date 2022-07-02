const header = document.querySelector('header');
const menuBtn = document.querySelector('.fa-bars');
const nav = document.querySelector('nav');

menuBtn.addEventListener('click', ()=>{
    nav.classList.toggle('hide');

    if(nav.classList.contains('hide')){
        header.style.height = 'auto';
    }else{
        header.style.height = '100%';
    }
})


