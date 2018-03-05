import { Controller } from "stimulus"

export default class extends Controller {
    static targets = [ "name", "output" ]

    greet() {
    this.outputTarget.textContent =
        `Hello, ${this.nameTarget.value}!`
    }

    // Example to load external content into view
    // connect() {
    //     this.load()
    // }

    // load() {
    //     fetch(this.data.get("url"))
    //         .then(response => response.text())
    //         .then(html => {
    //             this.element.innerHTML = html
    //         })
    // }
}