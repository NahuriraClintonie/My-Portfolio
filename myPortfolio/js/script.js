let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    header.classList.toggle('active');
    document.body.classList.toggle('active');
}

window.onscroll = () =>{
    if(window.innerWidth < 911){
    menu.classList.remove('fa-times');
    header.classList.remove('active');
    document.body.classList.remove('active');
    }

    document.querySelectorAll('section').forEach(sec=>{
        let top = Window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            document.querySelectorAll('.header .nav a').forEach(links=>{
                links.classList.remove('active');
            document.querySelector('.header .nav a[href*='+ id +']').classList.add('active');
            });
        };
    });
}