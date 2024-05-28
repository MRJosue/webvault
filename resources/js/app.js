import './bootstrap';

const menubutton = document.querySelector('#menu-button');
const menuItems = document.querySelector('#menu');
const menubuttonspan = document.querySelector('#menu-button span');

const links = document.querySelectorAll('#menu a');

menubutton.addEventListener('click', ()=> {
    menuItems.classList.toggle('hidden');
   
    menubuttonspan.forEach((span) => {
        span.classList.toggle('animado')
    })
}

);

links.forEach((link)=>{
    link.addEventListener('click',()=>{
        menuItems.classList.toggle('hidden');
        
        menubuttonspan.forEach((span) => {
            span.classList.toggle('animado')
        })
    })
})

window.onresize = function () {
    let w = window.outerWidth;

    if (w < 768) {
        menuItems.classList.add('hidden');
        menubuttonspan.forEach((span)=>{
            span.classList.remove('animado');
        })
    }
}

// Dark mode 

const darkButton = document.querySelector('#darkButton');


darkButton.addEventListener('click', function() {

 

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});


const jobSection = document.querySelector('#jobSection');
const articles = document.querySelectorAll('#jobSection article');


    articles.forEach((article)=>{
        article.classList.add('hidden');
    });

    const element = document.getElementById('job1');

    element.classList.remove('hidden');



jobSection.addEventListener('click',(event) =>{
    const id = event.target.dataset.id;

    if (id) {
        articles.forEach((article)=>{
            article.classList.add('hidden');
        });

        const element = document.getElementById(id);

        element.classList.remove('hidden');
    }
})


$(document).ready(function(){

    console.log('ready')
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });