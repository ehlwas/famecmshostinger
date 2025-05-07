const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const elements = contactForm.querySelectorAll('input, textarea, select, button');
    elements.forEach(el => {
        el.disabled = true;
    });

    const url = '/api/send-mail.php';

    let form = e.target;
    let formData = new FormData(form);

    formData.append('name', form.name.value);
    formData.append('email', form.email.value);
    formData.append('phone', form.phone.value);
    formData.append('subject', form.subject.value);
    formData.append('message', form.message.value);

    fetch(url, {
        method: 'POST',
        body: formData
    }).then(response => response.json()).then(data => {
        let resultBox = document.getElementById('formResult');
        if (data.success) {
            resultBox.innerHTML = `<div class='text-green-600'>${data.message}</div>`;
        } else {
            resultBox.innerHTML = `<div class='text-red-600'>${data.message}</div>`;
            elements.forEach(el => {
                el.disabled = false;
            });
        }
    }).catch(err => {
        console.error(err);
        elements.forEach(el => {
            el.disabled = false;
        });
    });
});
