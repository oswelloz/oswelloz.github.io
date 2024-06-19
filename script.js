document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll(".section");
    const navLinks = document.querySelectorAll(".nav-li");

    navLinks.forEach(navLink => {
        navLink.addEventListener("click", function(event) {
            event.preventDefault();
            const targetSectionId = navLink.getAttribute("data-section");

            // Hide all sections
            sections.forEach(section => {
                section.classList.remove("active");
            });

            // Show the target section
            document.getElementById(targetSectionId).classList.add("active");

            // Update active class for navigation
            navLinks.forEach(link => {
                link.classList.remove("active");
            });
            navLink.classList.add("active");
        });
    });

    // Show the initial section (Bio) by default
    document.getElementById("Bio").classList.add("active");
    document.querySelector(".nav-li[data-section='Bio']").classList.add("active");
});
