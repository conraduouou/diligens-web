export class HideableElement {
    constructor(elementId, showClass = 'show', unshowClass = 'no-show') {
        this.element = document.getElementById(elementId);
        this.showClass = showClass;
        this.unshowClass = unshowClass;
    }

    show() {
        this.element.classList.remove(this.unshowClass);
        this.element.classList.add(this.showClass);
    }

    unshow() {
        this.element.classList.remove(this.showClass);
        this.element.classList.add(this.unshowClass);
    }
};