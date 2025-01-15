
document.addEventListener('DOMContentLoaded', function() {
    const sectionHeaders = document.querySelectorAll('.section-header');

    sectionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const arrow = this.querySelector('.arrow');
            
            // Toggle the expanded class
            content.classList.toggle('expanded');
            arrow.classList.toggle('expanded');
            
            // Close other sections
            sectionHeaders.forEach(otherHeader => {
                if (otherHeader !== header) {
                    const otherContent = otherHeader.nextElementSibling;
                    const otherArrow = otherHeader.querySelector('.arrow');
                    otherContent.classList.remove('expanded');
                    otherArrow.classList.remove('expanded');
                }
            });
        });
    });
});
