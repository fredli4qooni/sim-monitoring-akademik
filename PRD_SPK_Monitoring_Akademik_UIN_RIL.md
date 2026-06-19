**PRODUCT REQUIREMENTS DOCUMENT**

Sistem Pendukung Keputusan

Monitoring Kinerja Akademik & Prediksi Kelulusan Mahasiswa

|  |  |
| --- | --- |
| **Nama Proyek** | SPK Monitoring Kinerja Akademik UIN RIL |
| **Klien / Stakeholder** | Program Studi Sistem Informasi, UIN Raden Intan Lampung |
| **Versi Dokumen** | 1.0 |
| **Tanggal Dibuat** | 15 Juni 2026 |
| **Dibuat Oleh** | Product Manager |
| **Status** | Draft — Review Klien |

**Tech Stack**

Laravel • MySQL • Tailwind CSS

Metode Pengembangan: Scrum | Algoritma ML: Decision Tree (C4.5)

# **1. Ringkasan Eksekutif**

**Apa masalah yang ingin diselesaikan?**

Program Studi Sistem Informasi UIN Raden Intan Lampung saat ini menggunakan sistem yang ada (SISPO/SIAKAD) hanya untuk menyimpan dan menampilkan data akademik seperti nilai, KRS, dan KHS. Sistem yang ada belum mampu membantu prodi dalam:

* Memantau kinerja akademik mahasiswa secara aktif dan terpusat
* Mendeteksi secara dini mahasiswa yang berisiko tidak lulus tepat waktu
* Menganalisis faktor-faktor yang memengaruhi keterlambatan kelulusan
* Mengambil keputusan akademik berbasis data yang akurat dan real-time

**Solusi yang Dibangun**

Kami akan membangun sebuah Sistem Pendukung Keputusan (SPK) berbasis web yang terintegrasi dengan data akademik maupun non-akademik mahasiswa. Sistem ini menggunakan algoritma Decision Tree (C4.5) untuk memprediksi tingkat kelulusan mahasiswa dan menyajikan hasilnya secara real-time melalui dashboard yang mudah dipahami — termasuk bagi pengguna yang tidak memiliki latar belakang IT.

**Nilai Tambah Utama**

* Dashboard real-time: perubahan data langsung memperbarui status risiko dan prediksi
* Prediksi otomatis berbasis AI (Decision Tree C4.5) — tidak perlu analisis manual
* Deteksi dini: identifikasi mahasiswa berisiko terlambat lulus sejak semester awal
* Laporan siap cetak untuk kebutuhan administrasi prodi
* Antarmuka sederhana — dirancang untuk pengguna non-teknis

# **2. Latar Belakang & Konteks Proyek**

## **2.1 Informasi Institusi**

|  |  |
| --- | --- |
| **Institusi** | Universitas Islam Negeri Raden Intan Lampung (UIN RIL) |
| **Unit** | Program Studi Sistem Informasi, Fakultas Sains dan Teknologi |
| **Jumlah Mahasiswa Aktif** | ± 170 mahasiswa (data referensi: Angkatan 2020–2022) |
| **Data Latih Model** | Angkatan 2020 & 2021 (historis) |
| **Target Prediksi** | Angkatan 2022 (implementasi awal) |

## **2.2 Permasalahan yang Diidentifikasi**

Berdasarkan observasi dan wawancara dengan pihak akademik, berikut permasalahan utama yang ditemukan:

1. Tidak ada sistem monitoring aktif — prodi baru mengetahui masalah akademik mahasiswa ketika sudah melewati batas waktu studi.
2. Data akademik tersebar — nilai, IPS, IPK tersimpan di SIAKAD namun tidak dianalisis untuk keperluan prediksi atau deteksi dini.
3. Tidak ada indikator risiko kelulusan — tidak ada penanda visual yang memberi tahu prodi bahwa seorang mahasiswa berisiko terlambat lulus.
4. Faktor non-akademik diabaikan — kondisi ekonomi, keaktifan organisasi, dan asal sekolah mahasiswa belum pernah dipertimbangkan dalam proses evaluasi.
5. Proses pengambilan keputusan lambat — tanpa data terintegrasi, keputusan akademik bergantung pada intuisi bukan data.

## **2.3 Mengapa Solusi Ini?**

Penelitian menunjukkan bahwa algoritma Decision Tree (khususnya C4.5) efektif untuk prediksi kelulusan mahasiswa karena:

* Menghasilkan aturan if-then yang mudah dipahami (transparan, tidak black box)
* Akurasi tinggi pada dataset akademik dengan variabel campuran (akademik + non-akademik)
* Hasil prediksi dapat dijelaskan kepada pihak prodi tanpa perlu keahlian data science

# **3. Tujuan & Sasaran Produk**

## **3.1 Tujuan Utama**

1. Menyediakan platform monitoring kinerja akademik mahasiswa yang terpusat dan real-time.
2. Mengintegrasikan data akademik (IPS, IPK, nilai) dengan data non-akademik (kondisi ekonomi, keaktifan organisasi, asal sekolah) sebagai input prediksi.
3. Menerapkan algoritma Decision Tree C4.5 untuk memprediksi status kelulusan mahasiswa (Tepat Waktu / Berisiko Terlambat).
4. Mengklasifikasikan mahasiswa ke dalam tiga kategori risiko: Rendah, Sedang, Tinggi.
5. Menyediakan laporan akademik yang dapat dicetak untuk keperluan administrasi prodi.

## **3.2 Ukuran Keberhasilan (Success Metrics)**

Proyek ini dianggap berhasil jika memenuhi kriteria berikut:

|  |  |
| --- | --- |
| **Metrik** | **Target** |
| Akurasi model Decision Tree | ≥ 80% pada data uji (angkatan 2020–2021) |
| Waktu update prediksi setelah input data | < 3 detik (real-time) |
| Semua fitur utama berfungsi | 100% pada pengujian Black Box |
| Pengguna non-IT dapat mengoperasikan sistem | Tanpa pelatihan teknis khusus |
| Laporan dapat diunduh/dicetak | Tersedia dalam format PDF |

# **4. Pengguna Sistem (User Roles)**

Sistem ini dirancang untuk dua jenis pengguna dengan hak akses yang berbeda:

## **4.1 Admin Akademik**

|  |  |
| --- | --- |
| **Siapa?** | Staf administrasi / pengelola data di Program Studi SI UIN RIL |
| **Tujuan Utama** | Mengelola seluruh data dalam sistem — mahasiswa, akademik, dan non-akademik |
| **Hak Akses** | Penuh (tambah, edit, hapus data mahasiswa, nilai, variabel tambahan, pengaturan sistem) |
| **Tingkat IT** | Dasar — mampu menggunakan komputer dan browser, tidak perlu keahlian teknis |
| **Kebutuhan Kunci** | Input data mudah, form yang intuitif, validasi data otomatis |

## **4.2 Pihak Akademik / Prodi (Kaprodi / Dosen Wali)**

|  |  |
| --- | --- |
| **Siapa?** | Ketua Program Studi, Dosen Wali, atau Pejabat Akademik |
| **Tujuan Utama** | Memantau kinerja akademik mahasiswa dan melihat hasil prediksi kelulusan |
| **Hak Akses** | Baca saja — melihat dashboard, monitoring, prediksi, dan mengunduh laporan |
| **Tingkat IT** | Minimal — cukup bisa membuka browser dan membaca tabel/grafik |
| **Kebutuhan Kunci** | Dashboard ringkas, warna-warni indikator risiko, laporan siap cetak |

# **5. Fitur & Spesifikasi Fungsional**

Fitur-fitur berikut diorganisasi berdasarkan prioritas menggunakan framework MoSCoW:

* Must Have: Wajib ada — sistem tidak dapat digunakan tanpa fitur ini
* Should Have: Penting tapi sistem tetap bisa berjalan tanpanya sementara
* Nice to Have: Nilai tambah, dikerjakan jika waktu memungkinkan

## **5.1 Daftar Fitur**

| **No.** | **Fitur** | **Deskripsi** | **Prioritas** |
| --- | --- | --- | --- |
| F01 | **Autentikasi & Login** | Login dengan username & password, session management, logout aman | **Must Have** |
| F02 | **Dashboard Ringkasan** | Total mahasiswa, distribusi risiko (donut chart), prediksi kelulusan (bar chart), diperbarui real-time | **Must Have** |
| F03 | **Manajemen Data Mahasiswa** | CRUD mahasiswa: NIM, nama, angkatan, status. Pencarian & filter. Total data ditampilkan. | **Must Have** |
| F04 | **Manajemen Data Akademik** | Input/edit nilai per semester (IPS, IPK, jumlah SKS) per mahasiswa. History per semester. | **Must Have** |
| F05 | **Manajemen Data Tambahan (Non-Akademik)** | Input kondisi ekonomi, keaktifan organisasi, asal sekolah. Digunakan sebagai variabel prediksi. | **Must Have** |
| F06 | **Monitoring Kinerja & Prediksi** | Tabel seluruh mahasiswa dengan IPS terakhir, IPK, label risiko (Rendah/Sedang/Tinggi), prediksi kelulusan (Tepat Waktu / Berisiko Terlambat). Update real-time. | **Must Have** |
| F07 | **Prediksi Kelulusan (Decision Tree C4.5)** | Engine prediksi berbasis algoritma C4.5. Model dilatih dari data historis. Hasil otomatis muncul di tabel monitoring. | **Must Have** |
| F08 | **Laporan Akademik** | Generate laporan per mahasiswa atau keseluruhan. Export/cetak PDF. | **Should Have** |
| F09 | **Pengaturan Sistem** | Manajemen akun pengguna, konfigurasi threshold risiko (IPS/IPK), informasi sistem. | **Should Have** |
| F10 | **Notifikasi Peringatan** | Alert otomatis ke pengguna untuk mahasiswa yang baru masuk kategori Risiko Tinggi | **Nice to Have** |
| F11 | **Import Data Massal** | Upload file CSV/Excel untuk input data akademik dalam jumlah besar | **Nice to Have** |

## **5.2 Detail Fitur Utama**

### **F02 — Dashboard**

Dashboard adalah halaman pertama yang dilihat pengguna setelah login. Harus menampilkan informasi paling penting tanpa perlu navigasi tambahan.

* 6 kartu ringkasan berwarna: Total Mahasiswa, Risiko Rendah (hijau), Risiko Sedang (kuning), Risiko Tinggi (merah), Prediksi Tepat Waktu (biru), Prediksi Terlambat (abu)
* Donut chart: Distribusi risiko mahasiswa dengan persentase
* Bar chart: Prediksi kelulusan per angkatan (Tepat Waktu vs Terlambat)
* Timestamp: 'Terakhir diperbarui: [waktu]'
* Semua angka dan grafik otomatis berubah ketika data diperbarui (real-time via Laravel)

### **F06 — Monitoring & Prediksi (Fitur Inti)**

Ini adalah fitur paling penting dari sistem. Menampilkan tabel semua mahasiswa beserta status kinerja dan prediksi kelulusannya.

* Kolom tabel: NIM, Nama, IPS Terakhir, IPK, Risiko (badge warna), Prediksi Kelulusan (badge warna)
* Badge Risiko: Rendah (hijau), Sedang (kuning/oranye), Tinggi (merah)
* Badge Prediksi: Tepat Waktu (hijau), Berisiko Terlambat (merah)
* Tombol 'Proses Prediksi' untuk memicu ulang kalkulasi Decision Tree
* Filter berdasarkan angkatan dan status risiko
* Perubahan data di halaman Data Akademik langsung memperbarui tabel ini

### **F07 — Algoritma Decision Tree C4.5**

Detail teknis implementasi algoritma prediksi:

* Library: PHP/Laravel custom implementation atau library open source yang kompatibel
* Variabel input akademik: IPS per semester, IPK kumulatif, total SKS ditempuh
* Variabel input non-akademik: kondisi ekonomi (skala), keaktifan organisasi (ya/tidak), asal sekolah (SMA/SMK/MA)
* Label output: 'Tepat Waktu' atau 'Terlambat'
* Model dilatih ulang setiap kali ada perubahan data signifikan atau dapat dipicu manual
* Akurasi model ditampilkan di halaman pengaturan/informasi sistem

# **6. Kebutuhan Non-Fungsional**

## **6.1 Performa**

* Waktu muat halaman dashboard: < 3 detik pada koneksi internet kampus
* Proses prediksi Decision Tree: < 5 detik untuk 500 data mahasiswa
* Sistem dapat diakses bersamaan oleh minimal 20 pengguna tanpa degradasi performa signifikan

## **6.2 Keamanan**

* Autentikasi wajib untuk semua halaman (tidak ada halaman publik kecuali login)
* Password disimpan dengan hashing (bcrypt via Laravel)
* Session timeout otomatis setelah 30 menit tidak aktif
* Proteksi CSRF pada semua form (bawaan Laravel)
* Hak akses berbasis role: Admin vs Prodi (Role-Based Access Control)

## **6.3 Kemudahan Penggunaan (Usability)**

* Antarmuka bahasa Indonesia penuh
* Pesan error yang jelas dan ramah pengguna (bukan pesan teknis)
* Konfirmasi sebelum aksi destruktif (hapus data)
* Responsive: dapat diakses melalui laptop/PC (prioritas) dan tablet
* Tidak memerlukan instalasi aplikasi tambahan — cukup browser

## **6.4 Ketersediaan & Pemeliharaan**

* Sistem dapat dijalankan di server lokal kampus (on-premise) atau shared hosting
* Database MySQL mudah dibackup dan direstore
* Kode sumber terdokumentasi untuk kemudahan pemeliharaan ke depan

# **7. Arsitektur & Tech Stack**

Pemilihan teknologi didasarkan pada kematangan ekosistem, kemudahan pengembangan, dan ketidak-bergantungan pada biaya lisensi.

|  |  |  |
| --- | --- | --- |
| **Layer** | **Teknologi** | **Alasan Pemilihan** |
| **Backend Framework** | Laravel (PHP) | MVC architecture yang mature, built-in auth, Eloquent ORM, middleware CSRF, komunitas besar, cocok untuk aplikasi akademik |
| **Database** | MySQL | Relational database yang stabil, gratis, kompatibel dengan hampir semua hosting, mudah dibackup |
| **Frontend Styling** | Tailwind CSS | Utility-first CSS yang konsisten, tidak memerlukan design system custom, mudah membuat UI responsif |
| **Templating** | Blade (Laravel) | Template engine bawaan Laravel, clean syntax, mendukung komponen reusable |
| **Charting** | Chart.js | Library grafik JavaScript yang ringan, mendukung donut chart dan bar chart untuk dashboard |
| **ML Engine** | PHP / Decision Tree C4.5 | Diimplementasikan langsung di Laravel agar tidak bergantung pada layanan eksternal; bisa juga pakai library PHP |
| **Autentikasi** | Laravel Breeze / Custom | Laravel Breeze menyediakan auth scaffold siap pakai dengan Tailwind CSS |
| **PDF Export** | DomPDF / Laravel-DomPDF | Generate PDF dari blade template, gratis dan mudah diintegrasikan dengan Laravel |

## **7.1 Struktur Database (Ringkasan)**

Database terdiri dari tabel-tabel utama berikut:

* users — data akun pengguna sistem (admin, prodi)
* mahasiswas — profil mahasiswa (NIM, nama, angkatan, status)
* data\_akademiks — nilai per semester (IPS, IPK, SKS, semester ke-N)
* data\_tambahaus — variabel non-akademik (kondisi\_ekonomi, keaktifan\_organisasi, asal\_sekolah)
* prediksi\_kelulusans — hasil prediksi Decision Tree per mahasiswa (label, probabilitas, tanggal proses)
* model\_dt\_configs — konfigurasi dan metadata model Decision Tree terlatih

# **8. Alur Kerja Sistem (User Flow)**

## **8.1 Alur Real-Time (Cara Kerja Utama)**

Berikut adalah alur kerja utama yang membedakan sistem ini dari SIAKAD biasa:

|  |  |  |
| --- | --- | --- |
| **Langkah** | **Tindakan** | **Hasil di Sistem** |
| **1** | Admin mengubah/menambah IPS atau IPK mahasiswa di halaman Data Akademik | Data tersimpan ke database MySQL |
| **2** | Sistem secara otomatis memproses data terbaru menggunakan model Decision Tree | Prediksi dan label risiko dikalkulasi ulang |
| **3** | Dashboard dan tabel Monitoring diperbarui otomatis | Angka kartu, grafik, badge risiko, dan prediksi berubah |
| **4** | Kaprodi/Dosen Wali melihat informasi terbaru tanpa perlu refresh manual | Pengambilan keputusan berbasis data yang selalu up-to-date |

## **8.2 Alur Login & Navigasi**

1. Pengguna membuka URL sistem di browser
2. Memasukkan username dan password di halaman Login
3. Sistem memverifikasi kredensial → redirect ke Dashboard
4. Dari Dashboard, pengguna dapat navigasi ke: Data Mahasiswa | Data Akademik | Data Tambahan | Monitoring | Prediksi Kelulusan | Laporan | Pengaturan
5. Logout menghapus session dan redirect ke halaman Login

# **9. Rencana Pengembangan (Sprint Plan)**

Pengembangan menggunakan metodologi Scrum dengan 6 sprint, masing-masing berdurasi 1 minggu:

| **Sprint** | **Durasi** | **Fokus Pengembangan** | **Output / Deliverable** |
| --- | --- | --- | --- |
| **Sprint 1** | 1 Minggu | Analisis kebutuhan final, setup lingkungan development, ERD & wireframe | Backlog terstruktur, database schema, wireframe semua halaman |
| **Sprint 2** | 1 Minggu | Autentikasi, struktur Laravel (routing, model, migration), layout utama Tailwind CSS | Sistem login/logout berfungsi, navigasi sidebar aktif, tampilan dasar konsisten |
| **Sprint 3** | 1 Minggu | CRUD Data Mahasiswa, Data Akademik, Data Tambahan | 3 modul manajemen data berfungsi penuh dengan validasi |
| **Sprint 4** | 1 Minggu | Implementasi algoritma Decision Tree C4.5, integrasi dengan data akademik & non-akademik | Prediksi kelulusan berjalan, label risiko terbentuk otomatis |
| **Sprint 5** | 1 Minggu | Dashboard real-time, halaman Monitoring, integrasi Chart.js, fitur Laporan & PDF | Dashboard lengkap dengan grafik, tabel monitoring aktif, laporan dapat diunduh |
| **Sprint 6** | 1 Minggu | Pengujian menyeluruh (Black Box), perbaikan bug, dokumentasi, deployment | Sistem siap pakai, laporan pengujian, dokumentasi pengguna |

*Catatan PM: Setiap akhir sprint dilakukan demo ke klien untuk validasi fitur sebelum lanjut ke sprint berikutnya. Perubahan scope di tengah sprint dicatat di backlog dan diprioritaskan ulang.*

# **10. Risiko & Mitigasi**

| **Risiko** | **Dampak** | **Kemungkinan** | **Mitigasi** |
| --- | --- | --- | --- |
| Data akademik mahasiswa tidak tersedia atau tidak lengkap dari pihak prodi | **Tinggi** | Sedang | Koordinasi awal dengan akademik untuk akses data. Siapkan form input manual sebagai alternatif. |
| Akurasi model Decision Tree di bawah 80% | **Tinggi** | Sedang | Feature engineering tambahan, tuning parameter C4.5. Pertimbangkan teknik balancing data jika kelas tidak seimbang. |
| Scope creep — klien meminta fitur tambahan di luar yang disepakati | **Sedang** | Tinggi | PRD ini menjadi kontrak scope. Fitur baru dicatat dan diprioritaskan untuk fase berikutnya. |
| Keterbatasan pengetahuan teknis klien menyulitkan pengujian UAT | **Sedang** | Tinggi | Sediakan panduan singkat penggunaan sistem. Demo langsung dengan data nyata. |
| Keterlambatan penyediaan server/hosting oleh pihak kampus | **Sedang** | Rendah | Gunakan localhost selama pengembangan. Siapkan opsi hosting gratis (Railway, Render) sebagai backup demo. |
| Bug pada implementasi Decision Tree (perhitungan salah) | **Tinggi** | Rendah | Unit test untuk fungsi perhitungan entropy & gain. Validasi hasil dengan data yang sudah diketahui jawabannya. |

# **11. Di Luar Scope (Out of Scope)**

Berikut adalah hal-hal yang secara eksplisit TIDAK termasuk dalam proyek ini untuk mencegah scope creep:

* Integrasi langsung dengan SIAKAD/SISPO yang sudah ada (data diinput manual ke sistem ini)
* Portal mahasiswa — mahasiswa tidak memiliki akses login ke sistem ini
* Notifikasi email/SMS otomatis ke mahasiswa (hanya untuk pengguna internal prodi)
* Modul keuangan atau pembayaran UKT
* Manajemen jadwal kuliah atau ruang kelas
* Algoritma ML selain Decision Tree C4.5 (Naive Bayes, Neural Network, dll tidak termasuk)
* Aplikasi mobile (Android/iOS) — sistem ini web-based saja
* Multi-prodi — sistem ini khusus untuk Prodi Sistem Informasi UIN RIL

*Catatan: Item di atas dapat menjadi scope fase pengembangan berikutnya setelah sistem inti berjalan dan divalidasi.*

# **12. Open Questions & Hal yang Perlu Dikonfirmasi**

Berikut adalah pertanyaan-pertanyaan yang memerlukan konfirmasi dari klien/stakeholder sebelum atau selama pengembangan:

|  |  |  |
| --- | --- | --- |
| **#** | **Pertanyaan** | **Dampak ke Pengembangan** |
| **1** | Berapa threshold IPS/IPK yang dianggap 'Risiko Tinggi' menurut kebijakan prodi saat ini? | Menentukan rule classification di luar algoritma ML |
| **2** | Apakah data akademik angkatan 2020–2021 tersedia dalam format digital (Excel/CSV) atau masih dalam bentuk kertas? | Menentukan effort input data awal dan apakah perlu fitur import massal |
| **3** | Siapa yang akan menjadi Admin sistem? Apakah satu orang atau lebih dari satu? | Menentukan kebutuhan manajemen multi-user di modul pengaturan |
| **4** | Apakah sistem akan dihosting di server kampus atau menggunakan layanan hosting eksternal? | Menentukan konfigurasi deployment dan environment produksi |
| **5** | Apakah laporan perlu menggunakan kop surat resmi/logo UIN RIL? | Membutuhkan aset gambar logo dan template PDF yang disesuaikan |
| **6** | Apakah pihak prodi memiliki definisi baku 'kondisi ekonomi' mahasiswa? (misalnya: skala 1-3, kategori rendah/menengah/tinggi, dll) | Menentukan tipe data dan pilihan input di form Data Tambahan |
| **7** | Apakah sistem perlu mendukung akses dari luar jaringan kampus (internet publik)? | Menentukan kebutuhan SSL, domain publik, dan konfigurasi keamanan jaringan |

# **13. Asumsi & Dependensi**

## **13.1 Asumsi**

* Data akademik historis (angkatan 2020–2021) tersedia dalam jumlah cukup untuk melatih model Decision Tree
* Pengguna sistem memiliki akses internet minimal di lingkungan kampus
* Pihak prodi bersedia meluangkan waktu untuk demo dan pengujian UAT di setiap akhir sprint
* Format input data non-akademik (kondisi ekonomi, keaktifan organisasi, asal sekolah) disepakati di awal proyek
* Server atau hosting tersedia sebelum fase deployment (Sprint 6)

## **13.2 Dependensi**

* Ketersediaan data historis mahasiswa dari pihak akademik prodi
* Akses ke server kampus atau layanan hosting untuk deployment
* Persetujuan klien pada wireframe/desain sebelum Sprint 3 dimulai
* Konfirmasi threshold risiko dari pihak prodi sebelum implementasi Sprint 4

# **14. Perbedaan dengan Sistem yang Ada**

|  |  |  |
| --- | --- | --- |
| **Aspek** | **SISPO/SIAKAD (Lama)** | **SPK Monitoring (Baru)** |
| **Monitoring aktif** | Tidak ada | Ada — real-time |
| **Indikator risiko kelulusan** | Tidak ada | Ada — Rendah/Sedang/Tinggi |
| **Prediksi kelulusan** | Tidak ada | Ada — Decision Tree C4.5 |
| **Data non-akademik** | Tidak ada | Ada — kondisi ekonomi, organisasi, asal sekolah |
| **Update informasi** | Manual / statis | Otomatis saat data berubah |
| **Laporan analitik** | Tidak ada | Ada — export PDF |
| **Deteksi dini risiko** | Tidak ada | Ada — semester awal sudah bisa diprediksi |

# **15. Persetujuan Dokumen**

Dokumen PRD ini dianggap disetujui ketika semua pihak berikut telah menandatangani atau memberikan konfirmasi tertulis:

|  |  |  |  |
| --- | --- | --- | --- |
| **Nama / Peran** | **Jabatan** | **Tanda Tangan** | **Tanggal** |
| Nasrotul Ilmi | Developer / Peneliti |  |  |
| [Nama Klien/Kaprodi] | Ketua Program Studi SI UIN RIL |  |  |
| [Nama Pembimbing] | Dosen Pembimbing Skripsi |  |  |

*Dokumen ini dibuat untuk keperluan pengembangan sistem skripsi.*

Versi 1.0 | 15 Juni 2026 | Prodi Sistem Informasi, UIN Raden Intan Lampung