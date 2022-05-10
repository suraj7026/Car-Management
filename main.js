const left = document.querySelector('.left')
const mid = document.querySelector('.mid')
const right = document.querySelector('.right')
const container = document.querySelector('.container')

left.addEventListener('mouseenter', () => {
    container.classList.add('hover-left');
});

left.addEventListener('mouseleave', () => {
    container.classList.remove('hover-left');
});

right.addEventListener('mouseenter', () => {
    container.classList.add('hover-right');
});

right.addEventListener('mouseleave', () => {
    container.classList.remove('hover-right');
});

mid.addEventListener('mouseenter', () => {
    container.classList.add('hover-mid');
});

mid.addEventListener('mouseleave', () => {
    container.classList.remove('hover-mid');
});