// Show or hide sidebar with extra information about the project if the user scrolls up or down.
const sidebar = document.querySelector('.info-sidebar');

window.addEventListener('resize', ()=>{
    if(window.innerWidth >= 750){
        window.addEventListener('scroll', function(e){

            if (window.pageYOffset >= 20) {
                sidebar.style.right = '0';
                console.log(window.innerWidth);
            }else{
                sidebar.style.right = '-100vw';
                console.log(window.innerWidth);
            }

        });
    }
});
