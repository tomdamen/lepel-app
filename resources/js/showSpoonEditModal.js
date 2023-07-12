const toggleBtn = Array.from(document.getElementsByClassName('openThisModal'))
const dialog = document.querySelector('.editDialog')
const cancel = document.querySelector('.editCancelBtn')
const editSpoonId = document.querySelector('#editSpoonId')
const editSpoonDescription = document.querySelector('#editSpoonDescription')
const partOfDay = document.querySelector('#part_of_day')
const editPrivate = document.querySelector('#private_activity')

toggleBtn.forEach(element => {
    element.addEventListener('click', () => {
        dialog.showModal()
        editSpoonId.value = element.dataset.spoon_id
        editSpoonDescription.value = element.dataset.spoon_description
        partOfDay.value = element.dataset.partOfDay
        editPrivate.value = element.dataset.private_activity
    })
});


cancel.addEventListener('click', () => {
    dialog.close()
})
