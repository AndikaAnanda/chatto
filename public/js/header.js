const closeMenuBtn = document.getElementById("close-menu-btn");
const openMenuBtn = document.getElementById("open-menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const header = document.getElementById("header");

function onLoad() {
    const location = window.location.pathname
	window.addEventListener("scroll", () => {
		const distanceFromTop = window.scrollY;
        
        if (location === "/chatto/public/") {
            if (distanceFromTop > 130) {
                header.classList.add("bg-white", "drop-shadow-md");
                header.classList.remove("text-gray-900");
            } else {
                header.classList.remove("bg-white", "drop-shadow-md");
                header.classList.add("text-gray-900");
            }
        } else {
            if (distanceFromTop > 130) {
                header.classList.add("bg-white", "drop-shadow-md");
                header.classList.remove("text-slate-100");
            } else {
                header.classList.remove("bg-white", "drop-shadow-md");
                header.classList.add("text-slate-100");
            }
        }

	});

	closeMenuBtn.addEventListener("click", () => {
		mobileMenu.classList.add("hidden");
	});

	openMenuBtn.addEventListener("click", () => {
		mobileMenu.classList.remove("hidden");
	});
}

document.onreadystatechange = function () {
	if (document.readyState !== "complete") {
        document.querySelector("#content").classList.add("hidden");
		document.querySelector("#loader").classList.remove("hidden");
	} else {
        setTimeout(() => {
            document.querySelector("#loader").classList.add("hidden");
            document.querySelector("#content").classList.remove("hidden");
        }, 2000)
	}
};

onLoad();
