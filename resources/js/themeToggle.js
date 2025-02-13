document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("themeToggle");

    function toggleDarkMode() {
        document.documentElement.classList.toggle("dark");
        const isDark = document.documentElement.classList.contains("dark");

        localStorage.setItem("theme", isDark ? "dark" : "light");

        // Atualiza UI
        updateToggleUI(isDark);
    }

    function updateToggleUI(isDark) {
        const icon = document.getElementById("themeIcon");
        const toggleCircle = document.getElementById("toggleCircle");
        const themeText = document.getElementById("themeText");

        if (isDark) {
            icon.classList.replace("fa-sun", "fa-moon");
            icon.classList.replace("text-yellow-400", "text-white");
            themeText.innerText = "Modo Escuro";
            toggleCircle.classList.add("translate-x-7");
        } else {
            icon.classList.replace("fa-moon", "fa-sun");
            icon.classList.replace("text-white", "text-yellow-400");
            themeText.innerText = "Modo Claro";
            toggleCircle.classList.remove("translate-x-7");
        }
    }

    if (localStorage.getItem("theme") === "dark") {
        document.documentElement.classList.add("dark");
        updateToggleUI(true);
    }

    themeToggle.addEventListener("click", toggleDarkMode);
});
