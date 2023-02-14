const closeMenuBtn = document.getElementById("close-menu-btn");
const openMenuBtn = document.getElementById("open-menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const header = document.getElementById("header");
const btnSendMsg = document.getElementById("send-message");
const msgsContainer = document.getElementById("messages-container");
const inputMessage = document.getElementById("message-value");

function onLoad() {
	const location = window.location.pathname;
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

    msgsContainer.scrollTo(0, msgsContainer.scrollHeight)
}

document.onreadystatechange = function () {
	if (document.readyState !== "complete") {
		document.querySelector("#content").classList.add("hidden");
		document.querySelector("#loader").classList.remove("hidden");
	} else {
		setTimeout(() => {
			document.querySelector("#loader").classList.add("hidden");
			document.querySelector("#content").classList.remove("hidden");
		}, 2000);
	}
};

const sendMessage = () => {
    if (inputMessage.value !== "") {
        const mainContainer = document.createElement("div");
        mainContainer.classList.add(
            "col-start-6",
            "col-end-13",
            "p-3",
            "rounded-lg"
        );
        const container = document.createElement("div");
        container.classList.add(
            "flex",
            "items-center",
            "justify-start",
            "flex-row-reverse"
        );
        const avatar = document.createElement("div");
        avatar.classList.add(
            "flex",
            "items-center",
            "justify-center",
            "h-10",
            "w-10",
            "rounded-full",
            "bg-blue-300",
            "flex-shrink-0"
        );
        avatar.innerHTML = "B";
        const messageCon = document.createElement("div");
        messageCon.classList.add(
            "relative",
            "mr-3",
            "text-sm",
            "bg-indigo-100",
            "py-2",
            "px-4",
            "shadow",
            "rounded-xl"
        );
        const msgValue = document.createElement("div");
    
        msgValue.innerHTML = inputMessage.value;
    
        messageCon.appendChild(msgValue);
        container.appendChild(avatar);
        container.appendChild(messageCon);
        mainContainer.appendChild(container);
        msgsContainer.appendChild(mainContainer);

        msgsContainer.scrollTo(0, msgsContainer.scrollHeight)
        inputMessage.value = ""
    }
}

btnSendMsg.addEventListener("click", sendMessage);
inputMessage.addEventListener("keydown", (e) => e.key === "Enter" && sendMessage());

onLoad();
