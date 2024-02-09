import 'dart:io';

// Entry point
void main() {
  // Input
  stdout.write('Jesika: ');
  String nama = stdin.readLineSync()!;

  // Output
  final String welcomeMessage = 'Halo, $nama! Welcome.';
  print(welcomeMessage);

  // Variable dan Tipe Data
  int umur = 17;
  double tinggi = 160.5;
  bool sudahMenikah = false;
  String status = 'Student';

  print('Umur: $umur tahun');
  print('Tinggi: $tinggi cm');
  print('Status: $status');
  print('Sudah Menikah: $sudahMenikah');

  // Operator Aritmatika
  int bil1 = 10;
  int bil2 = 5;
  int hasilTambah = bil1 + bil2;
  int hasilKurang = bil1 - bil2;
  int hasilKali = bil1 * bil2;
  double hasilBagi = bil1 / bil2;

  print('Penjumlahan: $hasilTambah');
  print('Pengurangan: $hasilKurang');
  print('Perkalian: $hasilKali');
  print('Pembagian: $hasilBagi');

  // Operator Pembanding
  bool lebihBesar = bil1 > bil2;
  bool samaDengan = bil1 == bil2;
  bool tidakSama = bil1 != bil2;

  print('Lebih Besar: $lebihBesar');
  print('Sama Dengan: $samaDengan');
  print('Tidak Sama: $tidakSama');

  // Percabangan
  int usia = 25;

  if (usia >= 18) {
    print('Anda sudah dewasa');
  } else if (usia >= 13 && usia < 18) {
    print('Anda masih remaja');
  } else {
    print('Anda masih anak-anak');
  }

  switch (usia) {
    case 18:
      print('Anda baru saja berusia dewasa');
      break;
    case 19:
    case 20:
    case 21:
      print('Anda belum tua');
      break;
    default:
      print('Anda berusia $usia tahun');
  }

  // Perulangan
  for (int i = 0; i <= 10; i += 2) {
    print(i);
  }

  int j = 0;
  while (j < 10) {
    print(j);
    j += 2;
  }

  int k = 0;
  do {
    print(k);
    k += 2;
  } while (k < 10);

  List<String> names = ["Bunga", "Hanhan", "Dimas", "Asti"];
  for (var name in names) {
    print(name);
  }

  // Memanggil fungsi hitungLuasPersegi  
  int luas = hitungLuasPersegi(4);
  print('Luas persegi dengan sisi 4 adalah $luas');
}

// Fungsi dengan Parameter untuk menghitung luas persegi
int hitungLuasPersegi(int sisi) {
  int luas = sisi * sisi;
  return luas;
}
