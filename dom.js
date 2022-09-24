const formTiket = document.getElementById("tiket");
const nama = document.getElementById("nama");
const identitas = document.getElementById("identitas");
const nomorHP = document.getElementById("nomorHP");
const tempatWisata = document.getElementById("tempatWisata");
const tglKunjungan = document.getElementById("tglKunjungan");
const pengunjungDewasa = document.getElementById("pengunjungDewasa");
const pengunjungAnak = document.getElementById("pengunjungAnak");
// const pengunjungLansia = document.getElementById("pengunjungLansia");

const hargaTiket = document.getElementById("hargaTiket");
const hargaTiketTotal = document.getElementById("hargaTiketTotal");
const infoHarga = document.getElementById("infoHarga");

const btnInfoHarga = document.getElementById("btnInfoHarga");
const btnReset = document.getElementById("btnReset");
const detailPemesan = document.getElementById("detailPemesan");

btnInfoHarga.addEventListener("click", (event) => {
  event.preventDefault();
  infoHarga.classList.remove("hidden");
  infoHarga.classList.add(
    "flex",
    "w-6/12",
    "mx-auto",
    "mt-5",
    "items-center",
    "justify-between"
  );
  if (tempatWisata.value == "Tanah Lot") {
    hargaTiket.innerText = "40.000 | 20.000 (Anak)";
    hargaTiketTotal.innerText =
      40 * pengunjungDewasa.value + 20 * pengunjungAnak.value + ".000";
  } else if (tempatWisata.value == "Garuda Wisnu Kencana") {
    hargaTiket.innerText = "70.000 | 35.000 (Anak)";
    hargaTiketTotal.innerText =
      70 * pengunjungDewasa.value + 35 * pengunjungAnak.value + ".000";
  } else if (tempatWisata.value == "Nusa Penida") {
    hargaTiket.innerText = "60.000 | 30.000 (Anak)";
    hargaTiketTotal.innerText =
      60 * pengunjungDewasa.value + 30 * pengunjungAnak.value + ".000";
  } else if (tempatWisata.value == "Pura Lempuyang") {
    hargaTiket.innerText = "20.000 | 10.000 (Anak)";
    hargaTiketTotal.innerText =
      20 * pengunjungDewasa.value + 10 * pengunjungAnak.value + ".000";
  } else if (tempatWisata.value == "Danau Beratan Bedugul") {
    hargaTiket.innerText = "50.000 | 25.000 (Anak)";
    hargaTiketTotal.innerText =
      50 * pengunjungDewasa.value + 25 * pengunjungAnak.value + ".000";
  } else {
    hargaTiket.innerText = "30.000 | 15.000 (Anak)";
    hargaTiketTotal.innerText =
      30 * pengunjungDewasa.value + 15 * pengunjungAnak.value + ".000";
  }
});

function cek() {
  detailPemesan.innerHTML =
    "Nama Pemesan : " +
    nama.value +
    "<br/>" +
    "Nomor Identitas : " +
    identitas.value +
    "<br/>" +
    "No. Hp : " +
    nomorHP.value +
    "<br/>" +
    "Tempat Wisata : " +
    tempatWisata.value +
    "<br/>" +
    "Tanggal Kunjungan : " +
    tglKunjungan.value +
    "<br/>" +
    "Pengunjung Dewasa : " +
    pengunjungDewasa.value +
    " Orang" +
    "<br/>" +
    "Pengunjung Anak : " +
    pengunjungAnak.value +
    " Orang" +
    "<br/>" +
    "Total Bayar : " +
    hargaTiketTotal.innerText;
}
btnReset.addEventListener("click", (e) => {
  e.preventDefault;
  formTiket.reset();
  hargaTiket.innerText = "0.000";
  hargaTiketTotal.innerText = "0.000";
});
