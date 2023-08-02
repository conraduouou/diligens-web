const roomTypes = ['Type A', 'Type B', 'Type C', 'Type D'];
let currentRoomIndex = 0;

function wrapType(type, index) {
    let toReturn = `<input type="radio" name="type" id="option${index}" ${index === currentRoomIndex ? `checked`: ``}>` +
        `<label for="option${index}" class="dropdown-option text-style-label text-style-weight-medium text-style-size-18">`;
    
    toReturn += type;
    return toReturn;
}

document.addEventListener('DOMContentLoaded', function () {
    const dropdownButton = document.getElementById('dropdown-button');
    dropdownButton.innerHTML = roomTypes[currentRoomIndex];

    const dropdownOptions = document.getElementById('dropdown-option-container');
    for (let i = 0; i < roomTypes.length; i++) {
        let type = roomTypes[i];
        dropdownOptions.innerHTML += wrapType(type, i);
    }

    const radioButtons = document.getElementsByName('type');
    for (let i = 0; i < radioButtons.length; i++) {
        let button = radioButtons[i];
        button.addEventListener('click', function() {
            currentRoomIndex = i;
            dropdownButton.innerHTML = roomTypes[currentRoomIndex];
        });
    }
});