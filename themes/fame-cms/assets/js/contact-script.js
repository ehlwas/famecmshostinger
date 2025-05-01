const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', function(e) {
    e.preventDefault();

    let form = e.target;
    let formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    }).then(response => response.json()).then(data => {
        let resultBox = document.getElementById('formResult');
        if (data.success) {
            resultBox.innerHTML = `<div class='text-green-600'>${data.message}</div>`;
            contactForm.style.display = 'none';
        } else {
            resultBox.innerHTML = `<div class='text-red-600'>${data.message}</div>`;
        }
    }).catch(err => {
        console.error(err);
    });
});