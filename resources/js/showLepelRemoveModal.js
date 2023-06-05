const toggleBtn = Array.from(document.getElementsByClassName('openThisModal'))
const dialog = document.querySelector('.removeDialog')
const cancel = document.querySelector('.removeCancelBtn')
const teVerwijderenLepel = document.querySelector('#lepelTeVerwijderen')

// console.log(toggleBtn)

toggleBtn.forEach(element => {
    console.log(element)
    element.addEventListener('click', () => {
        dialog.showModal()
        teVerwijderenLepel.value = element.dataset.lepel_id
    })
});


cancel.addEventListener('click', () => {
    dialog.close()
})
