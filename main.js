const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

// Entry point
function main() {
  // Input
  rl.question('Jesika: ', function(nama) {
    // Output
    const welcomeMessage = `Halo, ${nama}! Welcome.`;
    console.log(welcomeMessage);

    // Variable dan Tipe Data
    const umur = 17;
    const tinggi = 160.5;
    const sudahMenikah = false;
    const status = 'Student';

    console.log(`Umur: ${umur} tahun`);
    console.log(`Tinggi: ${tinggi} cm`);
    console.log(`Status: ${status}`);
    console.log(`Sudah Menikah: ${sudahMenikah}`);

    // Operator Aritmatika
    const bil1 = 10;
    const bil2 = 5;
    const hasilTambah = bil1 + bil2;
    const hasilKurang = bil1 - bil2;
    const hasilKali = bil1 * bil2;
    const hasilBagi = bil1 / bil2;

    console.log(`Penjumlahan: ${hasilTambah}`);
    console.log(`Pengurangan: ${hasilKurang}`);
    console.log(`Perkalian: ${hasilKali}`);
    console.log(`Pembagian: ${hasilBagi}`);

    // Operator Pembanding
    const lebihBesar = bil1 > bil2;
    const samaDengan = bil1 === bil2;
    const tidakSama = bil1 !== bil2;

    console.log(`Lebih Besar: ${lebihBesar}`);
    console.log(`Sama Dengan: ${samaDengan}`);
    console.log(`Tidak Sama: ${tidakSama}`);

    // Percabangan
    const usia = 25;

    if (usia >= 18) {
      console.log('Anda sudah dewasa');
    } else if (usia >= 13 && usia < 18) {
      console.log('Anda masih remaja');
    } else {
      console.log('Anda masih anak-anak');
    }

    switch (usia) {
      case 18:
        console.log('Anda baru saja berusia dewasa');
        break;
      case 19:
      case 20:
      case 21:
        console.log('Anda belum tua');
        break;
      default:
        console.log(`Anda berusia ${usia} tahun`);
    }

    // Perulangan
    for (let i = 0; i <= 10; i += 2) {
      console.log(i);
    }

    let j = 0;
    while (j < 10) {
      console.log(j);
      j += 2;
    }

    let k = 0;
    do {
      console.log(k);
      k += 2;
    } while (k < 10);

    const names = ["Bunga", "Hanhan", "Dimas", "Asti"];
    names.forEach(name => console.log(name));

    // Memanggil fungsi hitungLuasPersegi  
    const luas = hitungLuasPersegi(4);
    console.log(`Luas persegi dengan sisi 4 adalah ${luas}`);

    rl.close();
  });
}

// Fungsi dengan Parameter untuk menghitung luas persegi
function hitungLuasPersegi(sisi) {
  const luas = sisi * sisi;
  return luas;
}

main();
