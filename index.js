const sliderImages = document.querySelectorAll('.slider__img'),
    sliderLine = document.querySelector('.slider__line'),
    sliderDots = document.querySelectorAll('.slider__dot'),
    sliderBtnNext = document.querySelector('.slider__btn-next'),
    sliderBtnPrev = document.querySelector('.slider__btn-prev');
         
let sliderCount = 0,
    sliderWidth;

sliderBtnNext.addEventListener('click', nextSlide);
sliderBtnPrev.addEventListener('click', prevSlide);

function showSlide() {
    sliderWidth = document.querySelector('.slider').offsetWidth;
    sliderLine.style.width = sliderWidth * sliderImages.length + 'px';
    sliderImages.forEach(item => item.style.width = sliderWidth + 'px');

    rollSlider();
}
showSlide();

function nextSlide() {
    sliderCount++;
    if (sliderCount >= sliderImages.length) sliderCount = 0;

    rollSlider();
    thisSlide(sliderCount);
}

function prevSlide() {
    sliderCount--;
    if (sliderCount < 0) sliderCount = sliderImages.length -1;

    rollSlider();
    thisSlide(sliderCount);
}

function rollSlider() {
    sliderLine.style.transform = `translateX(${-sliderCount * sliderWidth}px)`;
}

function thisSlide(index) {
    sliderDots.forEach(item => item.classList.remove('active-dot'));
    sliderDots[index].classList.add('active-dot');
}

sliderDots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        sliderCount = index;
        rollSlider();
        thisSlide(sliderCount);
    })
})

const mainBtn = document.querySelector('.intro-main__button');
const buttons = document.querySelectorAll('.intro-choice-categorie');
const caret = document.querySelector('#caret');
let elementIsHidden = false;

mainBtn.addEventListener('click', () => {
    if (elementIsHidden === false) {
        elementIsHidden = true;
        caret.classList.remove('fa-caret-up');
        caret.classList.add('fa-caret-down');
        for (let i = 0; buttons.length; i++) {
            buttons[i].style.display = 'none';
        }
    } else {
        elementIsHidden = false;
        caret.classList.remove('fa-caret-down');
        caret.classList.add('fa-caret-up');
        for (let i = 0; buttons.length; i++) {
            buttons[i].style.display = 'inline-block';
        }
    }
});