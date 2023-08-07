export class HideableElement {
    constructor(elementId, showClass = 'show', unshowClass = 'no-show') {
        this.element = document.getElementById(elementId);
        this.show = function () {
            this.element.classList.remove(unshowClass);
            this.element.classList.add(showClass);
        };
        this.unshow = function () {
            this.element.classList.remove(showClass);
            this.element.classList.add(unshowClass);
        };
    }
};