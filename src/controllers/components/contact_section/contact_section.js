import { HideableElement } from "../../common/hideable_element.js";
import * as modal from "../../common/modal.js";

function checkUnfilled(container) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const mobile = document.getElementById('mobile').value;
    const company = document.getElementById('company').value;
    const message = document.getElementById('message').value;

    if (!name || !email || !mobile || !company || !message) {
        modal.setModalTitle('Incomplete details');
        modal.setModalMainContent('Please fill all required input fields.');
        modal.setErrorModalButton();

        return true;
    }
}

async function submitForm(form) {
    try {
        const formData = new FormData(form);
        let body = '';

        for (const pair of formData.entries()) {
            body += pair[0] + '=' + pair[1] + '&';
        }

        const request = await fetch('diligens/web/src/models/create_message.php', {
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
            alert(jsonResponse);
            return false;
        }
    } catch (error) {
        console.error('Error: WHATS???!!', error);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const form = new HideableElement('contact-form');
    const modalContainer = new modal.Modal('modal-container');

    form.element.addEventListener('submit', async function (event) {
        event.preventDefault();

        if (checkUnfilled(modalContainer)) {
            modalContainer.show();
            return;
        }

        // set modal UI
        modal.setModalTitle('Submit appointment request');
        modal.setModalMainContent('Are you sure that the details you entered are accurate?');
        modal.setModalSubContent(
            `Diligens Inc. complies with Republic Act 10173 Data Privacy Act of 2012.
                <br>
                <br>
                You cannot undo this action once submitted`
        );

        // generate buttons HTML
        let buttons = '';
        for (let i = 0; i < 2; i++) {
            buttons += modal.wrapTextInButton(
                i == 0 ? 'Cancel' : 'Yes',
                i == 1,
            );
        }

        // set buttons UI
        modal.setModalButtonContainer(buttons);

        // register listener for cancel button
        const modalCancel = document.getElementById('modal-cancel');
        modalCancel.addEventListener('click', () => modalContainer.unshow());

        // register listener for submit button
        const modalSubmit = document.getElementById('modal-submit');
        modalSubmit.addEventListener('click', async () => {
            form.unshow();
            modalContainer.unshow();

            const isSuccess = await submitForm(form.element);

            if (isSuccess) {
                window.location.replace('diligens_web/index.php');
            } else {
                modal.setModalTitle('Error');
                modal.setModalMainContent('There was an error making this request.');
                modal.setModalSubContent('There was an unexpected error on our end. Please try again later.');
                modal.setErrorModalButton();

                modalContainer.show();
                form.show();
            }
        });

        // finally show the modal
        modalContainer.show();
    });

});