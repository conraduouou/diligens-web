import { HideableElement } from "../../common/hideable_element.js";

const rooms = [];
let currentRoomIndex = 0;

function wrapType(type, index) {
    let toReturn = `<input type="radio" name="type" id="option${index}" ${index === currentRoomIndex ? `checked` : ``}>` +
        `<label for="option${index}" class="dropdown-option text-style-label text-style-weight-medium text-style-size-18">`;

    toReturn += 'Type ' + type;
    return toReturn;
}

function title(str) {
    return str.replace(/(^|\s)\S/g, function (t) { return t.toUpperCase() });
}

async function getRooms() {
    try {
        const response = await fetch('/diligens_web/src/models/get_rooms.php', { method: 'GET' });
        const text = await response.text();
        const result = JSON.parse(text);
        rooms.push(...result.body);
    } catch (error) {
        alert(error + '\n\nThere was an error on our end. Please try again later.');
    }
}

async function submitForm(form) {
    try {
        const formData = new FormData(form);
        let body = '';

        for (const pair of formData.entries()) {
            if (pair[0] == 'type') {
                body += 'room_id' + '=' + (currentRoomIndex + 1) + '&';
            } else {
                body += pair[0] + '=' + pair[1] + '&';
            }
        }

        const request = await fetch('/diligens_web/src/models/create_room_request.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: body
        });
        const response = await request.text();
        const jsonResponse = JSON.parse(response);

        if (jsonResponse.statusCode == 201) {
            sessionStorage.setItem('bookingSuccess', 'true');
            return true;
        } else {
            return false;
        }
    } catch (error) {
        console.error('Error: WHATS???!!', error);
    }
}

function radioBtnOnclick(index) {
    const dropdownButton = document.getElementById('dropdown-button');
    const roomCost = document.getElementById('room-cost');
    const roomCapacity = document.getElementById('room-capacity');
    const roomMedia = document.getElementById('room-media');

    currentRoomIndex = index;
    dropdownButton.innerHTML = 'Type ' + rooms[currentRoomIndex].type;
    roomCost.innerHTML = rooms[currentRoomIndex].cost + ' php/hr';
    roomCapacity.innerHTML = rooms[currentRoomIndex].capacity_min + '-' + rooms[currentRoomIndex].capacity_max + ' people';
    roomMedia.innerHTML = title(rooms[currentRoomIndex].media);
}

function initDropdown() {
    const dropdownButton = document.getElementById('dropdown-button');
    dropdownButton.innerHTML = 'Type ' + rooms[currentRoomIndex].type;

    radioBtnOnclick(currentRoomIndex);

    const dropdownOptions = document.getElementById('dropdown-option-container');
    for (let i = 0; i < rooms.length; i++) {
        let type = rooms[i].type;
        dropdownOptions.innerHTML += wrapType(type, i);
    }

    const radioButtons = document.getElementsByName('type');
    for (let i = 0; i < radioButtons.length; i++) {
        let button = radioButtons[i];
        button.addEventListener('click', () => radioBtnOnclick(i));
    }
}

document.addEventListener('DOMContentLoaded', async function () {
    // retrieve types
    await getRooms();
    initDropdown();

    // hideable elements
    const bookSection = new HideableElement('book-section');
    const modalContainer = new HideableElement('modal-container', 'show-modal', 'no-show-modal');
    modalContainer.element.addEventListener('click', modalContainer.unshow);

    const form = document.getElementById('book-section-form');
    const modalCancel = document.getElementById('modal-cancel');
    const modalSubmit = document.getElementById('modal-submit');

    // because the book section is hidden at first for loading...
    bookSection.show();

    // add listener for when the form is submitted
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        modalContainer.show();
    });

    // dismiss modal when clicking on modal background or cancel
    modalCancel.addEventListener('click', modalContainer.unshow);

    modalSubmit.addEventListener('click', async () => {
        modalContainer.unshow();
        bookSection.unshow();

        const isSuccess = await submitForm(form);

        if (isSuccess) {
            window.location.replace('/diligens_web/index.php');
        } else {
            // show error when not successful
            modalContainer.show();
            bookSection.show();
        }
    });
});

