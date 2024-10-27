

let input = document.getElementById('formusername')
let hasil = document.getElementById('hasilusername')

input.addEventListener('input', function(){
    hasil.innerHTML = input.value
})

let submitform = document.getElementById('submitform')

// input
let username = document.getElementById('username')
let nama = document.getElementById('nama')
let alamat = document.getElementById('alamat')

// text
let usernametext = document.getElementById('usernametext')
let namatext = document.getElementById('namatext')
let alamattext = document.getElementById('alamattext')

submitform.addEventListener('submit', function(event) {
    // validasi

    let errorusername = document.getElementById('errorusername')
    let errornama = document.getElementById('errornama')
    let erroralamat = document.getElementById('erroralamat')

    event.preventDefault()

    let valid = true 

    // validasi username
    if (username.value == '' || username.value == null) {
        errorusername.innerHTML = 'Username tidak boleh kosong'
        valid = false
    }
    else if (username.value.length < 3) {
        errorusername.innerHTML = 'Username minimal 3 karakter'
        valid = false
    }
    else if (username.value.length > 30) {
        errorusername.innerHTML = 'Username maximal 30 karakter'
    }
    else {
        errorusername.innerHTML = ''
    }

    // validasi nama
    if (nama.value == '' || nama.value == null) {
        errornama.innerHTML = 'Nama tidak boleh kosong'
        valid = false
    }
    else if (nama.value.length < 3) {
        errornama.innerHTML = 'Nama minimal 3 karakter'
        valid = false
    }
    else if (nama.value.length > 30) {
        errornama.innerHTML = 'Nama maksimal 30 karakter'
    }
    else {
        errornama.innerHTML = ''
    }

    // validasi alamat
    if (alamat.value == '' || alamat.value == null) {
        erroralamat.innerHTML = 'Alamat tidak boleh kosong'
        valid = false
    }
    else if(alamat.value.length < 10) {
        erroralamat.innerHTML = 'Alamat minimal 10 karakter'
        valid = false
    }
    else {
        erroralamat.innerHTML = ''
    }

    // jika berhasil atau tidak submit form 

    if  (valid){
    usernametext.innerHTML = 'Username : ' + username.value
    namatext.innerHTML = 'Nama : ' + nama.value
    alamattext.innerHTML = 'Alamat : ' + alamat.value
    }
    else {
        usernametext.innerText = 'Username : '
        namatext.innerText = 'Nama : '
        alamattext.innerText = 'Alamat : '
    }

})