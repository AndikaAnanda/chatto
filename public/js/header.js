const closeMenuBtn = document.getElementById("close-menu-btn");
const openMenuBtn = document.getElementById("open-menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const home = document.getElementById("home");
const header = document.getElementById("header");

function onLoad() {
	window.addEventListener("scroll", () => {
		const distanceFromTop = home.getBoundingClientRect().top;

		if (distanceFromTop < -130) {
			header.classList.add("bg-white", "drop-shadow-md");
		} else {
			header.classList.remove("bg-white", "drop-shadow-md");
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
    console.log(document.readyState)
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
