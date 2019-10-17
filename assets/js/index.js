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

