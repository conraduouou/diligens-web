const rooms = [];
let currentRoomIndex = 0;

function wrapType(type, index) {
    let toReturn = `<input type="radio" name="type" id="option${index}" ${index === currentRoomIndex ? `checked` : ``}>` +
        `<label for="option${index}" class="dropdown-option text-style-label text-style-weight-medium text-style-size-18">`;

    toReturn += 'Type ' + type;
    return toReturn;
}

async function getRooms() {
    const response = await fetch('/diligens_web/src/models/get_rooms.php', { method: 'GET' });
    const text = await response.text();
    const result = JSON.parse(text);
    rooms.push(...result.body);
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

document.addEventListener('DOMContentLoaded', async function () {
    // retrieve types
    await getRooms();

    const dropdownButton = document.getElementById('dropdown-button');
    dropdownButton.innerHTML = 'Type ' + rooms[currentRoomIndex].type;

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
    form.addEventListener('submit', function (event) {
        event.preventDefault();

    });
});

