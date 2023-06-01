const lepel = document.querySelector('.openLepels')
const dialog = document.querySelector('.dialogopen')
const cancel = document.querySelector('.cancelBtn')

console.log(lepel)

lepel.addEventListener('click', () =>
    dialog.showModal()
)

cancel.addEventListener('click', () => {
    dialog.close()
})
