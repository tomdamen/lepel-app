const spoons = Array.from(document.getElementsByClassName('openSpoons'))
const partOfDay = document.querySelector('#inputPartOfDay')
const dialog = document.querySelector('.dialogopen')
const cancel = document.querySelector('.cancelBtn')

spoons.forEach(spoon => {
    console.log(partOfDay)
    spoon.addEventListener('click', () => {
        dialog.showModal()
        partOfDay.value = spoon.dataset.partOfDay
    }
    )

});

cancel.addEventListener('click', () => {
    dialog.close()
})
