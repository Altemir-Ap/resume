const profile = document.querySelector('.profile');

/*Object which contains the profile information*/
const profileObj = {
    name: 'Altemir Almeida',
    email: 'altemirap25@gmail.com',
    summaryp1: `Hi, My name is Altemir Almeida. I've been living in Ireland for almost 3 years. 
    I decided to move to Ireland to learn english, 
    and since last 17<sup>th</sup> february, I started a postgraduation in Science in Computing at CCT.
    But back in Brazil I graduated in Information Systems at Estácio.`,
    summaryp2: `During my graduation I worked as Web Mobile developer for government agencies,
    developing systems for mobile (Android and IOS) and Web, using technologies as Jquery, Jquery Mobile, 
    HTML, CSS, JavaScript and PhoneGap.`

}

/*function that add the information object into the homepage*/
let addProfile = () => {
    var template = `
            <ul class="profile-data">
                <li>${profileObj.name}</li>
                <li>${profileObj.email}</li>
            </ul>
            <div class="icons">
                <a href="https://www.linkedin.com/in/altemir-almeida-87868872/" target="_blank"><img src="images/in.png" class="icon circle"></a>
                <a href="https://github.com/Altemir-Ap/" target="_blank"><img src="images/git.png" class="icon"></a>
            </div>
            <span class="summary skill-summary container shadow container column">
                <p> 
                &nbsp;&nbsp;${profileObj.summaryp1}

                </p>
                <p> 
                &nbsp; &nbsp${profileObj.summaryp2};
                </p>
            </span>
    `;
    profile.insertAdjacentHTML("beforeend", template)
}

/* Function call */
addProfile();