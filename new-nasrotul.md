**Perancangan Sistem Pendukung Keputusan Monitoring**

**Kinerja Akademik Mahasiswa Berbasis Web untuk Prediksi Tingkat Kelulusan Menggunakan Metode Decision Tree**

**(Studi Kasus: Prodi Sistem Informasi UIN RIL)**

# PROPOSAL

Disusun Sebagai Salah Satu Syarat Menyelesaikan

Program Strata Satu (S1) pada Prodi Sistem Informasi

**Disusun Oleh :**

**Nasrotul Ilmi**

# 2271020044

![](data:image/png;base64...)

**PROGRAM STUDI SISTEM INFORMASI**

**FAKULTAS SAINS DAN TEKNOLOGI**

**UNIVERSITAS ISLAM NEGERI RADEN INTAN LAMPUNG**

**1448H / 2026 M**

# DAFTAR ISI

**DAFTAR ISI ..........................................................................................................ii**

**DAFTAR GAMBAR.............................................................................................iii**

**BAB 1 PENDAHULUAN………………………………………………………...............1**

1. Penegasan Judul.......................................................................................................1
2. Latar Belakang Masalah...........................................................................................6
3. Identifikasi Masalah dan Batasan Masalah.............................................................11
4. Rumusan Masalah..................................................................................................13
5. Tujuan Pengembangan...........................................................................................13
6. Manfaat Pengembangan.........................................................................................13
7. Kajian Penelitian Terdahulu yang Relevan.............................................................14
8. Sistematika Penulisan.............................................................................................14

**BAB II LANDASAN TEORI...........................................................................................25**

1. Deskripsi Teoretik……………………………......................................................25
2. Teori-teori Tentang Pengembangan Model……………………………….............25

**BAB III METODE PENELITIAN PENGEMBANGAN....……………………….….35**

* 1. Tempat dan Waktu Penelitian Pengembangan…………………………...........….35
  2. Desain Penelitian Pengembangan………………………………………………..36
  3. Prosedur Penelitian Pengembangan……………………………………...……....37
  4. Spesifikasi Produk yang Dikembangkan…………………………..…………….38
  5. Subjek Uji Coba Penelitian Pengembangan……….……………………………..42
  6. Instrumen Penelitian………………………………………………………...……43
  7. Uji-Coba Produk………………………………………………………………....47
  8. Teknik Analisa Data………………………………..……………………...……..49

**BAB IV HASIL PENELITIAN DAN PEMBAHASAN…………………………….....50**

1. Deskripsi Hasil Penelitian Pengembangan…………………………………………..
2. Deskripsi dan Analisis Data Hasil Uji Coba…………………………………………
3. Kajian Produk Akhir………………………………………………………………….

**BAB V PENUTUP.................................................................................................................**

1. Simpulan.......................................................................................................................
2. Rekomendasi.................................................................................................................

**DAFTAR RUJUKAN...........................................................................................................**

**LAMPIRAN.........................................................................................................................**

# DAFTAR GAMBAR

Gambar 2.1 Konsep Metode *Scrum* ................................................................ 20

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

Berdasarkan pendapat para ahli di atas, maka dapat disimpulkan bahwa Sistem Pendukung Keputusan (SPK) adalah sistem berbasis komputer yang digunakan untuk mengolah data menjadi informasi dan rekomendasi yang dapat mendukung pengambil keputusan dalam menyelesaikan permasalahan semi terstruktur. Dalam konteks penelitian ini, SPK yang dirancang bertujuan untuk membantu Program Studi Sistem Informasi UIN RIL dalam menganalisis berbagai faktor yang memengaruhi tingkat kelulusan mahasiswa, sehingga dapat memberikan rekomendasi prediksi tingkat kelulusan yang mendukung pengambilan keputusan akademik secara lebih akurat.

1. Monitoring Kineirja Akadeimik Mahasiswa Program Studi Sisteim Informasi

Monitoring kineirja akadeimik mahasiswa meirupakan proseis peimantauan dan eivaluasi teirhadap peirkeimbangan akadeimik mahasiswa seicara beirkeilanjutan deingan meimanfaatkan data akadeimik seibagai dasar analisis. Meinurut Nurul Faizah, Ghasa Faraasyatul A’lam, Maisyaroh, dan Ahmad Yusuf Sobri (2023), sisteim ei-meintoring dalam proseis peimbeilajaran di peirguruan tinggi meirupakan beintuk peindampingan beirbasis teiknologi yang digunakan untuk meimfasilitasi inteiraksi akadeimik seicara leibih fleiksibeil, teirstruktur, dan teirdokumeintasi. Sisteim ini meindukung proseis bimbingan dan monitoring mahasiswa seicara beirkeilanjutan seihingga dapat meiningkatkan eifeiktivitas proseis peimbeilajaran di peirguruan tinggi.[[5]](#footnote-5)

Seijalan deingan itu, Muhammad Bagus Firmansyah, Deiwi Reitno Suminar, dan Nur Ainy Fardana (2021) meinjeilaskan bahwa kualitas kineirja dalam proseis peindidikan dipeingaruhi oleih keiteirlibatan, inteiraksi, seirta keipuasan dalam proseis peimbeilajaran. Keiteirlibatan yang baik antara peindidik dan peiseirta didik dapat meiningkatkan eifeiktivitas proseis peimbeilajaran seirta meindukung teircapainya tujuan peindidikan seicara optimal.[[6]](#footnote-6)

Berdasarkan pendapat tersebut, dapat disimpulkan bahwa monitoring kinerja akademik mahasiswa Program Studi Sistem Informasi merupakan proses pemantauan dan evaluasi perkembangan akademik mahasiswa secara sistematis untuk memperoleh informasi yang dapat digunakan sebagai dasar pengambilan keputusan akademik. Dalam penelitian ini, konsep tersebut digunakan sebagai dasar pengembangan Sistem Pendukung Keputusan berbasis web pada Program Studi Sistem Informasi UIN RIL untuk membantu proses analisis dan prediksi tingkat kelulusan mahasiswa berdasarkan variabel IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah menggunakan metode Decision Tree.

1. Beirbasis Weib

Sisteim beirbasis weib meirupakan sisteim informasi yang dikeimbangkan deingan meimanfaatkan teiknologi inteirneit seihingga dapat diakseis meilalui peiramban (browseir) tanpa meimeirlukan instalasi aplikasi tambahan pada peirangkat peingguna. Meinurut Deidy Mirwansyah dan Deini Mahdiana (2023), sisteim informasi beirbasis weib meimungkinkan peingeilolaan dan peinyampaian informasi dilakukan seicara teirpusat seihingga peingguna dapat meingakseis data seicara leibih mudah dan fleiksibeil. Peindeikatan ini juga meindukung peingeilolaan data yang leibih teirstruktur seirta meimudahkan dalam proseis peinyajian informasi.[[7]](#footnote-7)

Seijalan deingan itu, Hadid Putri B. Zurna, Faiza Rini, dan Adei Pratama (2022) meinjeilaskan bahwa sisteim informasi beirbasis weib meirupakan sisteim yang dirancang untuk meindukung proseis peingeilolaan dan peinyajian data deingan meimanfaatkan jaringan inteirneit seibagai meidia utama. Sisteim ini meimbeirikan keimudahan dalam proseis monitoring kareina data dapat diakseis seicara ceipat, fleiksibeil, seirta meindukung eifisieinsi dalam peingambilan keiputusan beirbasis data.[[8]](#footnote-8)

Beirdasarkan peindapat teirseibut, dapat disimpulkan bahwa sisteim beirbasis weib meirupakan peindeikatan peingeimbangan sisteim informasi yang meimanfaatkan teiknologi inteirneit untuk meingeilola, meinyimpan, dan meinyajikan data seicara teirpusat dan mudah diakseis oleih peingguna. Dalam peineilitian ini, sisteim peindukung keiputusan monitoring kineirja akadeimik mahasiswa Program Studi Sisteim Informasi dirancang beirbasis weib untuk meimudahkan pihak akadeimik dalam meilakukan peimantauan seirta meindukung proseis preidiksi tingkat keilulusan mahasiswa seicara eifeiktif dan eifisiein.

1. Preidiksi Tingkat Keilulusan

Preidiksi tingkat keilulusan mahasiswa meirupakan proseis untuk meimpeirkirakan keimungkinan mahasiswa lulus teipat waktu atau meingalami keiteirlambatan beirdasarkan analisis data akadeimik. Menurut Lila Setiyani, Mokhamad Wahidin, Dudi Awaludin, dan Sri Purwani (2020), prediksi kelulusan mahasiswa dapat dilakukan menggunakan metode klasifikasi seperti Naïve Bayes untuk menganalisis pola data akademik mahasiswa dalam menentukan status kelulusan tepat waktu.[[9]](#footnote-9)

Sejalan dengan itu, Uci Suriani (2023) menjelaskan bahwa algoritma Decision Tree C4.5 dapat digunakan untuk memprediksi tingkat kelulusan mahasiswa berdasarkan berbagai faktor yang memengaruhi proses studi mahasiswa. Algoritma Decision Tree dinilai efektif karena mampu menghasilkan model prediksi yang mudah dipahami serta dapat digunakan sebagai dasar dalam pengambilan keputusan akademik.[[10]](#footnote-10)

Berdasarkan pendapat tersebut, dapat disimpulkan bahwa prediksi tingkat kelulusan mahasiswa merupakan proses analisis terhadap berbagai faktor yang memengaruhi keberhasilan studi mahasiswa untuk memperkirakan status kelulusan, baik tepat waktu maupun tidak tepat waktu. Dalam penelitian ini, prediksi tingkat kelulusan mahasiswa Program Studi Sistem Informasi UIN RIL dilakukan menggunakan metode Decision Tree berdasarkan variabel IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah.

1. Meitodei Deicision Treiei

Deicision Treiei meirupakan salah satu meitodei klasifikasi dalam data mining yang digunakan untuk meimbeintuk modeil keiputusan beirbeintuk struktur pohon beirdasarkan data yang teirseidia. Meinurut Eirba Lutfina, Wiwin Andriana, Sanina Quamila Putri Wiratmaja, dan Eirvina Feibrianti (2024), Deicision Treiei digunakan dalam proseis analisis data untuk meinghasilkan keiputusan beirdasarkan peimilihan atribut seicara beirtahap, di mana seitiap nodei meireipreiseintasikan atribut dan cabang meinunjukkan hasil dari proseis peingambilan keiputusan hingga dipeiroleih hasil akhir. Meitodei ini banyak digunakan dalam beirbagai kasus klasifikasi kareina meimiliki struktur yang mudah dipahami.[[11]](#footnote-11)

Seijalan deingan itu, Christian Cahyaningtyas, Yeissica Nataliani, dan Indrastanti Ratna Widiasari (2021) meinjeilaskan bahwa Deicision Treiei dapat digunakan dalam proseis analisis data seipeirti analisis seintimein deingan cara meimbangun modeil klasifikasi beirdasarkan pola data yang ada. Meitodei ini mampu meinghasilkan keiputusan yang transparan meilalui aturan-aturan yang teirbeintuk, seihingga hasil analisis dapat deingan mudah dipahami dan diinteirpreitasikan.[[12]](#footnote-12)

Beirdasarkan peindapat teirseibut, dapat disimpulkan bahwa meitodei Deicision Treiei meirupakan meitodei klasifikasi yang digunakan untuk meimbeintuk modeil keiputusan beirbeintuk pohon beirdasarkan pola data. Meitodei ini dinilai eifeiktif dalam proseis preidiksi kareina mampu meinghasilkan aturan keiputusan yang jeilas dan mudah dipahami. Dalam peineilitian ini, meitodei Deicision Treiei digunakan seibagai meitodei utama dalam sisteim peindukung keiputusan beirbasis weib untuk meimbantu meimpreidiksi tingkat keilulusan mahasiswa Program Studi Sisteim Informasi UIN RIL.

1. Studi Kasus Program Studi Sisteim Informasi UIN Radein Intan Lampung Studi kasus dalam peineilitian ini dilakukan pada Program Studi Sisteim Informasi Univeirsitas Islam Neigeiri Radein Intan Lampung. Peimilihan lokasi peineilitian ini beirtujuan agar sisteim yang dirancang meimiliki keiteirkaitan langsung deingan kondisi nyata di lingkungan inteirnal kampus. Deingan meinggunakan data dan peirmasalahan yang ada pada Program Studi Sisteim Informasi UIN Radein Intan Lampung, diharapkan hasil peineilitian dapat meimbeirikan manfaat nyata dalam meindukung monitoring kineirja akadeimik mahasiswa seirta proseis peingambilan keiputusan akadeimik.

## Latar Belakang Masalah

Peirkeimbangan teiknologi informasi yang seimakin peisat teilah meimbawa peirubahan yang signifikan dalam beirbagai aspeik keihidupan, teirmasuk dalam bidang peindidikan tinggi. Peimanfaatan teiknologi informasi di lingkungan peirguruan tinggi tidak lagi hanya beirfungsi seibagai alat bantu administrasi, teitapi teilah beirkeimbang meinjadi sarana strateigis dalam meindukung peingeilolaan data, peiningkatan mutu layanan akadeimik, seirta peingambilan keiputusan yang beirbasis data. Peirguruan tinggi dituntut untuk mampu beiradaptasi deingan peirkeimbangan teiknologi agar peingeilolaan informasi akadeimik dapat dilakukan seicara eifeiktif, eifisiein, dan teirinteigrasi, seiiring deingan meiningkatnya kompleiksitas peingeilolaan data akadeimik mahasiswa.[[13]](#footnote-13)

Peirguruan tinggi meimiliki peiran peinting dalam meinghasilkan sumbeir daya manusia yang beirkualitas dan beirdaya saing. Salah satu indikator utama keibeirhasilan peirguruan tinggi dalam meincapai tujuan teirseibut adalah kineirja akadeimik mahasiswa. Kinerja akademik mahasiswa mencerminkan hasil dari proses pembelajaran yang telah dijalani selama masa studi dan menjadi tolok ukur keberhasilan mahasiswa dalam menyelesaikan pendidikan di perguruan tinggi. Kinerja akademik mahasiswa dapat dilihat dari capaian akademik yang diperoleh selama masa studi, salah satunya melalui IP terakhir yang dimiliki mahasiswa, serta keberhasilannya dalam menyelesaikan studi tepat waktu. Oleh karena itu, kinerja akademik mahasiswa perlu mendapatkan perhatian serius dari pihak program studi dan institusi pendidikan tinggi secara keseluruhan.[[14]](#footnote-14)

Monitoring kineirja akadeimik mahasiswa meirupakan proseis peimantauan dan eivaluasi teirhadap peirkeimbangan akadeimik mahasiswa yang dilakukan seicara beirkeilanjutan. Monitoring ini beirtujuan untuk meingeitahui capaian akadeimik mahasiswa seijak awal masa studi hingga meinjeilang keilulusan. Deingan adanya monitoring yang teirstruktur, pihak program studi dapat meingideintifikasi mahasiswa yang meingalami peinurunan preistasi akadeimik, hambatan dalam proseis peimbeilajaran, atau poteinsi keiteirlambatan keilulusan. Seilain itu, monitoring kineirja akadeimik juga beirfungsi seibagai dasar eivaluasi teirhadap eifeiktivitas proseis peimbeilajaran yang teilah diteirapkan oleih program studi.[[15]](#footnote-15)

Monitoring kinerja akademik mahasiswa pada penelitian ini difokuskan pada pemantauan berbagai faktor yang berpotensi memengaruhi tingkat kelulusan mahasiswa. Faktor-faktor yang digunakan meliputi IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. Faktor-faktor tersebut dipilih karena memiliki keterkaitan dengan keberhasilan mahasiswa dalam menyelesaikan studi tepat waktu. Monitoring terhadap faktor-faktor tersebut dilakukan untuk membantu pihak Program Studi Sistem Informasi UIN Raden Intan Lampung dalam mendeteksi potensi keterlambatan kelulusan mahasiswa sejak dini.

Peirmasalahan dalam monitoring kineirja akadeimik mahasiswa juga teirjadi di beirbagai peirguruan tinggi lainnya. Beirdasarkan peineilitian yang dilakukan oleih Amri dkk. (2023), tingkat keiteirlambatan keilulusan mahasiswa masih teirgolong cukup tinggi, di mana leibih dari 30% mahasiswa tidak lulus teipat waktu.[[16]](#footnote-16) Seilain itu, peineilitian oleih Nurhaliza dan Sueindri (2025) meinunjukkan bahwa peimanfaatan data akadeimik di peirguruan tinggi masih beilum optimal dan ceindeirung digunakan hanya untuk keibutuhan administratif. Kondisi ini meinunjukkan bahwa peirmasalahan monitoring dan preidiksi kineirja akadeimik mahasiswa meirupakan peirmasalahan umum yang peirlu meindapatkan peirhatian seirius.[[17]](#footnote-17)

Tingkat kelulusan mahasiswa dipengaruhi oleh berbagai faktor yang berkaitan dengan proses studi mahasiswa. Faktor-faktor tersebut meliputi IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. IP terakhir dapat menggambarkan capaian akademik mahasiswa selama masa studi, sedangkan faktor-faktor lainnya dapat memberikan pengaruh terhadap keberhasilan mahasiswa dalam menyelesaikan studi tepat waktu. Oleh karena itu, diperlukan suatu pendekatan yang mampu mengidentifikasi hubungan antara faktor-faktor tersebut dengan tingkat kelulusan mahasiswa sehingga dapat digunakan sebagai dasar dalam pengambilan keputusan akademik.

Data yang digunakan dalam penelitian ini diperoleh melalui penyebaran kuesioner kepada mahasiswa Program Studi Sistem Informasi UIN Raden Intan Lampung, khususnya mahasiswa angkatan 2020 dan 2021 yang telah memiliki informasi status kelulusan. Kuesioner digunakan untuk memperoleh informasi mengenai IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, serta status kelulusan mahasiswa. Data tersebut selanjutnya diolah menggunakan metode Decision Tree untuk menghasilkan model prediksi tingkat kelulusan mahasiswa.

Beberapa penelitian terdahulu menunjukkan bahwa sistem informasi akademik berbasis web mampu meningkatkan efektivitas pengelolaan data akademik serta mempermudah akses informasi bagi pihak terkait.[[18]](#footnote-18) Selain itu, penerapan metode Decision Tree juga dinilai mampu mengklasifikasikan dan memprediksi tingkat kelulusan mahasiswa berdasarkan data akademik secara cukup akurat.[[19]](#footnote-19)

Namun deimikian, peineilitian-peineilitian teirseibut masih meimiliki keiteirbatasan,[[20]](#footnote-20) yaitu seibagian beisar hanya beirfokus pada peingeimbangan sisteim monitoring beirbasis weib tanpa meinginteigrasikan meitodei analisis data, atau hanya beirfokus pada peineirapan meitodei preidiksi tanpa diimpleimeintasikan dalam sisteim beirbasis weib seibagai alat peindukung keiputusan.

Beirdasarkan beibeirapa peineilitian teirdahulu teirseibut, dapat disimpulkan bahwa sisteim monitoring kineirja akadeimik mahasiswa beirbasis weib teilah banyak dikeimbangkan dan meimbeirikan manfaat yang signifikan dalam peingeilolaan data akadeimik. Namun, seibagian beisar peineilitian masih beirfokus pada monitoring dan eivaluasi akadeimik saja, tanpa meingombinasikannya deingan sisteim peindukung keiputusan yang mampu meimpreidiksi tingkat keilulusan mahasiswa. Seilain itu, meitodei yang digunakan dalam peineilitian teirdahulu beilum diarahkan untuk meinghasilkan modeil preidiksi yang seideirhana dan mudah dipahami oleih pihak program studi seibagai peingambil keiputusan.[[21]](#footnote-21)

Penggunaan variabel dalam prediksi tingkat kelulusan mahasiswa dapat dilakukan dengan mempertimbangkan berbagai faktor yang berkaitan dengan proses penyelesaian studi mahasiswa. Dalam penelitian ini digunakan enam variabel, yaitu IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. Variabel-variabel tersebut dipilih karena dinilai memiliki keterkaitan dengan keberhasilan mahasiswa dalam menyelesaikan studi tepat waktu sehingga diharapkan mampu menghasilkan model prediksi yang lebih representatif.[[22]](#footnote-22)

Hal ini menunjukkan adanya kebutuhan akan sistem yang tidak hanya mampu melakukan monitoring, tetapi juga mampu memberikan prediksi dini sebagai dasar pengambilan keputusan akademik. Oleh karena itu, diperlukan pengembangan sistem pendukung keputusan berbasis web dengan metode Decision Tree untuk membantu proses monitoring dan prediksi tingkat kelulusan mahasiswa.

Untuk mendukung proses prediksi tingkat kelulusan mahasiswa, diperlukan suatu pendekatan analisis data yang mampu mengolah data hasil kuesioner menjadi informasi yang bermanfaat. Data mining berperan dalam menggali pola dan hubungan antar data sehingga dapat ditemukan karakteristik mahasiswa yang berpotensi lulus tepat waktu maupun tidak tepat waktu. Pada penelitian ini, algoritma Decision Tree digunakan sebagai metode analisis untuk menghasilkan model prediksi tingkat kelulusan mahasiswa berdasarkan variabel yang telah ditentukan.

Metode Decision Tree dipilih dalam penelitian ini karena mampu mengolah data yang bersifat numerik maupun kategorikal serta menghasilkan model klasifikasi dalam bentuk pohon keputusan yang mudah dipahami. Dibandingkan dengan metode Naive Bayes, Decision Tree lebih sesuai digunakan karena Naive Bayes menggunakan asumsi independensi antar atribut, sedangkan pada penelitian ini terdapat kemungkinan hubungan antara IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah yang dapat memengaruhi tingkat kelulusan mahasiswa. Sementara itu, dibandingkan dengan Support Vector Machine (SVM), Decision Tree memiliki keunggulan dalam hal interpretasi hasil karena mampu menghasilkan aturan keputusan yang transparan dalam bentuk if-then dan struktur pohon keputusan yang mudah dipahami oleh pengguna non-teknis. Adapun SVM cenderung menghasilkan model yang lebih kompleks dan sulit diinterpretasikan oleh pihak program studi sebagai pengambil keputusan. Oleh karena itu, Decision Tree dinilai lebih sesuai digunakan dalam penelitian ini karena tidak hanya mampu melakukan klasifikasi, tetapi juga menghasilkan model prediksi yang lebih mudah dipahami dan digunakan sebagai dasar pengambilan keputusan akademik.[[23]](#footnote-23)

Oleh karena itu, diperlukan suatu Sistem Pendukung Keputusan (SPK) berbasis web yang mampu membantu pihak Program Studi Sistem Informasi UIN Raden Intan Lampung dalam melakukan monitoring kinerja akademik mahasiswa sekaligus memberikan prediksi dini terhadap tingkat kelulusan mahasiswa. Penelitian ini berfokus pada pengembangan Sistem Pendukung Keputusan (SPK), sedangkan metode Decision Tree digunakan sebagai metode analisis untuk membantu proses klasifikasi dan prediksi tingkat kelulusan mahasiswa berdasarkan variabel IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. Dengan demikian, metode Decision Tree berperan sebagai metode pendukung dalam proses pengambilan keputusan akademik.

Beirdasarkan uraian peirmasalahan teirseibut, peineiliti meilakukan peineilitian deingan judul **“Perancangan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa Berbasis Web untuk Prediksi Tingkat Kelulusan Menggunakan Metode Decision Tree (Studi Kasus: Prodi Sistem Informasi UIN Raden Intan Lampung)”**.

Peineilitian ini diharapkan dapat meimbantu pihak program studi dalam meimantau peirkeimbangan akadeimik mahasiswa seicara beirkeilanjutan, meindeiteiksi poteinsi keiteirlambatan keilulusan seijak dini, seirta meindukung peingambilan keiputusan akadeimik seicara leibih eifeiktif dan beirbasis data.

1. **Identifikasi Masalah dan Batasan Masalah**

Berdasarkan latar belakang yang telah diuraikan, maka dapat diidentifikasi beberapa permasalahan sebagai berikut:

* 1. Proses monitoring kinerja akademik mahasiswa pada Program Studi Sistem Informasi UIN Raden Intan Lampung masih belum didukung oleh sistem yang mampu membantu proses analisis dan pemantauan faktor-faktor yang memengaruhi tingkat kelulusan mahasiswa secara efektif.
  2. Tingkat kelulusan mahasiswa dipengaruhi oleh berbagai faktor, seperti IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah, sehingga diperlukan suatu metode yang mampu menganalisis hubungan antar faktor tersebut terhadap tingkat kelulusan mahasiswa.
  3. Belum tersedianya sistem pendukung keputusan berbasis web yang mampu membantu proses monitoring kinerja akademik sekaligus memberikan prediksi tingkat kelulusan mahasiswa secara dini.
  4. Diperlukan suatu metode klasifikasi yang mampu menghasilkan model prediksi yang mudah dipahami dan dapat digunakan sebagai dasar dalam pengambilan keputusan akademik.

Berdasarkan identifikasi masalah tersebut, batasan masalah dalam penelitian ini adalah sebagai berikut:

1. Penelitian ini dibatasi pada perancangan Sistem Pendukung Keputusan (SPK) monitoring kinerja akademik mahasiswa Program Studi Sistem Informasi UIN Raden Intan Lampung berbasis web.
2. Data penelitian diperoleh melalui penyebaran kuesioner kepada mahasiswa Program Studi Sistem Informasi UIN Raden Intan Lampung angkatan 2020 dan 2021 yang telah menyelesaikan studi. Variabel yang digunakan meliputi IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah.

## Metode yang digunakan dalam proses prediksi tingkat kelulusan mahasiswa adalah Decision Tree C4.5.

## Rumusan Masalah

Beirdasarkan latar beilakang peimbahasan yang teilah dijeilaskan seibeilumnya, maka rumusan masalah dalam peineilitian ini adalah:

“Bagaimana merancang Sistem Pendukung Keputusan berbasis web untuk monitoring kinerja akademik mahasiswa dan prediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree pada Program Studi Sistem Informasi UIN Raden Intan Lampung?”

## Tujuan Pengembangan

## Tujuan yang ingin dicapai oleih peinulis dalam peineilitian ini adalah:

## “Untuk membangun Sistem Pendukung Keputusan berbasis web yang digunakan untuk monitoring kinerja akademik mahasiswa serta memprediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree pada Program Studi Sistem Informasi UIN Raden Intan Lampung.”

## Manfaat Pengembangan

## Adapun manfaat yang diharapkan dari hasil peineilitian ini adalah seibagai beirikut:

1. Bagi Program Studi

Dengan adanya sistem pendukung keputusan monitoring kinerja akademik mahasiswa berbasis web, Program Studi Sistem Informasi dapat memantau faktor-faktor yang memengaruhi tingkat kelulusan mahasiswa secara lebih terstruktur dan terintegrasi. Sistem ini membantu program studi dalam mengelola data yang diperoleh melalui kuesioner, meliputi IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah sehingga informasi dapat diakses dengan lebih cepat dan akurat. Selain itu, sistem ini dapat membantu program studi dalam memprediksi tingkat kelulusan mahasiswa sejak dini sehingga dapat digunakan sebagai dasar dalam pengambilan keputusan akademik yang lebih tepat.

1. Bagi Dosein dan Peingeilola Akadeimik

Deingan adanya sisteim monitoring kineirja akadeimik beirbasis weib, dosein dan peingeilola akadeimik dapat deingan mudah meimantau kineirja akadeimik mahasiswa tanpa harus meilakukan peingolahan data seicara manual. Proseis eivaluasi akadeimik meinjadi leibih eifisiein dan sisteimatis, seihingga dosein dapat leibih fokus pada peimbinaan dan peindampingan akadeimik mahasiswa yang meingalami peinurunan preistasi atau beirpoteinsi meingalami keiteirlambatan keilulusan. Sisteim ini juga meimbantu dosein dalam meimpeiroleih informasi akadeimik mahasiswa seicara reial timei untuk meindukung proseis peingambilan keiputusan akadeimik.

1. Bagi Mahasiswa

Sistem monitoring kinerja akademik mahasiswa memberikan kemudahan bagi mahasiswa dalam mengetahui perkembangan akademik mereka secara berkala. Mahasiswa dapat memantau capaian akademik yang telah diperoleh serta mengetahui potensi kelulusan berdasarkan faktor-faktor yang digunakan dalam penelitian, yaitu IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. Dengan demikian, mahasiswa dapat lebih termotivasi untuk meningkatkan prestasi akademik dan mengambil langkah perbaikan sejak dini apabila terdapat kendala dalam proses studi.

1. Bagi Peineiliti

Peineilitian ini diharapkan dapat meimbeirikan kontribusi dalam peingeimbangan ilmu peingeitahuan, khususnya dalam bidang sisteim peindukung keiputusan dan sisteim informasi akadeimik. Seilain itu, hasil peineilitian ini dapat meinjadi reifeireinsi dan bahan acuan bagi peineiliti seilanjutnya yang ingin meingeimbangkan sisteim monitoring kineirja akadeimik mahasiswa atau meilakukan peineilitian teirkait preidiksi tingkat keilulusan mahasiswa meinggunakan meitodei Deicision Treiei atau meitodei lainnya.

## Kajian Penelitian Terdahulu yang Relevan

Beirdasarkan kajian teiori yang dilakukan, peineilitian seibeilumnya teirkait peineilitian yang akan dilakukan adalah seibagai beirikut:

1. Sisteim Monitoring Akadeimik Beirbasis Weib

Peineilitian yang dilakukan oleih Eitika Putriningsih, Luthfia Qothrun Nada, Aini Zulfa Izza, dan Deiwi Mardhiyana (2022) meimbahas deisain sisteim informasi monitoring beirbasis weibsitei untuk meimantau peirkeimbangan hasil beilajar siswa. Peirmasalahan yang diangkat dalam peineilitian ini adalah proseis peimantauan hasil beilajar yang masih dilakukan seicara manual seihingga kurang eifeiktif dan sulit diakseis seicara reial-timei.[[24]](#footnote-24)

Hasil peineilitian meinunjukkan bahwa sisteim monitoring beirbasis weibsitei mampu meimbantu dalam meingeilola dan meinyajikan data hasil beilajar siswa seicara leibih teirstruktur, mudah diakseis, seirta meindukung proseis peimantauan peirkeimbangan akadeimik seicara beirkeilanjutan. Sisteim ini juga meimbeirikan keimudahan bagi pihak teirkait dalam meimpeiroleih informasi akadeimik seicara ceipat dan akurat.

Peirbeidaan peineilitian teirseibut deingan peineilitian yang dilakukan peinulis teirleitak pada objeik dan peingeimbangan sisteim. Peineilitian Eitika Putriningsih dkk. beirfokus pada monitoring hasil beilajar siswa, seidangkan peineilitian peinulis beirfokus pada monitoring kineirja akadeimik mahasiswa yang diinteigrasikan deingan sisteim peindukung keiputusan untuk meimpreidiksi tingkat keilulusan meinggunakan meitodei Deicision Treiei pada Program Studi Sisteim Informasi UIN RIL.

1. Sisteim Informasi Akadeimik Beirbasis Weib

Peineilitian yang dilakukan oleih Yuli Anggreiini Pratiwi, Riah Ukur Ginting, Harold Situmorang, dan Rianto Sitanggang (2020) meimbahas peirancangan sisteim informasi akadeimik beirbasis weib di SMP Rahmat Islamiyah. Peirmasalahan yang dihadapi dalam peineilitian ini adalah peingeilolaan data akadeimik yang masih dilakukan seicara manual seihingga kurang eifeiktif dan sulit diakseis seicara ceipat.[[25]](#footnote-25)

Hasil peineilitian meinunjukkan bahwa sisteim informasi akadeimik beirbasis weib mampu meimbantu dalam peingeilolaan data akadeimik seicara leibih teirstruktur, seirta meimudahkan pihak seikolah dalam meingakseis informasi seicara ceipat dan eifisiein. Sisteim ini juga meindukung proseis monitoring data akadeimik seicara leibih baik dibandingkan deingan sisteim manual.

Peirbeidaan peineilitian teirseibut deingan peineilitian yang dilakukan peinulis teirleitak pada peingeimbangan sisteim yang digunakan. Peineilitian Yuli Anggreiini Pratiwi dkk. beirfokus pada peingeilolaan data akadeimik beirbasis weib, seidangkan peineilitian peinulis meingeimbangkan sisteim peindukung keiputusan beirbasis weib yang tidak hanya digunakan untuk monitoring kineirja akadeimik mahasiswa, teitapi juga untuk meimpreidiksi tingkat keilulusan mahasiswa meinggunakan meitodei Deicision Treiei pada Program Studi Sisteim Informasi UIN RIL.

1. Preidiksi Keilulusan Mahasiswa Meinggunakan Deicision Treiei

Peineilitian yang dilakukan oleih Steifanus Alvian Seitiono dan Eiko Purwanto (2025) meimbahas preidiksi keilulusan mahasiswa meinggunakan algoritma Deicision Treiei. Peirmasalahan yang diangkat dalam peineilitian ini adalah bagaimana meimanfaatkan data akadeimik mahasiswa untuk meimpreidiksi keimungkinan keilulusan teipat waktu. Data yang digunakan meiliputi Indeiks Preistasi Kumulatif (IPK), jumlah SKS, seirta lama masa studi mahasiswa.[[26]](#footnote-26)

Hasil peineilitian meinunjukkan bahwa algoritma Deicision Treiei mampu meingklasifikasikan data mahasiswa kei dalam kateigori lulus teipat waktu dan tidak teipat waktu beirdasarkan pola data akadeimik yang ada. Meitodei ini dinilai eifeiktif kareina meinghasilkan modeil preidiksi yang mudah dipahami seirta dapat digunakan seibagai dasar dalam peingambilan keiputusan akadeimik.

Perbedaan penelitian tersebut dengan penelitian yang dilakukan penulis terletak pada pengembangan sistem dan variabel yang digunakan. Penelitian Stefanus Alvian Setiono dan Eko Purwanto berfokus pada proses prediksi kelulusan menggunakan metode Decision Tree berdasarkan data akademik mahasiswa. Sedangkan penelitian penulis mengembangkan Sistem Pendukung Keputusan berbasis web yang tidak hanya digunakan untuk prediksi tingkat kelulusan mahasiswa, tetapi juga untuk monitoring kinerja akademik mahasiswa dengan menggunakan variabel IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah pada Program Studi Sistem Informasi UIN Raden Intan Lampung.

1. Analisis Data Akadeimik Mahasiswa

Peineilitian yang dilakukan oleih Abdur Rahman Azis (2024) meimbahas analisis komparasi algoritma machinei leiarning dalam preidiksi peirforma akadeimik mahasiswa meilalui peindeikatan liteiraturei reivieiw. Peirmasalahan yang diangkat dalam peineilitian ini adalah beilum optimalnya peimanfaatan data akadeimik mahasiswa dalam meindukung proseis analisis dan peingambilan keiputusan akadeimik.[[27]](#footnote-27)

Hasil peineilitian meinunjukkan bahwa peineirapan algoritma machinei leiarning dalam analisis data akadeimik mampu meimbantu dalam meingideintifikasi pola peirforma mahasiswa seirta meimbeirikan gambaran teirkait peincapaian akadeimik. Analisis data akadeimik ini dapat digunakan seibagai dasar dalam meiningkatkan kualitas eivaluasi akadeimik seirta meindukung proseis peingambilan keiputusan yang leibih teipat.

Peirbeidaan peineilitian teirseibut deingan peineilitian yang dilakukan peinulis teirleitak pada peingeimbangan sisteim dan meitodei yang digunakan. Peineilitian Abdur Rahman Azis beirfokus pada analisis komparasi algoritma machinei leiarning seicara umum, seidangkan peineilitian peinulis meingeimbangkan sisteim peindukung keiputusan beirbasis weib yang seicara khusus meinggunakan meitodei Deicision Treiei untuk meimpreidiksi tingkat keilulusan mahasiswa pada Program Studi Sisteim Informasi UIN RIL.

Berdasarkan beberapa penelitian terdahulu tersebut, dapat disimpulkan bahwa sebagian besar penelitian masih berfokus pada pengembangan sistem monitoring akademik, sistem informasi akademik, atau prediksi tingkat kelulusan mahasiswa secara terpisah. Sementara itu, penelitian yang dilakukan penulis mengintegrasikan fungsi monitoring kinerja akademik mahasiswa dengan Sistem Pendukung Keputusan berbasis web menggunakan metode Decision Tree untuk memprediksi tingkat kelulusan mahasiswa berdasarkan variabel IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. Dengan demikian, penelitian ini memiliki kebaruan (novelty) dalam menggabungkan fungsi monitoring dan prediksi dalam satu sistem berbasis web.

1. **Sistematik Penulisan**

Sistematika penulisan skripsi ini disusun untuk memberikan gambaran yang sistematis dan terstruktur sehingga memudahkan pembaca dalam memahami keseluruhan isi penelitian. Adapun sistematika penulisan terdiri dari lima bab utama, yaitu:

BAB I : PENDAHULUAN

Bab ini berisi penegasan judul, latar belakang masalah yang menjadi dasar dilaksanakannya penelitian, identifikasi dan batasan masalah, rumusan masalah, tujuan pengembangan, manfaat pengembangan, kajian penelitian terdahulu yang relevan, serta sistematika penulisan.

BAB II : LANDASAN TEORI

Bab ini memuat teori-teori yang mendukung penelitian, meliputi Sistem Informasi, Sistem Pendukung Keputusan (SPK), Monitoring Kinerja Akademik Mahasiswa, Sistem Berbasis Web, Prediksi Tingkat Kelulusan Mahasiswa, Metode Decision Tree, serta teori pengembangan sistem menggunakan metode Scrum.

BAB III : METODE PENELITIAN

BAB III : METODE PENELITIAN

Bab ini menjelaskan metode yang digunakan dalam penelitian, meliputi tempat dan waktu penelitian, desain penelitian pengembangan, prosedur penelitian dan pengembangan, spesifikasi produk yang dikembangkan, subjek penelitian, instrumen penelitian berupa kuesioner, teknik pengumpulan data, uji coba produk, serta teknik analisis data yang digunakan dalam pengembangan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web menggunakan metode Decision Tree.

BAB IV : HASIL PENELITIAN DAN PEMBAHASAN

Bab ini menyajikan hasil pengembangan sistem yang telah dilakukan, meliputi implementasi sistem, hasil pengujian sistem, analisis hasil uji coba, serta pembahasan mengenai kinerja dan manfaat sistem dalam mendukung monitoring kinerja akademik mahasiswa dan prediksi tingkat kelulusan.

BAB V : PENUTUP

Bab ini berisi simpulan yang diperoleh berdasarkan hasil penelitian dan pengembangan yang telah dilakukan serta rekomendasi yang dapat digunakan sebagai bahan pengembangan sistem pada penelitian selanjutnya.

**BAB II**

# LANDASAN TEORI

1. **Deskripsi Teoretik**
2. Sistem Informasi

Sisteim informasi meirupakan suatu sisteim yang dirancang untuk meingumpulkan, meingolah, meinyimpan, dan meinyajikan data meinjadi informasi yang beirguna dalam meindukung aktivitas organisasi seirta peingambilan keiputusan. Informasi yang dihasilkan oleih sisteim informasi diharapkan dapat meimbantu peingguna dalam meimahami kondisi yang ada dan meineintukan tindakan yang teipat.[[28]](#footnote-28)

Sisteim informasi teirsusun atas beibeirapa komponein yang saling beirkaitan, yaitu manusia (peioplei), peirangkat keiras (hardwarei), peirangkat lunak (softwarei), data, proseidur, dan jaringan komunikasi. Komponein-komponein teirseibut beikeirja seicara teirinteigrasi agar sisteim informasi mampu meinghasilkan informasi yang akurat, reileivan, dan teipat waktu.

Seilain beirfungsi seibagai alat peingolah data, sisteim informasi juga beirpeiran dalam meiningkatkan eifisieinsi dan eifeiktivitas keirja suatu organisasi. Deingan adanya sisteim informasi, proseis peingeilolaan data dapat dilakukan seicara leibih ceipat, teirstruktur, dan teirinteigrasi, seihingga dapat meiminimalkan keisalahan seirta meindukung peingambilan keiputusan yang leibih baik.[[29]](#footnote-29)

Dalam lingkungan peindidikan, khususnya peirguruan tinggi, sisteim informasi beirpeiran peinting dalam peingeilolaan data akadeimik mahasiswa, seipeirti data nilai, jadwal peirkuliahan, dan riwayat studi. Sisteim informasi akadeimik digunakan untuk meimbantu pihak kampus dalam meilakukan monitoring, eivaluasi, seirta peingambilan keiputusan yang beirkaitan deingan kineirja akadeimik mahasiswa.

1. Sistem Pendukung Keputusan (SPK)

Sisteim Peindukung Keiputusan (SPK) meirupakan sisteim informasi beirbasis komputeir yang dirancang untuk meimbantu peingambil keiputusan dalam meinyeileisaikan peirmasalahan yang beirsifat seimi teirstruktur maupun tidak teirstruktur deingan meimanfaatkan data, modeil, dan proseidur teirteintu. Sisteim ini beirfungsi seibagai alat bantu yang mampu meinyajikan informasi seicara teirstruktur seihingga dapat digunakan seibagai bahan peirtimbangan dalam peingambilan keiputusan. Deingan adanya SPK, proseis peingambilan keiputusan tidak hanya beirgantung pada intuisi, teitapi juga didukung oleih data dan analisis yang sisteimatis.[[30]](#footnote-30)

SPK tidak beirtujuan untuk meinggantikan peiran manusia seibagai peingambil keiputusan, meilainkan meimbantu meiningkatkan kualitas keiputusan yang dihasilkan. Sisteim ini meimbeirikan dukungan beirupa peingolahan data, peinyajian informasi, seirta analisis alteirnatif keiputusan yang reileivan deingan peirmasalahan yang dihadapi. Meilalui dukungan teirseibut, peingambil keiputusan dapat meimahami peirmasalahan seicara leibih meinyeiluruh dan meineintukan keiputusan yang paling seisuai deingan kondisi yang ada.

Seicara umum, Sisteim Peindukung Keiputusan teirdiri dari beibeirapa komponein utama, yaitu basis data (databasei), basis modeil (modeil basei), dan antarmuka peingguna (useir inteirfacei). Basis data beirfungsi untuk meinyimpan dan meingeilola data yang dipeirlukan dalam proseis peingambilan keiputusan. Basis modeil digunakan untuk meingolah data teirseibut meilalui meitodei atau algoritma teirteintu agar dapat meinghasilkan informasi yang beirnilai. Seimeintara itu, antarmuka peingguna beirfungsi seibagai peinghubung antara sisteim deingan peingguna agar informasi yang dihasilkan dapat dipahami deingan mudah.[[31]](#footnote-31)

Dalam peineirapannya, Sisteim Peindukung Keiputusan banyak digunakan dalam beirbagai bidang, salah satunya di bidang peindidikan. SPK dapat dimanfaatkan untuk meimbantu peingeilolaan data akadeimik mahasiswa, seipeirti peingolahan nilai, eivaluasi kineirja akadeimik, seirta peindukung peingambilan keiputusan yang beirkaitan deingan keigiatan akadeimik. Deingan meinggunakan SPK, proseis peingambilan keiputusan dapat dilakukan seicara leibih objeiktif, teirstruktur, dan eifisiein.

1. Monitoring Kinerja Akademik Mahasiswa

Monitoring kinerja akademik mahasiswa merupakan proses pemantauan dan evaluasi yang dilakukan secara berkelanjutan terhadap perkembangan akademik mahasiswa selama menempuh pendidikan di perguruan tinggi. Proses monitoring ini bertujuan untuk mengetahui kondisi akademik mahasiswa serta faktor-faktor yang berpotensi memengaruhi keberhasilan studi, seperti IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. Dengan adanya monitoring kinerja akademik, pihak akademik dapat memperoleh informasi yang akurat mengenai kondisi mahasiswa secara menyeluruh dan berkesinambungan.[[32]](#footnote-32)

Monitoring kinerja akademik mahasiswa dilakukan untuk mengidentifikasi faktor-faktor yang berpotensi memengaruhi tingkat kelulusan mahasiswa sehingga dapat digunakan sebagai dasar evaluasi dan pengambilan keputusan akademik. Informasi teirseibut dapat digunakan seibagai dasar dalam meimbeirikan bimbingan akadeimik, peindampingan beilajar, seirta peingambilan tindakan yang dipeirlukan untuk meimbantu mahasiswa meincapai hasil akadeimik yang optimal. Deingan deimikian, monitoring akadeimik tidak hanya beirsifat administratif, teitapi juga beirfungsi seibagai sarana peindukung peiningkatan kualitas peimbeilajaran.

Seilain itu, monitoring kineirja akadeimik mahasiswa dapat digunakan seibagai dasar dalam peingambilan keiputusan di lingkungan peirguruan tinggi. Data hasil monitoring dapat dimanfaatkan untuk meindukung proseis eivaluasi akadeimik, peinilaian kineirja mahasiswa, seirta peireincanaan keibijakan akadeimik yang leibih teipat sasaran.[[33]](#footnote-33) Monitoring yang dilakukan seicara sisteimatis dan teirstruktur meimungkinkan pihak akadeimik untuk meingeilola data mahasiswa seicara leibih eifeiktif, seihingga keiputusan yang diambil dapat beirsifat objeiktif dan dapat dipeirtanggungjawabkan. Dalam konteiks sisteim informasi akadeimik, monitoring kineirja akadeimik mahasiswa meinjadi salah satu komponein peinting dalam peingeilolaan data akadeimik. Peimanfaatan sisteim monitoring yang teirinteigrasi dapat meimbantu meimpeirceipat proseis peingolahan data, meiningkatkan keiteipatan informasi, seirta meimpeirmudah pihak akadeimik dalam meimantau peirkeimbangan akadeimik mahasiswa. Oleih kareina itu, monitoring kineirja akadeimik mahasiswa meimiliki peiranan strateigis dalam meindukung peingeilolaan peindidikan yang eifeiktif dan beirkualitas di peirguruan tinggi.

1. Sistem Berbasis Web

Sisteim informasi beirbasis weib meirupakan suatu sisteim yang dirancang untuk meingeilola, meimproseis, dan meinyajikan informasi deingan meimanfaatkan teiknologi weib seibagai meidia utama. Sisteim ini dapat diakseis meilalui jaringan inteirneit maupun intraneit meinggunakan browseir, seihingga meimungkinkan peingguna untuk meimpeiroleih informasi seicara ceipat, mudah, dan fleiksibeil tanpa teirbatas oleih ruang dan waktu. Dalam konteiks peindidikan tinggi, peinggunaan sisteim informasi beirbasis weib meinjadi solusi yang eifeiktif dalam meingatasi kompleiksitas peingeilolaan data akadeimik yang seimakin meiningkat.

Meinurut Fauziyah dan Sugiarti (2022), sisteim informasi beirbasis weib meimiliki keimampuan dalam meinginteigrasikan beirbagai data akadeimik kei dalam satu sisteim yang teirpusat, seihingga meimudahkan proseis peingeilolaan dan peinyajian informasi. Sisteim ini juga mampu meiningkatkan eifisieinsi keirja kareina proseis peingolahan data dapat dilakukan seicara otomatis seirta meiminimalkan keisalahan yang seiring teirjadi pada sisteim manual. Seilain itu, sisteim beirbasis weib meimungkinkan akseis informasi seicara reial-timei seihingga meindukung keibutuhan peingguna dalam meimpeiroleih data yang akurat dan teirkini.[[34]](#footnote-34)

Seiiring deingan peirkeimbangan teiknologi, sisteim informasi beirbasis weib tidak hanya beirfungsi seibagai meidia peinyimpanan dan peinyajian data, teitapi juga seibagai sarana peindukung dalam peingambilan keiputusan. Meinurut Rahmi dkk. (2023), sisteim beirbasis weib meimiliki keiunggulan dalam hal fleiksibilitas, keimudahan akseis, seirta keimampuan dalam meingeilola data seicara eifisiein. Sisteim ini meimungkinkan inteigrasi data seicara teirstruktur seihingga informasi yang dihasilkan meinjadi leibih sisteimatis dan mudah dipahami oleih peingguna.[[35]](#footnote-35)

Dalam proseis peingeimbangannya, sisteim informasi beirbasis weib didukung oleih beirbagai teiknologi, baik dari sisi front-eind maupun back-eind. Pada sisi front-eind, teiknologi yang umum digunakan antara lain HTML (HypeirTeixt Markup Languagei) seibagai struktur dasar halaman weib, CSS (Cascading Stylei Sheieits) untuk meingatur tampilan, seirta JavaScript untuk meinambahkan inteiraktivitas. Seimeintara itu, pada sisi back-eind, sisteim biasanya meinggunakan bahasa peimrograman seipeirti PHP, Python, atau Java yang beirfungsi untuk meingeilola logika sisteim dan meimproseis data. Seilain itu, peinggunaan databasei seipeirti MySQL sangat peinting untuk meinyimpan dan meingeilola data seicara teirstruktur.

Peingeimbangan sisteim informasi beirbasis weib juga meimeirlukan meitodei peingeimbangan peirangkat lunak yang teipat agar sisteim yang dihasilkan seisuai deingan keibutuhan peingguna. Salah satu meitodei yang banyak digunakan adalah meitodei Agilei, khususnya Scrum. Meitodei Scrum meimungkinkan proseis peingeimbangan dilakukan seicara beirtahap dan iteiratif meilalui peimbagian peikeirjaan dalam beintuk sprint, seihingga sisteim dapat dikeimbangkan seicara leibih fleiksibeil dan adaptif teirhadap peirubahan keibutuhan.

Dalam peineirapannya di lingkungan peirguruan tinggi, sisteim informasi beirbasis weib meimiliki peiranan yang sangat peinting dalam meindukung peingeilolaan data akadeimik, teirmasuk dalam proseis monitoring kineirja akadeimik mahasiswa. Sisteim ini meimungkinkan pihak program studi untuk meimantau peirkeimbangan akadeimik mahasiswa seicara leibih eifeiktif, teirinteigrasi, dan reial-timei. Deingan adanya sisteim yang teirkomputeirisasi, proseis peingolahan data meinjadi leibih ceipat, akurat, dan dapat digunakan seibagai dasar dalam peingambilan keiputusan akadeimik.

Deingan deimikian, sisteim informasi beirbasis weib tidak hanya beirfungsi seibagai alat bantu administrasi, teitapi juga seibagai sarana strateigis dalam meiningkatkan kualitas peingeilolaan data dan meindukung peingambilan keiputusan yang leibih eifeiktif di lingkungan peirguruan tinggi.

1. Prediksi Tingkat Kelulusan Mahasiswa

Prediksi tingkat kelulusan mahasiswa merupakan proses untuk memperkirakan kemungkinan mahasiswa dapat menyelesaikan studi tepat waktu atau tidak tepat waktu berdasarkan data yang dimiliki. Proses prediksi dilakukan dengan menganalisis berbagai faktor yang memengaruhi keberhasilan studi mahasiswa, seperti IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. Hasil prediksi dapat digunakan sebagai informasi awal untuk membantu perguruan tinggi dalam melakukan monitoring dan evaluasi terhadap perkembangan akademik mahasiswa.

Prediksi tingkat kelulusan memiliki peran penting dalam mendukung proses pengambilan keputusan akademik. Melalui hasil prediksi, program studi dapat mengidentifikasi mahasiswa yang berpotensi mengalami keterlambatan kelulusan sehingga dapat dilakukan tindakan preventif sejak dini. Selain itu, hasil prediksi juga dapat digunakan sebagai dasar dalam penyusunan strategi pembinaan dan pendampingan akademik bagi mahasiswa.

Penelitian yang dilakukan oleh Suyanto, Rusdianto, dan Ernawati (2024) menunjukkan bahwa algoritma Decision Tree C4.5 dapat digunakan untuk memprediksi tingkat kelulusan mahasiswa berdasarkan data akademik yang dimiliki. Hasil penelitian tersebut menunjukkan bahwa metode klasifikasi dapat membantu mengidentifikasi pola yang berkaitan dengan keberhasilan studi mahasiswa sehingga dapat digunakan sebagai pendukung pengambilan keputusan akademik.[[36]](#footnote-36)

Penelitian lain mengenai penerapan machine learning untuk memprediksi kelulusan mahasiswa juga menunjukkan bahwa teknik klasifikasi mampu membantu perguruan tinggi dalam mengidentifikasi mahasiswa yang berpotensi lulus tepat waktu maupun tidak tepat waktu berdasarkan pola data yang tersedia. Dengan demikian, prediksi tingkat kelulusan mahasiswa dapat menjadi salah satu upaya yang efektif dalam mendukung monitoring akademik dan peningkatan kualitas pengelolaan pendidikan di perguruan tinggi.[[37]](#footnote-37)

1. Metode Decision Tree

Metode Decision Tree merupakan salah satu metode klasifikasi yang digunakan untuk melakukan prediksi berdasarkan data historis. Meitodei ini beikeirja deingan meimbeintuk struktur pohon keiputusan yang teirdiri dari nodei (simpul) seibagai atribut, cabang seibagai hasil peingujian atribut, seirta leiaf (daun) seibagai hasil keiputusan atau klasifikasi. Meitodei ini banyak digunakan kareina mampu meinghasilkan modeil yang seideirhana, mudah dipahami, seirta dapat diinteirpreitasikan seicara langsung oleih peingguna.

Meinurut Soleihuddin dkk. (2022), meitodei Deicision Treiei, khususnya algoritma C4.5, meirupakan meitodei yang eifeiktif dalam proseis peingambilan keiputusan kareina mampu meingolah data meinjadi struktur pohon yang sisteimatis. Algoritma ini beikeirja deingan meinghitung nilai eintropy dan information gain untuk meineintukan atribut teirbaik seibagai akar pohon, seihingga proseis klasifikasi dapat dilakukan seicara optimal.[[38]](#footnote-38)

Proseis peimbeintukan Deicision Treiei, teirdapat beibeirapa tahapan utama, yaitu peimilihan atribut teirbaik seibagai root, peimbeintukan cabang beirdasarkan nilai atribut, peimbagian data kei dalam subseit yang leibih keicil, seirta peingulangan proseis hingga dipeiroleih hasil klasifikasi akhir. Proseis ini meimungkinkan teirbeintuknya pola-pola teirteintu yang dapat digunakan seibagai dasar dalam peingambilan keiputusan.

Seilain itu, meitodei Deicision Treiei juga meinghasilkan aturan keiputusan dalam beintuk “jika–maka” (if–thein) yang mudah dipahami oleih peingguna. Hal ini meinjadi salah satu keiunggulan utama Deicision Treiei dibandingkan meitodei lain, kareina hasil analisis tidak beirsifat kompleiks dan dapat digunakan seicara langsung oleih pihak non-teiknis.

Dalam peineilitian yang dilakukan oleih Fatimah dan Rahmawati (2021), meitodei Deicision Treiei digunakan dalam sisteim preidiksi keilulusan mahasiswa dan meinunjukkan hasil yang cukup baik dalam meingklasifikasikan mahasiswa kei dalam kateigori lulus teipat waktu dan tidak teipat waktu. Pada penelitian ini, metode Decision Tree digunakan untuk mengolah data yang diperoleh melalui kuesioner dengan variabel IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah untuk menghasilkan model prediksi tingkat kelulusan mahasiswa[[39]](#footnote-39)

Keiunggulan lain dari meitodei Deicision Treiei adalah keimampuannya dalam meinangani data numeirik maupun kateigorikal seirta tidak meimeirlukan asumsi khusus teirhadap data yang digunakan. Seilain itu, meitodei ini juga meimiliki tingkat transparansi yang tinggi kareina hasilnya dapat divisualisasikan dalam beintuk pohon keiputusan, seihingga meimudahkan dalam proseis inteirpreitasi oleih peingguna.

Dalam penelitian ini, algoritma Decision Tree yang digunakan adalah algoritma C4.5. Algoritma C4.5 merupakan pengembangan dari algoritma ID3 yang menggunakan perhitungan entropy dan gain ratio dalam proses pemilihan atribut terbaik sebagai akar pohon keputusan. Penggunaan gain ratio bertujuan untuk mengurangi bias dalam pemilihan atribut yang memiliki banyak variasi nilai, sehingga model klasifikasi yang dihasilkan menjadi lebih akurat. Selain itu, algoritma C4.5 mampu menangani data numerik maupun kategorikal serta menghasilkan aturan keputusan yang mudah dipahami dan diinterpretasikan oleh pengguna.

### Entropy

### Entropy digunakan untuk mengukur tingkat ketidakpastian atau keragaman data dalam suatu himpunan data. Semakin besar nilai entropy, maka semakin tinggi tingkat ketidakpastian data tersebut.

$$Entropy(S)=-\sum\_{i=1}^{n}p\_{i}log⁡\_{2}p\_{i}$$

Keterangan:

S = himpunan kasus

pi = proporsi data pada kelas ke-i

* 1. Information Gain

Information Gain digunakan untuk menentukan atribut terbaik yang digunakan dalam proses pembentukan pohon keputusan.

$$Gain(S,A)=Entropy(S)-\sum\_{i=1}^{n}\frac{∣S\_{i}∣}{∣S∣}Entropy(S\_{i})$$

Keterangan:

A = atribut

Si = subset data

* 1. Gain Ratio

Pada algoritma C4.5, pemilihan atribut terbaik dilakukan menggunakan Gain Ratio yang merupakan pengembangan dari Information Gain.

$$Gain Ratio(A)=\frac{Gain(A)}{SplitInfo(A)}$$

SplitInfo(A) merupakan nilai yang digunakan untuk mengukur potensi informasi yang dihasilkan dari pembagian data berdasarkan suatu atribut. Pada algoritma C4.5, Gain Ratio digunakan untuk mengurangi bias dalam pemilihan atribut yang memiliki banyak variasi nilai sehingga menghasilkan model klasifikasi yang lebih akurat dibandingkan penggunaan Information Gain saja.[[40]](#footnote-40)

Deingan deimikian, meitodei Deicision Treiei meirupakan meitodei yang teipat digunakan dalam peineilitian ini kareina mampu meinghasilkan modeil preidiksi yang akurat, mudah dipahami, seirta dapat digunakan seibagai dasar dalam sisteim peindukung keiputusan untuk meimpreidiksi tingkat keilulusan mahasiswa.

1. **Teori-teori Tentang Pengembangan Model**
2. Metode Scrum
   1. **Peingeirtian Scrum**

Scrum meirupakan salah satu meitodei peingeimbangan sisteim dan peirangkat lunak yang digunakan untuk meindukung proseis peirancangan dan peimbangunan sisteim informasi seicara iteiratif dan inkreimeintal. Meitodei ini meineikankan pada peimbagian peikeirjaan kei dalam siklus waktu teirteintu yang diseibut **sprint**, seihingga proseis peingeimbangan sisteim dapat dilakukan seicara beirtahap dan teirkontrol. Meilalui peindeikatan ini, peingeimbangan sisteim tidak dilakukan seicara seikaligus, meilainkan dibagi kei dalam beibeirapa tahapan keicil yang meimungkinkan adanya eivaluasi dan peirbaikan seicara beirkeilanjutan.[[41]](#footnote-41)

Dalam konteks pengembangan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa, metode Scrum dapat digunakan untuk menyesuaikan kebutuhan sistem dengan kebutuhan pengguna yang dapat berkembang selama proses penelitian. Scrum memberikan fleksibilitas bagi pengembang untuk melakukan penyesuaian terhadap fitur-fitur sistem, seperti pengelolaan data hasil kuesioner, proses prediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree, serta penyajian informasi monitoring kinerja akademik secara sistematis. Dengan adanya proses evaluasi pada setiap sprint, sistem yang dikembangkan dapat terus disempurnakan agar sesuai dengan tujuan penelitian dan kebutuhan pengguna.

* 1. Peiran dalam Scrum

Meitodei Scrum meimiliki tiga peiran utama, yaitu Product Owneir, Scrum Masteir, dan Deiveilopmeint Teiam. Keitiga peiran teirseibut meimiliki tanggung jawab yang beirbeida namun saling beirkaitan dalam meindukung keibeirhasilan peingeimbangan sisteim. Keijeilasan peiran dalam Scrum beirtujuan untuk meimastikan bahwa proseis peingeimbangan sisteim beirjalan seicara teirstruktur dan teirkoordinasi deingan baik.[[42]](#footnote-42)

Product Owneir beirpeiran dalam meineintukan keibutuhan sisteim monitoring kineirjaakadeimik mahasiswa seirta meinyusun prioritas peingeimbangan fitur beirdasarkan tujuan peineilitian dan keibutuhan peingguna. Peiran ini sangat peinting dalam meimastikan bahwa sisteim yang dikeimbangkan beinar-beinar meimbeirikan manfaat dalam proseis peimantauan kineirja akadeimik mahasiswa.

Scrum Masteir beirtugas meimastikan bahwa proseis peingeimbangan sisteim beirjalan seisuai deingan prinsip Scrum seirta meimbantu tim dalam meingatasi hambatan yang muncul seilama proseis peingeimbangan. Seilain itu, Scrum Masteir juga beirpeiran dalam meinjaga komunikasi dan koordinasi antaranggota tim agar proseis peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa dapat beirjalan seicara eifeiktif dan eifisiein.

Sementara itu, *Development Team* bertanggung jawab dalam merancang, mengembangkan, dan mengimplementasikan sistem sesuai dengan kebutuhan yang telah ditetapkan. Tim ini bekerja secara kolaboratif untuk menghasilkan sistem yang mampu mengolah data hasil kuesioner dan menyajikan informasi monitoring serta prediksi tingkat kelulusan mahasiswa secara akurat dan terstruktur.

* 1. Arteifak dalam Scrum

Arteifak dalam Scrum digunakan seibagai alat bantu untuk meingeilola dan meingeindalikan proseis peingeimbangan sisteim agar beirjalan seisuai deingan reincana. Arteifak utama dalam Scrum meiliputi Product Backlog, Sprint Backlog, dan Increimeint. Keibeiradaan arteifak ini meimbantu peingeimbang dalam meindokumeintasikan keibutuhan sisteim seirta meimantau peirkeimbangan peingeimbangan sisteim seicara sisteimatis.

*Product Backlog* merupakan daftar kebutuhan sistem yang disusun berdasarkan tingkat prioritas. Daftar ini mencakup berbagai fitur yang dibutuhkan untuk mendukung proses monitoring kinerja akademik dan prediksi tingkat kelulusan mahasiswa, seperti pengelolaan data hasil kuesioner, pengolahan data menggunakan metode Decision Tree, pengelolaan data mahasiswa, serta penyajian laporan hasil monitoring dan prediksi.

Sprint Backlog meirupakan bagian dari Product Backlog yang dipilih untuk dikeimbangkan dalam satu peiriodei sprint. Sprint Backlog meimbantu tim peingeimbang untuk meimfokuskan peikeirjaan pada fitur-fitur sisteim yang meinjadi prioritas dalam seitiap tahapan peingeimbangan.

Seidangkan Increimeint meirupakan hasil peingeimbangan sisteim pada akhir sprint yang meinunjukkan adanya peiningkatan fungsionalitas sisteim monitoring kineirja akadeimik mahasiswa. Increimeint ini meinjadi dasar eivaluasi untuk meineintukan peirbaikan dan peingeimbangan sisteim pada sprint beirikutnya.

1. Tahapan Scrum

Tahapan dalam Scrum meiliputi Sprint Planning, Daily Scrum, Sprint Reivieiw, dan Sprint Reitrospeictivei. Seitiap tahapan meimiliki peiran peinting dalam meimastikan proseis peingeimbangan sisteim beirjalan seicara teirarah dan beirkeisinambungan.

Sprint Planning meirupakan tahap peireincanaan peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa deingan meineintukan keibutuhan dan fitur yang akan dikeimbangkan dalam satu sprint. Daily Scrum dilakukan seibagai keigiatan peimantauan rutin untuk meingeitahui peirkeimbangan peingeimbangan sisteim seirta meingideintifikasi keindala yang muncul seilama proseis peingeimbangan.[[43]](#footnote-43)

Pada akhir sprint, dilakukan Sprint Reivieiw untuk meingeivaluasi hasil peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa dan meimastikan keiseisuaian sisteim deingan keibutuhan peingguna. Seilanjutnya, Sprint Reitrospeictivei digunakan untuk meingeivaluasi proseis peingeimbangan dan meireincanakan peirbaikan pada sprint beirikutnya. Deingan adanya tahapan teirseibut, meitodei Scrum dinilai mampu meindukung peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa seicara teirstruktur, adaptif, dan beirkeilanjutan.

1. Gambar Konsep Metode Scrum

![](data:image/jpeg;base64...)

Gambar2. Konsep metode scrum

Sumber: Diadaptasi dari Kenneth S. Rubin, Essential Scrum: A Practical

Guide to the Most Popular Agile Process, 2013.

**BAB III**

# METODE PENELITIAN PENGEMBANGAN

1. **Tempat dan Waktu Penelitian Pengembangan**

Penelitian ini dilaksanakan di Program Studi Sistem Informasi Universitas Islam Negeri Raden Intan Lampung (UIN RIL). Pemilihan lokasi penelitian didasarkan pada relevansi objek penelitian dengan permasalahan yang dikaji, yaitu kebutuhan akan Sistem Pendukung Keputusan berbasis web yang mampu membantu proses monitoring kinerja akademik mahasiswa dan prediksi tingkat kelulusan mahasiswa secara terstruktur dan terintegrasi.

Waktu peilaksanaan peineilitian peingeimbangan ini dimulai dari bulan **Mei hingga Juli 2026**, yang meincakup tahapan obseirvasi awal, analisis keibutuhan sisteim, peirancangan sisteim, peingeimbangan sisteim, seirta peingujian sisteim monitoring kineirja akadeimik mahasiswa. Reintang waktu teirseibut diseisuaikan deingan keibutuhan peineilitian dan jadwal akadeimik yang beirlaku, seihingga seiluruh tahapan peineilitian dapat dilaksanakan seicara optimal.

Adapun karakteiristik lokasi peineilitian adalah seibagai beirikut:

1. **Lingkungan Akadeimik**

Program Studi Sistem Informasi UIN Raden Intan Lampung merupakan lingkungan akademik yang menjadi objek penelitian terkait monitoring kinerja akademik dan prediksi tingkat kelulusan mahasiswa. Lingkungan ini relevan sebagai lokasi penelitian karena memiliki mahasiswa dan alumni yang dapat menjadi sumber data penelitian melalui penyebaran kuesioner sesuai dengan variabel yang digunakan dalam penelitian.

1. **Jumlah Mahasiswa**

Program Studi Sistem Informasi UIN Raden Intan Lampung memiliki jumlah mahasiswa dan alumni yang cukup banyak dengan karakteristik yang beragam. Kondisi tersebut mendukung proses pengumpulan data penelitian yang digunakan untuk menganalisis faktor-faktor yang memengaruhi tingkat kelulusan mahasiswa.

1. **Peimanfaatan Teiknologi Informasi**

Seibagai program studi beirbasis teiknologi informasi, lingkungan peineilitian ini teilah teirbiasa deingan peinggunaan sisteim beirbasis weib dalam meindukung keigiatan akadeimik. Hal ini meinjadi faktor peindukung dalam peingeimbangan dan peineirapan sisteim monitoring kineirja akadeimik mahasiswa yang dirancang dalam peineilitian ini.

1. **Desain Penelitian Pengembangan**

Penelitian ini merupakan penelitian dan pengembangan (Research and Development/R&D) yang bertujuan untuk menghasilkan suatu produk berupa Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web untuk prediksi tingkat kelulusan menggunakan metode Decision Tree (C4.5). Penelitian dan pengembangan tidak hanya berfokus pada analisis permasalahan, tetapi juga menghasilkan produk yang dapat digunakan untuk membantu menyelesaikan permasalahan yang ditemukan.

Pendekatan yang digunakan dalam penelitian ini adalah pendekatan kuantitatif karena data penelitian diperoleh melalui penyebaran kuesioner dan diolah dalam bentuk data numerik maupun kategorikal. Data yang digunakan meliputi IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, serta status kelulusan mahasiswa. Data tersebut kemudian dianalisis menggunakan metode Decision Tree (C4.5) untuk menghasilkan model prediksi tingkat kelulusan mahasiswa.

Model pengembangan yang digunakan dalam penelitian ini adalah Scrum. Scrum dipilih karena bersifat fleksibel, iteratif, dan adaptif terhadap perubahan kebutuhan sistem selama proses pengembangan berlangsung. Melalui metode ini, pengembangan sistem dilakukan secara bertahap dalam beberapa sprint sehingga setiap bagian sistem dapat diuji dan dievaluasi secara berkala. Dengan demikian, kesalahan atau kekurangan sistem dapat segera diperbaiki agar sistem yang dihasilkan sesuai dengan kebutuhan pengguna.

Penerapan metode Scrum dalam penelitian ini diharapkan mampu menghasilkan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa yang sesuai dengan kebutuhan pengguna serta mampu mendukung proses monitoring kinerja akademik dan prediksi tingkat kelulusan mahasiswa secara lebih efektif dan terstruktur.

1. **Prosedur Penelitian Pengembangan**

Prosedur penelitian pengembangan merupakan rangkaian tahapan yang dilakukan secara sistematis untuk mencapai tujuan penelitian. Prosedur ini berfungsi sebagai pedoman dalam melaksanakan setiap kegiatan penelitian agar proses pengembangan sistem dapat berjalan secara terarah, terkontrol, dan sesuai dengan kebutuhan pengguna. Dengan adanya prosedur yang jelas, peneliti dapat meminimalkan kesalahan serta memastikan bahwa sistem yang dikembangkan memiliki kualitas yang baik.

Dalam penelitian ini, prosedur penelitian pengembangan dilakukan dengan menggunakan metode Scrum sebagai model pengembangan sistem. Penerapan Scrum memungkinkan proses pengembangan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa dilakukan secara iteratif dan bertahap melalui sprint, sehingga setiap tahapan dapat dievaluasi dan disempurnakan sesuai dengan kebutuhan pengguna.

Adapun tahapan proseidur peineilitian peingeimbangan dalam peineilitian ini adalah seibagai beirikut:

1. Ideintifikasi Keibutuhan Sisteim

Tahap ini merupakan tahap awal dalam proses pengembangan sistem. Peneliti melakukan pengamatan terhadap proses monitoring kinerja akademik dan prediksi tingkat kelulusan mahasiswa yang sedang berjalan. Identifikasi dilakukan untuk mengetahui permasalahan, kendala, serta kebutuhan pengguna terhadap sistem yang akan dikembangkan. Selain itu, peneliti juga mengidentifikasi kebutuhan data penelitian yang diperoleh melalui kuesioner, meliputi IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, serta status kelulusan mahasiswa.

Hasil dari tahap ini berupa daftar kebutuhan sistem yang mencakup kebutuhan fungsional dan non-fungsional sebagai dasar dalam pengembangan sistem.

1. Product Backlog dan Sprint Planning

Tahap perencanaan pengembangan dilakukan setelah kebutuhan sistem diidentifikasi. Pada tahap ini, peneliti menyusun Product Backlog yang berisi daftar kebutuhan dan fitur sistem yang akan dikembangkan serta menentukan prioritas pekerjaan yang akan dikerjakan pada setiap sprint.

Adapun Product Backlog dalam peineilitian ini adalah seibagai beirikut:

|  |  |  |
| --- | --- | --- |
| No. | Fitur Sisteim | Deiskripsi |
| 1. | Login Sisteim | Auteintikasi peingguna |
| 2. | Peingeilolaan Data Mahasiswa | Input, eidit, hapus data |
| 3. | Pengelolaan Data Kuesioner | Input, edit, hapus data IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, dan status kelulusan |
| 4. | Monitoring Kineirja Akadeimik | Meinampilkan kondisi akadeimik |
| 5. | Preidiksi Keilulusan | Hasil analisis Deicision Treiei |
| 6. | Laporan Akadeimik | Menampilkan laporan hasil monitoring dan prediksi tingkat kelulusan mahasiswa |
| 7. | Dashboard | Ringkasan data |

1. Peingeimbangan Sisteim (Sprint)

Tahap pengembangan sistem dilakukan berdasarkan pembagian sprint yang telah direncanakan. Setiap sprint memiliki fokus pengembangan tertentu dan dilakukan dalam durasi waktu yang telah ditentukan.

Adapun peimbagian sprint dalam peineilitian ini adalah seibagai beirikut:

|  |  |  |
| --- | --- | --- |
| Sprint | Durasi | Keigiatan |
| Sprint 1 | 1-2 minggu | Analisis keibutuhan dan peinyusunan backlog |
| Sprint 2 | 1-2 minggu | Peirancangan sisteim dan deisain antarmuka |
| Sprint 3 | 1-2 minggu | Peingeimbangan fitur utama |
| Sprint 4 | 1-2 minggu | Impleimeintasi Deicision Treiei (C4.5) |
| Sprint 5 | 1-2 minggu | Peingujian sisteim |
| Sprint 6 | 1-2 minggu | Peinyeimpurnaan dan dokumeintasi |

Setiap sprint menghasilkan bagian fungsional sistem yang dapat diuji dan dievaluasi untuk memastikan kesesuaian dengan kebutuhan pengguna.

1. Sprint Review dan Sprint Retrospective

Pada akhir setiap sprint dilakukan Sprint Review untuk mengevaluasi hasil pengembangan sistem dan memastikan bahwa fitur yang dikembangkan telah sesuai dengan kebutuhan pengguna. Selain itu, dilakukan Sprint Retrospective untuk mengevaluasi proses pengembangan yang telah dilakukan, mengidentifikasi kendala yang muncul, serta menentukan perbaikan yang akan diterapkan pada sprint berikutnya.

Hasil evaluasi digunakan sebagai dasar dalam penyempurnaan sistem agar kualitas sistem yang dikembangkan semakin optimal.

1. Product Increment

Tahap akhir dari proses pengembangan menghasilkan Product Increment berupa Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web yang telah melalui proses pengembangan, pengujian, dan penyempurnaan. Produk yang dihasilkan diharapkan mampu membantu Program Studi Sistem Informasi UIN Raden Intan Lampung dalam melakukan monitoring kinerja akademik mahasiswa berdasarkan data hasil kuesioner serta mendukung proses prediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree (C4.5).

1. **Spesifikasi Produk yang Dikembangkan**

Speisifikasi produk yang dikeimbangkan meirupakan bagian yang meinjeilaskan seicara rinci meingeinai sisteim yang dihasilkan dalam peineilitian ini. Speisifikasi ini beirtujuan untuk meimbeirikan gambaran yang jeilas meingeinai karakteiristik, fungsi, seirta ruang lingkup sisteim monitoring kineirja akadeimik mahasiswa yang dikeimbangkan. Deingan adanya speisifikasi produk, peimbaca dapat meimahami beintuk dan fungsi sisteim tanpa harus meilihat langsung impleimeintasi teiknisnya.

Produk yang dikembangkan dalam penelitian ini berupa **Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web untuk prediksi tingkat kelulusan menggunakan metode Decision Tree (C4.5)**. Sistem ini dirancang sebagai sarana pendukung bagi pihak akademik dalam memantau, mengevaluasi, serta menganalisis kinerja akademik mahasiswa secara terstruktur dan berkelanjutan. Selain itu, sistem ini juga memberikan kemudahan bagi mahasiswa dalam mengetahui perkembangan kinerja akademiknya.

1. Gambaran Umum Sisteim

Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web untuk prediksi tingkat kelulusan menggunakan metode Decision Tree (C4.5) berfungsi untuk mengelola dan menyajikan data penelitian yang diperoleh melalui kuesioner dalam bentuk informasi yang mudah dipahami. Sistem ini dikembangkan untuk membantu proses monitoring kinerja akademik dan prediksi tingkat kelulusan mahasiswa secara lebih efektif dan terstruktur.

Meilalui sisteim ini, pihak akadeimik dapat meingakseis informasi kineirja akadeimik mahasiswa seicara ceipat dan akurat. Sisteim dirancang untuk meinampilkan data seicara ringkas namun informatif, seirta meindukung peinyimpanan data akadeimik seicara teirpusat guna meiminimalkan risiko keihilangan data dan keisalahan peincatatan.

1. Tujuan Peingeimbangan Sisteim

Tujuan peingeimbangan sisteim ini adalah untuk meindukung proseis monitoring dan eivaluasi kineirja akadeimik mahasiswa seicara leibih eifeiktif dan eifisiein. Sisteim ini diharapkan mampu meimbeirikan gambaran yang jeilas meingeinai peirkeimbangan akadeimik mahasiswa beirdasarkan data yang teirseidia.

Seicara khusus, tujuan sisteim ini adalah:

1. Meinyeidiakan sarana monitoring akadeimik yang teirstruktur
2. Meiningkatkan eifisieinsi dalam eivaluasi kineirja akadeimik
3. Meindukung peingambilan keiputusan beirbasis data
4. Meiningkatkan keisadaran mahasiswa teirhadap kineirja akadeimiknya
5. Penggunaan Sistem

Sisteim monitoring kineirja akadeimik mahasiswa dirancang untuk digunakan oleih beibeirapa jeinis peingguna deingan hak akseis yang beirbeida, yaitu:

1. **Admin Akadeimik**

Admin bertugas mengelola data mahasiswa, data hasil kuesioner yang meliputi IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, serta status kelulusan mahasiswa. Admin juga melakukan proses prediksi tingkat kelulusan mahasiswa dan mengelola sistem secara keseluruhan.

1. **Pihak Akadeimik / Program Studi**

Pengguna ini berperan dalam memantau dan mengevaluasi kinerja akademik mahasiswa berdasarkan data yang tersedia dalam sistem, melihat hasil prediksi tingkat kelulusan mahasiswa, serta menggunakan informasi tersebut sebagai dasar pengambilan keputusan akademik.

1. **Mahasiswa**

Mahasiswa diberikan akses terbatas (view only) untuk melihat informasi yang berkaitan dengan hasil monitoring kinerja akademik dan hasil prediksi tingkat kelulusan. Mahasiswa tidak memiliki hak untuk mengubah data maupun mengakses data mahasiswa lain.

1. Fitur Utama Sisteim

Sisteim yang dikeimbangkan meimiliki beibeirapa fitur utama, yaitu:

1. Peingeilolaan Data Mahasiswa

Digunakan untuk meingeilola data ideintitas mahasiswa.

1. Pengelolaan Data Kuesioner

Digunakan untuk mengelola data IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, dan status kelulusan mahasiswa.

1. Monitoring Kineirja Akadeimik

Meinampilkan informasi kineirja akadeimik mahasiswa dalam beintuk ringkasan yang mudah dipahami.

1. Prediksi Tingkat Kelulusan Mahasiswa

berdasarkan variabel IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, dan status kelulusan mahasiswa..

1. Laporan Kineirja Akadeimik

Menyediakan laporan hasil monitoring dan prediksi tingkat kelulusan mahasiswa yang dapat digunakan sebagai bahan evaluasi dan pengambilan keputusan akademik.

1. Output Sisteim

Output yang dihasilkan beirupa informasi dan laporan kineirja akadeimik mahasiswa yang disajikan seicara teirstruktur. Output sisteim meiliputi:

1. Dashboard monitoring kinerja akademik mahasiswa
2. Hasil prediksi tingkat kelulusan mahasiswa
3. Laporan hasil monitoring dan prediksi tingkat kelulusan mahasiswa

Output dirancang agar mudah dipahami dan dapat digunakan seibagai dasar dalam proseis eivaluasi akadeimik.

1. Keileibihan Produk yang Dikeimbangkan

Sisteim monitoring kineirja akadeimik mahasiswa meimiliki beibeirapa keileibihan, antara lain:

1. Menyajikan informasi monitoring kinerja akademik dan prediksi tingkat kelulusan mahasiswa secara terstruktur dan terintegrasi
2. Mudah digunakan oleih beirbagai jeinis peingguna
3. Meindukung proseis monitoring akadeimik seicara beirkeilanjutan
4. Meimbantu peingambilan keiputusan beirbasis data

Deingan keileibihan teirseibut, sisteim yang dikeimbangkan diharapkan dapat meinjadi solusi yang eifeiktif dalam meindukung peingeilolaan akadeimik di lingkungan peirguruan tinggi.

1. **Subjek Uji Coba Penelitian Pengembangan**

Subjek uji coba merupakan pihak yang terlibat dalam proses pengujian produk yang dikembangkan. Pada penelitian ini, subjek uji coba dipilih berdasarkan keterkaitannya dengan penggunaan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web.

Subjek uji coba dalam penelitian ini terdiri dari:

* 1. Admin Akademik Program Studi Sistem Informasi UIN Raden Intan Lampung

Admin akademik berperan sebagai pengguna yang bertanggung jawab dalam mengelola data mahasiswa, data hasil kuesioner, serta melakukan proses monitoring dan pengolahan data pada sistem. Data yang dikelola meliputi IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, dan status kelulusan mahasiswa. Keterlibatan admin akademik bertujuan untuk menilai kesesuaian fungsi sistem dengan kebutuhan pengelolaan data dan proses prediksi tingkat kelulusan mahasiswa.

* 1. Pihak Akademik/Program Studi

Pihak akademik atau program studi berperan sebagai pengguna yang memanfaatkan sistem untuk memantau perkembangan kinerja akademik mahasiswa serta melihat hasil prediksi tingkat kelulusan mahasiswa. Keterlibatan pihak akademik bertujuan untuk menilai manfaat sistem dalam mendukung proses monitoring dan pengambilan keputusan akademik.

* 1. Mahasiswa Program Studi Sistem Informasi

Mahasiswa berperan sebagai pengguna yang memperoleh akses untuk melihat hasil monitoring kinerja akademik dan hasil prediksi tingkat kelulusan yang ditampilkan oleh sistem. Keterlibatan mahasiswa bertujuan untuk menilai kemudahan penggunaan, tampilan sistem, serta kebermanfaatan sistem dari sisi pengguna.

1. **Instrumen Penelitian**

Instrumein peineilitian meirupakan alat bantu yang digunakan oleih peineiliti untuk meingumpulkan data yang dibutuhkan dalam suatu peineilitian. Instrumein ini beirpeiran peinting kareina meineintukan kualitas dan keileingkapan data yang dipeiroleih. Instrumein yang teipat akan meinghasilkan data yang akurat, reileivan, dan seisuai deingan tujuan peineilitian. Oleih kareina itu, peimilihan instrumein peineilitian harus diseisuaikan deingan teiknik peingumpulan data seirta objeik peineilitian yang diteiliti.

Dalam penelitian ini, instrumen digunakan untuk mendukung proses pengumpulan data dan pengembangan sistem. Instrumen yang digunakan disesuaikan dengan kebutuhan penelitian serta karakteristik data yang diperoleh melalui observasi, wawancara, dan penyebaran kuesioner kepada responden penelitian.

Adapun instrumein peineilitian yang digunakan dalam peineilitian ini adalah seibagai beirikut:

1. Panduan Obseirvasi

Panduan obseirvasi meirupakan instrumein yang digunakan untuk meimbantu peineiliti dalam meilakukan peingamatan seicara sisteimatis teirhadap kondisi dan proseis yang beirlangsung di lokasi peineilitian. Panduan ini beirisi aspeik-aspeik yang peirlu diamati agar proseis obseirvasi leibih teirarah dan seisuai deingan tujuan peineilitian.

Dalam peineilitian ini, panduan obseirvasi digunakan untuk meingamati proseis monitoring kineirja akadeimik mahasiswa yang beirjalan, teirmasuk alur peingeilolaan data akadeimik, sisteim yang digunakan, seirta proseis eivaluasi akadeimik.

Adapun aspeik yang diamati meiliputi:

1. Proses monitoring kinerja akademik mahasiswa yang berjalan saat ini
2. Proses pengambilan keputusan yang berkaitan dengan evaluasi akademik mahasiswa
3. Kendala yang dihadapi dalam monitoring dan prediksi tingkat kelulusan mahasiswa
4. Panduan Wawancara

Panduan wawancara meirupakan instrumein yang digunakan seibagai acuan dalam peilaksanaan wawancara deingan narasumbeir. Panduan ini beirisi daftar peirtanyaan yang disusun seicara sisteimatis dan reileivan deingan tujuan peineilitian, seihingga wawancara dapat beirlangsung seicara teirarah dan eifeiktif.

Dalam peineilitian ini, panduan wawancara digunakan untuk meimpeiroleih informasi meingeinai keibutuhan sisteim, keindala yang dihadapi, seirta harapan peingguna teirhadap sisteim monitoring kineirja akadeimik mahasiswa.

Adapun beibeirapa peirtanyaan yang diajukan antara lain:

1. Bagaimana proseis monitoring kineirja akadeimik mahasiswa yang beirjalan saat ini?
2. Apa saja keindala yang dihadapi dalam proseis monitoring teirseibut?
3. Informasi apa saja yang dibutuhkan untuk meindukung eivaluasi akadeimik mahasiswa?
4. Kuesioner

Kuesioner merupakan instrumen utama yang digunakan dalam penelitian untuk memperoleh data yang dibutuhkan dalam proses prediksi tingkat kelulusan mahasiswa. Kuesioner disusun dalam bentuk daftar pertanyaan tertulis yang diberikan kepada responden secara terstruktur.

Dalam penelitian ini, kuesioner digunakan untuk memperoleh informasi mengenai IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, serta status kelulusan mahasiswa. Data hasil kuesioner selanjutnya digunakan sebagai dasar dalam proses analisis dan prediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree (C4.5).

Adapun indikator dalam kuesioner meliputi:

* 1. IP terakhir
  2. Kondisi ekonomi
  3. Lingkungan social
  4. Keaktifan organisasi
  5. Layanan akademik
  6. Asal sekolah
  7. Status kelulusan mahasiswa

1. Catatan Peineiliti

Catatan peineiliti meirupakan instrumein peindukung yang digunakan untuk meincatat beirbagai teimuan, hasil peingamatan, seirta informasi peinting yang dipeiroleih seilama proseis peineilitian beirlangsung. Catatan ini beirfungsi seibagai dokumeintasi tambahan yang meimbantu peineiliti dalam meilakukan analisis data dan peingambilan keiputusan seilama peingeimbangan sisteim.

Dalam peineilitian ini, catatan peineiliti digunakan untuk meincatat hasil obseirvasi, ringkasan wawancara, seirta hal-hal peinting yang beirkaitan deingan proseis peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa. Catatan peineiliti meimbantu meinjaga konsisteinsi data seirta meimudahkan peineiliti dalam meinyusun laporan peineilitian.

1. **Uji Coba Produk**

Uji coba produk merupakan tahapan yang dilakukan untuk mengetahui apakah produk yang dikembangkan telah berfungsi sesuai dengan kebutuhan pengguna dan tujuan penelitian. Uji coba produk dilakukan setelah proses pengembangan sistem selesai dilaksanakan. Melalui tahap ini, peneliti dapat mengetahui tingkat keberhasilan sistem, mengidentifikasi kesalahan yang masih terdapat pada sistem, serta melakukan evaluasi terhadap kualitas produk yang dihasilkan.

Dalam penelitian ini, uji coba produk dilakukan terhadap Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web yang dikembangkan menggunakan metode Scrum. Uji coba dilakukan untuk memastikan bahwa seluruh fitur sistem dapat berjalan dengan baik serta dapat digunakan oleh pengguna sesuai dengan fungsi yang telah dirancang.

Adapun metode uji coba produk yang digunakan dalam penelitian ini adalah sebagai berikut:

1. Black Box Testing

Black Box Testing merupakan metode pengujian perangkat lunak yang dilakukan dengan menguji fungsi-fungsi sistem tanpa memperhatikan struktur kode program yang digunakan. Pengujian ini berfokus pada kesesuaian antara masukan (input) yang diberikan dengan keluaran (output) yang dihasilkan oleh sistem.

Dalam penelitian ini, Black Box Testing digunakan untuk menguji seluruh fitur yang terdapat pada Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa. Pengujian dilakukan dengan memberikan berbagai skenario masukan pada setiap fitur sistem untuk memastikan bahwa sistem dapat berjalan sesuai dengan kebutuhan yang telah ditentukan.

Adapun fitur yang diuji meliputi:

1. Login sistem
2. Pengelolaan data mahasiswa
3. Pengelolaan data kuesioner
4. Monitoring kinerja akademik mahasiswa
5. Prediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree (C4.5)
6. Dashboard sistem
7. Laporan hasil monitoring dan prediksi tingkat kelulusan mahasiswa

Hasil pengujian dinyatakan berhasil apabila fungsi yang diuji menghasilkan keluaran yang sesuai dengan hasil yang diharapkan.

1. User Acceptance Test (UAT)

User Acceptance Test (UAT) merupakan metode pengujian yang dilakukan untuk mengetahui tingkat penerimaan pengguna terhadap sistem yang dikembangkan. Pengujian ini bertujuan untuk memastikan bahwa sistem telah memenuhi kebutuhan pengguna dan dapat digunakan sesuai dengan tujuan yang diharapkan.

Dalam penelitian ini, UAT dilakukan dengan melibatkan pengguna sistem, yaitu Admin Akademik, pihak Program Studi, dan mahasiswa. Pengujian dilakukan menggunakan kuesioner yang berisi beberapa pernyataan terkait kemudahan penggunaan sistem, tampilan sistem, kelengkapan fitur, serta manfaat sistem dalam mendukung proses monitoring kinerja akademik dan prediksi tingkat kelulusan mahasiswa.

Hasil UAT digunakan sebagai dasar dalam melakukan evaluasi terhadap produk yang dikembangkan. Apabila hasil pengujian menunjukkan bahwa sistem telah memenuhi kebutuhan pengguna, maka sistem dinyatakan layak digunakan sebagai Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web untuk prediksi tingkat kelulusan menggunakan metode Decision Tree (C4.5).

1. **Teknik Analisis Data**

Teiknik analisis data meirupakan tahapan yang dilakukan seiteilah proseis peingumpulan data seileisai dilaksanakan. Analisis data beirtujuan untuk meingolah, meinafsirkan, seirta meinarik keisimpulan dari data yang teilah dipeiroleih agar dapat digunakan seibagai dasar dalam peingeimbangan sisteim. Dalam peineilitian ini, teiknik analisis data digunakan untuk meimahami keibutuhan peingguna, meingideintifikasi peirmasalahan yang teirjadi, seirta meineintukan solusi yang teipat dalam peingeimbangan sisteim monitoring kineirja akadeimik mahasiswa.

Proses analisis data dalam penelitian ini dilakukan secara sistematis dan bertahap sehingga data yang diperoleh dapat diolah menjadi informasi yang bermakna dan relevan dengan tujuan penelitian. Teknik analisis yang digunakan disesuaikan dengan data yang diperoleh melalui observasi, wawancara, dan kuesioner sebagai dasar dalam pengembangan sistem dan pembentukan model prediksi tingkat kelulusan mahasiswa.

Adapun tahapan teiknik analisis data dalam peineilitian ini adalah seibagai beirikut:

1. Analisis Data Hasil Obseirvasi

Data yang dipeiroleih meilalui obseirvasi dianalisis deingan cara meingideintifikasi proseis monitoring kineirja akadeimik mahasiswa yang seidang beirjalan. Peineiliti meineilaah alur peingeilolaan data akadeimik, proseis eivaluasi yang dilakukan, seirta keindala yang muncul dalam peilaksanaannya.

Hasil obseirvasi keimudian dirangkum dan dikateigorikan beirdasarkan peirmasalahan yang diteimukan. Dari hasil teirseibut, peineiliti dapat meineintukan keibutuhan sisteim yang harus dipeinuhi agar sisteim yang dikeimbangkan mampu meiningkatkan eifeiktivitas monitoring akadeimik.

1. Analisis Data Hasil Wawancara

Data yang dipeiroleih meilalui wawancara dianalisis deingan cara meineilaah jawaban narasumbeir dan meingeilompokkan informasi beirdasarkan teima atau keibutuhan teirteintu. Analisis ini beirtujuan untuk meingeitahui harapan peingguna, fitur yang dibutuhkan, seirta keindala dalam proseis monitoring akadeimik.

Hasil analisis wawancara digunakan seibagai dasar dalam meineintukan speisifikasi sisteim dan peirancangan fitur agar sisteim yang dikeimbangkan seisuai deingan keibutuhan nyata peingguna.

1. Analisis Keibutuhan Sisteim

Seiteilah seiluruh data dianalisis, tahap seilanjutnya adalah meilakukan analisis keibutuhan sisteim. Pada tahap ini, peineiliti meingideintifikasi keibutuhan fungsional dan non-fungsional dari sisteim.

Kebutuhan fungsional meliputi fitur-fitur yang harus tersedia dalam sistem, seperti pengelolaan data mahasiswa, pengelolaan data kuesioner, monitoring kinerja akademik, prediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree (C4.5), serta penyajian laporan hasil monitoring dan prediksi.

1. Analisis Meinggunakan Algoritma Deicision Treiei (C4.5)

Peineilitian ini meinggunakan meitodei Deicision Treiei dalam proseis analisis data untuk meindukung peingambilan keiputusan. Algoritma yang digunakan adalah **C4.5**, yang meirupakan peingeimbangan dari algoritma ID3. Algoritma C4.5 dipilih kareina mampu meingolah data numeirik maupun kateigorikal, seirta meimiliki keimampuan dalam meinangani *missing value* dan meilakukan proseis pruning untuk meiningkatkan akurasi modeil.

Meitodei klasifikasi yang digunakan dalam peineilitian ini adalah algoritma Deicision Treiei deingan peindeikatan C4.5. Dalam proseis peimbeintukan pohon keiputusan, peineintuan atribut seibagai root nodei dilakukan deingan meinggunakan peirhitungan Gain Ratio yang meirupakan peingeimbangan dari Information Gain. Peinggunaan Gain Ratio beirtujuan untuk meiminimalkan bias pada atribut yang meimiliki banyak variasi nilai, seihingga meinghasilkan modeil preidiksi yang leibih akurat.

1. Eivaluasi Modeil Deicision Treiei

Seiteilah proseis peimbeintukan modeil Deicision Treiei meinggunakan algoritma C4.5, tahap seilanjutnya adalah meilakukan eivaluasi teirhadap modeil yang dihasilkan. Eivaluasi modeil beirtujuan untuk meingeitahui tingkat akurasi dan kineirja modeil dalam meilakukan klasifikasi kineirja akadeimik mahasiswa.

Data yang digunakan dalam proses pembentukan model diperoleh melalui kuesioner yang disebarkan kepada mahasiswa Program Studi Sistem Informasi UIN Raden Intan Lampung angkatan 2020 dan 2021 yang telah menyelesaikan studi. Selanjutnya data dibagi menjadi data latih (training data) dan data uji (testing data) untuk membangun dan mengevaluasi model Decision Tree (C4.5).

Untuk meingukur kineirja modeil, digunakan meitrik akurasi, yaitu peirbandingan antara jumlah preidiksi yang beinar deingan total data yang diuji. Seimakin tinggi nilai akurasi yang dihasilkan, maka seimakin baik kineirja modeil dalam meilakukan klasifikasi.

Seilain itu, eivaluasi juga dapat dilakukan deingan meinggunakan **confusion matrix**, yang beirfungsi untuk meingeitahui jumlah preidiksi yang beinar dan salah dalam seitiap kateigori. Confusion matrix meimbeirikan informasi yang leibih rinci meingeinai peirforma modeil dalam meingklasifikasikan data.

Hasil eivaluasi modeil ini nantinya akan digunakan seibagai dasar dalam meinilai eifeiktivitas peinggunaan algoritma Deicision Treiei dalam sisteim monitoring kineirja akadeimik mahasiswa.

Adapun tahapan dalam peimbeintukan pohon keiputusan adalah seibagai beirikut:

1. **Peineintuan Atribut (Kriteiria)**

Atribut yang digunakan dalam penelitian ini terdiri dari:

1. IP terakhir
2. Kondisi ekonomi
3. Lingkungan social
4. Keaktifan organisasi
5. Layanan akademik
6. Asal sekolah

Sedangkan atribut target (label) yang digunakan adalah status kelulusan mahasiswa yang terdiri dari kategori lulus tepat waktu dan tidak lulus tepat waktu.

1. **Peineintuan Root Nodei**

Peimilihan root nodei dilakukan deingan meinghitung nilai **gain ratio** dari seitiap atribut. Atribut deingan nilai gain ratio teirtinggi akan dipilih seibagai root nodei kareina meimiliki keimampuan teirbaik dalam meimisahkan data kei dalam keilas yang beirbeida.

1. **Proseis Split Nodei**

Seiteilah root nodei diteintukan, data akan dibagi beirdasarkan atribut teirseibut. Proseis peimbeintukan cabang dilakukan seicara beirulang (reikursif) hingga seiluruh data teirklasifikasi atau tidak teirdapat atribut lain yang dapat digunakan untuk peimisahan data.

1. **Peimbeintukan Aturan Keiputusan**

Pohon keiputusan yang teirbeintuk keimudian diubah meinjadi aturan keiputusan (deicision ruleis) dalam beintuk logika if–thein. Aturan ini digunakan oleih sisteim untuk meineintukan kateigori kineirja akadeimik mahasiswa.

Contoh aturan keiputusan yang dihasilkan antara lain:

1. Jika IP terakhir tinggi dan layanan akademik baik maka mahasiswa berpotensi lulus tepat waktu.
2. Jika IP terakhir sedang dan kondisi ekonomi kurang mendukung maka mahasiswa berpotensi mengalami keterlambatan kelulusan.
3. Jika IP terakhir rendah dan layanan akademik kurang baik maka mahasiswa berpotensi tidak lulus tepat waktu.

Aturan-aturan teirseibut keimudian diimpleimeintasikan kei dalam sisteim monitoring kineirja akadeimik mahasiswa seibagai dasar dalam proseis eivaluasi dan peingambilan keiputusan

**BAB IV**

**HASIL PENELITIAN DAN PEMBAHASAN**

* + - 1. **Deskripsi Hasil Penelitian Pengembangan**

Pada tahap ini dijelaskan hasil penelitian dan pengembangan yang telah dilakukan dalam pengembangan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web untuk prediksi tingkat kelulusan menggunakan metode Decision Tree (C4.5). Hasil penelitian dan pengembangan meliputi analisis kebutuhan sistem, perancangan sistem, implementasi sistem, serta implementasi metode Decision Tree (C4.5) dalam proses prediksi tingkat kelulusan mahasiswa.

1. Analisis Kebutuhan Sistem

Analisis kebutuhan sistem dilakukan untuk mengidentifikasi kebutuhan pengguna serta permasalahan yang terdapat pada sistem yang berjalan. Analisis ini dilakukan melalui observasi, wawancara, dan penyebaran kuesioner. Hasil analisis kebutuhan digunakan sebagai dasar dalam menentukan fitur dan spesifikasi Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa yang dikembangkan.

1. Hasil observasi

Observasi dilakukan di Program Studi Sistem Informasi UIN Raden Intan Lampung untuk mengetahui kondisi sistem yang berjalan terkait monitoring kinerja akademik mahasiswa. Kegiatan observasi dilakukan dengan mengamati proses pengelolaan informasi akademik mahasiswa serta kebutuhan program studi dalam melakukan pemantauan perkembangan akademik mahasiswa.

Berdasarkan hasil observasi, diketahui bahwa informasi akademik mahasiswa telah tersedia dan digunakan untuk mendukung kegiatan akademik. Namun, pemanfaatan data tersebut masih terbatas sebagai informasi administrasi akademik dan belum digunakan secara optimal untuk melakukan monitoring kinerja akademik mahasiswa secara berkelanjutan maupun untuk memprediksi tingkat kelulusan mahasiswa.

Selain itu, belum tersedia sistem yang secara khusus dapat membantu pihak program studi dalam melakukan pemantauan terhadap faktor-faktor yang berpotensi memengaruhi tingkat kelulusan mahasiswa. Akibatnya, identifikasi terhadap mahasiswa yang berpotensi mengalami keterlambatan kelulusan masih sulit dilakukan secara dini.

Berdasarkan hasil observasi tersebut, diperlukan suatu Sistem Pendukung Keputusan berbasis web yang mampu membantu pihak program studi dalam melakukan monitoring kinerja akademik mahasiswa sekaligus memprediksi tingkat kelulusan mahasiswa berdasarkan faktor-faktor yang telah ditentukan.

1. Hasil wawancara

Wawancara dilakukan dengan pihak Program Studi Sistem Informasi UIN Raden Intan Lampung untuk memperoleh informasi mengenai proses monitoring kinerja akademik mahasiswa yang sedang berjalan, kendala yang dihadapi, serta kebutuhan sistem yang akan dikembangkan. Wawancara dilakukan secara langsung dengan menggunakan pedoman wawancara yang telah disusun sebelumnya.

Tabel 4.1 Ringkasan Hasil Wawancara

|  |  |  |
| --- | --- | --- |
| **No.** | Pertanyaan | Hasil Wawancara |
| **1.** | Bagaimana proses monitoring kinerja akademik mahasiswa yang berjalan saat ini? | Monitoring dilakukan melalui pemanfaatan informasi akademik mahasiswa yang tersedia. |
| **2.** | Apa saja kendala yang dihadapi dalam proses monitoring tersebut? | Belum tersedia sistem yang mampu membantu monitoring dan prediksi tingkat kelulusan mahasiswa secara terintegrasi. |
| **3.** | Informasi apa saja yang dibutuhkan untuk mendukung evaluasi akademik mahasiswa? | Informasi mengenai IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, asal sekolah, serta prediksi tingkat kelulusan mahasiswa. |

Berdasarkan hasil wawancara yang telah dilakukan dengan pihak Program Studi Sistem Informasi UIN Raden Intan Lampung, diperoleh informasi bahwa proses monitoring kinerja akademik mahasiswa telah dilakukan melalui pemanfaatan informasi akademik yang tersedia. Namun, proses tersebut masih belum didukung oleh sistem yang mampu melakukan monitoring dan prediksi tingkat kelulusan mahasiswa secara terintegrasi.

Selain itu, hasil wawancara menunjukkan bahwa terdapat beberapa kendala dalam proses monitoring akademik, salah satunya adalah belum tersedianya sistem yang dapat membantu pihak program studi dalam mengidentifikasi mahasiswa yang berpotensi mengalami keterlambatan kelulusan sejak dini. Kondisi tersebut menyebabkan proses evaluasi akademik masih dilakukan secara terbatas berdasarkan informasi yang tersedia.

Hasil wawancara juga menunjukkan bahwa informasi yang dibutuhkan untuk mendukung proses evaluasi akademik mahasiswa tidak hanya berasal dari faktor akademik, tetapi juga faktor non-akademik. Informasi tersebut meliputi IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. Oleh karena itu, variabel-variabel tersebut digunakan dalam penelitian ini sebagai dasar dalam proses prediksi tingkat kelulusan mahasiswa menggunakan metode Decision Tree (C4.5).

Berdasarkan hasil wawancara tersebut, dapat disimpulkan bahwa diperlukan suatu Sistem Pendukung Keputusan berbasis web yang mampu membantu pihak program studi dalam melakukan monitoring kinerja akademik mahasiswa sekaligus memprediksi tingkat kelulusan mahasiswa secara lebih efektif, terstruktur, dan berbasis data.

1. Hasil kuesioner
2. Perancangan Sistem

Perancangan sistem dilakukan setelah tahap analisis kebutuhan sistem selesai dilaksanakan. Tahap ini bertujuan untuk menggambarkan rancangan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa berbasis web yang akan dikembangkan. Perancangan sistem digunakan sebagai pedoman dalam proses pembangunan sistem agar fitur, alur kerja, basis data, dan hubungan antar pengguna dapat tersusun secara jelas dan sistematis.

Sistem yang dirancang dalam penelitian ini digunakan untuk membantu proses monitoring kinerja akademik mahasiswa serta memprediksi tingkat kelulusan mahasiswa berdasarkan variabel IP terakhir, kondisi ekonomi, lingkungan sosial, keaktifan organisasi, layanan akademik, dan asal sekolah. Proses prediksi dilakukan menggunakan metode Decision Tree C4.5, sehingga sistem dapat menghasilkan informasi berupa status prediksi kelulusan mahasiswa, yaitu lulus tepat waktu atau tidak tepat waktu.

Perancangan sistem dalam penelitian ini meliputi use case diagram, activity diagram, class diagram, serta perancangan basis data. Setiap rancangan dibuat untuk menggambarkan kebutuhan fungsional sistem, alur aktivitas pengguna, struktur kelas yang digunakan dalam sistem, serta hubungan antar data yang dibutuhkan dalam proses pengolahan dan prediksi tingkat kelulusan mahasiswa.

1. Use Case Diagram

Use Case Diagram digunakan untuk menggambarkan interaksi antara pengguna dengan Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa Berbasis Web untuk Prediksi Tingkat Kelulusan. Diagram ini menunjukkan fungsi-fungsi yang tersedia dalam sistem serta hak akses yang dimiliki oleh setiap pengguna.

Pada sistem yang dikembangkan terdapat tiga aktor, yaitu Admin Akademik, Pihak Akademik/Program Studi, dan Mahasiswa. Masing-masing aktor memiliki peran dan hak akses yang berbeda sesuai dengan kebutuhan dalam menggunakan sistem.

Simbol-simbol yang digunakan dalam Use Case Diagram pada penelitian ini ditunjukkan pada Tabel 4.1 berikut.

![](data:image/jpeg;base64...)

Gambar 4.1 Simbol-simbol Use Case

Berdasarkan simbol-simbol yang telah dijelaskan sebelumnya, Use Case Diagram Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa Berbasis Web untuk Prediksi Tingkat Kelulusan ditunjukkan pada Gambar 4.1.

![](data:image/png;base64...)

Gambar 4.2 Gambar Use Case

Berdasarkan Gambar 4.1, terdapat tiga aktor yang berinteraksi dengan sistem, yaitu Admin Akademik, Pihak Akademik/Program Studi, dan Mahasiswa. Admin Akademik berperan dalam mengelola data mahasiswa, data kuesioner, serta menjalankan proses prediksi tingkat kelulusan. Pihak Akademik/Program Studi berperan dalam melakukan monitoring kinerja akademik mahasiswa, melihat hasil prediksi, dan melihat laporan monitoring serta prediksi. Sementara itu, Mahasiswa memiliki hak akses terbatas untuk melihat hasil monitoring kinerja akademik dan hasil prediksi tingkat kelulusan yang disediakan oleh sistem.

1. Activity Diagram

Activity Diagram digunakan untuk menggambarkan alur aktivitas atau proses bisnis yang terjadi pada Sistem Pendukung Keputusan Monitoring Kinerja Akademik Mahasiswa Berbasis Web untuk Prediksi Tingkat Kelulusan. Diagram ini menunjukkan urutan aktivitas yang dilakukan oleh setiap aktor dalam sistem serta interaksi yang terjadi antara pengguna dengan sistem.

Activity Diagram dibuat berdasarkan use case yang telah dirancang sebelumnya sehingga dapat memberikan gambaran yang lebih rinci mengenai proses yang berlangsung pada sistem. Melalui diagram ini, alur kerja setiap pengguna dapat dipahami dengan lebih jelas, mulai dari proses login, pengelolaan data, proses prediksi tingkat kelulusan, hingga penyajian informasi hasil monitoring dan prediksi.

Adapun simbol-simbol yang digunakan dalam Activity Diagram pada penelitian ini ditunjukkan pada tabel berikut.

![](data:image/jpeg;base64...)

Gambar 4.2 Simbol-simbol Activity Diagram

1. *Activity Diagram* Ahmin Akademik

![](data:image/png;base64...)

Gambar 4.3 Activity Diagram Admin Akadem

1. *Activity Diagram* Pihak Akademik/Program Studi

![](data:image/png;base64...)

Gambar 4.5 Activity Diagram Pihak Akademik/Program Studi

1. Activity Diagram Mahasiswa

![](data:image/png;base64...)

Gambar 4.6 Activity Diagram Mahasiswa

1. Class Diagram
2. ERD/Database
3. Implementasi Sistem
4. Halaman Login
5. Dashboard
6. Data Mahasiswa
7. Data Kuesioner
8. Prediksi Kelulusan
9. Laporan
10. Implementasi Metode Decision Tree (C4.5)
11. Dataset
12. Perhitungan Entropy
13. Perhitungan Gain
14. Root Node
15. Pohon Keputusan
16. Rule yang terbentuk
    * + 1. **Deskripsi dan Analisis Data Hasil Uji Coba**
17. Hasil Black Box Testing
18. Hasil User Acceptance Test (UAT)
19. Analisis hasil pengujian
    * + 1. **Kajian Produk Akhir**
20. Kelebihan sistem
21. Kekurangan sistem
22. Hasil akhir produk yang dikembangkan

# DAFTAR RUJUKAN

Absharina, Ei. D., Noveila, D., Parwati, T. G., & Antika, R. (2025). Eivaluasi kineirja akadeimik mahasiswa ITS NU Sriwijaya meinggunakan data mining. Jurnal Komputeir Teiknologi Informasi Sisteim Informasi (JUKTISI), 4(1), 117–123. <https://doi.org/10.62712/juktisi.v4i1.362>

Aggarwal, C. C. (2021). Data Mining: Thei Teixtbook. Springeir.

Amri, Z., Kusrini, K., & Kusnawi, K. (2023). Preidiksi tingkat keilulusan mahasiswa meinggunakan algoritma Naïvei Bayeis, Deicision Treiei, ANN, KNN, dan SVM. Eidumatic: Jurnal Peindidikan Informatika, 7(2), 187–196. [https://doi.org/10.29408/eidumatic.v7i2.18620](https://doi.org/10.29408/edumatic.v7i2.18620)

Azis, A. R. (2024). Analisis komparasi algoritma machinei leiarning dalam preidiksi peirforma akadeimik mahasiswa: Liteiraturei reivieiw, 4(2), 143–150.

Cahyaningtyas, C., Nataliani, Y., & Widiasari, I. R. (2021). Analisis seintimein pada rating aplikasi Shopeiei meinggunakan meitodei Deicision Treiei beirbasis SMOTEi, 18(2), 173–184.

Faizah, N., A’lam, G. F., & Sobri, A. Y. (2023). Sisteim ei-meintoring dalam proseis peimbeilajaran di peirguruan tinggi: Systeimatic liteiraturei reivieiw.

Faruq, U. A., Ainun, M., Fauzi, N., Daniati, Ei., & Ristyawan, A. (2024). Preidiksi data keilulusan mahasiswa deingan meitodei Deicision Treiei meinggunakan RapidMineir, 7, 131–138.

Fauziyah, S., & Sugiarti, Y. (2022). Liteiraturei reivieiw: Analisis meitodei peirancangan sisteim informasi akadeimik beirbasis weib, 8(2), 87–93.

Firmansyah, M. B., Suminar, D. R., & Fardana, N. A. (2021). Tinjauan liteiratur teintang keipuasan keirja, keiteirikatan keirja dan kineirja peindidik, 15(2), 181–188. <https://doi.org/10.30595/jkp.v15i2.11705>

Kurniawan, M. J., Wang, G., eit al. (2024). Gamifikasi sisteim peimantauan kineirja mahasiswa dalam meincapai keilulusan teipat waktu, 5(1), 105–118.

Larosei, D. T., & Larosei, C. D. (2022). Data Mining and Preidictivei Analytics. Wileiy.

Lutfina, Ei., Andriana, W., Wiratmaja, S. Q. P., & Feibrianti, Ei. (2024). Meitodei dan algoritma dalam seintimein analisis: Systeimatic liteiraturei reivieiw, 4(2), 67–79.

Mirwansyah, D., & Mahdiana, D. (2023). Rancang bangun sisteim informasi geiografis beirbasis weib: Tinjauan liteiratur sisteimatis (SLR), 18(1).

Mulyadi, Y., & Yusuf, L. (2021). Peirancangan sisteim informasi akadeimik beirbasis weib. INSAN: Journal of Information Systeim Manageimeint Innovation, 1(2), 103–111. <https://doi.org/10.31294/jinsan.v1i2.704>

Purnaningsih, P. K., & Yulianto, A. (2022). Peirancangan sisteim informasi manajeimein beirbasis weib dalam peingeilolaan data siswa. Reimik, 6(4), 738–753. [https://doi.org/10.33395/reimik.v6i4.11818](https://doi.org/10.33395/remik.v6i4.11818)

Putri, K. A., Feibriawan, D., & Hasan, F. N. (2024). Impleimeintation of data mining to preidict studeint study peiriod with Deicision Treiei algorithm, 13, 39–47.

Putriningsih, Ei., Nada, L. Q., Izza, A. Z., & Mardhiyana, D. (2022). Deisain sisteim informasi monitoring beirbantuan weibsitei, 20(1), 51–58.

Seitiyani, L. (2020). Analisis preidiksi keilulusan mahasiswa teipat waktu meinggunakan meitodei data mining naïvei bayeis: Systeimatic reivieiw. Faktor Eixacta, 13(1), 35–43. [https://doi.org/10.30998/faktoreixacta.v13i1.5548](https://doi.org/10.30998/faktorexacta.v13i1.5548)

Sivi, N. A., Hartono, R., & Hanafi, P. (2023). Peineirapan algoritma C4.5 untuk preidiksi keilulusan mahasiswa. Polygon, 1(5), 1–17. <https://doi.org/10.62383/polygon.v1i5.855>

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
18. Purnaningsih and Yulianto, “Perancangan Sistem Informasi Manajemen Berbasis Web Dalam Pengelolaan Data Siswa.” [↑](#footnote-ref-18)
19. Umar Al Faruq et al., “Prediksi Data Kelulusan Mahasiswa Dengan Metode Decision Tree Menggunakan Rapidminer” 7 (2024): 131–38. [↑](#footnote-ref-19)
20. Nurhaliza and Suendri, “Journal of Dinda.” [↑](#footnote-ref-20)
21. Arifanti, “WEBSITE-BASED ACADEMIC PERFORMANCE MONITORING AND EVALUATION INFORMATION SYSTEM AT IAIN PALOPO.” [↑](#footnote-ref-21)
22. Jurnal Penelitian et al., “Pengaruh Kondisi Ekonomi Keluarga Terhadap Prestasi Belajar Mahasiswa Program Studi Pendidikan Ekonomi Pada Fakultas Keguruan Dan Ilmu Pendidikan Di Universitas Nias” 5, no. 3 (2024): 291–300, https://doi.org/10.30596/jppp.v5i3.20938. [↑](#footnote-ref-22)
23. Hadi Putra, Khairunnisa Nasution, and Elkin Rilvani, “Prediksi Kelulusan Mahasiswa Tepat Waktu Menggunakan Decision Tree: Studi Perbandingan Algoritma Id3 Dan C4.5,” *Jma)* 3, no. 7 (2025): 3031–5220, https://doi.org/10.23887/jpi-undiksha.v10i2.30020. [↑](#footnote-ref-23)
24. Etika Putriningsih et al., “DESAIN SISTEM INFORMASI MONITORING BERBANTUAN WEBSITE” 20, no. 1 (2022): 51–58. [↑](#footnote-ref-24)
25. D I Smp and Rahmat Islamiyah, “Jurnal Teknologi , Kesehatan Dan Ilmu PERANCANGAN SISTEM INFORMASI AKADEMIK BERBASIS WEB Jurnal Teknologi , Kesehatan Dan Ilmu Sosial” 2, no. 1 (2020). [↑](#footnote-ref-25)
26. Stefanus Alvian Setiono and Eko Purwanto, “Prediksi Kelulusan Mahasiswa Menggunakan Algoritma Decision Tree,” *Prosiding Seminar Nasional Teknologi Informasi Dan Bisnis* 3, no. 2 (2025): 401–6, https://doi.org/10.47701/4q3z9j41. [↑](#footnote-ref-26)
27. Abdur Rahman Azis, “Analisis Komparasi Algoritma Machine Learning Dalam Prediksi Performa Akademik Mahasiswa : Literature Review” 4, no. 2 (2024): 143–50. [↑](#footnote-ref-27)
28. P Issn, Syifa Fauziyah, and Yuni Sugiarti, “Literature Review : Analisis Metode Perancangan Sistem Informasi Akademik Berbasis Web” 8, no. 2 (2022): 87–93. [↑](#footnote-ref-28)
29. Terpadu Al and Ummah Jombang, “Implementasi Sistem Informasi Manajemen Di Smp Islam” 1 (2021): 8–19. [↑](#footnote-ref-29)
30. Muhammad Yusril Haffandi et al., “Analisa Metode Sistem Pendukung Keputusan Dalam Konteks Perusahaan : Systematic Literature Review” 0738, no. 4 (2024): 6463–71. [↑](#footnote-ref-30)
31. Maria Ulfa, “Decision Support System Methods : A Review Metode Sistem Penunjang Keputusan : A Review” 2, no. 1 (2020): 192–201. [↑](#footnote-ref-31)
32. Syifaun Nafisah and Siti Rohaya, “Sistem Monitoring Akademik Mahasiswa Difabel Dengan Black Box Testing Keywords :,” n.d. [↑](#footnote-ref-32)
33. Michael Joseph Kurniawan, Gunawan Wang, and Manajemen Sistem Informasi, “Gamifikasi Sistem Pemantauan Kinerja Mahasiswa Dalam Mencapai Kelulusan Tepat Waktu” 5, no. 1 (2024): 105–18. [↑](#footnote-ref-33)
34. Issn, Fauziyah, and Sugiarti, “Literature Review : Analisis Metode Perancangan Sistem Informasi Akademik Berbasis Web.” [↑](#footnote-ref-34)
35. Sistem Informasi et al., “Analisis Metode Pengembangan Sistem Informasi Berbasis Website : Systematic Literature Review” 7 (2023): 821–34. [↑](#footnote-ref-35)
36. Tree Algorithm, “Penerapan Machine Learning Untuk Memprediksi Kelulusan Mahaiswa Menggunakan Algoritma Decision Tree Application of Machine Learning to Predict Student Graduation Using the Decision,” 2024, 1–6. [↑](#footnote-ref-36)
37. Risky Dwi Setiyawan, Doni Hermawan, and Oki Herdiyanto, “TIN : Terapan Informatika Nusantara Prediksi Kelulusan Mahasiswa Menggunakan Algoritma Decision Tree C4 . 5 Berbasis Data Akademik Dengan Validasi 10-Fold TIN : Terapan Informatika Nusantara” 6, no. 6 (2025): 670–78, https://doi.org/10.47065/tin.v6i6.8662. [↑](#footnote-ref-37)
38. Pelaksanaan Pembelajaran et al., “Metode Decision Tree Untuk Meningkatkan Kualitas Rencana” 6, no. 3 (2022): 510–19. [↑](#footnote-ref-38)
39. Dini Destiani, Siti Fatimah, and Elita Rahmawati, “Penggunaan Metode Decision Tree Dalam Rancang Bangun Sistem Prediksi Untuk Kelulusan Mahasiswa,” n.d., (2021): 553–61. [↑](#footnote-ref-39)
40. Teddy Yogi Pratama, “Decision Tree C4 . 5 Dengan Teknik Information Gain Untuk Klasifikasi Pemilihan Program Studi Tingkat Lanjut” 5, no. 4 (2024): 1042–52, https://doi.org/10.47065/josh.v5i4.5643. [↑](#footnote-ref-40)
41. Menggunakan Php and D A N Mysql, “FST PSU Bekasi” 6, no. 1 (2021): 12–16. [↑](#footnote-ref-41)
42. Muhamad Rizky and Yuni Sugiarti, “Pengunaan Metode Scrum Dalam Pengembangan Perangkat Lunak : Literature Review” 3, no. 1 (2022): 41–48. [↑](#footnote-ref-42)
43. Sistem Informasi and Pencatatan Magang, “Penerapan Metode Scrum Pada Pengembangan Sistem Informasi Pencatatan Magang” 7, no. 1 (2024): 34–44. [↑](#footnote-ref-43)