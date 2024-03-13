window.onload = function() {
    var typed = new Typed('#typed', {
        strings: ["Foryoung Junior N."],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true
    });
}


// Resume Section

document.addEventListener("DOMContentLoaded", function () {
    const companyItems = document.querySelectorAll(".company-item");

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function animateIfInView() {
        companyItems.forEach((item) => {
            if (isInViewport(item)) {
                item.querySelector(".popup").classList.add("animated");
            }
        });
    }

    // Initially check if any elements are in view
    animateIfInView();

    // Add scroll event listener to trigger animation
    window.addEventListener("scroll", animateIfInView);
});
