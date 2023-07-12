const trigger = document.getElementById('dropdown')
const dropdownContent = document.getElementById('dropdown-content')
const dropdown = document.getElementById('dropdown')


trigger.addEventListener('click', () => {
    dropdown.toggleAttribute("data-active")
})
