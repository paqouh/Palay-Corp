function setupTabs() {
    document.querySelectorAll(".side-nav-links li").forEach(link => {
        link.addEventListener('click', () => {
            const navigationLinks = document.querySelector(".side-nav-links");
            const sideNav = document.querySelector('.side-nav');
            const linkNumber = link.dataset.nav;
            const mainContent = document.querySelectorAll('.content-info');
            const contentActivate = document.querySelector(`.content-info[data-main-content="${linkNumber}"]`);

            console.log(linkNumber);
            mainContent.forEach(content => {
                content.classList.remove("active");
            });

            contentActivate.classList.add("active");
        });
        
    });
    
}

setupTabs();