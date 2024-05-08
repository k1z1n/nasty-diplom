document.querySelectorAll('.faq-block__item').forEach(element => {
    element.addEventListener('click', function(){
        element.classList.toggle('active');
    });
});

