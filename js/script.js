const profile = document.querySelector('.profile');

const profileObj = {
    name: 'Altemir Almeida',
    email: 'altemirap25@gmail.com',
    summary: 'Hi, my name is Altemir, asdjfaskldjfçaskljdfçalksdjfçalksdjfçaslkdjf '
}

let addProfile = () => {
    var template = `

    `;
    profile.insertAdjacentHTML("beforeend", template)
}



addProfile();