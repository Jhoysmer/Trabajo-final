const loadingText = document.querySelector('.loading-text');
const progress= document.querySelector('.progress');

let dots = '', progressWidth = 0;

const textInterval = setInterval(() => {
    loadingTextContent = 'cargando' +
    (dots = dots.length < 3 ? dost + '.' : '');
},500);