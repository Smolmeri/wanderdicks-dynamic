const onNavPress = () => {
    const bar1 = document.querySelector('.bar1');
    bar1.classList.toggle('change');

    const bar2 = document.querySelector('.bar2');
    bar2.classList.toggle('change');

    const bar3 = document.querySelector('.bar3');
    bar3.classList.toggle('change');

    const hide = document.querySelector('.nav-list');
    hide.classList.toggle('hidden');
}

