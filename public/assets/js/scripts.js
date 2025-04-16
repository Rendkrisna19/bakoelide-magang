const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});

document.getElementById("userIcon").addEventListener("click", function () {
    const dropdown = document.querySelector(".dropdown-menu");
    dropdown.classList.toggle("active"); // Tampilkan/sembunyikan menu
});

// Menutup dropdown jika klik di luar menu
document.addEventListener("click", function (event) {
    const dropdown = document.querySelector(".dropdown-menu");
    const userIcon = document.getElementById("userIcon");

    if (!dropdown.contains(event.target) && !userIcon.contains(event.target)) {
        dropdown.classList.remove("active"); // Sembunyikan menu
    }
});

//dropdown menu

document.addEventListener("DOMContentLoaded", function () {
    function setupDropdown(toggleId, dropdownId) {
        const toggle = document.getElementById(toggleId);
        const dropdown = document.getElementById(dropdownId);

        if (toggle && dropdown) {
            toggle.addEventListener("click", function (event) {
                event.stopPropagation();
                dropdown.classList.toggle("show");
            });

            document.addEventListener("click", function (event) {
                if (
                    !dropdown.contains(event.target) &&
                    !toggle.contains(event.target)
                ) {
                    dropdown.classList.remove("show");
                }
            });
        }
    }

    setupDropdown("languageDropdownToggle", "languageDropdown");
    setupDropdown("languageDropdownToggleGuest", "languageDropdownGuest");
});

//simpan translate di localstorage

document.addEventListener("DOMContentLoaded", function () {
    let langLinks = document.querySelectorAll("a[href*='?lang=']");

    langLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            let lang = this.href.split("?lang=")[1];
            localStorage.setItem("selectedLanguage", lang);
        });
    });

    // Set bahasa berdasarkan localStorage saat halaman dimuat
    let storedLang = localStorage.getItem("selectedLanguage");
    if (storedLang && !window.location.search.includes("lang=")) {
        window.location.href = "?lang=" + storedLang;
    }
});

function changeLanguage(lang) {
    window.location.href = "?lang=" + lang;
}
