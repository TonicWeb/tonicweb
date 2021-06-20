/* Morph Click Events */

btn.addEventListener('click', function() {
    morphing.restart();
    overlay.classList.add('pointer');
    morph.classList.add('morphDisplay');
    sect2.classList.add('display');
    sect1.classList.add('hideSection');
    morph.classList.remove('morphHide');
});

btn2.addEventListener('click', function() {
    morphing.reverse();
    morphing.play();
    overlay.classList.remove('pointer');
    sect2.classList.remove('display');
    sect2.classList.add('hideSection');
    sect1.classList.remove('hideSection');
    morph.classList.add('morphHide');
});
