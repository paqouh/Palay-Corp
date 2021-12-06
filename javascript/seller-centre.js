function setupTabs() {
    document.querySelectorAll(".nav-links li").forEach(link => {
        link.addEventListener('click', () => {
            const navigationLinks = document.querySelector(".nav-links");
            const sideNav = document.querySelector('.side-nav');
            const linkNumber = link.dataset.link;
            const mainContent = document.querySelectorAll('.main-content');
            const contentActivate = document.querySelector(`.main-content[data-content="${linkNumber}"]`);

            console.log(linkNumber);
            mainContent.forEach(content => {
                content.classList.remove("active");
            });

            contentActivate.classList.add("active");
        });
        
    });
    
}

setupTabs();