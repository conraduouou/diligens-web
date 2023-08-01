document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const mobile = document.getElementById('mobile').value;
        const company = document.getElementById('company').value;
        const message = document.getElementById('message').value;

        if (!name || !email || !mobile || !company || !message) {
            alert('Please fill in all fields.');
            return;
        }

        submitForm(form, '/diligens_web/src/models/create_message.php');
    });
});

function submitForm(form, action) {
    const formData = new FormData(form);
    let body = '';

    for (const pair of formData.entries()) {
        body += pair[0] + '=' + pair[1] + '&';
    }

    fetch(action, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: body,
    })
        .then(responseData => responseData.text())
        .then(text => {
            const response = JSON.parse(text);
            alert(response.message);
        })
        .catch(error => {
            console.error('Error: WHATS???!! ', error);
        });
}