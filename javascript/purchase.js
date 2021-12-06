function setupTabs() {
    document.querySelectorAll(".purchase-links").forEach(link => {
        link.addEventListener('click', () => {
            const purchaseHeader = link.parentElement;
            const purchaseContainer = purchaseHeader.parentElement;
            const linkNumber = link.dataset.link;
            const purchaseContent = purchaseContainer.querySelectorAll('.purchase-content');
            const contentActivate = purchaseContainer.querySelector(`.purchase-content[data-content="${linkNumber}"]`);
            
            purchaseHeader.querySelectorAll(".purchase-links").forEach(link => {
                link.classList.remove("active");
            });

            purchaseContent.forEach(content => {
                content.classList.remove("active");
            });
            
            link.classList.add("active");
            contentActivate.classList.add("active");
        });
        
    });
    
}

setupTabs();
