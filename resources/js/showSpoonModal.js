const spoons = Array.from(document.getElementsByClassName('openSpoons'))
const partOfDay = document.querySelector('#inputAfternoon')
const dialog = document.querySelector('.dialogopen')
const cancel = document.querySelector('.cancelBtn')

spoons.forEach(spoon => {
    spoon.addEventListener('click', () => {
        partOfDay.value = spoon.dataset.afternoon
        dialog.showModal()
    }
    )

});

cancel.addEventListener('click', () => {
    dialog.close()
})
