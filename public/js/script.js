const profile = document.querySelector('.profile');

/*Object which contains the profile information*/
const profileObj = {
    name: 'Almeida',
    email: 'altemirap25@gmail.com',
    summaryp1: `Hi, My name is Altemir Almeida. I've been living in Ireland for almost 3 years. 
    I decided to move to Ireland to learn english, 
    and since last 17<sup>th</sup> february, I started a postgraduation in Science in Computing at CCT.
    But back in Brazil I graduated in Information Systems at Estácio.`,
    summaryp2: `During my graduation I worked as Web Mobile developer for government agencies,
    developing systems for mobile (Android and IOS) and Web, using technologies as Jquery, Jquery Mobile, 
    HTML, CSS, JavaScript and PhoneGap. `

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
            <section class="summary skill-summary container shadow container column">
                <p> 
                &nbsp;${profileObj.summaryp1}
                </p>
                <p> 
                &nbsp;${profileObj.summaryp2}
                <button id="research" class="preview" onclick="swal('100% Uptime and Backup Recovery', 'Website uptime is the time that a website or web service is available to the users or other systems, which makes impossible to reach a 100% ratio, since from time to time, we will have to update the system and/or face some web host downtime. Fortunately we can do some things to reach the 99.99% which is considered to be a very high rate. Some of these things can help you reaching this highs ratio. Choose a reliable host, not all the hosts are the same, some have better uptime records than others. Reducing image sizes, is another thing you can do, because the bigger the images are more time it will take to the browser display your site, what could time out and down parts of your site, so, try to compress the images as much as you can. Use web caching, because it can speed up the access of your users to your site, since the browser can keep many files saved for the next access. Use CDN instead of having your scripts locally, which can reduce the size of your site. These were just a few things to use in order to improve your website uptime, but there are many others')">Research</button>
                </p>
            </section>
    `;
    profile.insertAdjacentHTML("beforeend", template)
}

/* Function call */
addProfile();