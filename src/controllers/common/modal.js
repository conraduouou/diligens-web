import { HideableElement } from "./hideable_element.js";

export class Modal extends HideableElement {
    constructor(elementId, showClass = 'show', unshowClass = 'no-show') {
        super(elementId, showClass, unshowClass);
        this.element.addEventListener('click', () => this.unshow());
    }
}

export function wrapTextInButton(buttonText, isSubmit) {
    return `<button 
    id="${isSubmit ? "modal-submit" : "modal-cancel"}"
    class="${isSubmit ? "modal-submit" : "modal-cancel"}">
    ${buttonText}
    </button>`;
}

export function setModalTitle(text) {
    const modalTitle = document.getElementById('modal-title');
    modalTitle.innerHTML = text;
}

export function setModalMainContent(text) {
    const modalContentMain = document.getElementById('modal-content-main');
    modalContentMain.innerHTML = text;
}

export function setModalSubContent(text) {
    const modalContentSub = document.getElementById('modal-content-sub');
    modalContentSub.innerHTML = text;
}

export function setModalButtonContainer(text) {
    const modalButtonContainer = document.getElementById('modal-button-container');
    modalButtonContainer.innerHTML = text;
}

export function setErrorModalButton(text = 'Go back') {
    const modalContainer = new Modal('modal-container');
    const modalButtonContainer = document.getElementById('modal-button-container');
    modalButtonContainer.innerHTML = wrapTextInButton(text, true);

    const modalSubmit = document.getElementById('modal-submit');
    modalSubmit.addEventListener('click', () => modalContainer.unshow());
}