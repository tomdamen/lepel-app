const toggleBtn = Array.from(document.getElementsByClassName('openThisModal'))
const dialog = document.querySelector('.editDialog')
const cancel = document.querySelector('.editCancelBtn')
const editLepelId = document.querySelector('#editLepelId')
const editLepelDescription = document.querySelector('#editLepelDescription')

toggleBtn.forEach(element => {
    element.addEventListener('click', () => {
        dialog.showModal()
        editLepelId.value = element.dataset.lepel_id
        editLepelDescription.value = element.dataset.lepel_description
    })
});


cancel.addEventListener('click', () => {
    dialog.close()
})
