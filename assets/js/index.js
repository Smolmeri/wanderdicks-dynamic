
const onNavPress = () => {
    const bar1 = document.querySelector('.bar1');
    bar1.classList.toggle('change');

    const bar2 = document.querySelector('.bar2');
    bar2.classList.toggle('change');

    const bar3 = document.querySelector('.bar3');
    bar3.classList.toggle('change');

    const show = document.querySelector('.nav-list');
    show.classList.toggle('show');

    const hide = document.querySelector('.nav-wrapper');
    hide.classList.toggle('hide');
}

const smoothScroll = () => {
    const id = document.getElementsByClassName('scrollHere')[0];
    console.log('what is ID', id)
    id.scrollIntoView({ behavior: 'smooth' });
}

const smoothScrollMobile = () => {
    const id = document.getElementsByClassName('scrollHereMobile')[0];
    console.log('what is ID', id)
    id.scrollIntoView({ behavior: 'smooth' });
}

const smoothScrollUp = () => {
    const id = document.getElementsByClassName('scrollUp')[0];
    console.log('what is ID', id)
    id.scrollIntoView({ behavior: 'smooth' });
}


let count = 0;
const easterEggCounter = document.getElementById("easterEgg");
const newText = document.querySelector('.newText');
// const audio = new Audio('url("<?php echo bloginfo('template_directory') ?>/assets/audio/theme.mp3;")');
easterEggCounter.onclick = () => {
    count++;
    console.log(count);
    if (count == 10) {
        easterEggCounter.style.display = "none";
        newText.classList.toggle('easterEgg');
        newText.innerHTML = "DICKS";
        audio.play()
    }
}

// const renderingEgg = () => {
//     document.getElementById("newText").innerHTML = "FOO";
//     console.log(document.getElementById('newText'));
// }

const render = (template, node) => {
    node.innerHTML = template;
};

// const template = "FOO";
//     render(template, document.getElementById('#newText'));


// if (count == 10) {
//     document.write('Hello World');
// }

