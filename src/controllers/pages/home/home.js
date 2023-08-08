import { HideableElement } from "../../common/hideable_element.js";

document.addEventListener('DOMContentLoaded', function () {
    const toCheckInSession = [
        'bookingSuccess', 'appointmentSuccess'
    ];

    for (const sessionItem in toCheckInSession) {
        let isSuccess = sessionStorage.getItem(sessionItem);
    
        // abort operation if user got to home without booking
        if (isSuccess == null) {
            continue;
        }
    
        if (isSuccess === 'true') {
            const modalContainer = new HideableElement('modal-container', 'show-modal', 'no-show-modal');
            const modalSubmit = document.getElementById('modal-submit');
    
            modalContainer.show();
    
            modalContainer.element.addEventListener('click', function() {
                modalContainer.unshow();
                sessionStorage.removeItem('bookingSuccess');
            });
    
            modalSubmit.addEventListener('click', function() {
                modalContainer.unshow();
                sessionStorage.removeItem('bookingSuccess');
            });
            
            return;
        }
    }
});