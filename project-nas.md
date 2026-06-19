**Perancangan Sistem Pendukung Keputusan Monitoring**

**Kinerja Akademik Mahasiswa Berbasis Web untuk Prediksi Tingkat Kelulusan Menggunakan Metode Decision Tree**

**(Studi Kasus: Prodi Sistem Informasi UIN RIL)**

# PROPOSAL

Diajukan untuk diseminarkan dalam rangka penulisan skripsi pada

program studi sistem informasi

**Disusun Oleh :**

**Nasrotul Ilmi**

# 2271020044

![](data:image/png;base64...)

**PROGRAM STUDI SISTEM INFORMASI**

**FAKULTAS SAINS DAN TEKNOLOGI**

**UNIVERSITAS ISLAM NEGERI RADEN INTAN LAMPUNG**

**1447 H / 2026 M**

# DAFTAR ISI

**DAFTAR ISI ..........................................................................................................ii**

**DAFTAR GAMBAR.............................................................................................iii**

**BAB 1 PENDAHULUAN………………………………………………………....1**

1. Penegasan Judul.............................................................................................1
2. Latar Belakang Masalah................................................................................6
3. Identifikasi Masalah.....................................................................................11
4. Batasan Masalah...........................................................................................13
5. Rumusan Masalah.........................................................................................13
6. Tujuan Penelitian..........................................................................................13
7. Manfaat Penelitian........................................................................................13
8. Kajian Penelitian Terdahulu yang Relevan...................................................14
9. Metode Penelitian.........................................................................................17
10. Kerangka Teoritik.........................................................................................21

**BAB II LANDASAN TEORI..................................................................................25**

1. Konsep Dasar Sistem…………………………….........................................25
2. Sistem Informasi…………………………………………………………...25
3. Sistem Pendukung Keputusan (SPK)………………………………………26
4. Monitoring Kinerja Akademik Mahasiswa…………………………………27
5. Sistem Berbasis Web......................................................................................28
6. Metode Decision Tree………………………………………………………30
7. Metode Scrum………………………………………………………………31

**BAB III METODE PENELITIAN……………………………………………….35**

* 1. Tempat dan Waktu Penelitian…………………………………………...….35
  2. Jenis Penelitian……………………………………………………………..36
  3. Prosedur Penelitian dan Pengembangan…………………………………....37
  4. Spesifikasi Produk yang Dikembangkan .………………………………….39
  5. Jenis Data…………………………………………………………………..42
  6. Teknik Pengumpulan Data…………………………………………………43
  7. Instrumen Penelitian………………………………………………………..47
  8. Teknik Analisa Data………………………………………………………..49

**DAFTAR RUJUKAN..............................................................................................53**

# DAFTAR GAMBAR

Gambar 1.1 Konsep Metode *Scrum* ................................................................ 20

Gambar 1.2 Kerangka Teoritik Penelitian ....................................................... 24

**BAB I**

**PENDAHULUAN**

## Penegasan Judul

Peineigasan judul ini dimaksudkan untuk meimbeirikan gambaran yang jeilas meingeinai maksud peineilitian yang dilakukan. Seilain itu, peineigasan judul beirtujuan untuk meimbatasi ruang lingkup peimbahasan agar peineilitian teitap teirarah dan tidak meinyimpang dari tujuan yang teilah diteitapkan. Oleih kareina itu, pada bagian ini dijeilaskan istilah-istilah peinting yang teirdapat dalam judul peineilitian.

Judul peineilitian yang diangkat adalah **“Perancangan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa Berbasis Web untuk Prediksi Tingkat Kelulusan Menggunakan Metode Decision Tree (Studi Kasus:**

**Prodi Sistem Informasi UIN RIL)”**, deingan peinjeilasan seibagai beirikut:

1. Peirancangan Sisteim

Meinurut Purnaningsih dan Yulianto (2022), peirancangan sisteim informasi meirupakan proseis peinyusunan dan peingeimbangan sisteim beirbasis weib yang dilakukan seicara teireincana untuk meingeilola data seicara teirkomputeirisasi. Peirancangan sisteim meincakup analisis keibutuhan, peirancangan alur sisteim, peirancangan basis data, seirta peirancangan antarmuka peingguna agar sisteim mampu meinyajikan informasi seicara eifeiktif, eifisiein, dan akurat seirta dapat meimbantu pihak teirkait dalam proseis peingambilan keiputusan.[[1]](#footnote-1)

Meinurut Mulyadi dan Yusuf (2021), peirancangan sisteim adalah tahapan peinting dalam peingeimbangan sisteim informasi akadeimik beirbasis weib yang beirtujuan untuk meingubah proseis manual meinjadi sisteim teirkomputeirisasi. Peirancangan sisteim dilakukan agar peingeilolaan data akadeimik, peinyampaian informasi, seirta proseis monitoring dapat dilakukan deingan leibih mudah, ceipat, dan dapat diakseis kapan saja oleih peingguna meilalui jaringan inteirneit.[[2]](#footnote-2)

Beirdasarkan peingeirtian meinurut para ahli di atas, maka dapat disimpulkan bahwa peirancangan sisteim meirupakan proseis peireincanaan dan peingeimbangan sisteim informasi beirbasis weib yang dilakukan seicara sisteimatis untuk meingeilola data dan meinyajikan informasi seicara teirinteigrasi, seihingga mampu meiningkatkan eifeiktivitas, eifisieinsi, seirta meindukung keibutuhan peingguna dalam suatu organisasi atau institusi peindidikan.

1. Sisteim Peindukung Keiputusan (SPK)

Meinurut Hilyawan dan Reinaldy (2024), Sisteim Peindukung Keiputusan meirupakan sisteim yang digunakan untuk meindukung proseis peingambilan keiputusan deingan meimanfaatkan beirbagai meitodei analisis data seihingga dapat meinghasilkan informasi yang akurat dan reileivan bagi peingambil keiputusan.[[3]](#footnote-3)

Meinurut Pratama dkk. (2023), Sisteim Peindukung Keiputusan beirfungsi seibagai alat bantu dalam peingambilan keiputusan deingan meinginteigrasikan data, modeil, dan teiknik analisis seihingga dapat meimbeirikan solusi yang teipat teirhadap peirmasalahan yang dihadapi, khususnya dalam bidang manajeimein.[[4]](#footnote-4)

Beirdasarkan peindapat para ahli di atas, maka dapat disimpulkan bahwa Sisteim Peindukung Keiputusan (SPK) adalah sisteim beirbasis komputeir yang digunakan untuk meingolah data meinjadi informasi dan reikomeindasi yang dapat meindukung peingambil keiputusan dalam meinyeileisaikan peirmasalahan seimiteirstruktur. Dalam konteiks peineilitian ini, SPK yang dirancang beirtujuan untuk meimbantu Program Studi Sisteim Informasi UIN RIL dalam meinganalisis data akadeimik mahasiswa seicara objeiktif, seihingga dapat meimbeirikan reikomeindasi preidiksi tingkat keilulusan yang meindukung peingambilan keiputusan akadeimik seicara leibih akurat.

1. Monitoring Kineirja Akadeimik Mahasiswa Program Studi Sisteim Informasi

Monitoring kineirja akadeimik mahasiswa meirupakan proseis peimantauan dan eivaluasi teirhadap peirkeimbangan akadeimik mahasiswa seicara beirkeilanjutan deingan meimanfaatkan data akadeimik seibagai dasar analisis. Meinurut Nurul Faizah, Ghasa Faraasyatul A’lam, Maisyaroh, dan Ahmad Yusuf Sobri (2023), sisteim ei-meintoring dalam proseis peimbeilajaran di peirguruan tinggi meirupakan beintuk peindampingan beirbasis teiknologi yang digunakan untuk meimfasilitasi inteiraksi akadeimik seicara leibih fleiksibeil, teirstruktur, dan teirdokumeintasi. Sisteim ini meindukung proseis bimbingan dan monitoring mahasiswa seicara beirkeilanjutan seihingga dapat meiningkatkan eifeiktivitas proseis peimbeilajaran di peirguruan tinggi.[[5]](#footnote-5)

Seijalan deingan itu, Muhammad Bagus Firmansyah, Deiwi Reitno Suminar, dan Nur Ainy Fardana (2021) meinjeilaskan bahwa kualitas kineirja dalam proseis peindidikan dipeingaruhi oleih keiteirlibatan, inteiraksi, seirta keipuasan dalam proseis peimbeilajaran. Keiteirlibatan yang baik antara peindidik dan peiseirta didik dapat meiningkatkan eifeiktivitas proseis peimbeilajaran seirta meindukung teircapainya tujuan peindidikan seicara optimal.[[6]](#footnote-6)

Beirdasarkan peindapat teirseibut, dapat disimpulkan bahwa monitoring kineirja akadeimik mahasiswa Program Studi Sisteim Informasi meirupakan proseis peimantauan dan eivaluasi peirkeimbangan akadeimik mahasiswa seicara sisteimatis deingan meimanfaatkan data akadeimik seibagai dasar analisis. Dalam peineilitian ini, konseip teirseibut digunakan seibagai dasar peingeimbangan sisteim peindukung keiputusan beirbasis weib pada Program Studi Sisteim Informasi UIN RIL untuk meimbantu proseis analisis dan preidiksi tingkat keilulusan mahasiswa meinggunakan meitodei Deicision Treiei.

1. Beirbasis Weib

Sisteim beirbasis weib meirupakan sisteim informasi yang dikeimbangkan deingan meimanfaatkan teiknologi inteirneit seihingga dapat diakseis meilalui peiramban (browseir) tanpa meimeirlukan instalasi aplikasi tambahan pada peirangkat peingguna. Meinurut Deidy Mirwansyah dan Deini Mahdiana (2023), sisteim informasi beirbasis weib meimungkinkan peingeilolaan dan peinyampaian informasi dilakukan seicara teirpusat seihingga peingguna dapat meingakseis data seicara leibih mudah dan fleiksibeil. Peindeikatan ini juga meindukung peingeilolaan data yang leibih teirstruktur seirta meimudahkan dalam proseis peinyajian informasi.[[7]](#footnote-7)

Seijalan deingan itu, Hadid Putri B. Zurna, Faiza Rini, dan Adei Pratama (2022) meinjeilaskan bahwa sisteim informasi beirbasis weib meirupakan sisteim yang dirancang untuk meindukung proseis peingeilolaan dan peinyajian data deingan meimanfaatkan jaringan inteirneit seibagai meidia utama. Sisteim ini meimbeirikan keimudahan dalam proseis monitoring kareina data dapat diakseis seicara ceipat, fleiksibeil, seirta meindukung eifisieinsi dalam peingambilan keiputusan beirbasis data.[[8]](#footnote-8)

Beirdasarkan peindapat teirseibut, dapat disimpulkan bahwa sisteim beirbasis weib meirupakan peindeikatan peingeimbangan sisteim informasi yang meimanfaatkan teiknologi inteirneit untuk meingeilola, meinyimpan, dan meinyajikan data seicara teirpusat dan mudah diakseis oleih peingguna. Dalam peineilitian ini, sisteim peindukung keiputusan monitoring kineirja akadeimik mahasiswa Program Studi Sisteim Informasi dirancang beirbasis weib untuk meimudahkan pihak akadeimik dalam meilakukan peimantauan seirta meindukung proseis preidiksi tingkat keilulusan mahasiswa seicara eifeiktif dan eifisiein.

1. Preidiksi Tingkat Keilulusan

Preidiksi tingkat keilulusan mahasiswa meirupakan proseis untuk meimpeirkirakan keimungkinan mahasiswa lulus teipat waktu atau meingalami keiteirlambatan beirdasarkan analisis data akadeimik. Menurut Lila Setiyani, Mokhamad Wahidin, Dudi Awaludin, dan Sri Purwani (2020), prediksi kelulusan mahasiswa dapat dilakukan menggunakan metode klasifikasi seperti Naïve Bayes untuk menganalisis pola data akademik mahasiswa dalam menentukan status kelulusan tepat waktu.[[9]](#footnote-9)

Sejalan dengan itu, Uci Suriani (2023) menjelaskan bahwa algoritma Decision Tree C4.5 dapat digunakan untuk memprediksi tingkat kelulusan mahasiswa berdasarkan data akademik, seperti IPK, jumlah SKS, dan riwayat studi lainnya. Algoritma Deicision Treiei dinilai eifeiktif kareina meinghasilkan modeil preidiksi yang mudah dipahami seirta dapat digunakan seibagai dasar dalam peingambilan keiputusan akadeimik.[[10]](#footnote-10)

Beirdasarkan peindapat teirseibut, dapat disimpulkan bahwa preidiksi tingkat keilulusan mahasiswa meirupakan proseis analisis data akadeimik untuk meimpeirkirakan status keilulusan mahasiswa, baik teipat waktu maupun tidak teipat waktu. Dalam peineilitian ini, preidiksi tingkat keilulusan mahasiswa Program Studi Sisteim Informasi UIN RIL digunakan seibagai bagian dari sisteim peindukung keiputusan beirbasis weib deingan meitodei Deicision Treiei untuk meimbantu pihak akadeimik dalam peingambilan keiputusan yang leibih teipat dan akurat.

1. Meitodei Deicision Treiei

Deicision Treiei meirupakan salah satu meitodei klasifikasi dalam data mining yang digunakan untuk meimbeintuk modeil keiputusan beirbeintuk struktur pohon beirdasarkan data yang teirseidia. Meinurut Eirba Lutfina, Wiwin Andriana, Sanina Quamila Putri Wiratmaja, dan Eirvina Feibrianti (2024), Deicision Treiei digunakan dalam proseis analisis data untuk meinghasilkan keiputusan beirdasarkan peimilihan atribut seicara beirtahap, di mana seitiap nodei meireipreiseintasikan atribut dan cabang meinunjukkan hasil dari proseis peingambilan keiputusan hingga dipeiroleih hasil akhir. Meitodei ini banyak digunakan dalam beirbagai kasus klasifikasi kareina meimiliki struktur yang mudah dipahami.[[11]](#footnote-11)

Seijalan deingan itu, Christian Cahyaningtyas, Yeissica Nataliani, dan Indrastanti Ratna Widiasari (2021) meinjeilaskan bahwa Deicision Treiei dapat digunakan dalam proseis analisis data seipeirti analisis seintimein deingan cara meimbangun modeil klasifikasi beirdasarkan pola data yang ada. Meitodei ini mampu meinghasilkan keiputusan yang transparan meilalui aturan-aturan yang teirbeintuk, seihingga hasil analisis dapat deingan mudah dipahami dan diinteirpreitasikan.[[12]](#footnote-12)

Beirdasarkan peindapat teirseibut, dapat disimpulkan bahwa meitodei Deicision Treiei meirupakan meitodei klasifikasi yang digunakan untuk meimbeintuk modeil keiputusan beirbeintuk pohon beirdasarkan pola data. Meitodei ini dinilai eifeiktif dalam proseis preidiksi kareina mampu meinghasilkan aturan keiputusan yang jeilas dan mudah dipahami. Dalam peineilitian ini, meitodei Deicision Treiei digunakan seibagai meitodei utama dalam sisteim peindukung keiputusan beirbasis weib untuk meimbantu meimpreidiksi tingkat keilulusan mahasiswa Program Studi Sisteim Informasi UIN RIL.

1. Studi Kasus Program Studi Sisteim Informasi UIN Radein Intan Lampung Studi kasus dalam peineilitian ini dilakukan pada Program Studi Sisteim Informasi Univeirsitas Islam Neigeiri Radein Intan Lampung. Peimilihan lokasi peineilitian ini beirtujuan agar sisteim yang dirancang meimiliki keiteirkaitan langsung deingan kondisi nyata di lingkungan inteirnal kampus. Deingan meinggunakan data dan peirmasalahan yang ada pada Program Studi Sisteim Informasi UIN Radein Intan Lampung, diharapkan hasil peineilitian dapat meimbeirikan manfaat nyata dalam meindukung monitoring kineirja akadeimik mahasiswa seirta proseis peingambilan keiputusan akadeimik.

## Latar Belakang Masalah

Peirkeimbangan teiknologi informasi yang seimakin peisat teilah meimbawa peirubahan yang signifikan dalam beirbagai aspeik keihidupan, teirmasuk dalam bidang peindidikan tinggi. Peimanfaatan teiknologi informasi di lingkungan peirguruan tinggi tidak lagi hanya beirfungsi seibagai alat bantu administrasi, teitapi teilah beirkeimbang meinjadi sarana strateigis dalam meindukung peingeilolaan data, peiningkatan mutu layanan akadeimik, seirta peingambilan keiputusan yang beirbasis data. Peirguruan tinggi dituntut untuk mampu beiradaptasi deingan peirkeimbangan teiknologi agar peingeilolaan informasi akadeimik dapat dilakukan seicara eifeiktif, eifisiein, dan teirinteigrasi, seiiring deingan meiningkatnya kompleiksitas peingeilolaan data akadeimik mahasiswa.[[13]](#footnote-13)

Peirguruan tinggi meimiliki peiran peinting dalam meinghasilkan sumbeir daya manusia yang beirkualitas dan beirdaya saing. Salah satu indikator utama keibeirhasilan peirguruan tinggi dalam meincapai tujuan teirseibut adalah kineirja akadeimik mahasiswa. Kineirja akadeimik mahasiswa meinceirminkan hasil dari proseis peimbeilajaran yang teilah dijalani seilama masa studi dan meinjadi tolok ukur keibeirhasilan mahasiswa dalam meinyeileisaikan peindidikan di peirguruan tinggi. Kineirja akadeimik ini umumnya diukur meilalui beibeirapa indikator, seipeirti nilai mata kuliah, Indeiks Preistasi Seimeisteir (IPS), Indeiks Preistasi Kumulatif (IPK), seirta keiteipatan waktu keilulusan mahasiswa. Oleih kareina itu, kineirja akadeimik mahasiswa peirlu meindapatkan peirhatian seirius dari pihak program studi dan institusi peindidikan tinggi seicara keiseiluruhan.[[14]](#footnote-14)

Monitoring kineirja akadeimik mahasiswa meirupakan proseis peimantauan dan eivaluasi teirhadap peirkeimbangan akadeimik mahasiswa yang dilakukan seicara beirkeilanjutan. Monitoring ini beirtujuan untuk meingeitahui capaian akadeimik mahasiswa seijak awal masa studi hingga meinjeilang keilulusan. Deingan adanya monitoring yang teirstruktur, pihak program studi dapat meingideintifikasi mahasiswa yang meingalami peinurunan preistasi akadeimik, hambatan dalam proseis peimbeilajaran, atau poteinsi keiteirlambatan keilulusan. Seilain itu, monitoring kineirja akadeimik juga beirfungsi seibagai dasar eivaluasi teirhadap eifeiktivitas proseis peimbeilajaran yang teilah diteirapkan oleih program studi.[[15]](#footnote-15)

Monitoring kinerja akademik mahasiswa pada penelitian ini difokuskan pada pemantauan indikator akademik dan variabel tambahan yang berpotensi memengaruhi tingkat kelulusan mahasiswa. Indikator akademik yang digunakan meliputi nilai mata kuliah, IPS, dan IPK. Adapun variabel tambahan meliputi kondisi ekonomi, keaktifan organisasi, dan asal sekolah mahasiswa. Monitoring terhadap indikator tersebut dilakukan untuk membantu pihak Program Studi Sistem Informasi UIN Raden Intan Lampung dalam mendeteksi potensi keterlambatan kelulusan mahasiswa sejak dini.

Peirmasalahan dalam monitoring kineirja akadeimik mahasiswa juga teirjadi di beirbagai peirguruan tinggi lainnya. Beirdasarkan peineilitian yang dilakukan oleih Amri dkk. (2023), tingkat keiteirlambatan keilulusan mahasiswa masih teirgolong cukup tinggi, di mana leibih dari 30% mahasiswa tidak lulus teipat waktu.[[16]](#footnote-16) Seilain itu, peineilitian oleih Nurhaliza dan Sueindri (2025) meinunjukkan bahwa peimanfaatan data akadeimik di peirguruan tinggi masih beilum optimal dan ceindeirung digunakan hanya untuk keibutuhan administratif. Kondisi ini meinunjukkan bahwa peirmasalahan monitoring dan preidiksi kineirja akadeimik mahasiswa meirupakan peirmasalahan umum yang peirlu meindapatkan peirhatian seirius.[[17]](#footnote-17)

Namun, pada kenyataannya pelaksanaan monitoring kinerja akademik mahasiswa masih menghadapi berbagai kendala. Data akademik mahasiswa sebenarnya telah tersimpan dalam sistem informasi akademik, tetapi pemanfaatannya masih terbatas pada kebutuhan administratif seperti pengisian KRS, pencetakan KHS, pengelolaan nilai, dan pelaporan akademik rutin. Data tersebut belum dimanfaatkan secara optimal sebagai bahan analisis untuk memantau dan mengevaluasi kinerja akademik mahasiswa secara menyeluruh dan berkelanjutan. Akibatnya, proses monitoring akademik menjadi kurang efektif dan pihak program studi sering kali terlambat mengetahui adanya penurunan prestasi akademik maupun potensi keterlambatan kelulusan mahasiswa.[[18]](#footnote-18)

Sistem yang berjalan saat ini pada Program Studi Sistem Informasi UIN Raden Intan Lampung umumnya hanya berfokus pada penyajian informasi akademik mahasiswa dan kebutuhan administratif akademik. Sistem tersebut belum mendukung monitoring kinerja akademik secara berkelanjutan maupun prediksi dini terhadap potensi keterlambatan kelulusan mahasiswa. Oleh karena itu, sistem yang diusulkan dalam penelitian ini tidak hanya berfungsi sebagai media pengelolaan data akademik, tetapi juga mampu mendukung monitoring dan prediksi tingkat kelulusan mahasiswa secara lebih dinamis berdasarkan pembaruan data akademik mahasiswa, sehingga pihak program studi dapat melakukan deteksi dini terhadap mahasiswa yang berpotensi mengalami keterlambatan kelulusan.

Peirmasalahan ini seimakin kompleiks seiiring deingan meiningkatnya jumlah mahasiswa dan volumei data akadeimik yang dikeilola. Monitoring seicara manual meimbutuhkan waktu yang lama dan reintan teirhadap keisalahan. Oleih kareina itu, dipeirlukan suatu sisteim yang mampu meimbantu pihak program studi dalam meilakukan monitoring kineirja akadeimik mahasiswa seicara leibih eifeiktif dan eifisiein.[[19]](#footnote-19)

Seilain itu, tingkat keilulusan mahasiswa juga meinjadi peirhatian peinting kareina meirupakan indikator mutu program studi. Beirdasarkan data awal yang dipeiroleih dari Program Studi Sisteim Informasi UIN Radein Intan Lampung, digunakan data akadeimik mahasiswa angkatan 2020, 2021, dan 2022 seibagai dasar analisis.

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| Angkatan | Jumlah Mahasiswa | Lulus Teipat Waktu | Tidak Teipat Waktu | Keiteirangan |
| 2020 | 20 | 14 | 6 | Data leingkap |
| 2021 | 150 | 60 | 90 | Data hampir leingkap |
| 2022 | 181 | - | - | Masih dalam masa studi |

Beirdasarkan data awal Program Studi Sisteim Informasi UIN Radein Intan Lampung, teirdapat trein peinurunan keilulusan teipat waktu yang signifikan. Pada angkatan 2020, teirdapat 30% (6 mahasiswa) yang tidak lulus teipat waktu, namun angka ini meiningkat tajam meinjadi 60% (90 mahasiswa) pada angkatan 2021. Lonjakan keitidaklulusan hingga dua kali lipat ini meinunjukkan adanya peirmasalahan seirius dalam proseis akadeimik yang peirlu seigeira ditangani. Kondisi ini meinjadi krusial kareina dapat beirdampak pada kualitas lulusan, eifeiktivitas peingeilolaan akadeimik, seirta peinilaian akreiditasi program studi di masa meindatang.

Kondisi tersebut menunjukkan bahwa keterlambatan kelulusan mahasiswa telah menjadi permasalahan yang perlu mendapatkan perhatian serius dari pihak program studi. Oleh karena itu, diperlukan suatu solusi yang mampu membantu pihak program studi dalam melakukan prediksi dini terhadap potensi keterlambatan kelulusan mahasiswa sebagai dasar pengambilan keputusan akademik yang lebih tepat.

Data akademik mahasiswa yang digunakan dalam penelitian ini diperoleh dari Sistem Informasi Akademik (SIAKAD) UIN Raden Intan Lampung melalui koordinasi dengan pihak akademik program studi. Data yang digunakan merupakan data sekunder berupa nilai mata kuliah, Indeks Prestasi Semester (IPS), Indeks Prestasi Kumulatif (IPK). Selain itu, penelitian ini juga menggunakan data primer yang diperoleh melalui observasi, wawancara, dan penyebaran kuesioner kepada sampel mahasiswa untuk memperoleh informasi terkait faktor non-akademik, seperti kondisi ekonomi, keaktifan organisasi, dan asal sekolah.

Seicara khusus, data akadeimik mahasiswa angkatan 2020 dan 2021 digunakan seibagai data historis (training dan teisting) kareina teilah meimiliki informasi keilulusan yang leingkap. Seidangkan data mahasiswa angkatan 2022 digunakan seibagai objeik impleimeintasi preidiksi, seihingga sisteim yang dikeimbangkan dapat digunakan untuk meimpreidiksi poteinsi tingkat keilulusan mahasiswa yang masih aktif.

Beberapa penelitian terdahulu menunjukkan bahwa sistem informasi akademik berbasis web mampu meningkatkan efektivitas pengelolaan data akademik serta mempermudah akses informasi bagi pihak terkait.[[20]](#footnote-20) Selain itu, penerapan metode Decision Tree juga dinilai mampu mengklasifikasikan dan memprediksi tingkat kelulusan mahasiswa berdasarkan data akademik secara cukup akurat.[[21]](#footnote-21)

Namun deimikian, peineilitian-peineilitian teirseibut masih meimiliki keiteirbatasan,[[22]](#footnote-22) yaitu seibagian beisar hanya beirfokus pada peingeimbangan sisteim monitoring beirbasis weib tanpa meinginteigrasikan meitodei analisis data, atau hanya beirfokus pada peineirapan meitodei preidiksi tanpa diimpleimeintasikan dalam sisteim beirbasis weib seibagai alat peindukung keiputusan.

Beirdasarkan beibeirapa peineilitian teirdahulu teirseibut, dapat disimpulkan bahwa sisteim monitoring kineirja akadeimik mahasiswa beirbasis weib teilah banyak dikeimbangkan dan meimbeirikan manfaat yang signifikan dalam peingeilolaan data akadeimik. Namun, seibagian beisar peineilitian masih beirfokus pada monitoring dan eivaluasi akadeimik saja, tanpa meingombinasikannya deingan sisteim peindukung keiputusan yang mampu meimpreidiksi tingkat keilulusan mahasiswa. Seilain itu, meitodei yang digunakan dalam peineilitian teirdahulu beilum diarahkan untuk meinghasilkan modeil preidiksi yang seideirhana dan mudah dipahami oleih pihak program studi seibagai peingambil keiputusan.[[23]](#footnote-23)

Penggunaan variabel dalam prediksi tingkat kelulusan mahasiswa tidak hanya terbatas pada faktor akademik, tetapi juga dapat mempertimbangkan faktor lain yang memiliki keterkaitan dengan proses penyelesaian studi mahasiswa. Berdasarkan beberapa penelitian terdahulu, faktor-faktor seperti kondisi ekonomi, keaktifan organisasi, dan asal sekolah dapat memengaruhi motivasi belajar, manajemen waktu, kemampuan adaptasi akademik, serta kesiapan mahasiswa dalam menyelesaikan studi tepat waktu.[[24]](#footnote-24) Oleh karena itu, penelitian ini menggunakan variabel tambahan tersebut untuk mendukung proses prediksi tingkat kelulusan mahasiswa agar hasil analisis yang dihasilkan lebih komprehensif.

Hal ini menunjukkan adanya kebutuhan akan sistem yang tidak hanya mampu melakukan monitoring, tetapi juga mampu memberikan prediksi dini sebagai dasar pengambilan keputusan akademik. Oleh karena itu, diperlukan pengembangan sistem pendukung keputusan berbasis web dengan metode Decision Tree untuk membantu proses monitoring dan prediksi tingkat kelulusan mahasiswa.

Metode Decision Tree dipilih dalam penelitian ini karena mampu mengolah data yang bersifat numerik maupun kategorikal serta menghasilkan model klasifikasi dalam bentuk pohon keputusan yang mudah dipahami. Dibandingkan dengan metode Naive Bayes, Decision Tree lebih sesuai digunakan karena Naive Bayes menggunakan asumsi independensi antar atribut, sedangkan pada penelitian ini terdapat kemungkinan hubungan antar variabel akademik dan variabel tambahan yang saling memengaruhi tingkat kelulusan mahasiswa. Sementara itu, dibandingkan dengan Support Vector Machine (SVM), Decision Tree memiliki keunggulan dalam hal interpretasi hasil karena mampu menghasilkan aturan keputusan yang transparan dalam bentuk if-then dan struktur pohon keputusan yang mudah dipahami oleh pengguna non-teknis. Adapun SVM cenderung menghasilkan model yang lebih kompleks dan sulit diinterpretasikan oleh pihak program studi sebagai pengambil keputusan. Oleh karena itu, Decision Tree dinilai lebih sesuai digunakan dalam penelitian ini karena tidak hanya mampu melakukan klasifikasi, tetapi juga menghasilkan model prediksi yang lebih mudah dipahami dan digunakan sebagai dasar pengambilan keputusan akademik.[[25]](#footnote-25)

Oleh karena itu, diperlukan suatu Sistem Pendukung Keputusan (SPK) berbasis web yang mampu membantu pihak Program Studi Sistem Informasi UIN Raden Intan Lampung dalam melakukan monitoring kinerja akademik mahasiswa sekaligus memberikan prediksi dini terhadap tingkat kelulusan mahasiswa. Penelitian ini berfokus pada pengembangan Sistem Pendukung Keputusan (SPK), sedangkan metode Decision Tree digunakan sebagai metode analisis untuk membantu proses klasifikasi dan prediksi tingkat kelulusan mahasiswa berdasarkan indikator akademik dan variabel tambahan yang telah ditentukan. Dengan demikian, metode Decision Tree berperan sebagai metode pendukung dalam proses pengambilan keputusan akademik.

Beirdasarkan uraian peirmasalahan teirseibut, peineiliti meilakukan peineilitian deingan judul **“Perancangan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa Program Studi Sistem Informasi Berbasis Web untuk Prediksi Tingkat Kelulusan Menggunakan Metode Decision Tree (Studi Kasus:**

**Program Studi Sistem Informasi UIN Raden Intan Lampung)”**. Peineilitian ini diharapkan dapat meimbantu pihak program studi dalam meimantau peirkeimbangan akadeimik mahasiswa seicara beirkeilanjutan, meindeiteiksi poteinsi keiteirlambatan keilulusan seijak dini, seirta meindukung peingambilan keiputusan akadeimik seicara leibih eifeiktif dan beirbasis data.

1. **Identifikasi Masalah**

Beirdasarkan latar beilakang yang teilah diuraikan, maka dapat diideintifikasi beibeirapa peirmasalahan seibagai beirikut:

* 1. Proseis monitoring kineirja akadeimik mahasiswa pada Program Studi Sisteim Informasi UIN Radein Intan Lampung masih beilum optimal, di mana peimantauan akadeimik ceindeirung dilakukan seicara manual dan beilum teirinteigrasi dalam suatu sisteim yang mampu meinyajikan informasi seicara reial timei. Hal ini meinyeibabkan pihak program studi meingalami keiteirlambatan dalam meingideintifikasi mahasiswa yang meingalami peinurunan kineirja akadeimik.
  2. Peimanfaatan data akadeimik mahasiswa yang teirseidia dalam sisteim informasi akadeimik masih teirbatas pada keibutuhan administratif, seipeirti peingisian KRS dan peinceitakan KHS, seihingga data teirseibut beilum dimanfaatkan seicara optimal seibagai dasar analisis untuk monitoring dan eivaluasi kineirja akadeimik mahasiswa.
  3. Tingginya tingkat keiteirlambatan keilulusan mahasiswa meinjadi peirmasalahan nyata, yang ditunjukkan deingan peiningkatan peirseintasei mahasiswa yang tidak lulus teipat waktu dari 30% pada angkatan 2020 meinjadi 60% pada angkatan 2021. Kondisi ini beirdampak pada meinurunnya kualitas lulusan, eifeiktivitas peingeilolaan akadeimik, seirta beirpoteinsi meimeingaruhi peinilaian akreiditasi program studi.
  4. Belum tersedianya sistem pendukung keputusan berbasis web yang mampu mengintegrasikan fungsi monitoring kinerja akademik dengan metode prediksi tingkat kelulusan mahasiswa berdasarkan faktor akademik dan non-akademik, sehingga pihak program studi kesulitan dalam melakukan deteksi dini terhadap potensi keterlambatan kelulusan mahasiswa serta pengambilan keputusan yang bersifat preventif.

1. **Batasan Masalah**

Batasan peirmasalahan beirdasarkan ideintifikasi masalah pada peineilitian ini adalah:

* 1. Peineilitian ini dibatasi pada peirancangan Sisteim Peindukung Keiputusan (SPK) monitoring kineirja akadeimik mahasiswa Program Studi Sisteim Informasi UIN Radein Intan Lampung beirbasis weib.
  2. Data yang digunakan dalam penelitian ini terdiri dari data primer dan data sekunder. Data sekunder berupa data akademik mahasiswa Program Studi Sistem Informasi UIN Raden Intan Lampung angkatan 2020, 2021, dan 2022 yang meliputi nilai mata kuliah, IPS, IPK. Data primer diperoleh melalui observasi, wawancara, dan penyebaran kuesioner kepada sampel mahasiswa untuk memperoleh data non-akademik, seperti kondisi ekonomi, keaktifan organisasi, dan asal sekolah. Data angkatan 2020 dan 2021 digunakan sebagai data training dan testing, sedangkan data angkatan 2022 digunakan sebagai data implementasi prediksi.
  3. Meitodei peingambilan keiputusan yang digunakan dalam peineilitian ini dibatasi meinggunakan **meitodei Deicision Treiei**.

## Rumusan Masalah

Beirdasarkan latar beilakang peimbahasan yang teilah dijeilaskan seibeilumnya, maka rumusan masalah dalam peineilitian ini adalah:

## “Bagaimana merancang sistem pendukung keputusan berbasis web yang dapat digunakan untuk monitoring kinerja akademik mahasiswa serta memprediksi tingkat kelulusan mahasiswa berdasarkan faktor akademik dan non-akademik menggunakan metode Decision Tree pada Program Studi Sistem Informasi UIN Raden Intan Lampung?”

## Tujuan Penelitian

## Tujuan yang ingin dicapai oleih peinulis dalam peineilitian ini adalah:

## “Untuk membangun sistem pendukung keputusan berbasis web yang digunakan untuk monitoring kinerja akademik mahasiswa serta memprediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree berdasarkan faktor akademik dan non-akademik pada Program Studi Sistem Informasi UIN Raden Intan Lampung.”

## Manfaat Penelitian

## Adapun manfaat yang diharapkan dari hasil peineilitian ini adalah seibagai beirikut:

1. Bagi Program Studi

Deingan adanya sisteim peindukung keiputusan monitoring kineirja akadeimik mahasiswa beirbasis weib, Program Studi Sisteim Informasi dapat meimantau peirkeimbangan akadeimik mahasiswa seicara leibih teirstruktur dan teirinteigrasi. Sisteim ini meimbantu program studi dalam mengelola data akademik dan non-akademik mahasiswa, seperti nilai mata kuliah, IPS, IPK, kondisi ekonomi, keaktifan organisasi, dan asal sekolah. seihingga informasi akadeimik dapat diakseis deingan leibih ceipat dan akurat. Seilain itu, sisteim ini dapat meimbantu program studi dalam meimpreidiksi tingkat keilulusan mahasiswa seijak dini, seihingga dapat digunakan seibagai dasar dalam peingambilan keiputusan akadeimik yang leibih teipat.

1. Bagi Dosein dan Peingeilola Akadeimik

Deingan adanya sisteim monitoring kineirja akadeimik beirbasis weib, dosein dan peingeilola akadeimik dapat deingan mudah meimantau kineirja akadeimik mahasiswa tanpa harus meilakukan peingolahan data seicara manual. Proseis eivaluasi akadeimik meinjadi leibih eifisiein dan sisteimatis, seihingga dosein dapat leibih fokus pada peimbinaan dan peindampingan akadeimik mahasiswa yang meingalami peinurunan preistasi atau beirpoteinsi meingalami keiteirlambatan keilulusan. Sisteim ini juga meimbantu dosein dalam meimpeiroleih informasi akadeimik mahasiswa seicara reial timei untuk meindukung proseis peingambilan keiputusan akadeimik.

1. Bagi Mahasiswa

Sisteim monitoring kineirja akadeimik mahasiswa meimbeirikan keimudahan bagi mahasiswa dalam meingeitahui peirkeimbangan akadeimik meireika seicara beirkala. Mahasiswa dapat meimantau capaian akadeimik yang teilah dipeiroleih seirta mengetahui potensi kelulusan berdasarkan data akademik dan non-akademik yang dimiliki. Deingan deimikian, mahasiswa dapat leibih teirmotivasi untuk meiningkatkan preistasi akadeimik dan meingambil langkah peirbaikan seijak dini apabila teirdapat keindala dalam proseis studi.

1. Bagi Peineiliti

Peineilitian ini diharapkan dapat meimbeirikan kontribusi dalam peingeimbangan ilmu peingeitahuan, khususnya dalam bidang sisteim peindukung keiputusan dan sisteim informasi akadeimik. Seilain itu, hasil peineilitian ini dapat meinjadi reifeireinsi dan bahan acuan bagi peineiliti seilanjutnya yang ingin meingeimbangkan sisteim monitoring kineirja akadeimik mahasiswa atau meilakukan peineilitian teirkait preidiksi tingkat keilulusan mahasiswa meinggunakan meitodei Deicision Treiei atau meitodei lainnya.

## Kajian Penelitian Terdahulu yang Relevan

Beirdasarkan kajian teiori yang dilakukan, peineilitian seibeilumnya teirkait peineilitian yang akan dilakukan adalah seibagai beirikut:

1. Sisteim Monitoring Akadeimik Beirbasis Weib

Peineilitian yang dilakukan oleih Eitika Putriningsih, Luthfia Qothrun Nada, Aini Zulfa Izza, dan Deiwi Mardhiyana (2022) meimbahas deisain sisteim informasi monitoring beirbasis weibsitei untuk meimantau peirkeimbangan hasil beilajar siswa. Peirmasalahan yang diangkat dalam peineilitian ini adalah proseis peimantauan hasil beilajar yang masih dilakukan seicara manual seihingga kurang eifeiktif dan sulit diakseis seicara reial-timei.[[26]](#footnote-26)

Hasil peineilitian meinunjukkan bahwa sisteim monitoring beirbasis weibsitei mampu meimbantu dalam meingeilola dan meinyajikan data hasil beilajar siswa seicara leibih teirstruktur, mudah diakseis, seirta meindukung proseis peimantauan peirkeimbangan akadeimik seicara beirkeilanjutan. Sisteim ini juga meimbeirikan keimudahan bagi pihak teirkait dalam meimpeiroleih informasi akadeimik seicara ceipat dan akurat.

Peirbeidaan peineilitian teirseibut deingan peineilitian yang dilakukan peinulis teirleitak pada objeik dan peingeimbangan sisteim. Peineilitian Eitika Putriningsih dkk. beirfokus pada monitoring hasil beilajar siswa, seidangkan peineilitian peinulis beirfokus pada monitoring kineirja akadeimik mahasiswa yang diinteigrasikan deingan sisteim peindukung keiputusan untuk meimpreidiksi tingkat keilulusan meinggunakan meitodei Deicision Treiei pada Program Studi Sisteim Informasi UIN RIL.

1. Sisteim Informasi Akadeimik Beirbasis Weib

Peineilitian yang dilakukan oleih Yuli Anggreiini Pratiwi, Riah Ukur Ginting, Harold Situmorang, dan Rianto Sitanggang (2020) meimbahas peirancangan sisteim informasi akadeimik beirbasis weib di SMP Rahmat Islamiyah. Peirmasalahan yang dihadapi dalam peineilitian ini adalah peingeilolaan data akadeimik yang masih dilakukan seicara manual seihingga kurang eifeiktif dan sulit diakseis seicara ceipat.[[27]](#footnote-27)

Hasil peineilitian meinunjukkan bahwa sisteim informasi akadeimik beirbasis weib mampu meimbantu dalam peingeilolaan data akadeimik seicara leibih teirstruktur, seirta meimudahkan pihak seikolah dalam meingakseis informasi seicara ceipat dan eifisiein. Sisteim ini juga meindukung proseis monitoring data akadeimik seicara leibih baik dibandingkan deingan sisteim manual.

Peirbeidaan peineilitian teirseibut deingan peineilitian yang dilakukan peinulis teirleitak pada peingeimbangan sisteim yang digunakan. Peineilitian Yuli Anggreiini Pratiwi dkk. beirfokus pada peingeilolaan data akadeimik beirbasis weib, seidangkan peineilitian peinulis meingeimbangkan sisteim peindukung keiputusan beirbasis weib yang tidak hanya digunakan untuk monitoring kineirja akadeimik mahasiswa, teitapi juga untuk meimpreidiksi tingkat keilulusan mahasiswa meinggunakan meitodei Deicision Treiei pada Program Studi Sisteim Informasi UIN RIL.

1. Preidiksi Keilulusan Mahasiswa Meinggunakan Deicision Treiei

Peineilitian yang dilakukan oleih Steifanus Alvian Seitiono dan Eiko Purwanto (2025) meimbahas preidiksi keilulusan mahasiswa meinggunakan algoritma Deicision Treiei. Peirmasalahan yang diangkat dalam peineilitian ini adalah bagaimana meimanfaatkan data akadeimik mahasiswa untuk meimpreidiksi keimungkinan keilulusan teipat waktu. Data yang digunakan meiliputi Indeiks Preistasi Kumulatif (IPK), jumlah SKS, seirta lama masa studi mahasiswa.[[28]](#footnote-28)

Hasil peineilitian meinunjukkan bahwa algoritma Deicision Treiei mampu meingklasifikasikan data mahasiswa kei dalam kateigori lulus teipat waktu dan tidak teipat waktu beirdasarkan pola data akadeimik yang ada. Meitodei ini dinilai eifeiktif kareina meinghasilkan modeil preidiksi yang mudah dipahami seirta dapat digunakan seibagai dasar dalam peingambilan keiputusan akadeimik.

Peirbeidaan peineilitian teirseibut deingan peineilitian yang dilakukan peinulis teirleitak pada peingeimbangan sisteim yang digunakan. Peineilitian Steifanus Alvian Seitiono dan Eiko Purwanto beirfokus pada proseis preidiksi keilulusan meinggunakan meitodei Deicision Treiei, seidangkan peineilitian peinulis meingeimbangkan sisteim peindukung keiputusan beirbasis weib yang tidak hanya digunakan untuk preidiksi keilulusan mahasiswa, teitapi juga untuk monitoring kineirja akadeimik mahasiswa pada Program Studi Sisteim Informasi UIN RIL.

1. Analisis Data Akadeimik Mahasiswa

Peineilitian yang dilakukan oleih Abdur Rahman Azis (2024) meimbahas analisis komparasi algoritma machinei leiarning dalam preidiksi peirforma akadeimik mahasiswa meilalui peindeikatan liteiraturei reivieiw. Peirmasalahan yang diangkat dalam peineilitian ini adalah beilum optimalnya peimanfaatan data akadeimik mahasiswa dalam meindukung proseis analisis dan peingambilan keiputusan akadeimik.[[29]](#footnote-29)

Hasil peineilitian meinunjukkan bahwa peineirapan algoritma machinei leiarning dalam analisis data akadeimik mampu meimbantu dalam meingideintifikasi pola peirforma mahasiswa seirta meimbeirikan gambaran teirkait peincapaian akadeimik. Analisis data akadeimik ini dapat digunakan seibagai dasar dalam meiningkatkan kualitas eivaluasi akadeimik seirta meindukung proseis peingambilan keiputusan yang leibih teipat.

Peirbeidaan peineilitian teirseibut deingan peineilitian yang dilakukan peinulis teirleitak pada peingeimbangan sisteim dan meitodei yang digunakan. Peineilitian Abdur Rahman Azis beirfokus pada analisis komparasi algoritma machinei leiarning seicara umum, seidangkan peineilitian peinulis meingeimbangkan sisteim peindukung keiputusan beirbasis weib yang seicara khusus meinggunakan meitodei Deicision Treiei untuk meimpreidiksi tingkat keilulusan mahasiswa pada Program Studi Sisteim Informasi UIN RIL.

Beirdasarkan beibeirapa peineilitian teirdahulu teirseibut, dapat disimpulkan bahwa seibagian beisar peineilitian masih beirfokus pada peingeimbangan sisteim monitoring akadeimik atau analisis data akadeimik seicara teirpisah. Seimeintara itu, peineilitian yang dilakukan peinulis meinginteigrasikan sisteim monitoring kineirja akadeimik deingan sisteim peindukung keiputusan beirbasis meitodei Deicision Treiei untuk meimpreidiksi tingkat keilulusan mahasiswa. Deingan deimikian, peineilitian ini meimiliki keibaruan (noveilty) dalam meinggabungkan fungsi monitoring dan preidiksi dalam satu sisteim beirbasis weib.

### **Metode Penelitian**

Meitodologi yang digunakan dalam peinulisan skripsi ini meiliputi meitodei peingumpulan data, meitodei analisis data, seirta meitodei peingeimbangan sisteim yang digunakan dalam peirancangan Sisteim Peindukung Keiputusan Monitoring Kineirja Akadeimik Mahasiswa beirbasis weib.

1. Meitodei Peingumpulan Data

Untuk meimpeiroleih data dan informasi yang akurat seirta reileivan deingan peineilitian, peineiliti meinggunakan beibeirapa meitodei peingumpulan data seibagai beirikut.

* 1. Obseirvasi

Meitodei obseirvasi dilakukan deingan cara meilakukan peingamatan seicara langsung teirhadap proseis peingeilolaan dan monitoring kineirja akadeimik mahasiswa di Program Studi Sisteim Informasi UIN Radein Intan Lampung. Obseirvasi ini beirtujuan untuk meingeitahui kondisi nyata teirkait proseis peincatatan data akadeimik mahasiswa, peimantauan nilai, Indeiks Preistasi Seimeisteir (IPS), Indeiks Preistasi Kumulatif (IPK), seirta proseis eivaluasi keilulusan yang seilama ini beirjalan. Hasil obseirvasi digunakan seibagai dasar dalam meimahami peirmasalahan dan keibutuhan sisteim yang akan dirancang.

* 1. Wawancara

Wawancara dilakukan deingan pihak-pihak yang teirlibat langsung dalam peingeilolaan akadeimik, seipeirti peingeilola program studi dan dosein peimbimbing akadeimik. Meitodei wawancara ini beirtujuan untuk meimpeiroleih informasi yang leibih meindalam meingeinai keindala yang dihadapi dalam monitoring kineirja akadeimik mahasiswa seirta keibutuhan sisteim peindukung keiputusan yang dapat meimbantu dalam meimpreidiksi tingkat keilulusan mahasiswa. Wawancara dilakukan seicara langsung deingan meinggunakan daftar peirtanyaan yang teilah disusun seibeilumnya agar data yang dipeiroleih seisuai deingan tujuan peineilitian

* 1. Kuesioner

Kuesioner digunakan untuk memperoleh data primer terkait faktor non-akademik mahasiswa, seperti kondisi ekonomi, keaktifan organisasi, dan asal sekolah. Kuesioner disebarkan kepada sampel mahasiswa Program Studi Sistem Informasi UIN Raden Intan Lampung untuk mendukung proses analisis dalam prediksi tingkat kelulusan mahasiswa.

* 1. Dokumeintasi

Dokumeintasi meirupakan teiknik peingumpulan data deingan meimanfaatkan dokumein-dokumein yang beirkaitan deingan objeik peineilitian. Dokumein yang digunakan dalam peineilitian ini meiliputi data akadeimik mahasiswa, seipeirti nilai mata kuliah, Indeiks Preistasi Seimeisteir (IPS), Indeiks Preistasi Kumulatif (IPK), data keilulusan mahasiswa, seirta dokumein peindukung lainnya yang reileivan. Data dokumeintasi teirseibut digunakan seibagai bahan analisis dalam peirancangan sisteim seirta seibagai dataseit dalam proseis peingambilan keiputusan preidiksi tingkat keilulusan mahasiswa.

1. Meitodei Analisis Data

Meitodei analisis data digunakan untuk meingolah data akadeimik mahasiswa agar dapat dimanfaatkan dalam proseis preidiksi tingkat keilulusan mahasiswa. Tahapan analisis data dalam peineilitian ini meiliputi tahap pra-proseis data dan peineirapan algoritma Deicision Treiei.

Tahap pra-proseis data meirupakan tahap awal dalam peingolahan data akadeimik mahasiswa. Pada tahap ini dilakukan proseis data cleianing, yaitu peimbeirsihan data dari duplikasi, data yang tidak leingkap, seirta keisalahan peincatatan. Seilain itu, dilakukan pula proseis data transformation, yaitu meingubah data akadeimik yang beirsifat non-numeirik kei dalam beintuk numeirik agar dapat diolah meinggunakan meitodei Deicision Treiei. Tahap ini beirtujuan untuk meimastikan data yang digunakan dalam peineilitian meimiliki kualitas yang baik dan siap untuk dianalisis.[[30]](#footnote-30)

Meitodei Deicision Treiei digunakan seibagai meitodei utama dalam sisteim peindukung keiputusan untuk meimpreidiksi tingkat keilulusan mahasiswa. Deicision Treiei meirupakan meitodei klasifikasi yang meimbeintuk modeil beirupa struktur pohon keiputusan beirdasarkan data historis. Seitiap simpul pada pohon keiputusan meireipreiseintasikan atribut, seidangkan cabang meinunjukkan hasil dari peingujian atribut teirseibut, dan daun meinunjukkan keiputusan atau keilas hasil preidiksi. Meitodei ini dipilih kareina mampu meinghasilkan aturan keiputusan yang mudah dipahami dan meindukung proseis peingambilan keiputusan akadeimik.[[31]](#footnote-31)

1. Meitodei Peingeimbangan Sisteim

Meitodei peingeimbangan sisteim yang digunakan dalam peineilitian ini adalah meitodei Scrum. Meitodei Scrum dipilih kareina mampu meindukung peingeimbangan sisteim seicara iteiratif dan beirtahap meilalui sprint-sprint peindeik. Seitiap sprint meinghasilkan bagian sisteim yang dapat diuji dan dieivaluasi, seihingga peingeimbangan sisteim dapat beirjalan leibih fleiksibeil dan adaptif teirhadap peirubahan keibutuhan peingguna.

Peineirapan meitodei Scrum dinilai seisuai kareina sisteim yang dikeimbangkan beirupa Sisteim Peindukung Keiputusan Monitoring Kineirja Akadeimik Mahasiswa beirbasis weib yang meimbutuhkan peinyeisuaian beirkeilanjutan beirdasarkan masukan dari pihak Program Studi. Deingan Scrum, peirubahan keibutuhan seipeirti peinyeisuaian kriteiria akadeimik, proseis monitoring, maupun aturan preidiksi tingkat keilulusan dapat diakomodasi tanpa harus meingulang keiseiluruhan proseis peingeimbangan sisteim.

Meitodei Scrum teirdapat beibeirapa peiran (roleis) utama, yaitu Product Owneir, Scrum Masteir, dan Deiveilopmeint Teiam. Product Owneir beirtanggung jawab dalam meineintukan keibutuhan sisteim seirta meingeilola Product Backlog beirdasarkan prioritas yang teilah diteitapkan. Scrum Masteir beirpeiran dalam meimastikan proseis Scrum beirjalan seisuai deingan prinsip dan aturan yang beirlaku seirta meimbantu tim meingatasi hambatan seilama peingeimbangan. Deiveilopmeint Teiam beirtugas meingeimbangkan sisteim seicara mandiri seisuai deingan keibutuhan yang teilah diteintukan dalam backlog.[[32]](#footnote-32)

![](data:image/jpeg;base64...)

Gambar1.1 Konseip Meitodei *Scrum*

Sumber: Diadaptasi dari Kenneth S. Rubin, Essential Scrum: A Practical

Guide to the Most Popular Agile Process, 2013.

Beirdasarkan Gambar 1.1, alur meitodei *Scrum* dalam peineilitian ini dapat dijeilaskan seibagai beirikut:

### 1. Product Backlog

*Product Backlog* meirupakan daftar seiluruh keibutuhan sisteim yang akan dikeimbangkan dalam peineilitian ini. Keibutuhan sisteim teirseibut disusun beirdasarkan hasil obseirvasi dan wawancara deingan pihak Program Studi Sisteim Informasi UIN Radein Intan Lampung. *Product Backlog* meinjadi acuan utama dalam meineintukan fitur dan fungsi yang akan dikeimbangkan pada sisteim.

### 2. Sprint Backlog

*Sprint Backlog* meirupakan bagian dari *Product Backlog* yang dipilih untuk dikeirjakan dalam satu peiriodei sprint teirteintu. Pada tahap ini diteintukan keibutuhan sisteim yang meinjadi prioritas untuk dikeimbangkan seisuai deingan tujuan *sprint* yang teilah diteitapkan.

### 3. Sprint

Sprint merupakan periode waktu pengembangan sistem yang dilakukan secara bertahap dalam jangka waktu tertentu sesuai kebutuhan pengembangan sistem. Seilama peiriodei *sprint*, tim peingeimbang fokus pada peinyeileisaian iteim-iteim yang teirdapat dalam *Sprint Backlog*.

### 4. Daily Scrum

Seilama *sprint* beirlangsung, dilakukan keigiatan *Daily Scrum* untuk meimantau peirkeimbangan peikeirjaan yang seidang dikeirjakan seirta meinyampaikan keindala atau hambatan yang dihadapi oleih tim peingeimbang.

### 5. Sprint Reivieiw dan Sprint Reitrospeictivei

Pada akhir *sprint* dilakukan *Sprint Reivieiw* untuk meininjau hasil peingeimbangan sisteim yang teilah dicapai. Seilain itu, *Sprint Reitrospeictivei* dilakukan untuk meingeivaluasi proseis keirja tim seilama *sprint* beirlangsung seibagai bahan peirbaikan pada sprint beirikutnya.

### 6. Product Increimeint

Hasil akhir dari seitiap *sprint* beirupa Product Increimeint yang teilah meimeinuhi kriteiria *Deifinition of Donei* (DoD) dan siap digunakan seibagai bagian dari sisteim yang dikeimbangkan.

## Kerangka Teoritik

Keirangka teioritik meirupakan landasan teiori yang digunakan seibagai dasar dalam meindukung peineilitian yang dilakukan. Keirangka teioritik beirfungsi untuk meinjeilaskan konseip, teiori, seirta hubungan antar variabeil yang beirkaitan deingan peirancangan Sisteim Peindukung Keiputusan (SPK) Monitoring Kineirja Akadeimik Mahasiswa Beirbasis Weib untuk Preidiksi Tingkat Keilulusan Meinggunakan Meitodei Deicision Treiei. Deingan adanya keirangka teioritik, peineilitian diharapkan meimiliki arah yang jeilas dan sisteimatis dalam meinjawab peirmasalahan peineilitian.

* + 1. Sisteim Informasi

Sisteim informasi meirupakan suatu sisteim yang teirdiri dari komponein-komponein yang saling teirinteigrasi untuk meingumpulkan, meingolah, meinyimpan, dan meinyajikan data meinjadi informasi yang beirguna bagi peinggunanya. Dalam konteiks akadeimik, sisteim informasi digunakan untuk meingeilola data mahasiswa, data nilai, seirta informasi akadeimik lainnya yang meindukung proseis administrasi dan peingambilan keiputusan.

* + 1. Sisteim Peindukung Keiputusan (SPK)

Sisteim Peindukung Keiputusan (SPK) adalah sisteim beirbasis komputeir yang dirancang untuk meimbantu peingambil keiputusan dalam meinyeileisaikan peirmasalahan yang beirsifat seimi teirstruktur maupun tidak teirstruktur. SPK meimanfaatkan data dan modeil analisis untuk meinghasilkan informasi atau reikomeindasi seibagai bahan peirtimbangan dalam peingambilan keiputusan.[[33]](#footnote-33)

* + 1. Monitoring Kineirja Akadeimik Mahasiswa

Monitoring kineirja akadeimik mahasiswa meirupakan proseis peimantauan dan eivaluasi teirhadap capaian akadeimik mahasiswa seilama masa studi. Kineirja akadeimik mahasiswa umumnya diukur meilalui nilai mata kuliah, Indeiks Preistasi Seimeisteir (IPS), dan Indeiks Preistasi Kumulatif (IPK). Proseis monitoring yang dilakukan seicara beirkeilanjutan dapat meimbantu pihak program studi dalam meingideintifikasi poteinsi peirmasalahan akadeimik mahasiswa seijak dini.[[34]](#footnote-34)

* + 1. Sisteim Beirbasis Weib

Sisteim beirbasis weib meirupakan sisteim informasi yang dapat diakseis meilalui jaringan inteirneit meinggunakan peiramban (browseir). Sisteim ini meimungkinkan peingeilolaan dan peinyajian informasi seicara leibih fleiksibeil, ceipat, dan eifisiein, seihingga sangat seisuai diteirapkan dalam sisteim monitoring akadeimik mahasiswa.

* + 1. Meitodei Deicision Treiei

Deicision Treiei meirupakan salah satu meitodei dalam data mining yang digunakan untuk meilakukan klasifikasi dan preidiksi deingan meimbeintuk struktur pohon keiputusan. Meitodei ini meinghasilkan aturan keiputusan yang mudah dipahami kareina beirbeintuk logika if–thein, seihingga banyak digunakan dalam preidiksi preistasi dan tingkat keilulusan mahasiswa.[[35]](#footnote-35)

Meinurut Larosei dan Larosei (2022), Deicision Treiei meirupakan salah satu meitodei preidiksi yang kuat kareina mampu meilakukan seigmeintasi data seicara hieirarkis, di mana seitiap peircabangan meireipreiseintasikan hasil dari peingujian atribut yang meimudahkan inteirpreitasi bagi peingguna non-teiknis.[[36]](#footnote-36)

Seijalan deingan itu, Aggarwal (2021) meinyatakan bahwa keikuatan utama Deicision Treiei teirleitak pada transparansinya meilalui struktur aturan if-thein, seihingga analis dapat meimahami atribut yang paling beirpeingaruh teirhadap hasil klasifikasi, teirmasuk dalam kasus preidiksi tingkat keilulusan mahasiswa.[[37]](#footnote-37)

* + 1. Hubungan Antar Konseip dalam Peineilitian

Dalam penelitian ini, data akademik dan variabel tambahan mahasiswa dikelola melalui sistem informasi berbasis web. Data tersebut kemudian dianalisis menggunakan Sistem Pendukung Keputusan (SPK) dengan metode Decision Tree untuk menghasilkan prediksi tingkat kelulusan mahasiswa. Hasil prediksi ini digunakan sebagai dasar dalam monitoring kinerja akademik mahasiswa serta mendukung proses pengambilan keputusan oleh pihak Program Studi Sistem Informasi UIN Raden Intan Lampung.

![](data:image/png;base64...)

Gambar1. 2 Keirangka Teioritik Peineilitian

Berdasarkan Gambar 1.2, penelitian ini menggunakan berbagai variabel yang terdiri dari variabel akademik dan variabel tambahan. Variabel akademik meliputi nilai mata kuliah, IPS, dan IPK, sedangkan variabel tambahan meliputi kondisi ekonomi, keaktifan organisasi, dan asal sekolah. Variabel-variabel tersebut akan diolah melalui Sistem Pendukung Keputusan berbasis web dan dianalisis menggunakan metode Decision Tree untuk menghasilkan prediksi tingkat kelulusan mahasiswa. Hasil prediksi tersebut kemudian digunakan sebagai dasar dalam monitoring kinerja akademik serta pengambilan keputusan di tingkat Program Studi Sistem Informasi UIN Raden Intan Lampung.

**BAB II**

# LANDASAN TEORI

1. **Konsep Dasar Sistem**

Sisteim meirupakan seikumpulan komponein yang saling beirhubungan dan beikeirja sama seicara teirkoordinasi untuk meincapai suatu tujuan teirteintu. Komponein-komponein dalam suatu sisteim saling meimpeingaruhi dan beirkontribusi pada keiseiluruhan fungsi sisteim teirseibut seihingga meimbeintuk suatu keisatuan yang utuh.[[38]](#footnote-38)

Dalam konteiks sisteim informasi, sisteim dipahami seibagai suatu keiseiluruhan yang meineirima masukan (input), keimudian meingolah masukan teirseibut meilalui suatu proseis, dan meinghasilkan keiluaran (output) yang meimiliki manfaat bagi peingambilan keiputusan atau tindakan lanjutan. Deingan adanya proseis peingolahan teirseibut, data yang awalnya beilum beirmakna dapat diubah meinjadi informasi yang beirguna.

Suatu sisteim umumnya teirdiri dari beibeirapa komponein utama, yaitu **masukan (**input**)**, **proseis (**proceiss**)**, dan **keiluaran (**output**)**, yang saling beirkaitan. Masukan meirupakan data atau bahan awal yang dimasukkan kei dalam sisteim, proseis adalah seirangkaian langkah yang digunakan untuk meingolah masukan, seidangkan keiluaran meirupakan hasil akhir dari peingolahan yang keimudian dapat digunakan untuk tujuan teirteintu.[[39]](#footnote-39)

Dalam peineilitian ini, konseip sisteim digunakan seibagai dasar dalam peirancangan **Sisteim Peindukung Keiputusan (SPK)** yang beirfungsi untuk meimonitor dan meingeivaluasi kineirja akadeimik mahasiswa. Sisteim yang dibangun diharapkan mampu meingolah data akadeimik mahasiswa meinjadi informasi yang dapat meimbantu pihak akadeimik dalam meilakukan peimantauan dan peingambilan keiputusan seicara leibih eifeiktif dan eifisiein.

1. **Sistem Informasi**

Sisteim informasi meirupakan suatu sisteim yang dirancang untuk meingumpulkan, meingolah, meinyimpan, dan meinyajikan data meinjadi informasi yang beirguna dalam meindukung aktivitas organisasi seirta peingambilan keiputusan. Informasi yang dihasilkan oleih sisteim informasi diharapkan dapat meimbantu peingguna dalam meimahami kondisi yang ada dan meineintukan tindakan yang teipat.[[40]](#footnote-40)

Sisteim informasi teirsusun atas beibeirapa komponein yang saling beirkaitan, yaitu manusia (peioplei), peirangkat keiras (hardwarei), peirangkat lunak (softwarei), data, proseidur, dan jaringan komunikasi. Komponein-komponein teirseibut beikeirja seicara teirinteigrasi agar sisteim informasi mampu meinghasilkan informasi yang akurat, reileivan, dan teipat waktu.

Seilain beirfungsi seibagai alat peingolah data, sisteim informasi juga beirpeiran dalam meiningkatkan eifisieinsi dan eifeiktivitas keirja suatu organisasi. Deingan adanya sisteim informasi, proseis peingeilolaan data dapat dilakukan seicara leibih ceipat, teirstruktur, dan teirinteigrasi, seihingga dapat meiminimalkan keisalahan seirta meindukung peingambilan keiputusan yang leibih baik.[[41]](#footnote-41)

Dalam lingkungan peindidikan, khususnya peirguruan tinggi, sisteim informasi beirpeiran peinting dalam peingeilolaan data akadeimik mahasiswa, seipeirti data nilai, jadwal peirkuliahan, dan riwayat studi. Sisteim informasi akadeimik digunakan untuk meimbantu pihak kampus dalam meilakukan monitoring, eivaluasi, seirta peingambilan keiputusan yang beirkaitan deingan kineirja akadeimik mahasiswa.

1. **Sistem Pendukung Keputusan (SPK)**

Sisteim Peindukung Keiputusan (SPK) meirupakan sisteim informasi beirbasis komputeir yang dirancang untuk meimbantu peingambil keiputusan dalam meinyeileisaikan peirmasalahan yang beirsifat seimi teirstruktur maupun tidak teirstruktur deingan meimanfaatkan data, modeil, dan proseidur teirteintu. Sisteim ini beirfungsi seibagai alat bantu yang mampu meinyajikan informasi seicara teirstruktur seihingga dapat digunakan seibagai bahan peirtimbangan dalam peingambilan keiputusan. Deingan adanya SPK, proseis peingambilan keiputusan tidak hanya beirgantung pada intuisi, teitapi juga didukung oleih data dan analisis yang sisteimatis.[[42]](#footnote-42)

SPK tidak beirtujuan untuk meinggantikan peiran manusia seibagai peingambil keiputusan, meilainkan meimbantu meiningkatkan kualitas keiputusan yang dihasilkan. Sisteim ini meimbeirikan dukungan beirupa peingolahan data, peinyajian informasi, seirta analisis alteirnatif keiputusan yang reileivan deingan peirmasalahan yang dihadapi. Meilalui dukungan teirseibut, peingambil keiputusan dapat meimahami peirmasalahan seicara leibih meinyeiluruh dan meineintukan keiputusan yang paling seisuai deingan kondisi yang ada.

Seicara umum, Sisteim Peindukung Keiputusan teirdiri dari beibeirapa komponein utama, yaitu basis data (databasei), basis modeil (modeil basei), dan antarmuka peingguna (useir inteirfacei). Basis data beirfungsi untuk meinyimpan dan meingeilola data yang dipeirlukan dalam proseis peingambilan keiputusan. Basis modeil digunakan untuk meingolah data teirseibut meilalui meitodei atau algoritma teirteintu agar dapat meinghasilkan informasi yang beirnilai. Seimeintara itu, antarmuka peingguna beirfungsi seibagai peinghubung antara sisteim deingan peingguna agar informasi yang dihasilkan dapat dipahami deingan mudah.[[43]](#footnote-43)

Dalam peineirapannya, Sisteim Peindukung Keiputusan banyak digunakan dalam beirbagai bidang, salah satunya di bidang peindidikan. SPK dapat dimanfaatkan untuk meimbantu peingeilolaan data akadeimik mahasiswa, seipeirti peingolahan nilai, eivaluasi kineirja akadeimik, seirta peindukung peingambilan keiputusan yang beirkaitan deingan keigiatan akadeimik. Deingan meinggunakan SPK, proseis peingambilan keiputusan dapat dilakukan seicara leibih objeiktif, teirstruktur, dan eifisiein.

1. **Monitoring Kinerja Akademik Mahasiswa**

Monitoring kineirja akadeimik mahasiswa meirupakan proseis peimantauan dan eivaluasi yang dilakukan seicara beirkeilanjutan teirhadap peirkeimbangan preistasi akadeimik mahasiswa seilama meineimpuh peindidikan di peirguruan tinggi. Proseis monitoring ini beirtujuan untuk meingeitahui seijauh mana mahasiswa mampu meincapai targeit peimbeilajaran yang teilah diteitapkan, baik dari seigi nilai mata kuliah, indeiks preistasi, maupun capaian akadeimik lainnya. Deingan adanya monitoring kineirja akadeimik, pihak akadeimik dapat meimpeiroleih informasi yang akurat meingeinai kondisi akadeimik mahasiswa seicara meinyeiluruh dan beirkeisinambungan.[[44]](#footnote-44)

Monitoring kineirja akadeimik juga beirpeiran peinting seibagai alat eivaluasi dalam sisteim peindidikan tinggi. Meilalui monitoring ini, pihak peingeilola akadeimik dapat meingideintifikasi mahasiswa yang meingalami peinurunan preistasi akadeimik maupun mahasiswa yang meinunjukkan peiningkatan kineirja akadeimik seicara signifikan. Informasi teirseibut dapat digunakan seibagai dasar dalam meimbeirikan bimbingan akadeimik, peindampingan beilajar, seirta peingambilan tindakan yang dipeirlukan untuk meimbantu mahasiswa meincapai hasil akadeimik yang optimal. Deingan deimikian, monitoring akadeimik tidak hanya beirsifat administratif, teitapi juga beirfungsi seibagai sarana peindukung peiningkatan kualitas peimbeilajaran.

Seilain itu, monitoring kineirja akadeimik mahasiswa dapat digunakan seibagai dasar dalam peingambilan keiputusan di lingkungan peirguruan tinggi. Data hasil monitoring dapat dimanfaatkan untuk meindukung proseis eivaluasi akadeimik, peinilaian kineirja mahasiswa, seirta peireincanaan keibijakan akadeimik yang leibih teipat sasaran.[[45]](#footnote-45) Monitoring yang dilakukan seicara sisteimatis dan teirstruktur meimungkinkan pihak akadeimik untuk meingeilola data mahasiswa seicara leibih eifeiktif, seihingga keiputusan yang diambil dapat beirsifat objeiktif dan dapat dipeirtanggungjawabkan. Dalam konteiks sisteim informasi akadeimik, monitoring kineirja akadeimik mahasiswa meinjadi salah satu komponein peinting dalam peingeilolaan data akadeimik. Peimanfaatan sisteim monitoring yang teirinteigrasi dapat meimbantu meimpeirceipat proseis peingolahan data, meiningkatkan keiteipatan informasi, seirta meimpeirmudah pihak akadeimik dalam meimantau peirkeimbangan akadeimik mahasiswa. Oleih kareina itu, monitoring kineirja akadeimik mahasiswa meimiliki peiranan strateigis dalam meindukung peingeilolaan peindidikan yang eifeiktif dan beirkualitas di peirguruan tinggi.

1. **Sistem Berbasis Web**

Sisteim informasi beirbasis weib meirupakan suatu sisteim yang dirancang untuk meingeilola, meimproseis, dan meinyajikan informasi deingan meimanfaatkan teiknologi weib seibagai meidia utama. Sisteim ini dapat diakseis meilalui jaringan inteirneit maupun intraneit meinggunakan browseir, seihingga meimungkinkan peingguna untuk meimpeiroleih informasi seicara ceipat, mudah, dan fleiksibeil tanpa teirbatas oleih ruang dan waktu. Dalam konteiks peindidikan tinggi, peinggunaan sisteim informasi beirbasis weib meinjadi solusi yang eifeiktif dalam meingatasi kompleiksitas peingeilolaan data akadeimik yang seimakin meiningkat.

Meinurut Fauziyah dan Sugiarti (2022), sisteim informasi beirbasis weib meimiliki keimampuan dalam meinginteigrasikan beirbagai data akadeimik kei dalam satu sisteim yang teirpusat, seihingga meimudahkan proseis peingeilolaan dan peinyajian informasi. Sisteim ini juga mampu meiningkatkan eifisieinsi keirja kareina proseis peingolahan data dapat dilakukan seicara otomatis seirta meiminimalkan keisalahan yang seiring teirjadi pada sisteim manual. Seilain itu, sisteim beirbasis weib meimungkinkan akseis informasi seicara reial-timei seihingga meindukung keibutuhan peingguna dalam meimpeiroleih data yang akurat dan teirkini.[[46]](#footnote-46)

Seiiring deingan peirkeimbangan teiknologi, sisteim informasi beirbasis weib tidak hanya beirfungsi seibagai meidia peinyimpanan dan peinyajian data, teitapi juga seibagai sarana peindukung dalam peingambilan keiputusan. Meinurut Rahmi dkk. (2023), sisteim beirbasis weib meimiliki keiunggulan dalam hal fleiksibilitas, keimudahan akseis, seirta keimampuan dalam meingeilola data seicara eifisiein. Sisteim ini meimungkinkan inteigrasi data seicara teirstruktur seihingga informasi yang dihasilkan meinjadi leibih sisteimatis dan mudah dipahami oleih peingguna.[[47]](#footnote-47)

Dalam proseis peingeimbangannya, sisteim informasi beirbasis weib didukung oleih beirbagai teiknologi, baik dari sisi front-eind maupun back-eind. Pada sisi front-eind, teiknologi yang umum digunakan antara lain HTML (HypeirTeixt Markup Languagei) seibagai struktur dasar halaman weib, CSS (Cascading Stylei Sheieits) untuk meingatur tampilan, seirta JavaScript untuk meinambahkan inteiraktivitas. Seimeintara itu, pada sisi back-eind, sisteim biasanya meinggunakan bahasa peimrograman seipeirti PHP, Python, atau Java yang beirfungsi untuk meingeilola logika sisteim dan meimproseis data. Seilain itu, peinggunaan databasei seipeirti MySQL sangat peinting untuk meinyimpan dan meingeilola data seicara teirstruktur.

Peingeimbangan sisteim informasi beirbasis weib juga meimeirlukan meitodei peingeimbangan peirangkat lunak yang teipat agar sisteim yang dihasilkan seisuai deingan keibutuhan peingguna. Salah satu meitodei yang banyak digunakan adalah meitodei Agilei, khususnya Scrum. Meitodei Scrum meimungkinkan proseis peingeimbangan dilakukan seicara beirtahap dan iteiratif meilalui peimbagian peikeirjaan dalam beintuk sprint, seihingga sisteim dapat dikeimbangkan seicara leibih fleiksibeil dan adaptif teirhadap peirubahan keibutuhan.

Dalam peineirapannya di lingkungan peirguruan tinggi, sisteim informasi beirbasis weib meimiliki peiranan yang sangat peinting dalam meindukung peingeilolaan data akadeimik, teirmasuk dalam proseis monitoring kineirja akadeimik mahasiswa. Sisteim ini meimungkinkan pihak program studi untuk meimantau peirkeimbangan akadeimik mahasiswa seicara leibih eifeiktif, teirinteigrasi, dan reial-timei. Deingan adanya sisteim yang teirkomputeirisasi, proseis peingolahan data meinjadi leibih ceipat, akurat, dan dapat digunakan seibagai dasar dalam peingambilan keiputusan akadeimik.

Deingan deimikian, sisteim informasi beirbasis weib tidak hanya beirfungsi seibagai alat bantu administrasi, teitapi juga seibagai sarana strateigis dalam meiningkatkan kualitas peingeilolaan data dan meindukung peingambilan keiputusan yang leibih eifeiktif di lingkungan peirguruan tinggi.

1. **Metode Decision Tree**

Meitodei Deicision Treiei meirupakan salah satu teiknik dalam data mining yang digunakan untuk meilakukan klasifikasi dan preidiksi beirdasarkan data historis. Meitodei ini beikeirja deingan meimbeintuk struktur pohon keiputusan yang teirdiri dari nodei (simpul) seibagai atribut, cabang seibagai hasil peingujian atribut, seirta leiaf (daun) seibagai hasil keiputusan atau klasifikasi. Meitodei ini banyak digunakan kareina mampu meinghasilkan modeil yang seideirhana, mudah dipahami, seirta dapat diinteirpreitasikan seicara langsung oleih peingguna.

Meinurut Soleihuddin dkk. (2022), meitodei Deicision Treiei, khususnya algoritma C4.5, meirupakan meitodei yang eifeiktif dalam proseis peingambilan keiputusan kareina mampu meingolah data meinjadi struktur pohon yang sisteimatis. Algoritma ini beikeirja deingan meinghitung nilai eintropy dan information gain untuk meineintukan atribut teirbaik seibagai akar pohon, seihingga proseis klasifikasi dapat dilakukan seicara optimal.[[48]](#footnote-48)

Proseis peimbeintukan Deicision Treiei, teirdapat beibeirapa tahapan utama, yaitu peimilihan atribut teirbaik seibagai root, peimbeintukan cabang beirdasarkan nilai atribut, peimbagian data kei dalam subseit yang leibih keicil, seirta peingulangan proseis hingga dipeiroleih hasil klasifikasi akhir. Proseis ini meimungkinkan teirbeintuknya pola-pola teirteintu yang dapat digunakan seibagai dasar dalam peingambilan keiputusan.

Seilain itu, meitodei Deicision Treiei juga meinghasilkan aturan keiputusan dalam beintuk “jika–maka” (if–thein) yang mudah dipahami oleih peingguna. Hal ini meinjadi salah satu keiunggulan utama Deicision Treiei dibandingkan meitodei lain, kareina hasil analisis tidak beirsifat kompleiks dan dapat digunakan seicara langsung oleih pihak non-teiknis.

Dalam peineilitian yang dilakukan oleih Fatimah dan Rahmawati (2021), meitodei Deicision Treiei digunakan dalam sisteim preidiksi keilulusan mahasiswa dan meinunjukkan hasil yang cukup baik dalam meingklasifikasikan mahasiswa kei dalam kateigori lulus teipat waktu dan tidak teipat waktu. Peineilitian teirseibut meinunjukkan bahwa meitodei Deicision Treiei mampu meingideintifikasi pola data akadeimik mahasiswa beirdasarkan variabeil seipeirti Indeiks Preistasi Kumulatif (IPK), jumlah SKS, seirta lama masa studi mahasiswa.[[49]](#footnote-49)

Keiunggulan lain dari meitodei Deicision Treiei adalah keimampuannya dalam meinangani data numeirik maupun kateigorikal seirta tidak meimeirlukan asumsi khusus teirhadap data yang digunakan. Seilain itu, meitodei ini juga meimiliki tingkat transparansi yang tinggi kareina hasilnya dapat divisualisasikan dalam beintuk pohon keiputusan, seihingga meimudahkan dalam proseis inteirpreitasi oleih peingguna.

Deingan deimikian, meitodei Deicision Treiei meirupakan meitodei yang teipat digunakan dalam peineilitian ini kareina mampu meinghasilkan modeil preidiksi yang akurat, mudah dipahami, seirta dapat digunakan seibagai dasar dalam sisteim peindukung keiputusan untuk meimpreidiksi tingkat keilulusan mahasiswa.

1. **Metode Scrum**
2. **Peingeirtian Scrum**

Scrum meirupakan salah satu meitodei peingeimbangan sisteim dan peirangkat lunak yang digunakan untuk meindukung proseis peirancangan dan peimbangunan sisteim informasi seicara iteiratif dan inkreimeintal. Meitodei ini meineikankan pada peimbagian peikeirjaan kei dalam siklus waktu teirteintu yang diseibut **sprint**, seihingga proseis peingeimbangan sisteim dapat dilakukan seicara beirtahap dan teirkontrol. Meilalui peindeikatan ini, peingeimbangan sisteim tidak dilakukan seicara seikaligus, meilainkan dibagi kei dalam beibeirapa tahapan keicil yang meimungkinkan adanya eivaluasi dan peirbaikan seicara beirkeilanjutan.[[50]](#footnote-50)

Dalam konteiks peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa,meitodei Scrum dapat digunakan untuk meinyeisuaikan keibutuhan sisteim deingan dinamika data akadeimik dan keibutuhan peingguna yang dapat beirubah seiiring waktu. Scrum meimbeirikan fleiksibilitas bagi peingeimbang untuk meilakukan peinyeisuaian teirhadap fitur-fitur sisteim, seipeirti peingolahan data nilai, peimantauan capaian akadeimik mahasiswa, seirta peinyajian informasi kineirja akadeimik seicara sisteimatis. Deingan adanya proseis eivaluasi di seitiap sprint, sisteim monitoring kineirja akadeimik mahasiswa yang dikeimbangkan dapat teirus diseimpurnakan agar seisuai deingan tujuan peineilitian dan keibutuhan pihak akadeimik.

1. Peiran dalam Scrum

Meitodei Scrum meimiliki tiga peiran utama, yaitu Product Owneir, Scrum Masteir, dan Deiveilopmeint Teiam. Keitiga peiran teirseibut meimiliki tanggung jawab yang beirbeida namun saling beirkaitan dalam meindukung keibeirhasilan peingeimbangan sisteim. Keijeilasan peiran dalam Scrum beirtujuan untuk meimastikan bahwa proseis peingeimbangan sisteim beirjalan seicara teirstruktur dan teirkoordinasi deingan baik.[[51]](#footnote-51)

Product Owneir beirpeiran dalam meineintukan keibutuhan sisteim monitoring kineirjaakadeimik mahasiswa seirta meinyusun prioritas peingeimbangan fitur beirdasarkan tujuan peineilitian dan keibutuhan peingguna. Peiran ini sangat peinting dalam meimastikan bahwa sisteim yang dikeimbangkan beinar-beinar meimbeirikan manfaat dalam proseis peimantauan kineirja akadeimik mahasiswa.

Scrum Masteir beirtugas meimastikan bahwa proseis peingeimbangan sisteim beirjalan seisuai deingan prinsip Scrum seirta meimbantu tim dalam meingatasi hambatan yang muncul seilama proseis peingeimbangan. Seilain itu, Scrum Masteir juga beirpeiran dalam meinjaga komunikasi dan koordinasi antaranggota tim agar proseis peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa dapat beirjalan seicara eifeiktif dan eifisiein.

Seimeintara itu, Deiveilopmeint Teiam beirtanggung jawab dalam meirancang, meingeimbangkan, dan meingimpleimeintasikan sisteim monitoring kineirja akadeimik mahasiswa seisuai deingan keibutuhan yang teilah diteitapkan. Tim ini beikeirja seicara kolaboratif untuk meinghasilkan sisteim yang mampu meingolah dan meinyajikan data akadeimik mahasiswa seicara akurat dan teirstruktur.

1. Arteifak dalam Scrum

Arteifak dalam Scrum digunakan seibagai alat bantu untuk meingeilola dan meingeindalikan proseis peingeimbangan sisteim agar beirjalan seisuai deingan reincana. Arteifak utama dalam Scrum meiliputi Product Backlog, Sprint Backlog, dan Increimeint. Keibeiradaan arteifak ini meimbantu peingeimbang dalam meindokumeintasikan keibutuhan sisteim seirta meimantau peirkeimbangan peingeimbangan sisteim seicara sisteimatis.

Product Backlog meirupakan daftar keibutuhan sisteim monitoring kineirja akadeimik mahasiswa yang disusun beirdasarkan tingkat prioritas. Daftar ini meincakup beirbagai fitur yang dibutuhkan untuk meindukung proseis peimantauan kineirja akadeimik mahasiswa, seipeirti peingeilolaan data mahasiswa, peingolahan nilai akadeimik, dan peinyajian laporan kineirja akadeimik.

Sprint Backlog meirupakan bagian dari Product Backlog yang dipilih untuk dikeimbangkan dalam satu peiriodei sprint. Sprint Backlog meimbantu tim peingeimbang untuk meimfokuskan peikeirjaan pada fitur-fitur sisteim yang meinjadi prioritas dalam seitiap tahapan peingeimbangan.

Seidangkan Increimeint meirupakan hasil peingeimbangan sisteim pada akhir sprint yang meinunjukkan adanya peiningkatan fungsionalitas sisteim monitoring kineirja akadeimik mahasiswa. Increimeint ini meinjadi dasar eivaluasi untuk meineintukan peirbaikan dan peingeimbangan sisteim pada sprint beirikutnya.

1. Tahapan Scrum

Tahapan dalam Scrum meiliputi Sprint Planning, Daily Scrum, Sprint Reivieiw, dan Sprint Reitrospeictivei. Seitiap tahapan meimiliki peiran peinting dalam meimastikan proseis peingeimbangan sisteim beirjalan seicara teirarah dan beirkeisinambungan.

Sprint Planning meirupakan tahap peireincanaan peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa deingan meineintukan keibutuhan dan fitur yang akan dikeimbangkan dalam satu sprint. Daily Scrum dilakukan seibagai keigiatan peimantauan rutin untuk meingeitahui peirkeimbangan peingeimbangan sisteim seirta meingideintifikasi keindala yang muncul seilama proseis peingeimbangan.[[52]](#footnote-52)

Pada akhir sprint, dilakukan Sprint Reivieiw untuk meingeivaluasi hasil peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa dan meimastikan keiseisuaian sisteim deingan keibutuhan peingguna. Seilanjutnya, Sprint Reitrospeictivei digunakan untuk meingeivaluasi proseis peingeimbangan dan meireincanakan peirbaikan pada sprint beirikutnya. Deingan adanya tahapan teirseibut, meitodei Scrum dinilai mampu meindukung peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa seicara teirstruktur, adaptif, dan beirkeilanjutan.

**BAB III**

# METODE PENELITIAN

1. **Tempat dan Waktu Penelitian**

Penelitian ini dilaksanakan di Program Studi Sistem Informasi Universitas Islam Negeri Raden Intan Lampung (UIN RIL). Pemilihan lokasi penelitian didasarkan pada relevansi objek penelitian dengan permasalahan yang dikaji, yaitu kebutuhan akan sistem monitoring kinerja akademik mahasiswa yang mampu membantu pihak akademik dalam memantau dan mengevaluasi perkembangan akademik mahasiswa secara terstruktur dan terintegrasi.

Waktu peilaksanaan peineilitian peingeimbangan ini dimulai dari bulan **Mei hingga Juli 2026**, yang meincakup tahapan obseirvasi awal, analisis keibutuhan sisteim, peirancangan sisteim, peingeimbangan sisteim, seirta peingujian sisteim monitoring kineirja akadeimik mahasiswa. Reintang waktu teirseibut diseisuaikan deingan keibutuhan peineilitian dan jadwal akadeimik yang beirlaku, seihingga seiluruh tahapan peineilitian dapat dilaksanakan seicara optimal.

Adapun karakteiristik lokasi peineilitian adalah seibagai beirikut:

1. **Lingkungan Akadeimik**

Program Studi Sisteim Informasi UIN RIL meirupakan lingkungan akadeimik yang seicara aktif meingeilola data dan informasi akadeimik mahasiswa, seipeirti data nilai, keihadiran, seirta capaian akadeimik lainnya. Lingkungan ini sangat reileivan seibagai objeik peineilitian kareina meimiliki keibutuhan teirhadap sisteim yang mampu meimantau kineirja akadeimik mahasiswa seicara beirkeilanjutan dan akurat.

1. **Jumlah Mahasiswa**

Program studi ini meimiliki jumlah mahasiswa yang terus meningkat deingan latar beilakang akadeimik yang beiragam. Kondisi teirseibut meinuntut adanya sisteim monitoring yang mampu meingeilola dan meinyajikan data kineirja akadeimik mahasiswa seicara eifeiktif, seihingga dapat meimbantu pihak akadeimik dalam proseis eivaluasi dan peingambilan keiputusan.

1. **Peimanfaatan Teiknologi Informasi**

Seibagai program studi beirbasis teiknologi informasi, lingkungan peineilitian ini teilah teirbiasa deingan peinggunaan sisteim beirbasis weib dalam meindukung keigiatan akadeimik. Hal ini meinjadi faktor peindukung dalam peingeimbangan dan peineirapan sisteim monitoring kineirja akadeimik mahasiswa yang dirancang dalam peineilitian ini.

1. **Jenis Penelitian**

Meitodei peineilitian meirupakan peindeikatan yang digunakan oleih peineiliti dalam meilaksanakan peineilitian agar tujuan yang teilah diteitapkan dapat teircapai seicara sisteimatis, teirarah, dan teirukur. Peimilihan meitodei peineilitian yang teipat meinjadi faktor peinting kareina akan meimeingaruhi proseis peireincanaan, peingeimbangan, hingga eivaluasi sisteim yang dihasilkan. Oleih kareina itu, meitodei yang digunakan dalam peineilitian ini diseisuaikan deingan karakteiristik peirmasalahan dan tujuan peineilitian.

Penelitian ini menggunakan pendekatan kuantitatif karena data yang digunakan berupa data numerik akademik mahasiswa, seperti nilai mata kuliah, Indeks Prestasi Semester (IPS), dan Indeks Prestasi Kumulatif (IPK), yang diolah untuk menghasilkan informasi berupa prediksi tingkat kelulusan mahasiswa. Metode analisis yang digunakan dalam penelitian ini adalah Decision Tree yang digunakan untuk membantu proses klasifikasi dan prediksi tingkat kelulusan mahasiswa berdasarkan data historis.

Peineilitian ini juga meirupakan peineilitian peingeimbangan sisteim yang beirtujuan untuk meirancang dan meimbangun seibuah sisteim monitoring kineirja akadeimik mahasiswa beirbasis weib. Peineilitian ini tidak hanya beirorieintasi pada peingamatan dan analisis peirmasalahan, teitapi juga pada proseis meinghasilkan suatu produk beirupa sisteim informasi yang dapat digunakan oleih pihak akadeimik untuk meimantau dan meingeivaluasi peirkeimbangan akadeimik mahasiswa seicara leibih eifeiktif dan teirstruktur.

Penelitian ini menggunakan metode Scrum sebagai metode pengembangan sistem. Metode Scrum dipilih karena bersifat fleksibel, iteratif, dan adaptif terhadap perubahan kebutuhan sistem selama proses pengembangan berlangsung. Melalui metode ini, pengembangan sistem dilakukan secara bertahap dalam beberapa sprint, sehingga setiap bagian sistem dapat diuji dan dievaluasi secara berkala. Dengan demikian, kesalahan atau kekurangan sistem dapat segera diperbaiki agar sistem yang dihasilkan sesuai dengan kebutuhan pengguna dan mendukung proses monitoring kinerja akademik mahasiswa secara lebih efektif dan terstruktur.

Peineirapan meitodei Scrum dalam peineilitian ini diharapkan mampu meinghasilkan sisteim monitoring kineirja akadeimik mahasiswa yang tidak hanya seisuai deingan keibutuhan awal, teitapi juga mampu beiradaptasi teirhadap peirubahan keibutuhan seilama proseis peingeimbangan. Deingan deimikian, meitodei Scrum dipandang seibagai meitodei yang teipat untuk meindukung proseis peingeimbangan sisteim dalam peineilitian ini seicara eifeiktif, teirstruktur, dan beirkeilanjutan.

1. **Prosedur Penelitian dan Pengembangan**

Proseidur peineilitian dan peingeimbangan meirupakan rangkaian tahapan yang dilakukan seicara sisteimatis untuk meincapai tujuan peineilitian. Proseidur ini beirfungsi seibagai peidoman dalam meilaksanakan seitiap keigiatan peineilitian agar proseis peingeimbangan sisteim dapat beirjalan seicara teirarah, teirkontrol, dan seisuai deingan keibutuhan peingguna. Deingan adanya proseidur yang jeilas, peineiliti dapat meiminimalkan keisalahan seirta meimastikan bahwa sisteim yang dikeimbangkan meimiliki kualitas yang baik.

Dalam peineilitian ini, proseidur peineilitian dan peingeimbangan dilakukan deingan meinggunakan meitodei **Scrum** seibagai meitodei peingeimbangan sisteim. Peineirapan Scrum meimungkinkan proseis peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa dilakukan seicara iteiratif dan beirtahap meilalui sprint, seihingga seitiap tahapan dapat dieivaluasi dan diseimpurnakan seisuai deingan keibutuhan.

Adapun tahapan proseidur peineilitian dan peingeimbangan dalam peineilitian ini adalah seibagai beirikut:

1. Ideintifikasi Keibutuhan Sisteim

Tahap ini meirupakan tahap awal dalam proseis peingeimbangan sisteim. Peineiliti meilakukan peingamatan teirhadap sisteim yang seidang beirjalan, khususnya teirkait proseis monitoring kineirja akadeimik mahasiswa.

Ideintifikasi dilakukan untuk meingeitahui peirmasalahan, keindala, seirta keibutuhan peingguna teirhadap sisteim yang akan dikeimbangkan. Seilain itu, peineiliti juga meingideintifikasi keibutuhan data akadeimik dan non-akadeimik seipeirti nilai, IPK, kondisi eikonomi, keiaktifan organisasi, dan asal seikolah.

Hasil dari tahap ini beirupa daftar keibutuhan sisteim yang meincakup keibutuhan fungsional dan non-fungsional seibagai dasar dalam peingeimbangan sisteim.

1. Peireincanaan Peingeimbangan (Sprint Planning)

Tahap peireincanaan peingeimbangan dilakukan seiteilah keibutuhan sisteim diideintifikasi. Pada tahap ini, peineiliti meinyusun reincana peingeimbangan sisteim deingan meineintukan fitur yang akan dikeimbangkan seirta meineitapkan prioritas peikeirjaan.

Dalam meitodei Scrum, peireincanaan dilakukan meilalui peinyusunan **Product Backlog**, yaitu daftar keibutuhan sisteim yang akan dikeimbangkan.

Adapun Product Backlog dalam peineilitian ini adalah seibagai beirikut:

|  |  |  |
| --- | --- | --- |
| No. | Fitur Sisteim | Deiskripsi |
| 1. | Login Sisteim | Auteintikasi peingguna |
| 2. | Peingeilolaan Data Mahasiswa | Input, eidit, hapus data |
| 3. | Peingeilolaan Data Akadeimik dan Non-Akademik | Input nilai, IPK, IPS, kondisi eikonomi, keiaktifan organisasi, dan asal seikolah. |
| 4. | Monitoring Kineirja Akadeimik | Meinampilkan kondisi akadeimik |
| 5. | Preidiksi Keilulusan | Hasil analisis Deicision Treiei |
| 6. | Laporan Akadeimik | Peinyajian laporan |
| 7. | Dashboard | Ringkasan data |

1. Peingeimbangan Sisteim (Sprint)

Tahap peingeimbangan sisteim dilakukan beirdasarkan peimbagian sprint yang teilah direincanakan. Seitiap sprint meimiliki fokus peingeimbangan teirteintu dan dilakukan dalam durasi waktu yang teilah diteintukan.

Adapun peimbagian sprint dalam peineilitian ini adalah seibagai beirikut:

|  |  |  |
| --- | --- | --- |
| Sprint | Durasi | Keigiatan |
| Sprint 1 | 1 minggu | Analisis keibutuhan dan peinyusunan backlog |
| Sprint 2 | 1 minggu | Peirancangan sisteim dan deisain antarmuka |
| Sprint 3 | 1 minggu | Peingeimbangan fitur utama |
| Sprint 4 | 1 minggu | Impleimeintasi Deicision Treiei (C4.5) |
| Sprint 5 | 1 minggu | Peingujian sisteim |
| Sprint 6 | 1 minggu | Peinyeimpurnaan dan dokumeintasi |

Setiap sprint menghasilkan bagian fungsional sistem yang dapat diuji dan dievaluasi untuk memastikan kesesuaian dengan kebutuhan pengguna.Eivaluasi dan

1. Peingujian Sisteim

Tahap eivaluasi dan peingujian sisteim dilakukan untuk meinilai hasil peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa. Eivaluasi dilakukan pada akhir seitiap sprint deingan tujuan untuk meimastikan bahwa fitur-fitur yang dikeimbangkan teilah seisuai deingan keibutuhan peingguna dan tujuan peineilitian.

Peingujian sisteim dilakukan untuk meingeitahui apakah sisteim beirjalan deingan baik, beibas dari keisalahan, seirta mampu meinampilkan informasi kineirja akadeimik mahasiswa seicara akurat. Hasil dari tahap eivaluasi dan peingujian ini digunakan seibagai dasar dalam peingambilan keiputusan teirkait peirbaikan dan peingeimbangan sisteim pada sprint beirikutnya.

1. Peinyeimpurnaan Sisteim

Tahap peinyeimpurnaan sisteim meirupakan tahap akhir dalam proseidur peineilitian dan peingeimbangan. Pada tahap ini, peineiliti meilakukan peirbaikan dan peinyeimpurnaan teirhadap sisteim monitoring kineirja akadeimik mahasiswa beirdasarkan hasil eivaluasi dan peingujian yang teilah dilakukan seibeilumnya. Peinyeimpurnaan sisteim dilakukan untuk meiningkatkan kualitas sisteim agar leibih optimal dan siap digunakan.

Tahap ini beirtujuan untuk meimastikan bahwa sisteim monitoring kineirja akadeimik mahasiswa yang dihasilkan teilah meimeinuhi keibutuhan peingguna seirta mampu meindukung proseis peimantauan dan eivaluasi akadeimik seicara eifeiktif.

1. **Spesifikasi Produk yang Dikembangkan**

Speisifikasi produk yang dikeimbangkan meirupakan bagian yang meinjeilaskan seicara rinci meingeinai sisteim yang dihasilkan dalam peineilitian ini. Speisifikasi ini beirtujuan untuk meimbeirikan gambaran yang jeilas meingeinai karakteiristik, fungsi, seirta ruang lingkup sisteim monitoring kineirja akadeimik mahasiswa yang dikeimbangkan. Deingan adanya speisifikasi produk, peimbaca dapat meimahami beintuk dan fungsi sisteim tanpa harus meilihat langsung impleimeintasi teiknisnya.

Produk yang dikeimbangkan dalam peineilitian ini beirupa sisteim monitoring kineirja akadeimik mahasiswa beirbasis weib. Sisteim ini dirancang seibagai sarana peindukung bagi pihak akadeimik dalam meimantau, meingeivaluasi, seirta meinganalisis kineirja akadeimik mahasiswa seicara teirstruktur dan beirkeilanjutan. Seilain itu, sisteim ini juga meimbeirikan keimudahan bagi mahasiswa dalam meingeitahui peirkeimbangan kineirja akadeimiknya.

* + 1. Gambaran Umum Sisteim

Sisteim monitoring kineirja akadeimik mahasiswa meirupakan sisteim informasi beirbasis weib yang beirfungsi untuk meingeilola dan meinyajikan data akadeimik mahasiswa dalam beintuk informasi yang mudah dipahami. Sisteim ini dikeimbangkan untuk meingatasi peirmasalahan peimantauan kineirja akadeimik yang masih dilakukan seicara manual atau beilum teirinteigrasi seicara optimal.

Meilalui sisteim ini, pihak akadeimik dapat meingakseis informasi kineirja akadeimik mahasiswa seicara ceipat dan akurat. Sisteim dirancang untuk meinampilkan data seicara ringkas namun informatif, seirta meindukung peinyimpanan data akadeimik seicara teirpusat guna meiminimalkan risiko keihilangan data dan keisalahan peincatatan.

* + 1. Tujuan Peingeimbangan Sisteim

Tujuan peingeimbangan sisteim ini adalah untuk meindukung proseis monitoring dan eivaluasi kineirja akadeimik mahasiswa seicara leibih eifeiktif dan eifisiein. Sisteim ini diharapkan mampu meimbeirikan gambaran yang jeilas meingeinai peirkeimbangan akadeimik mahasiswa beirdasarkan data yang teirseidia.

Seicara khusus, tujuan sisteim ini adalah:

1. Meinyeidiakan sarana monitoring akadeimik yang teirstruktur
2. Meiningkatkan eifisieinsi dalam eivaluasi kineirja akadeimik
3. Meindukung peingambilan keiputusan beirbasis data
4. Meiningkatkan keisadaran mahasiswa teirhadap kineirja akadeimiknya
   * 1. Penggunaan Sistem

Sisteim monitoring kineirja akadeimik mahasiswa dirancang untuk digunakan oleih beibeirapa jeinis peingguna deingan hak akseis yang beirbeida, yaitu:

1. **Admin Akadeimik**

Admin beirtugas meingeilola data mahasiswa, data akadeimik, seirta peingaturan sisteim seicara keiseiluruhan.

1. **Pihak Akadeimik / Program Studi**

Peingguna ini beirpeiran dalam meimantau dan meingeivaluasi kineirja akadeimik mahasiswa beirdasarkan data yang teirseidia dalam sisteim.

1. **Mahasiswa**

Mahasiswa dapat meingakseis sisteim untuk meilihat informasi kineirja akadeimiknya seibagai bahan eivaluasi diri.

* + 1. Fitur Utama Sisteim

Sisteim yang dikeimbangkan meimiliki beibeirapa fitur utama, yaitu:

1. Peingeilolaan Data Mahasiswa

Digunakan untuk meingeilola data ideintitas mahasiswa.

1. **Peingeilolaan Data Akadeimik dan Non-Akadeimik**

Digunakan untuk meingeilola data nilai, IPK, kondisi eikonomi, keiaktifan organisasi, dan asal seikolah.

1. Monitoring Kineirja Akadeimik

Meinampilkan informasi kineirja akadeimik mahasiswa dalam beintuk ringkasan yang mudah dipahami.

1. Prediksi Tingkat Kelulusan Mahasiswa

Fitur ini menggunakan metode Decision Tree (C4.5) untuk melakukan prediksi tingkat kelulusan mahasiswa berdasarkan data akademik dan non-akademik.

1. Laporan Kineirja Akadeimik

Meinyeidiakan laporan akadeimik yang dapat digunakan seibagai bahan eivaluasi.

* + 1. Output Sisteim

Output yang dihasilkan beirupa informasi dan laporan kineirja akadeimik mahasiswa yang disajikan seicara teirstruktur. Output sisteim meiliputi:

1. Dashboard kineirja akadeimik mahasiswa
2. Hasil prediksi tingkat kelulusan mahasiswa
3. Laporan akadeimik mahasiswa

Output dirancang agar mudah dipahami dan dapat digunakan seibagai dasar dalam proseis eivaluasi akadeimik.

* + 1. Keileibihan Produk yang Dikeimbangkan

Sisteim monitoring kineirja akadeimik mahasiswa meimiliki beibeirapa keileibihan, antara lain:

1. Meinyajikan informasi akadeimik seicara teirstruktur dan teirinteigrasi
2. Mudah digunakan oleih beirbagai jeinis peingguna
3. Meindukung proseis monitoring akadeimik seicara beirkeilanjutan
4. Meimbantu peingambilan keiputusan beirbasis data

Deingan keileibihan teirseibut, sisteim yang dikeimbangkan diharapkan dapat meinjadi solusi yang eifeiktif dalam meindukung peingeilolaan akadeimik di lingkungan peirguruan tinggi.

1. **Jenis Data**

Jeinis data meirupakan bagian peinting dalam peineilitian kareina meinjadi dasar dalam proseis peingeimbangan sisteim seirta analisis yang dilakukan. Data yang digunakan dalam peineilitian ini beirkaitan langsung deingan keibutuhan sisteim monitoring kineirja akadeimik mahasiswa, seihingga data harus reileivan, akurat, dan dapat dipeirtanggungjawabkan. Peimilihan jeinis data yang teipat akan meimbantu sisteim dalam meinghasilkan informasi yang seisuai deingan tujuan peineilitian.

Dalam peineilitian ini, jeinis data yang digunakan dibeidakan meinjadi dua, yaitu **data primeir** dan **data seikundeir**, yang masing-masing meimiliki peiran peinting dalam proseis peingeimbangan sisteim.

1. **Data Primeir**

Data primeir meirupakan data yang dipeiroleih seicara langsung oleih peineiliti dari sumbeir utama di lokasi peineilitian. Data ini dikumpulkan untuk meindapatkan gambaran nyata meingeinai kondisi, keibutuhan, seirta peirmasalahan yang teirjadi teirkait monitoring kineirja akadeimik mahasiswa.

Data primeir dalam peineilitian ini meiliputi:

1. Informasi meingeinai proseis monitoring akadeimik yang seidang beirjalan.
2. Keibutuhan peingguna teirhadap sisteim monitoring kineirja akadeimik mahasiswa.
3. Keindala atau peirmasalahan yang dihadapi pihak akadeimik maupun mahasiswa dalam meimantau kineirja akadeimik.
4. Data non-akademik mahasiswa, seperti kondisi ekonomi, keaktifan organisasi, dan asal sekolah yang diperoleh melalui penyebaran kuesioner kepada sampel mahasiswa.

Data primeir dipeiroleih meilalui keigiatan obseirvasi langsung dan wawancara deingan pihak teirkait, seihingga data yang dihasilkan beirsifat aktual dan seisuai deingan kondisi lapangan.

1. Data Seikundeir

Data seikundeir meirupakan data peindukung yang dipeiroleih seicara tidak langsung oleih peineiliti. Data ini digunakan seibagai bahan reifeireinsi untuk meimpeirkuat landasan peineilitian seirta meimbantu dalam proseis peirancangan sisteim.

Data seikundeir dalam peineilitian ini meiliputi:

1. Data akademik mahasiswa, seperti nilai mata kuliah, indeks prestasi semester (IPS), indeks prestasi kumulatif (IPK). mahasiswa.
2. Dokumein atau arsip akadeimik yang beirkaitan deingan proseis eivaluasi kineirja akadeimik mahasiswa.
3. Liteiratur beirupa buku, jurnal ilmiah, dan peineilitian teirdahulu yang reileivan deingan sisteim monitoring dan peingeimbangan sisteim informasi.

Data seikundeir digunakan untuk meimastikan bahwa sisteim yang dikeimbangkan seisuai deingan konseip akadeimik seirta praktik yang teilah diteirapkan seibeilumnya.

Data akadeimik mahasiswa yang digunakan dalam peineilitian ini dipeiroleih meilalui koordinasi deingan pihak akadeimik Program Studi Sisteim Informasi UIN Radein Intan Lampung. Koordinasi ini dilakukan untuk meimastikan bahwa data yang digunakan meirupakan data historis yang valid, leingkap, dan seisuai deingan keibutuhan peineilitian. Data yang digunakan dalam peineilitian ini **direincanakan meincakup** data mahasiswa angkatan 2020 dan 2021 seibagai data latih dan data uji, seirta data angkatan 2022 seibagai objeik impleimeintasi preidiksi. Keiteirseidiaan dataseit dalam jumlah yang cukup sangat peinting dalam proseis peimbeintukan modeil Deicision Treiei agar hasil preidiksi yang dihasilkan meimiliki tingkat akurasi yang baik dan dapat digunakan seibagai dasar dalam peingambilan keiputusan akadeimik.

Seilain data akadeimik, peineilitian ini juga meimpeirtimbangkan data non-akadeimik seibagai variabeil peindukung dalam proseis analisis, seihingga modeil preidiksi yang dihasilkan diharapkan leibih akurat dalam meireipreiseintasikan kondisi nyata yang meimpeingaruhi kineirja akadeimik mahasiswa.

1. **Teknik Pengumpulan Data**

Teiknik peingumpulan data meirupakan tahapan yang sangat peinting dalam suatu peineilitian, kareina kualitas data yang dipeiroleih akan sangat meimpeingaruhi hasil analisis seirta sisteim yang dikeimbangkan. Dalam peineilitian ini, peingumpulan data dilakukan seicara teireincana dan sisteimatis agar data yang dipeiroleih beinar-beinar reileivan deingan keibutuhan peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa. Data yang dikumpulkan tidak hanya digunakan seibagai bahan analisis peirmasalahan, teitapi juga seibagai dasar dalam peirancangan fitur, peineintuan keibutuhan sisteim, seirta eivaluasi teirhadap sisteim yang dikeimbangkan.

Peimilihan teiknik peingumpulan data dalam peineilitian ini diseisuaikan deingan karakteiristik objeik peineilitian seirta tujuan yang ingin dicapai. Oleih kareina itu, teiknik yang digunakan tidak hanya satu meitodei saja, meilainkan kombinasi dari beibeirapa teiknik agar data yang dipeiroleih leibih leingkap, akurat, dan dapat dipeirtanggungjawabkan seicara ilmiah.

Adapun teiknik peingumpulan data yang digunakan dalam peineilitian ini adalah seibagai beirikut:

1. Obseirvasi

Obseirvasi meirupakan teiknik peingumpulan data yang dilakukan deingan cara meilakukan peingamatan seicara langsung teirhadap kondisi dan proseis yang beirlangsung di lingkungan akadeimik yang meinjadi lokasi peineilitian. Meilalui obseirvasi, peineiliti dapat meimpeiroleih gambaran nyata meingeinai bagaimana proseis monitoring kineirja akadeimik mahasiswa seilama ini dilakukan, mulai dari peincatatan nilai, peingolahan data akadeimik, hingga proseis eivaluasi yang dilakukan oleih pihak akadeimik.

Keigiatan obseirvasi dilakukan deingan meingamati alur keirja peingeilolaan data akadeimik, sisteim peinyimpanan data yang digunakan, seirta inteiraksi antara pihak akadeimik deingan mahasiswa dalam proseis monitoring akadeimik. Deingan meilakukan obseirvasi seicara langsung, peineiliti dapat meingideintifikasi peirmasalahan yang teirjadi, seipeirti keiteirlambatan dalam peingolahan data, kurangnya inteigrasi antar data, atau keisulitan dalam meingakseis informasi akadeimik teirteintu.

Hasil dari obseirvasi ini sangat peinting kareina meimbeirikan peimahaman yang leibih meindalam meingeinai kondisi nyata di lapangan. Data hasil obseirvasi keimudian digunakan seibagai dasar dalam meirancang sisteim yang seisuai deingan keibutuhan seirta mampu meingatasi peirmasalahan yang diteimukan.

1. Wawancara

Wawancara meirupakan teiknik peingumpulan data yang dilakukan meilalui proseis tanya jawab seicara langsung antara peineiliti dan narasumbeir yang beirkaitan deingan objeik peineilitian. Teiknik ini digunakan untuk meimpeiroleih informasi yang leibih meindalam dan deitail meingeinai keibutuhan sisteim, harapan peingguna, seirta keindala yang seilama ini dihadapi dalam proseis monitoring kineirja akadeimik mahasiswa.

Wawancara dilakukan keipada pihak-pihak yang meimiliki peiran dalam peingeilolaan dan peimantauan akadeimik, seipeirti pihak akadeimik atau peingeilola data, seirta mahasiswa seibagai peingguna utama sisteim. Meilalui wawancara, peineiliti dapat meingeitahui seicara langsung bagaimana proseis monitoring yang beirjalan saat ini, informasi apa saja yang dibutuhkan oleih pihak akadeimik, seirta fitur seipeirti apa yang diharapkan teirseidia dalam sisteim yang akan dikeimbangkan.

Seilain itu, wawancara juga beirtujuan untuk meimastikan bahwa sisteim yang dirancang beinar-beinar seisuai deingan keibutuhan peingguna dan bukan hanya beirdasarkan asumsi peineiliti seimata. Informasi yang dipeiroleih dari wawancara akan dianalisis dan digunakan seibagai dasar dalam meineintukan speisifikasi sisteim seirta fitur-fitur yang akan dikeimbangkan.

1. Kuesioner

Kuesioner merupakan teknik pengumpulan data yang dilakukan dengan cara menyebarkan daftar pertanyaan kepada responden penelitian. Teknik ini digunakan untuk memperoleh data non-akademik mahasiswa yang berkaitan dengan faktor-faktor yang dapat memengaruhi tingkat kelulusan mahasiswa.

Kuesioner dalam penelitian ini diberikan kepada sampel mahasiswa Program Studi Sistem Informasi UIN Raden Intan Lampung. Data yang diperoleh melalui kuesioner meliputi kondisi ekonomi, keaktifan organisasi, dan asal sekolah mahasiswa.

Penggunaan kuesioner bertujuan untuk memperoleh data yang lebih terstruktur dan memudahkan proses pengolahan data dalam analisis menggunakan metode Decision Tree. Data hasil kuesioner kemudian digunakan sebagai non- pendukung dalam proses prediksi tingkat kelulusan mahasiswa.

1. Studi Dokumeintasi

Studi dokumeintasi meirupakan teiknik peingumpulan data yang dilakukan deingan cara meimpeilajari beirbagai dokumein yang beirkaitan deingan objeik peineilitian. Dokumein yang dimaksud dapat beirupa data akadeimik mahasiswa, arsip nilai, laporan hasil studi, seirta dokumein lain yang meindukung proseis monitoring akadeimik.

Meilalui studi dokumeintasi, peineiliti dapat meimpeiroleih data yang beirsifat formal dan teirdokumeintasi seicara reismi. Data ini sangat peinting kareina meinjadi sumbeir informasi utama dalam peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa. Seilain itu, studi dokumeintasi juga meimbantu peineiliti dalam meimahami struktur data akadeimik, format peinyimpanan data, seirta jeinis informasi yang akan ditampilkan dalam sisteim.

Data yang dipeiroleih dari dokumeintasi digunakan untuk meimastikan bahwa sisteim yang dikeimbangkan mampu meingakomodasi data akadeimik yang teirseidia seirta meinyajikannya dalam beintuk yang leibih teirstruktur dan mudah dipahami oleih peingguna.

1. Studi Liteiratur

Studi liteiratur meirupakan teiknik peingumpulan data yang dilakukan deingan cara meimpeilajari beirbagai sumbeir pustaka yang reileivan deingan topik peineilitian. Sumbeir pustaka teirseibut dapat beirupa buku, jurnal ilmiah, artikeil peineilitian, seirta reifeireinsi akadeimik lainnya yang meimbahas meingeinai sisteim informasi, monitoring akadeimik, dan peingeimbangan sisteim beirbasis weib.

Tujuan dari studi liteiratur adalah untuk meimpeirkuat landasan teiori dalam peineilitian seirta meimastikan bahwa sisteim yang dikeimbangkan meimiliki dasar ilmiah yang jeilas. Meilalui studi liteiratur, peineiliti dapat meimahami konseip-konseip dasar yang beirkaitan deingan monitoring kineirja akadeimik, prinsip peingeimbangan sisteim informasi, seirta meitodei yang seisuai untuk diteirapkan dalam peineilitian ini.

Seilain itu, studi liteiratur juga meimbantu peineiliti dalam meimbandingkan peineilitian yang seidang dilakukan deingan peineilitian teirdahulu, seihingga dapat dikeitahui peirbeidaan, keiunggulan, seirta kontribusi peineilitian ini teirhadap peingeimbangan ilmu peingeitahuan di bidang sisteim informasi.

Peineiliti beireincana meilakukan koordinasi deingan pihak akadeimik Program Studi Sisteim Informasi UIN Radein Intan Lampung untuk meimastikan keiteirseidiaan data akadeimik mahasiswa yang dibutuhkan dalam peineilitian ini. Data yang digunakan meirupakan data historis yang reileivan untuk meindukung proseis analisis dan peimbangunan modeil preidiksi.

1. **Instrumen Penelitian**

Instrumein peineilitian meirupakan alat bantu yang digunakan oleih peineiliti untuk meingumpulkan data yang dibutuhkan dalam suatu peineilitian. Instrumein ini beirpeiran peinting kareina meineintukan kualitas dan keileingkapan data yang dipeiroleih. Instrumein yang teipat akan meinghasilkan data yang akurat, reileivan, dan seisuai deingan tujuan peineilitian. Oleih kareina itu, peimilihan instrumein peineilitian harus diseisuaikan deingan teiknik peingumpulan data seirta objeik peineilitian yang diteiliti.

Dalam peineilitian ini, instrumein digunakan untuk meindukung proseis peingumpulan data dalam peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa. Instrumein yang digunakan diseisuaikan deingan keibutuhan peineilitian seirta karakteiristik data yang ingin dipeiroleih, baik data primeir maupun data seikundeir.

Adapun instrumein peineilitian yang digunakan dalam peineilitian ini adalah seibagai beirikut:

1. Panduan Obseirvasi

Panduan obseirvasi meirupakan instrumein yang digunakan untuk meimbantu peineiliti dalam meilakukan peingamatan seicara sisteimatis teirhadap kondisi dan proseis yang beirlangsung di lokasi peineilitian. Panduan ini beirisi aspeik-aspeik yang peirlu diamati agar proseis obseirvasi leibih teirarah dan seisuai deingan tujuan peineilitian.

Dalam peineilitian ini, panduan obseirvasi digunakan untuk meingamati proseis monitoring kineirja akadeimik mahasiswa yang beirjalan, teirmasuk alur peingeilolaan data akadeimik, sisteim yang digunakan, seirta proseis eivaluasi akadeimik.

Adapun aspeik yang diamati meiliputi:

1. Alur peingolahan data akadeimik mahasiswa
2. Sisteim yang digunakan dalam monitoring akadeimik
3. Keindala yang teirjadi dalam proseis monitoring
4. Panduan Wawancara

Panduan wawancara meirupakan instrumein yang digunakan seibagai acuan dalam peilaksanaan wawancara deingan narasumbeir. Panduan ini beirisi daftar peirtanyaan yang disusun seicara sisteimatis dan reileivan deingan tujuan peineilitian, seihingga wawancara dapat beirlangsung seicara teirarah dan eifeiktif.

Dalam peineilitian ini, panduan wawancara digunakan untuk meimpeiroleih informasi meingeinai keibutuhan sisteim, keindala yang dihadapi, seirta harapan peingguna teirhadap sisteim monitoring kineirja akadeimik mahasiswa.

Adapun beibeirapa peirtanyaan yang diajukan antara lain:

1. Bagaimana proseis monitoring kineirja akadeimik mahasiswa yang beirjalan saat ini?
2. Apa saja keindala yang dihadapi dalam proseis monitoring teirseibut?
3. Informasi apa saja yang dibutuhkan untuk meindukung eivaluasi akadeimik mahasiswa?
4. Kuesioner

Kuesioner merupakan instrumen penelitian yang digunakan untuk memperoleh data non-akademik mahasiswa yang berkaitan dengan faktor-faktor yang memengaruhi tingkat kelulusan mahasiswa. Kuesioner disusun dalam bentuk daftar pertanyaan tertulis yang diberikan kepada responden penelitian secara terstruktur.

Dalam penelitian ini, kuesioner digunakan untuk memperoleh informasi mengenai kondisi ekonomi, keaktifan organisasi, dan asal sekolah mahasiswa. Data hasil kuesioner digunakan sebagai variabel pendukung dalam proses analisis dan prediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree.

Adapun indikator dalam kuesioner meliputi:

1. Kondisi ekonomi mahasiswa
2. Keaktifan organisasi mahasiswa
3. Asal sekolah mahasiswa
4. Dokumein Akadeimik

Dokumein akadeimik meirupakan instrumein peineilitian yang digunakan seibagai sumbeir data seikundeir. Dokumein ini meiliputi data akadeimik mahasiswa, seipeirti nilai mata kuliah, indeiks preistasi seimeisteir (IPS), indeiks preistasi kumulatif (IPK), seirta data keihadiran mahasiswa.

Dokumein akadeimik digunakan untuk meimpeiroleih data yang beirsifat formal dan teirstruktur yang beirasal dari sisteim informasi akadeimik (SIAKAD). Data ini digunakan seibagai dasar dalam proseis analisis dan peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa.

1. Catatan Peineiliti

Catatan peineiliti meirupakan instrumein peindukung yang digunakan untuk meincatat beirbagai teimuan, hasil peingamatan, seirta informasi peinting yang dipeiroleih seilama proseis peineilitian beirlangsung. Catatan ini beirfungsi seibagai dokumeintasi tambahan yang meimbantu peineiliti dalam meilakukan analisis data dan peingambilan keiputusan seilama peingeimbangan sisteim.

Dalam peineilitian ini, catatan peineiliti digunakan untuk meincatat hasil obseirvasi, ringkasan wawancara, seirta hal-hal peinting yang beirkaitan deingan proseis peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa. Catatan peineiliti meimbantu meinjaga konsisteinsi data seirta meimudahkan peineiliti dalam meinyusun laporan peineilitian.

1. **Teknik Analisis Data**

Teiknik analisis data meirupakan tahapan yang dilakukan seiteilah proseis peingumpulan data seileisai dilaksanakan. Analisis data beirtujuan untuk meingolah, meinafsirkan, seirta meinarik keisimpulan dari data yang teilah dipeiroleih agar dapat digunakan seibagai dasar dalam peingeimbangan sisteim. Dalam peineilitian ini, teiknik analisis data digunakan untuk meimahami keibutuhan peingguna, meingideintifikasi peirmasalahan yang teirjadi, seirta meineintukan solusi yang teipat dalam peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa.

Proseis analisis data dalam peineilitian ini dilakukan seicara sisteimatis dan beirtahap, seihingga data yang dipeiroleih dapat diolah meinjadi informasi yang beirmakna dan reileivan deingan tujuan peineilitian. Teiknik analisis yang digunakan diseisuaikan deingan jeinis data yang dikumpulkan, baik data primeir maupun data seikundeir.

Adapun tahapan teiknik analisis data dalam peineilitian ini adalah seibagai beirikut:

* 1. Analisis Data Hasil Obseirvasi

Data yang dipeiroleih meilalui obseirvasi dianalisis deingan cara meingideintifikasi proseis monitoring kineirja akadeimik mahasiswa yang seidang beirjalan. Peineiliti meineilaah alur peingeilolaan data akadeimik, proseis eivaluasi yang dilakukan, seirta keindala yang muncul dalam peilaksanaannya.

Hasil obseirvasi keimudian dirangkum dan dikateigorikan beirdasarkan peirmasalahan yang diteimukan. Dari hasil teirseibut, peineiliti dapat meineintukan keibutuhan sisteim yang harus dipeinuhi agar sisteim yang dikeimbangkan mampu meiningkatkan eifeiktivitas monitoring akadeimik.

* 1. Analisis Data Hasil Wawancara

Data yang dipeiroleih meilalui wawancara dianalisis deingan cara meineilaah jawaban narasumbeir dan meingeilompokkan informasi beirdasarkan teima atau keibutuhan teirteintu. Analisis ini beirtujuan untuk meingeitahui harapan peingguna, fitur yang dibutuhkan, seirta keindala dalam proseis monitoring akadeimik.

Hasil analisis wawancara digunakan seibagai dasar dalam meineintukan speisifikasi sisteim dan peirancangan fitur agar sisteim yang dikeimbangkan seisuai deingan keibutuhan nyata peingguna.

* 1. Analisis Data Dokumeintasi

Data yang dipeiroleih dari dokumein akadeimik dianalisis deingan cara meimpeilajari struktur data, jeinis informasi, seirta format peinyimpanan data. Analisis ini beirtujuan untuk meimastikan bahwa sisteim mampu meingeilola dan meinyajikan data akadeimik seicara teirstruktur dan mudah dipahami.

Seilain itu, analisis dokumeintasi meimbantu dalam meineintukan data yang akan digunakan seibagai input dalam sisteim seirta bagaimana data teirseibut diolah meinjadi informasi yang meindukung eivaluasi akadeimik.

* 1. Analisis Keibutuhan Sisteim

Seiteilah seiluruh data dianalisis, tahap seilanjutnya adalah meilakukan analisis keibutuhan sisteim. Pada tahap ini, peineiliti meingideintifikasi keibutuhan fungsional dan non-fungsional dari sisteim.

Keibutuhan fungsional meiliputi fitur-fitur yang harus teirseidia dalam sisteim, seipeirti peingeilolaan data mahasiswa, peingeilolaan data akadeimik, monitoring kineirja akadeimik, seirta peinyajian laporan. Seidangkan keibutuhan non-fungsional meincakup aspeik keimudahan peinggunaan, keiamanan data, dan akseisibilitas sisteim.

* 1. Analisis Meinggunakan Algoritma Deicision Treiei (C4.5)

Peineilitian ini meinggunakan meitodei Deicision Treiei dalam proseis analisis data untuk meindukung peingambilan keiputusan. Algoritma yang digunakan adalah **C4.5**, yang meirupakan peingeimbangan dari algoritma ID3. Algoritma C4.5 dipilih kareina mampu meingolah data numeirik maupun kateigorikal, seirta meimiliki keimampuan dalam meinangani *missing value* dan meilakukan proseis pruning untuk meiningkatkan akurasi modeil.

Meitodei klasifikasi yang digunakan dalam peineilitian ini adalah algoritma Deicision Treiei deingan peindeikatan C4.5. Dalam proseis peimbeintukan pohon keiputusan, peineintuan atribut seibagai root nodei dilakukan deingan meinggunakan peirhitungan Gain Ratio yang meirupakan peingeimbangan dari Information Gain. Peinggunaan Gain Ratio beirtujuan untuk meiminimalkan bias pada atribut yang meimiliki banyak variasi nilai, seihingga meinghasilkan modeil preidiksi yang leibih akurat.

* 1. Eivaluasi Modeil Deicision Treiei

Seiteilah proseis peimbeintukan modeil Deicision Treiei meinggunakan algoritma C4.5, tahap seilanjutnya adalah meilakukan eivaluasi teirhadap modeil yang dihasilkan. Eivaluasi modeil beirtujuan untuk meingeitahui tingkat akurasi dan kineirja modeil dalam meilakukan klasifikasi kineirja akadeimik mahasiswa.

Pada peineilitian ini, eivaluasi modeil dilakukan deingan meinggunakan meitodei peimbagian data (data splitting), yaitu deingan meimbagi dataseit meinjadi dua bagian, yaitu data latih (training data) dan data uji (teisting data). Data latih digunakan untuk meimbangun modeil Deicision Treiei, seidangkan data uji digunakan untuk meinguji peirforma modeil yang teilah dibeintuk.

Untuk meingukur kineirja modeil, digunakan meitrik akurasi, yaitu peirbandingan antara jumlah preidiksi yang beinar deingan total data yang diuji. Seimakin tinggi nilai akurasi yang dihasilkan, maka seimakin baik kineirja modeil dalam meilakukan klasifikasi.

Seilain itu, eivaluasi juga dapat dilakukan deingan meinggunakan **confusion matrix**, yang beirfungsi untuk meingeitahui jumlah preidiksi yang beinar dan salah dalam seitiap kateigori. Confusion matrix meimbeirikan informasi yang leibih rinci meingeinai peirforma modeil dalam meingklasifikasikan data.

Hasil eivaluasi modeil ini nantinya akan digunakan seibagai dasar dalam meinilai eifeiktivitas peinggunaan algoritma Deicision Treiei dalam sisteim monitoring kineirja akadeimik mahasiswa.

Adapun tahapan dalam peimbeintukan pohon keiputusan adalah seibagai beirikut:

1. **Peineintuan Atribut (Kriteiria)**

Atribut yang digunakan dalam peineilitian ini teirdiri dari variabeil akadeimik dan non-akadeimik, yaitu:

1. Nilai mata kuliah
2. Indeiks Preistasi Seimeisteir (IPS)
3. Indeiks Preistasi Kumulatif (IPK)
4. Kondisi eikonomi mahasiswa
5. Keiaktifan organisasi
6. Asal seikolah

Atribut-atribut teirseibut digunakan seibagai variabeil dalam proseis klasifikasi kineirja akadeimik mahasiswa.

1. **Peineintuan Root Nodei**

Peimilihan root nodei dilakukan deingan meinghitung nilai **gain ratio** dari seitiap atribut. Atribut deingan nilai gain ratio teirtinggi akan dipilih seibagai root nodei kareina meimiliki keimampuan teirbaik dalam meimisahkan data kei dalam keilas yang beirbeida.

1. **Proseis Split Nodei**

Seiteilah root nodei diteintukan, data akan dibagi beirdasarkan atribut teirseibut. Proseis peimbeintukan cabang dilakukan seicara beirulang (reikursif) hingga seiluruh data teirklasifikasi atau tidak teirdapat atribut lain yang dapat digunakan untuk peimisahan data.

1. **Peimbeintukan Aturan Keiputusan**

Pohon keiputusan yang teirbeintuk keimudian diubah meinjadi aturan keiputusan (deicision ruleis) dalam beintuk logika if–thein. Aturan ini digunakan oleih sisteim untuk meineintukan kateigori kineirja akadeimik mahasiswa.

Contoh aturan keiputusan yang dihasilkan antara lain:

1. Jika IPK tinggi dan keihadiran baik maka berpotensi lulus tepat waktu
2. Jika IPK seidang dan keihadiran reindah mahasiswa berpotensi mengalami keterlambatan kelulusan
3. Jika IPK reindah maka mahasiswa berpotensi tidak lulus tepat waktu

Aturan-aturan teirseibut keimudian diimpleimeintasikan kei dalam sisteim monitoring kineirja akadeimik mahasiswa seibagai dasar dalam proseis eivaluasi dan peingambilan keiputusan

# DAFTAR RUJUKAN

Absharina, Ei. D., Noveila, D., Parwati, T. G., & Antika, R. (2025). Eivaluasi kineirja akadeimik mahasiswa ITS NU Sriwijaya meinggunakan data mining. Jurnal Komputeir Teiknologi Informasi Sisteim Informasi (JUKTISI), 4(1), 117–123. [https://doi.org/10.62712/juktisi.v4i1.362](https://doi.org/10.62712/juktisi.v4i1.362%22%20%5Ct%20%22_new)

Aggarwal, C. C. (2021). Data Mining: Thei Teixtbook. Springeir.

Amri, Z., Kusrini, K., & Kusnawi, K. (2023). Preidiksi tingkat keilulusan mahasiswa meinggunakan algoritma Naïvei Bayeis, Deicision Treiei, ANN, KNN, dan SVM. Eidumatic: Jurnal Peindidikan Informatika, 7(2), 187–196. [https://doi.org/10.29408/eidumatic.v7i2.18620](https://doi.org/10.29408/edumatic.v7i2.18620%22%20%5Ct%20%22_new)

Azis, A. R. (2024). Analisis komparasi algoritma machinei leiarning dalam preidiksi peirforma akadeimik mahasiswa: Liteiraturei reivieiw, 4(2), 143–150.

Cahyaningtyas, C., Nataliani, Y., & Widiasari, I. R. (2021). Analisis seintimein pada rating aplikasi Shopeiei meinggunakan meitodei Deicision Treiei beirbasis SMOTEi, 18(2), 173–184.

Faizah, N., A’lam, G. F., & Sobri, A. Y. (2023). Sisteim ei-meintoring dalam proseis peimbeilajaran di peirguruan tinggi: Systeimatic liteiraturei reivieiw.

Faruq, U. A., Ainun, M., Fauzi, N., Daniati, Ei., & Ristyawan, A. (2024). Preidiksi data keilulusan mahasiswa deingan meitodei Deicision Treiei meinggunakan RapidMineir, 7, 131–138.

Fauziyah, S., & Sugiarti, Y. (2022). Liteiraturei reivieiw: Analisis meitodei peirancangan sisteim informasi akadeimik beirbasis weib, 8(2), 87–93.

Firmansyah, M. B., Suminar, D. R., & Fardana, N. A. (2021). Tinjauan liteiratur teintang keipuasan keirja, keiteirikatan keirja dan kineirja peindidik, 15(2), 181–188. [https://doi.org/10.30595/jkp.v15i2.11705](https://doi.org/10.30595/jkp.v15i2.11705%22%20%5Ct%20%22_new)

Kurniawan, M. J., Wang, G., eit al. (2024). Gamifikasi sisteim peimantauan kineirja mahasiswa dalam meincapai keilulusan teipat waktu, 5(1), 105–118.

Larosei, D. T., & Larosei, C. D. (2022). Data Mining and Preidictivei Analytics. Wileiy.

Lutfina, Ei., Andriana, W., Wiratmaja, S. Q. P., & Feibrianti, Ei. (2024). Meitodei dan algoritma dalam seintimein analisis: Systeimatic liteiraturei reivieiw, 4(2), 67–79.

Mirwansyah, D., & Mahdiana, D. (2023). Rancang bangun sisteim informasi geiografis beirbasis weib: Tinjauan liteiratur sisteimatis (SLR), 18(1).

Mulyadi, Y., & Yusuf, L. (2021). Peirancangan sisteim informasi akadeimik beirbasis weib. INSAN: Journal of Information Systeim Manageimeint Innovation, 1(2), 103–111. [https://doi.org/10.31294/jinsan.v1i2.704](https://doi.org/10.31294/jinsan.v1i2.704%22%20%5Ct%20%22_new)

Purnaningsih, P. K., & Yulianto, A. (2022). Peirancangan sisteim informasi manajeimein beirbasis weib dalam peingeilolaan data siswa. Reimik, 6(4), 738–753. [https://doi.org/10.33395/reimik.v6i4.11818](https://doi.org/10.33395/remik.v6i4.11818)

Putri, K. A., Feibriawan, D., & Hasan, F. N. (2024). Impleimeintation of data mining to preidict studeint study peiriod with Deicision Treiei algorithm, 13, 39–47.

Putriningsih, Ei., Nada, L. Q., Izza, A. Z., & Mardhiyana, D. (2022). Deisain sisteim informasi monitoring beirbantuan weibsitei, 20(1), 51–58.

Seitiyani, L. (2020). Analisis preidiksi keilulusan mahasiswa teipat waktu meinggunakan meitodei data mining naïvei bayeis: Systeimatic reivieiw. Faktor Eixacta, 13(1), 35–43. [https://doi.org/10.30998/faktoreixacta.v13i1.5548](https://doi.org/10.30998/faktorexacta.v13i1.5548%22%20%5Ct%20%22_new)

Sivi, N. A., Hartono, R., & Hanafi, P. (2023). Peineirapan algoritma C4.5 untuk preidiksi keilulusan mahasiswa. Polygon, 1(5), 1–17. [https://doi.org/10.62383/polygon.v1i5.855](https://doi.org/10.62383/polygon.v1i5.855%22%20%5Ct%20%22_new)

Suriani, U. (2023). Peineirapan data mining untuk meimpreidiksi tingkat keilulusan mahasiswa meinggunakan algoritma Deicision Treiei, 3(2), 55–66.

Ulfa, M. (2020). Deicision support systeim meithods: A reivieiw, 2(1), 192–201.

Zurna, H. P. B., Rini, F., & Pratama, A. (2022). Sisteim informasi peirpustakaan beirbasis weib, 2(1), 5–10.

1. Putri Kusuma Purnaningsih and Agus Yulianto, “Perancangan Sistem Informasi Manajemen Berbasis Web Dalam Pengelolaan Data Siswa,” *Remik* 6, no. 4 (2022): 738–53, https://doi.org/10.33395/remik.v6i4.11818. [↑](#footnote-ref-1)
2. Yudy Mulyadi and Lestari Yusuf, “Perancangan Sistem Informasi Akademik Berbasis Web Pada TKIT Riyadhul Jannah Jakarta,” *Jurnal INSAN: Journal of Information System Management Innovation* 1, no. 2 (2021): 103–11, https://doi.org/10.31294/jinsan.v1i2.704. [↑](#footnote-ref-2)
3. Seminar Nasional et al., “IN-FEST 2024 Systematic Literature Review : Analisis Metode Untuk Menerapkan Sistem Pendukung Keputusan IN-FEST 2024” 2 (2024): 585–92. [↑](#footnote-ref-3)
4. Hadi Jaya Pratama et al., “SYSTEMATIC LITERATURE REVIEW ( SLR ) : SISTEM,” 2023, 2–7. [↑](#footnote-ref-4)
5. N Faizah, Ghasa Faraasyatul A, and Ahmad Yusuf Sobri, “Sistem E-Mentoring Dalam Proses Pembelajaran Di Perguruan Tinggi : Systematic Literature Review,” n.d. [↑](#footnote-ref-5)
6. Keterikatan Kerja and D A N Kinerja, “TINJAUAN LITERATUR TENTANG KEPUASAN KERJA ,” 15, no. 2 (2021): 181–88, https://doi.org/10.30595/jkp.v15i2.11705. [↑](#footnote-ref-6)
7. Dedy Mirwansyah and Deni Mahdiana, “Rancang Bangun Sistem Informasi Geografis Berbasis Web : Tinjauan Literatur Sistematis ( SLR )” 18, no. 1 (2023). [↑](#footnote-ref-7)
8. Hadid Putri B Zurna, Faiza Rini, and Ade Pratama, “Sistem Informasi Perpustakaan Berbasis Web” 2, no. 1 (2022): 5–10. [↑](#footnote-ref-8)
9. Lila Setiyani, “ANALISIS PREDIKSI KELULUSAN MAHASISWA TEPAT WAKTU MENGGUNAKAN METODE DATA MINING NAÏVE BAYES : SYSTEMATIC REVIEW” 13, no. 1 (2020): 35–43, https://doi.org/10.30998/faktorexacta.v13i1.5548. [↑](#footnote-ref-9)
10. Uci Suriani, “Penerapan Data Mining Untuk Memprediksi Tingkat Kelulusan Mahasiswa Menggunakan Algoritma” 3, no. 2 (2023): 55–66. [↑](#footnote-ref-10)
11. Erba Lutfina et al., “Metode Dan Algoritma Dalam Sentimen Analisis : Systematic Literature Review” 4, no. 2 (2024): 67–79. [↑](#footnote-ref-11)
12. Christian Cahyaningtyas et al., “Analisis Sentimen Pada Rating Aplikasi Shopee Menggunakan Metode Decision Tree Berbasis SMOTE” 18, no. 2 (2021): 173–84. [↑](#footnote-ref-12)
13. Nuari Anisa Sivi, Rudi Hartono, and Putra Hanafi, “Penerapan Algoritma C4.5 Untuk Prediksi Kelulusan Mahasiswa Berdasarkan Data Akademik,” *Polygon : Jurnal Ilmu Komputer Dan Ilmu Pengetahuan Alam* 1, no. 5 (2023): 01–17, https://doi.org/10.62383/polygon.v1i5.855. [↑](#footnote-ref-13)
14. Nurhaliza and Suendri, “Journal of Dinda,” *Journal.Ittelkom-Pwt.Ac.Id/Index.Php/Dinda* 5, no. 2 (2025): 258–67. [↑](#footnote-ref-14)
15. Dwi Risky Arifanti, “WEBSITE-BASED ACADEMIC PERFORMANCE MONITORING AND EVALUATION INFORMATION SYSTEM AT IAIN PALOPO” XIV, no. 1 (2025): 45–53, https://doi.org/10.35508/jme.v0i0.20533. [↑](#footnote-ref-15)
16. Zaenul Amri, Kusrini Kusrini, and Kusnawi Kusnawi, “Prediksi Tingkat Kelulusan Mahasiswa Menggunakan Algoritma Naïve Bayes, Decision Tree, ANN, KNN, Dan SVM,” *Edumatic: Jurnal Pendidikan Informatika* 7, no. 2 (2023): 187–96, https://doi.org/10.29408/edumatic.v7i2.18620. [↑](#footnote-ref-16)
17. Nurhaliza and Suendri, “Journal of Dinda.” [↑](#footnote-ref-17)
18. Eriene Dheanda Absharina et al., “Evaluasi Kinerja Akademik Mahasiswa ITS NU Sriwijaya Menggunakan Data Mining,” *Jurnal Komputer Teknologi Informasi Sistem Informasi (JUKTISI)* 4, no. 1 (2025): 117–23, https://doi.org/10.62712/juktisi.v4i1.362. [↑](#footnote-ref-18)
19. Amri, Kusrini, and Kusnawi, “Prediksi Tingkat Kelulusan Mahasiswa Menggunakan Algoritma Naïve Bayes, Decision Tree, ANN, KNN, Dan SVM.” [↑](#footnote-ref-19)
20. Purnaningsih and Yulianto, “Perancangan Sistem Informasi Manajemen Berbasis Web Dalam Pengelolaan Data Siswa.” [↑](#footnote-ref-20)
21. Umar Al Faruq et al., “Prediksi Data Kelulusan Mahasiswa Dengan Metode Decision Tree Menggunakan Rapidminer” 7 (2024): 131–38. [↑](#footnote-ref-21)
22. Nurhaliza and Suendri, “Journal of Dinda.” [↑](#footnote-ref-22)
23. Arifanti, “WEBSITE-BASED ACADEMIC PERFORMANCE MONITORING AND EVALUATION INFORMATION SYSTEM AT IAIN PALOPO.” [↑](#footnote-ref-23)
24. Jurnal Penelitian et al., “Pengaruh Kondisi Ekonomi Keluarga Terhadap Prestasi Belajar Mahasiswa Program Studi Pendidikan Ekonomi Pada Fakultas Keguruan Dan Ilmu Pendidikan Di Universitas Nias” 5, no. 3 (2024): 291–300, https://doi.org/10.30596/jppp.v5i3.20938. [↑](#footnote-ref-24)
25. Hadi Putra, Khairunnisa Nasution, and Elkin Rilvani, “Prediksi Kelulusan Mahasiswa Tepat Waktu Menggunakan Decision Tree: Studi Perbandingan Algoritma Id3 Dan C4.5,” *Jma)* 3, no. 7 (2025): 3031–5220, https://doi.org/10.23887/jpi-undiksha.v10i2.30020. [↑](#footnote-ref-25)
26. Etika Putriningsih et al., “DESAIN SISTEM INFORMASI MONITORING BERBANTUAN WEBSITE” 20, no. 1 (2022): 51–58. [↑](#footnote-ref-26)
27. D I Smp and Rahmat Islamiyah, “Jurnal Teknologi , Kesehatan Dan Ilmu PERANCANGAN SISTEM INFORMASI AKADEMIK BERBASIS WEB Jurnal Teknologi , Kesehatan Dan Ilmu Sosial” 2, no. 1 (2020). [↑](#footnote-ref-27)
28. Stefanus Alvian Setiono and Eko Purwanto, “Prediksi Kelulusan Mahasiswa Menggunakan Algoritma Decision Tree,” *Prosiding Seminar Nasional Teknologi Informasi Dan Bisnis* 3, no. 2 (2025): 401–6, https://doi.org/10.47701/4q3z9j41. [↑](#footnote-ref-28)
29. Abdur Rahman Azis, “Analisis Komparasi Algoritma Machine Learning Dalam Prediksi Performa Akademik Mahasiswa : Literature Review” 4, no. 2 (2024): 143–50. [↑](#footnote-ref-29)
30. Kirana Alyssa Putri, Dimas Febriawan, and Firman Noor Hasan, “Implementation of Data Mining to Predict Student Study Period with Decision Tree Algorithm ( C4 . 5 )” 13 (2024): 39–47. [↑](#footnote-ref-30)
31. Menggunakan Algoritma et al., “Penerapan Data Mining Untuk Memprediksi Prestasi Akademik Mahasiswa” 7, no. 1 (2023): 16–20. [↑](#footnote-ref-31)
32. Binastya Anggara Sekti et al., “PERANCANGAN SISTEM INFORMASI AKADEMIK MOBILE,” 2023, 136–47. [↑](#footnote-ref-32)
33. Muhammad Yusril Haffandi et al., “Analisa Metode Sistem Pendukung Keputusan Dalam Konteks Perusahaan : Systematic Literature Review” 0738, no. 4 (2024): 6463–71. [↑](#footnote-ref-33)
34. Arifanti, “WEBSITE-BASED ACADEMIC PERFORMANCE MONITORING AND EVALUATION INFORMATION SYSTEM AT IAIN PALOPO.” [↑](#footnote-ref-34)
35. Algoritma et al., “Penerapan Data Mining Untuk Memprediksi Prestasi Akademik Mahasiswa.” [↑](#footnote-ref-35)
36. Daniel T. Larose; Chantal D. Larose, *Data Mining and Predictive Analytics* (Wiley, 2022). [↑](#footnote-ref-36)
37. Charu C. Aggarwal, *Data Mining: The Textbook* (Springer, 2021). [↑](#footnote-ref-37)
38. Alyada Ulya et al., “Konsep Dasar IPS Dan Implementasinya Di Sekolah” 8, no. 2 (2023): 225–37. [↑](#footnote-ref-38)
39. Wayan Gede and Endra Bratha, “LITERATURE REVIEW KOMPONEN SISTEM INFORMASI MANAJEMEN : SOFTWARE , DATABASE DAN BRAINWARE” 3, no. 3 (2022): 344–60. [↑](#footnote-ref-39)
40. P Issn, Syifa Fauziyah, and Yuni Sugiarti, “Literature Review : Analisis Metode Perancangan Sistem Informasi Akademik Berbasis Web” 8, no. 2 (2022): 87–93. [↑](#footnote-ref-40)
41. Terpadu Al and Ummah Jombang, “Implementasi Sistem Informasi Manajemen Di Smp Islam” 1 (2021): 8–19. [↑](#footnote-ref-41)
42. Haffandi et al., “Analisa Metode Sistem Pendukung Keputusan Dalam Konteks Perusahaan : Systematic Literature Review.” [↑](#footnote-ref-42)
43. Maria Ulfa, “Decision Support System Methods : A Review Metode Sistem Penunjang Keputusan : A Review” 2, no. 1 (2020): 192–201. [↑](#footnote-ref-43)
44. Syifaun Nafisah and Siti Rohaya, “Sistem Monitoring Akademik Mahasiswa Difabel Dengan Black Box Testing Keywords :,” n.d. [↑](#footnote-ref-44)
45. Michael Joseph Kurniawan, Gunawan Wang, and Manajemen Sistem Informasi, “Gamifikasi Sistem Pemantauan Kinerja Mahasiswa Dalam Mencapai Kelulusan Tepat Waktu” 5, no. 1 (2024): 105–18. [↑](#footnote-ref-45)
46. Issn, Fauziyah, and Sugiarti, “Literature Review : Analisis Metode Perancangan Sistem Informasi Akademik Berbasis Web.” [↑](#footnote-ref-46)
47. Sistem Informasi et al., “Analisis Metode Pengembangan Sistem Informasi Berbasis Website : Systematic Literature Review” 7 (2023): 821–34. [↑](#footnote-ref-47)
48. Pelaksanaan Pembelajaran et al., “Metode Decision Tree Untuk Meningkatkan Kualitas Rencana” 6, no. 3 (2022): 510–19. [↑](#footnote-ref-48)
49. Dini Destiani, Siti Fatimah, and Elita Rahmawati, “Penggunaan Metode Decision Tree Dalam Rancang Bangun Sistem Prediksi Untuk Kelulusan Mahasiswa,” n.d., (2021): 553–61. [↑](#footnote-ref-49)
50. Menggunakan Php and D A N Mysql, “FST PSU Bekasi” 6, no. 1 (2021): 12–16. [↑](#footnote-ref-50)
51. Muhamad Rizky and Yuni Sugiarti, “Pengunaan Metode Scrum Dalam Pengembangan Perangkat Lunak : Literature Review” 3, no. 1 (2022): 41–48. [↑](#footnote-ref-51)
52. Sistem Informasi and Pencatatan Magang, “Penerapan Metode Scrum Pada Pengembangan Sistem Informasi Pencatatan Magang” 7, no. 1 (2024): 34–44. [↑](#footnote-ref-52)