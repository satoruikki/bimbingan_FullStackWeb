let submitform = document.getElementById('submitform')

// input
let username = document.getElementById('username')
let nama = document.getElementById('nama')
let alamat = document.getElementById('alamat')
let stambuk = document.getElementById('stambuk')
let notelp = document.getElementById('notelp')

// text
let usernametext = document.getElementById('usernametext')
let namatext = document.getElementById('namatext')
let alamattext = document.getElementById('alamattext')
let stambuktext = document.getElementById('stambuktext')
let telpontext = document.getElementById('telpontext')

submitform.addEventListener('submit', function(event) {

    // validasi

    let errorusername = document.getElementById('errorusername')
    let errornama = document.getElementById('errornama')
    let erroralamat = document.getElementById('erroralamat')
    let errorstambuk = document.getElementById('errorstambuk')
    let errortelpon = document.getElementById('errortelpon')

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
    else if (alamat.value.length < 10) {
        erroralamat.innerHTML = 'Alamat minimal 10 karakter'
        valid = false
    }
    else {
        erroralamat.innerHTML = ''
    }

    // validasi stambuk
    if (stambuk.value == '' || stambuk.value == null) {
        errorstambuk.innerHTML = 'Tidak boleh kosong'
        valid = false
    }
    else if (stambuk.value.length > 6) {
        errorstambuk.innerHTML = 'Stambuk maksimal 6 karakter'
        valid = false
    }
    else{
        errorstambuk.innerHTML = ''
    }

    // validasi no telp
    if (notelp.value == '' || notelp.value == null) {
        errortelpon.innerHTML = 'Tidak boleh kosong'
        valid = false
    }
    else if (notelp.value.length < 10) {
        errortelpon.innerHTML = "Nomor telpon minimal 10 karakter"
        valid = false
    }
    else if (notelp.value.length > 13) {
        errortelpon.innerHTML = 'Nomor telpon maksimal 13 karakter'
        valid = false
    }
    else {
        errortelpon.innerHTML = ''
    }

    // jika berhasil atau tidak submit form 

    if (valid){
    usernametext.innerHTML = 'Username : ' + username.value
    namatext.innerHTML = 'Nama : ' + nama.value
    alamattext.innerHTML = 'Alamat : ' + alamat.value
    stambuktext.innerHTML = 'Stambuk : ' + stambuk.value
    telpontext.innerHTML = 'No. Telpon : ' + notelp.value
    }
    else {
        usernametext.innerHTML = 'Username : '
        namatext.innerHTML = 'Nama : '
        alamattext.innerHTML = 'Alamat : '
        stambuktext.innerHTML = 'Stambuk : '
        telpontext.innerHTML = 'No. Telp : '
    }

})