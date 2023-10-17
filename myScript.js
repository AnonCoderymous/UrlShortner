"use strict";

const urlBox = document.querySelector("input[name=url]"),
shortButton = document.querySelector("button"),
status = document.querySelector("div.status"),
urlRegex = /^(https?|ftp):\/\/(([a-z\d]([a-z\d-]*[a-z\d])?\.)+[a-z]{2,}|localhost)(\/[-a-z\d%_.~+]*)*(\?[;&a-z\d%_.~+=-]*)?(\#[-a-z\d_]*)?$/i,
protocol = window.location.protocol,
forwordSlashes = "//",
host = window.location.hostname,
path = window.location.pathname,
questionMark = "?",
fullUrl = protocol + forwordSlashes + host + path + questionMark;

shortButton.addEventListener('click', () => {

	if(urlBox.value.length !== 0 && urlBox.value !== "") {

		if(urlRegex.test(urlBox.value)) {
			
			const xhr = new XMLHttpRequest();
			xhr.open("POST", "shortner", true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send("url="+urlBox.value);

			xhr.onload = () => {
				if(xhr.response !== 1) {
					status.innerHTML = "Your short url: <u>" + fullUrl + xhr.response + "</u>";
					status.style.display = "block";
					status.style.visibility = "visible";
				}
			}

			xhr.onerror = () => {
				alert('Error occured. Check your connection.');
			}

		} else {
			alert("Please enter a correct URL. Example: https://www.google.com");
		}

	} else {

		urlBox.focus();
		urlBox.style.border="1px solid red";
		return;

	}

});