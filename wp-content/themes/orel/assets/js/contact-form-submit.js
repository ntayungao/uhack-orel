document.addEventListener("DOMContentLoaded", async () => {
	await flashAlert();
});

async function flashAlert()
{
	if(isContactFormSuccess())
	{
		if(!isPageReloaded())
		{
			triggerAlert();
			await sleep(2000);
			hideAlert();
		}
	}
}


function isContactFormSuccess()
{
	return window.location.hash === "#contactFormSection";
}
function triggerAlert()
{
	const alert = document.getElementById("contactFormSuccessAlert");
	alert.classList.remove("d-none");
}
function hideAlert()
{
	const alert = document.getElementById("contactFormSuccessAlert");
	fadeOutEffect(alert);
}

function fadeOutEffect(fadeTarget)
{
	const fadeEffect = setInterval(() => {
		if (!fadeTarget.style.opacity) {
			fadeTarget.style.opacity = 1;
		}
		if (fadeTarget.style.opacity > 0) {
			fadeTarget.style.opacity -= 0.1;
		} else {
			clearInterval(fadeEffect);
		}
	}, 200);
}

