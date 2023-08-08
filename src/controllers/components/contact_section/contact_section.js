import { HideableElement } from "../../common/hideable_element.js";

async function submitForm(form, action) {
    try {
        const formData = new FormData(form);
        let body = '';
    
        for (const pair of formData.entries()) {
            body += pair[0] + '=' + pair[1] + '&';
        }
    
        const request = await fetch(action, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: body,
        })
        const response = await request.text();
        const jsonResponse = JSON.parse(response);
        
        if (jsonResponse.statusCode == 201) {
            sessionStorage.setItem('appointmentSuccess', 'true');
            return true;
        } else {
            return false;
        }
    } catch (error) {
        console.error('Error: WHATS???!!', error);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');

    form.addEventListener('submit', async function (event) {
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

        await submitForm(form, '/diligens_web/src/models/create_message.php');
    });
});