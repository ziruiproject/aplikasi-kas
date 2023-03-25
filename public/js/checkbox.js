let checkedArray = []
// Mengambill checkbox setiap siswa
let checkboxes = document.querySelectorAll('#student')
// Mengambil checkbox 'Semua siswa'
const selectAll = document.querySelectorAll('#all')

for (let checkbox of checkboxes) {
    checkbox.addEventListener('click', function () {
        if (this.checked) {
            checkedArray.push(this.value)
        } else {
            checkedArray = checkedArray.filter(e => e !== this.value)
            selectAll[0].checked = false
        }
        if (checkedArray.length === 35) {
            selectAll[0].checked = true
        }
    })
}
// Jika pilih semua di centang maka, semua checkbox dicentang dan sebaliknya
selectAll[0].addEventListener('change', function () {
    checkedArray = []
    if (this.checked) {
        checkboxes.forEach(i => {
            i.checked = true
            checkedArray.push(i.value)
        })
    } else {
        checkboxes.forEach(i => {
            i.checked = false
            checkedArray.filter(e => e !== i.value)
        })
    }
})

// Membuat Cookie
let submit = document.getElementById('#submit');
submit.addEventListener('click', function () {
    document.cookie = "students=" + checkedArray.join()
})
