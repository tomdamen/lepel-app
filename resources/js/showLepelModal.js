const lepels = Array.from(document.getElementsByClassName('openLepels'))
const partOfDay = document.querySelector('#inputAfternoon')
const dialog = document.querySelector('.dialogopen')
const cancel = document.querySelector('.cancelBtn')
console.log(lepels)

lepels.forEach(lepel => {
    lepel.addEventListener('click', () => {
        partOfDay.value = lepel.dataset.afternoon
        dialog.showModal()
    }
    )

});

cancel.addEventListener('click', () => {
    dialog.close()
})
