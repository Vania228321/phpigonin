const hiddenText = document.querySelector('.hidden-text');
const infoBtn = document.querySelector('.info-btn');
const lastText = document.querySelector('.last-text');
let textIsHidden = true;

infoBtn.addEventListener('click', function () {
    if (textIsHidden === false) {
        textIsHidden = true;
        this.innerText = 'Свернуть';
        hiddenText.style.display = 'inline';
        lastText.style.opacity = '1';
    } else {
        textIsHidden = false;
        this.innerText = 'Читать всё';
        hiddenText.style.display = 'none';
        lastText.style.opacity = '.3';
    }
});