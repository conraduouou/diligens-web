export class HideableElement {
    constructor(elementId, showClass = 'show', unshowClass = 'no-show') {
        this.element = document.getElementById(elementId);
        this.show = () => {
            this.element.classList.remove(unshowClass);
            this.element.classList.add(showClass);
        };
        this.unshow = () => {
            this.element.classList.remove(showClass);
            this.element.classList.add(unshowClass);
        };
    }
};