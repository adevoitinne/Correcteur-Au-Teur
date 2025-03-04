// animations paragraphes pages accueil, juridique et menu privé

let sections = [...document.querySelectorAll('.section')];

for (let value of sections) {
    value.addEventListener('mouseover', e => {
        e.target.style.setProperty('--background-color', 'white');
    });

    value.addEventListener('mouseout', e => {
        e.target.style.setProperty('--background-color', 'none');
    });
}


// animation page accueil

let animationSubtitle = anime({
    targets: '.subtitle-text',
    translateX: '70%',
    direction: 'alternate',
    backgroundColor: '#bcb6e7',
    easing: 'easeInOutSine',
    duration: 1500,
});

// animation page fonctionnement

let animationDiagram = anime({
    targets: '.diagram',
    rotateY: 360,
    duration: 3600,
    easing: 'easeInSine',
});

// animations page juridique 

let animationImages = anime({
    targets: '.images',
    rotate: '1turn',
    duration: 2400,
});

// animation page technique

let technicalTimeline = anime.timeline({
    duration: 1600,
});

technicalTimeline.add({
    targets: '.GD-image',
    scale: 2,
    easing: 'easeInOutSine',
});

technicalTimeline.add({
    targets: '.GD-image',
    scale: 1,
    easing: 'easeInOutSine',
});

