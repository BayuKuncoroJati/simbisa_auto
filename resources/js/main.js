// Counter animation
document.addEventListener("DOMContentLoaded", () => {
    function counter(id, start, end, duration, suffix = "") {
        let obj = document.getElementById(id),
            current = start,
            range = end - start,
            increment = end > start ? 1 : -1,
            step = Math.abs(Math.floor(duration / range)),
            timer = setInterval(() => {
                current += increment;
                let formattedNumber = current;

                // Check if the number is 1000 or more to add "k+" (for thousands)
                if (current >= 1000) {
                    formattedNumber = (current / 1000).toFixed(1) + "k"; // Adding the "k" suffix
                }

                obj.textContent = formattedNumber + suffix;
                if (current == end) {
                    clearInterval(timer);
                }
            }, step);
    }

    counter("count1", 100, 18, 5000, "+");
    counter("count2", 100, 3, 5000);
    counter("count3", 20350, 21300, 5000, "+");
});
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - 80; // Adjust for fixed navbar height
        if (scrollY >= sectionTop) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach((link) => {
        link.classList.remove("border-b-2");
        link.classList.remove("border-rose-500");
        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("border-b-2");
            link.classList.add("border-rose-500");
        }
    });
});

// Smooth scroll untuk anchor link navbar
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    });
});

// Scroll to top button
document.addEventListener("DOMContentLoaded", () => {
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    // Only proceed if button exists
    if (scrollToTopBtn) {
        scrollToTopBtn.classList.add("hidden");

        scrollToTopBtn.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });

        window.onscroll = function () {
            if (
                document.body.scrollTop > 100 ||
                document.documentElement.scrollTop > 100
            ) {
                scrollToTopBtn.classList.remove("hidden");
            } else {
                scrollToTopBtn.classList.add("hidden");
            }
        };
    }
});

// flatpi
window.addEventListener("load", function () {
    // Basic
    flatpickr("#flatpickr-date", {
        monthSelectorType: "static",
    });
});

window.addEventListener("load", function () {
    // Time
    flatpickr("#flatpickr-time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
});
