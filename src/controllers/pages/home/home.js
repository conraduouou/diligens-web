document.addEventListener('DOMContentLoaded', function () {
    if (document.cookie.length == 0) {
        return;
    }

    const formResponse = document.cookie.split('=')[1];

    if (formResponse === 'success') {
        const modalContainer = document.getElementById('modal-container');
        const modalSubmit = document.getElementById('modal-submit');

        modalContainer.classList.remove('no-show-modal');
        modalContainer.classList.add('show-modal');

        modalContainer.addEventListener('click', function () {
            modalContainer.classList.remove('show-modal');
            modalContainer.classList.add('no-show-modal');
            document.cookie = 'submit=none';
        })

        modalSubmit.addEventListener('click', function () {
            modalContainer.classList.remove('show-modal');
            modalContainer.classList.add('no-show-modal');
            document.cookie = 'submit=none';
        })
    }
});