const toggleBtn = Array.from(document.getElementsByClassName('openThisModal'))
const dialog = document.querySelector('.editDialog')
const cancel = document.querySelector('.editCancelBtn')
const editSpoonId = document.querySelector('#editSpoonId')
const editSpoonDescription = document.querySelector('#editSpoonDescription')

toggleBtn.forEach(element => {
    element.addEventListener('click', () => {
        dialog.showModal()
        editSpoonId.value = element.dataset.spoon_id
        editSpoonDescription.value = element.dataset.spoon_description
    })
});


cancel.addEventListener('click', () => {
    dialog.close()
})
