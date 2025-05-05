document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');
    const resultBox = document.getElementById('formResult');

    if (!contactForm) return;

    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const elements = contactForm.querySelectorAll('input, textarea, select, button');
        toggleElements(elements, true);

        let form = e.target;
        let formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            showMessage(data.message, data.success ? 'green' : 'red');

            if (!data.success) {
                toggleElements(elements, false);
            }
        } catch (error) {
            console.error('Form submission error:', error);
            showMessage('Something went wrong. Please try again later.', 'red');
            toggleElements(elements, false);
        }
    });

    function toggleElements(elements, disabled) {
        elements.forEach(el => el.disabled = disabled);
    }

    function showMessage(message, color) {
        resultBox.innerHTML = `<div class='text-${color}-600'>${message}</div>`;
    }
});
