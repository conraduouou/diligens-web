import { Modal } from "../../common/modal.js";

document.addEventListener('DOMContentLoaded', function () {
    const toCheckInSession = [
        'bookingSuccess', 'appointmentSuccess'
    ];

    for (const sessionItem of toCheckInSession) {
        let isSuccess = sessionStorage.getItem(sessionItem);
    
        // abort operation if user got to home without booking
        if (isSuccess == null) {
            continue;
        }
    
        if (isSuccess === 'true') {
            const modalContainer = new Modal('modal-home-container');
            const modalSubmit = document.querySelector('#modal-home-container .modal-submit');
    
            modalContainer.element.addEventListener('click', function() {
                // no unshow here since it's already a registered listener in the Modal class
                sessionStorage.removeItem(sessionItem);
            });
            
            modalSubmit.addEventListener('click', function() {
                modalContainer.unshow();
                sessionStorage.removeItem(sessionItem);
            });
            
            modalContainer.show();

            return;
        }
    }
});