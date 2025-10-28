/* Inisialisasi Variabel*/
function tampilkanHasil() {
  var nama = document.getElementById("nama").value;
  var usia = document.getElementById("usia").value;
  var alamat = document.getElementById("alamat").value;
  var tanggalLahir = document.getElementById("tanggalLahir").value;
  var email = document.getElementById("email").value;
  var kodeMimpi = document.getElementById("kodeMimpi").value;
  var jenisKelamin = document.getElementById("jenisKelamin").value;

  /* Menampilkan Hasil*/
  var hasil = "Data korban selanjutnya :<br>";
  hasil += "Nama: " + nama + "<br>";
  hasil += "Usia: " + usia + "<br>";
  hasil += "Alamat: " + alamat + "<br>";
  hasil += "Tanggal Lahir: " + tanggalLahir + "<br>";
  hasil += "Email: " + email + "<br>";
  hasil += "Kode Mimpi: " + kodeMimpi + "<br>";
  hasil += "Jenis Kelamin: " + jenisKelamin + "<br>";

  document.getElementById("hasil").innerHTML = hasil;

  /* Menampilkan Alert */
  alert("Anda korban selanjutnya");
}
