const getDate = new Date();
const getYear = getDate.getFullYear();
const getMonth = (getDate.getMonth() + 1).toString().padStart(2, "0");
const getDay = getDate.getDate().toString().padStart(2, "0");

const tanggal = `${getYear}/${getMonth}/${getDay}`;
// let tanggal
function getJadwal() {
    fetch(`https://api.myquran.com/v2/sholat/jadwal/1206/${tanggal}`)
        .then((response) => response.json())
        .then(function (data) {
            const jadwal = data.data.jadwal.data;
            document.getElementById("imsak").textContent =
                data.data.jadwal.imsak;
            document.getElementById("subuh").textContent =
                data.data.jadwal.subuh;
            document.getElementById("terbit").textContent =
                data.data.jadwal.terbit;
            document.getElementById("dhuha").textContent =
                data.data.jadwal.dhuha;
            document.getElementById("dzuhur").textContent =
                data.data.jadwal.dzuhur;
            document.getElementById("ashar").textContent =
                data.data.jadwal.ashar;
            document.getElementById("maghrib").textContent =
                data.data.jadwal.maghrib;
            document.getElementById("isya").textContent = data.data.jadwal.isya;
            document.getElementById("tanggal").textContent =
                data.data.jadwal.tanggal;
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        });
}
getJadwal();
