const slider=document.querySelector('.slider');
const leftArrow = document.querySelector('.prev');
const rightArrow = document.querySelector('.next');

var index=0;
var numriSlideve=4;

leftArrow.addEventListener('click', function(){
    index = (index > 0) ? index - 1 : 0;
    slider.style.transform = 'translate(' + (index) * -25 + '%)';
})

rightArrow.addEventListener('click', function(){
    index = (index < (numriSlideve-1)) ? index + 1 : (numriSlideve-1);
    slider.style.transform = 'translate(' + (index) * -25 + '%)';
})

