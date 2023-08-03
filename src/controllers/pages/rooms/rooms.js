const rooms = [];
let currentRoomIndex = 0;

function wrapType(type, index) {
    let toReturn = `<input type="radio" name="type" id="option${index}" ${index === currentRoomIndex ? `checked` : ``}>` +
        `<label for="option${index}" class="dropdown-option text-style-label text-style-weight-medium text-style-size-18">`;

    toReturn += 'Type ' + type;
    return toReturn;
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

function title(str) {
    return str.replace(/(^|\s)\S/g, function (t) { return t.toUpperCase() });
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

async function submitForm(event, form) {
    const formData = new FormData(form);
    let body = '';

    for (const pair of formData.entries()) {
        if (pair[0] == 'type') {
            body += 'room_id' + '=' + (currentRoomIndex + 1) + '&';
        } else {
            body += pair[0] + '=' + pair[1] + '&';
        }
    }

    try {
        const request = await fetch('/diligens_web/src/models/create_room_request.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: body
        });
        const response = await request.text();
        const jsonResponse = JSON.parse(response);
    } catch (error) {
        console.error('Error: WHATS???!!', error);
    }
}

document.addEventListener('DOMContentLoaded', async function () {
    // retrieve types
    await getRooms();

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

    const bookSection = document.getElementById('book-section');
    bookSection.classList.remove('no-show');
    bookSection.classList.add('show');

    // add listener for when the form is submitted
    const form = document.getElementById('book-section-form');
    const modalContainer = document.getElementById('modal-container');
    const modalCancel = document.getElementById('modal-cancel');
    const modalSubmit = document.getElementById('modal-submit');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        modalContainer.classList.remove('no-show-modal')
        modalContainer.classList.add('show-modal');
    });

    modalContainer.addEventListener('click', function() {
        modalContainer.classList.remove('show-modal');
        modalContainer.classList.add('no-show-modal');
    })

    modalCancel.addEventListener('click', function() {
        modalContainer.classList.remove('show-modal');
        modalContainer.classList.add('no-show-modal');
    })

    modalSubmit.addEventListener('click', () => submitForm(form));
});

