document.addEventListener('DOMContentLoaded', function() {
    const languageMenu = document.getElementById('language-menu');

    languageMenu.addEventListener('mouseenter', function() {
        languageMenu.querySelector('.dropdown-menu').style.display = 'block';
    });

    languageMenu.addEventListener('mouseleave', function() {
        languageMenu.querySelector('.dropdown-menu').style.display = 'none';
    });
});

function changeLanguage(language) {
    var elements = document.querySelectorAll('[data-lang]');
    elements.forEach(function(element) {
        var langKey = element.getAttribute('data-lang');
        element.innerHTML = languageData[language][langKey];
    });
}

var languageData = {
    'fr': {
        'mygit': 'MON GIT>>',
        'home': 'ACCEUIL',
        'contactMe': '<span>Contactez</span>&nbsp;MOI',
        'about': 'A PROPOS',
        'aboutme': 'Je m\'appelle Ömer,originaire de Turquie,j \'apprends et étudie le français,j \'ai encore beaucoup à apprendre <br><br>' +
            'j \'étudie les sciences et les mathématiques à l\'Université de Strasbourg <br><br> ' +
            'Mon plat français préféré jusqu\'à présent est la RACLETTE surtout en hiver,ça se passe parfaitement bien...<br><br>' +
            'J\'aime bienme faire de nouveaux amis et faire du sport comme : Natation,Volleyball <br><br>' +
            'J\'aime aller sur des sites où l\'on peut s \'amuser à coder, pendant mon temps libre <br><br>' +
            'C\'est tout! Profitez de mon site Web!',
        'projet': 'MES PROJETS DE GIT',
        'sokoban': 'Jeu-Sokoban dans lequel le joueur pousse des boîtes dans un labyrinthe, dans le but de les placer toutes dans des emplacements de stockage désignés',
        'progsys': 'C\'est le développement de programmes qui font partie du système d \'exploitation d \'un ordinateur ou qui exécutent ses fonctions dans Linux',
        'crossword': 'MOT-CROISE',
        'crossword-intro': 'Une grille de lettres aléatoires, et cachés dans la grille se trouvent des mots que le joueur doit trouver',
        'graph': 'GRAPHE',
        'graph-intro': 'Un programme qui genere des graphiques de doubles d\'images 3D en utilisant diverses méthodes de tri que nous avons apprises en langage C ',
        'skills': 'COMPETENCES',
        'formName': 'Prenom:',
        'formNumber': 'Numero:',
        'formSubmit': 'Envoyer <i class="fas fa-paper-plane"></i>',
        'chargementForm': 'Voir tous les formulaires'
    },
    'en': {
        'mygit': 'MY GIT>>',
        'home': 'HOME',
        'contactMe': '<span>Contact</span>&nbsp;ME',
        'about': 'ABOUT',
        'aboutme': 'I\'m Ömer, originally from Turkey,learning and stuyding french,I still got a lot to learn <br><br>' +
            'I am stuyding Comp.Sci & Maths<br><br>' +
            'My favorite french meal is RACLETTE so far,especially in winter it goes perfectly gooood...<br><br>' +
            'I kind of enjoy making new friends and doing sports such as; Swimming,Voleyball <br><br>' +
            'I like go on sites where I can enjoy coding in my spare time <br><br>' +
            'That\'s it! Enjoy my website!',
        'projet': 'MY GIT PROJECTS',
        'sokoban': 'Sokoban game where the player pushes boxes around a maze, aiming to place them all onto designated storage locations',
        'progsys': 'It is the development of programs which are part of the operating system of a computer or which carry out its functions on Linux',
        'crossword': 'CROSS-WORD',
        'crossword-intro': 'A grid of random letters, and hidden within the grid are words that the player needs to find in JAVA',
        'graph': 'GRAPH',
        'graph-intro': 'A program generating 3D image dual graphs using various sorting methods we learned using C language',
        'skills': 'SKILLS',
        'formName': 'Name:',
        'formNumber': 'Number:',
        'formSubmit': 'Submit <i class="fas fa-paper-plane"></i>',
        'chargementForm': 'Show all the forms'
    }
};