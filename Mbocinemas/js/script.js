// Helperfunctie om formuliergegevens op te slaan in localStorage
function saveFormDataToLocalStorage(formId) {
    const form = document.getElementById(formId);
    const formData = {};

    Array.from(form.elements).forEach((element) => {
        if (element.name) {
            formData[element.name] = element.value;
        }
    });

    localStorage.setItem(formId, JSON.stringify(formData));
}

// Helperfunctie om formuliergegevens uit localStorage te herstellen
function restoreFormDataFromLocalStorage(formId) {
    const savedData = localStorage.getItem(formId);

    if (savedData) {
        const formData = JSON.parse(savedData);
        const form = document.getElementById(formId);

        Object.keys(formData).forEach((name) => {
            const element = form.elements[name];
            if (element) {
                element.value = formData[name];
            }
        });
    }
}

// Validatiefunctie om velden te controleren
function validateField(field) {
    const errorElement = field.nextElementSibling;

    if (field.required && !field.value.trim()) {
        errorElement.textContent = `${field.name} is verplicht.`;
        return false;
    }

    if (field.type === "email" && field.value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(field.value)) {
            errorElement.textContent = "Voer een geldig e-mailadres in.";
            return false;
        }
    }

    errorElement.textContent = "";
    return true;
}

// Validatie bij typen
function setupLiveValidation(formId) {
    const form = document.getElementById(formId);

    Array.from(form.elements).forEach((element) => {
        if (element.name) {
            const errorElement = document.createElement("div");
            errorElement.classList.add("error-message");
            element.insertAdjacentElement("afterend", errorElement);

            element.addEventListener("input", () => {
                validateField(element);
                saveFormDataToLocalStorage(formId);
            });
        }
    });
}

// Validatie bij submit
function setupSubmitValidation(formId, phpEndpoint) {
    const form = document.getElementById(formId);

    form.addEventListener("submit", (event) => {
        event.preventDefault();

        let isValid = true;
        Array.from(form.elements).forEach((element) => {
            if (element.name) {
                if (!validateField(element)) {
                    isValid = false;
                }
            }
        });

        if (isValid) {
            // Verzenden naar PHP via fetch
            const formData = new FormData(form);

            fetch(phpEndpoint, {
                method: "POST",
                body: formData,
            })
                .then((response) => {
                    if (!response.ok) {
                        throw new Error("Formulier verzenden mislukt.");
                    }
                    return response.text();
                })
                .then((data) => {
                    console.log("Succes:", data);
                    localStorage.removeItem(formId); // Verwijder gegevens bij succes
                    form.reset();
                })
                .catch((error) => {
                    console.error("Fout:", error);
                });
        } else {
            console.log("Formulier bevat fouten en is niet verzonden.");
        }
    });
}

// Setup alle formulieren
function setupFormHandling(formId, phpEndpoint) {
    restoreFormDataFromLocalStorage(formId);
    setupLiveValidation(formId);
    setupSubmitValidation(formId, phpEndpoint);
}

// Specifieke formulieren instellen
setupFormHandling("loginForm", "/processLogin.php");
setupFormHandling("registerForm", "/processRegister.php");
setupFormHandling("addMovieForm", "/addMovie.php");
setupFormHandling("editMovieForm", "/editMovie.php");
