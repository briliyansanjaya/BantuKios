<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory()->count(30)->create();

        //Kategori Food & Baverage
        Product::create([ //1
            'name' => 'Bakmi Tiga Marga - Bakmi Ayam',
            'CategoryID' => '1',
            'price' => 70000 ,
            'detail' => 'Bakmi premium produksi @bakmitigamarga Diproses dan dikemas secara higienis dengan bahan berkualitas. Tanpa pengawet , pewarna atau zat2 yg merugikan kesehatanDapat disimpan di lemari es pembeku hingga 3 bulan atau di kulkas pendingin hingga 5 hari. 1 pax isi 2 porsi. Mudah dan praktis untuk damasak, kapan saja, dimana saja.',
            'photo' => 'Bakmi Tiga Marga - Bakmi Ayam.jpg',
        ]);

        Product::create([ //2
            'name' => 'Picnic Beef Roll',
            'CategoryID' => '1',
            'price' => 165000 ,
            'detail' => 'Daging sapi segar yang berlapis dengan racikan saos krim istimewa dan sosis, lalu dibungkus dengan balutan kulit pastry. Dilengkapi dengan saos hollandise yang membuat paduan radanya menjadi sempurna.',
            'photo' => 'Picnic Beef Roll.jpg',
        ]);

        Product::create([ //3
            'name' => 'Nasi Uduk Ayam',
            'CategoryID' => '1',
            'price' => 44000 ,
            'detail' => 'Nasi Uduk dengan bihun goreng, tempe orek, bawang goreng dan pilihan topping ayam. Lengkap dengan sambal.Tidak menggunakan bahan pengawet.Disarankan untuk langsung dikonsumsi ketika produk diterima.',
            'photo' => 'Nasi Uduk Ayam.jpg',
        ]);

        Product::create([ //4
            'name' => 'Ikan Sambal Matah Sinar Pagi',
            'CategoryID' => '1',
            'price' => 64999,
            'detail' => 'IKAN SAMBAL MATAH SINAR PAGI Lauk Frozen dengan kemasan Vacuum. Terbuat dari Ikan Cobia (sejenis Tenggiri) yang berasal dari Perairan Bali.Memiliki ciri Segar, Bersih, Daging Putih dan Tebal. Dibumbui dg bumbu Sambal Matah Segar dari Bahan2 Premium Berkualitas dan Citarasa Khas Sinar Pagi.',
            'photo' => 'Ikan Sambal Matah Sinar Pagi.jpg',
        ]);

        Product::create([ //5
            'name' => 'Asinan Sayur Matraman Mama Epoy',
            'CategoryID' => '1',
            'price' => 36299,
            'detail' => '100% fresh&natural ingredients tanpa bahan pengawet dan pewarna, dapat disimpan 2 hari dengan suhu kulkas (yang direkomendasikan oleh Mama Epoy), lebih dari itu dapat mengurangi kualitas sayurnya✅lebih baik disajikan saat segar dan dingin✅kemasan siap santap (box+spork), Isi : Selada, Kol, Tahu, Wortel, tauge, ketimun, bumbu kacang dan kerupuk kuning-merah, ukuran M 1000ml 1-2 orang, ukuran L 1500ml 2-4 orang',
            'photo' => 'Asinan Sayur Matraman Mama Epoy.jpg',
        ]);

        Product::create([ //6
            'name' => 'Dimsum Mentai Personal Size - Aburi Kitchen',
            'CategoryID' => '1',
            'price' => 39000,
            'detail' => 'Homemade chicken dim sum topped with special mentai sauce by Aburi KitchenPersonal size isi 6 pcs',
            'photo' => 'Dimsum Mentai Personal Size - Aburi Kitchen.jpg',
        ]);

        Product::create([ //7
            'name' => 'Beef Truffle Steak Sandwich Cottonink Cafe',
            'CategoryID' => '1',
            'price' => 95000,
            'detail' => 'Wagyu Beef Steak slices with our Signature Truffle Sauce in fresh Butter Croissant. HALAL. Porsi sedang. Cocok untuk pilihan easy lunch/ to-go lunch.Croissant freshly made daily.',
            'photo' => 'Beef Truffle Steak Sandwich Cottonink Cafe.jpg',
        ]);

        Product::create([ //8
            'name' => 'LAUKITA AYAM RICA KEMANGI 175gr',
            'CategoryID' => '1',
            'price' => 62500,
            'detail' => 'Masakan Manado identik dengan bumbu dari aneka rempah yang membuat makanan selalu lezat. Ayam Rica Kemangi menjadi satu di antara hidangan nikmat khas Manado yang diminati dari banyak kalangan. Bumbunya meresap hingga daging bikin tiap gigitan jadi berarti, Ayam Rica Kemangi khas Manado ini jadi menu yang sayang kalau dilewatkan. Produk Laukita adalah FROZEN FOOD (makanan beku), sehingga semua pesanan akan dikirim dalam box dan dengan Ice Pack didalamnya.',
            'photo' => 'LAUKITA AYAM RICA KEMANGI 175gr.jpg',
        ]);

        Product::create([ //9
            'name' => 'Kebab Frozen Mini Premium 10 Pcs',
            'CategoryID' => '1',
            'price' => 30000,
            'detail' => 'kebab Frozen Ka Salma Frozen Food merupakan camilan beku yang terbuat dari tortilla crispy yang diisi daging kebab premium,saus dan mayonaise, dikemas dengan box food grade sehingga praktis di simpan dan mudah disajikan.',
            'photo' => 'Kebab Frozen Mini Premium 10 Pcs.jpg',
        ]);

        Product::create([ //10
            'name' => 'Kwetiau Goreng Pedas Dengan Daging Ayam',
            'CategoryID' => '1',
            'price' => 41452,
            'detail' => '[Kwetiaw Goreng Pedas Dengan Daging Ayam] Dibuat FRESH setiap hari setelah order masuk. Dikirim dalam kondisi siap dikonsumsi langsung.',
            'photo' => 'Kwetiau Goreng Pedas Dengan Daging Ayam.jpg',
        ]);

        Product::create([ //11
            'name' => 'Ayam Goreng Kuning (Frozen) - Dada',
            'CategoryID' => '1',
            'price' => 19000,
            'detail' => 'Ayam Goreng Kuning Frozen (belum matang) yang super enak, lezat, dan gurih.Terbuat dari ayam kampung pilihan. Dibuat 100% dari rempah-rempah pilihan. Tidak memakai pengawet, perisa/micin, dan pewarna',
            'photo' => 'Ayam Goreng Kuning (Frozen) - Dada.jpg',
        ]);

        Product::create([ //12
            'name' => 'B.T.S Burger',
            'CategoryID' => '1',
            'price' => 70000,
            'detail' => 'B.T.S Beet, Tomato, and Smoked BBQ Sauce Vegan Burger Patty with Bun with BBQ SauceMau coba makan sehat bingung mulainya gimana, cobain deh B.T.S Burger Cottonink Cafe. Plant based patty-nya terbuat dari campuran beet dan wortel. Porsinya tebal dan teksturnya mirip daging.',
            'photo' => 'B.T.S Burger.jpg',
        ]);

        Product::create([ //13
            'name' => 'Nasi Goreng Kambing Kebon Sirih',
            'CategoryID' => '1',
            'price' => 58000,
            'detail' => 'Nasi goreng berempah yang gurih, dipadu daging kambing yang empuk yang potongannya tidak pelit.bikin tidak kuat kalau cuma nyicip nyicip
            ',
            'photo' => 'Nasi Goreng Kambing Kebon Sirih.jpg',
        ]);

        Product::create([ //14
            'name' => 'Sate Padang Loka - Original',
            'CategoryID' => '1',
            'price' => 30000,
            'detail' => 'Siapa yang gak kenal Sate Padang?? Di Loka, Sate Padang jadi salah satu menu paling HITS! Rendah kolesterol, rendah lemak untuk yang berusaha makan sehatBahan : Jamur Champignon, Tahu Cina Putih, Cabe, Ketumbar, Lada, Kunyit, Jinten, Jahe, Lengkuas, Asam Kandis, Daun Jeruk, Daun Salam, Daun Kunyit, Sereh, Air, Bumbu Kari (Spesial: +lontong)',
            'photo' => 'Sate Padang Loka - Original.jpg',
        ]);

        Product::create([ //15
            'name' => 'Beef Lasagna Medium Size 380 ml',
            'CategoryID' => '1',
            'price' => 50000,
            'detail' => 'Terbuat dari bahan premium. Produk ini bisa jadi pilihan kamu untuk kirim hampers dan juga hidangan acara seperti arisan, acara kantor, ulang tahun, dll Produk kami selalu READY dan dibikin setelah kamu checkout. TIDAK PO jadi kamu pesan hari ini dikirim hari ini juga loh kecuali untuk PAGI HARI',
            'photo' => 'Beef Lasagna Medium Size 380 ml.jpg',
        ]);

        //Kategori Fashions & Accessories
        Product::create([
            'name' => 'LIBBY Stelan Oblong Cotton Rib Pendek',
            'CategoryID' => '2',
            'price' => 29668,
            'detail' => 'Stelan Oblong Cotton Libby Series Girl Motif Happy Farm , adalah oblong yg dibuat dari special cotton yg lembut dan mudah menyerap keringat anak. Terbuat dari single knit cotton rib, yg tipis namun tidak transparan sehingga membuat pemakainya nyaman saat menggunakannya.',
            'photo' => 'LIBBY Stelan.jpg',
        ]);

        Product::create([
            'name' => 'Mark Ryden MR8518 Crossbody Shoulder Bag',
            'CategoryID' => '2',
            'price' => 240000,
            'detail' => 'The single-shoulder backpack is made by superior oxford fabric, high toughness, wear-resistant and high density waterproof. Fashion leisure sport design, invisible anti-theft pocket, adjustable strap length, swivel fasteners fits multiple way to carrying, meets daily activities needs.',
            'photo' => 'Mark Ryden MR8518.jpg',
        ]);


        Product::create([
            'name' => 'Berrybenka Street - Jam Tangan Pria Canvas Casual Jody Webbing Watch',
            'CategoryID' => '2',
            'price' => 129000,
            'detail' => 'Bahan Tali Jody Watch: Canvas, Jere & Jorgie Watch: Synthetic Leather.Ukuran: Diameter : 3,5 cm, Panjang : 25cm. Perawatan: Untuk menjaga penampilan dan kondisi barang Lap noda dengan kain yang lembut Simpan dalam kotak dengan selika gel Untuk melaporkan issue mengenai produk / retur produk, harus menyertakan video unboxing produk dengan kondisi masih di segel sampai produk terlihat secara detail dengan pencahayaan yang jelas',
            'photo' => 'Jody Webbing Watch.jpg',
        ]);

        Product::create([
            'name' => 'ADA - Rachel Jacket Denim Two Pocket Side',
            'CategoryID' => '2',
            'price' => 199000,
            'detail' => 'Lingkar Dada x Lebar Bahu x Panjang Lengan x Panjang Baju, S : 100CM X 50CM X 56CM X 59CM, M : 104CM X 52CM X 57CM X 60CM, L : 112CM X 55CM X 58CM X 61CM, XL : 120CM X 57CM X 59CM X 62CM. CUCI DENGAN TANGAN SUHU DINGIN DENGAN YANG SEWARNA, JANGAN GUNAKAN PEMUTIH, GANTUNG SAAT JEMUR, SETRIKA SUHU RENDAH JIKA DIPERLUKAN, JANGAN SETRIKA BAGIAN DEKORASI',
            'photo' => 'ADA - Rachel Jacket Denim.jpg',
        ]);

        Product::create([
            'name' => 'Boo and Bit Giraffe Exclusive',
            'CategoryID' => '2',
            'price' => 76500,
            'detail' => 'Sepatu dari Boo and Bit dapat dipakai untuk belajar jalan didalam ruangan karena alas terbuat dari kulit sintetis yang kesat (Anti Selip). Sepatu terbuat dari bahan yang berkualitas, Boo and Bit mengutamakan bahan yang bersifat ringan dan lentur sehingga tidak membebani kaki bayi saat dipakai dan belajar jalan.Bahan dalam dari sepatu Boo and Bit terbuat dari kaos sehingga dapat menyerap keringat dan bersifat hangat sehingga dapat melindungi kaki bayi dari hawa dingin seperti di Mall dan luar ruangan.',
            'photo' => 'Boo and Bit Giraffe.jpg',
        ]);

        Product::create([
            'name' => 'Jas Hujan Hoodie Anak Balita Raincoat',
            'CategoryID' => '2',
            'price' => 22500,
            'detail' => 'Barang kami selalu ready stok. Bisa dibeli berarti ada, langsung saja diorder. Kl ada yang kosong nanti dikonfirmasi/refund. Cek stok dan harga di menu variasi ya. Biasakan baca deskripsi sblm bertanya. Pesanan diproses berdasarkan variasi yg dipilih. Tidak melayani pilih variasi melalui chat maupun keterangan.',
            'photo' => 'Jas Hujan Hoodie Anak Balita.jpg',
        ]);

        Product::create([
            'name' => 'NONA RARA-Adamite PART of Newtro T1359',
            'CategoryID' => '2',
            'price' => 285000,
            'detail' => 'PART of Newtro. Koleksi PART kali ini ingin menampilkan kombinasi manis dan trendy antara perca batik dan kain monokromatik. Tema newtro (new retro) dipilih untuk merepresentasikan gerakan yang merelevankan unsur tradisional dengan gaya hidup modern. PART of Newtro kali ini ingin lebih memperkenalkan sentuhan karya tradisional seperti batik pada busana modern. Say good bye to a plain daily look, say hello to PART of Newtro!',
            'photo' => 'NONA RARA-Adamite.jpg',
        ]);

        Product::create([
            'name' => 'Tas Ransel Smiggle',
            'CategoryID' => '2',
            'price' => 320000,
            'detail' => 'Ini semua bukan ori ya, tp KW super2 bisa cek di ulasan kami juga ga kecewa deh kw super di toko kami uda yg bener2 sama seperti beli ori nya ada plastik bag smiggle seperti beli di storenya dan SMIGGLE ORIGINAL kami juga ada ya yg sletingny ada tulisan YKK nya untuk smiggle ORIGINAL : Astronot 2, game black gold, Panda polkadot, Dino Army, Little leopard, Mickey dan seri AFL',
            'photo' => 'Tas Ransel Smiggle.jpg',
        ]);

        Product::create([
            'name' => 'PAULMAY - Sepatu Sneakers Pria Lisbon High',
            'CategoryID' => '2',
            'price' => 245000,
            'detail' => 'Tenang Kami berikan garansi untuk itu semua, Jika tidak suka dengan barang yang kamu terima akan kami berikan refund, jika kebesaran / kekecilan juga bisa ditukar dan jika barang rusak dalam 90 hari akan kami ganti dengan yang baru. Kami akan berikan yang terbaik untuk anda :)',
            'photo' => 'PAULMAY.jpg',
        ]);

        Product::create([
            'name' => 'SMARTWATCH KIDS WATERPROOF',
            'CategoryID' => '2',
            'price' => 185000,
            'detail' => 'Fungsi: panggilan jelas / penentuan posisi yang tepat / masa pakai baterai yang lama / tubuh ultra-tipis / pakaian dingin. 14.1mm desain proses ultra-tipis, sama tipisnya dengan pekerjaan rumah. Suara lebih keras dan dapat didengar di lingkungan yang bising. Desain antena unik, banyak kalibrasi untuk memastikan panggilan stabil. Pengoperasian yang lebih sederhana dan suara yang lebih jelas, Obrolan grup mudah, obrolan grup dukungan dengan beberapa ponsel.',
            'photo' => 'SMARTWATCH KIDS Y95.jpg',
        ]);

        Product::create([
            'name' => 'Kaos Polos Katun Combed Hijau Army Premium',
            'CategoryID' => '2',
            'price' => 59900,
            'detail' => 'Bahan Cotton Combed 30s, Premium T-Shirt, Kualitas Bahan Import 100%. S 46 x 67, M 49 x 69, L. 51 x 71, XL. 53 x 73, XXL. 57 x 75, 3XL. 61 x 77 Harga blm termasuk ongkir! Manfaatkan FREESHIPPING/GRATIS ONGKIR DAN COD dari toko. Special Noted : Akan terjadi perbedaan 1-2cm pada size chart karena proses pengerjaan produksi massal',
            'photo' => 'Kaos Polos Katun.jpg',
        ]);

        Product::create([
            'name' => 'Sharkwin Sandal Flat Wanita Anti Slip Flip Flops Slippers',
            'CategoryID' => '2',
            'price' => 26000,
            'detail' => 'Selain kualitas yang baik, tangguh dan awet, Sandal Wanita yang akan membuat aktivitas dan gaya kamu semakin tampil menarik , Sandal Sharkwin dengan desain simple ,modern dan trendy, Sandal ini memiliki insole yang akan membuat kaki kamu nyaman karena memiliki bahan yang pas dan nyaman di telapak kaki nya ',
            'photo' => 'Sharkwin Sandal Flat Wanita.jpg',
        ]);

        Product::create([
            'name' => 'KAOS POLOS KATUN COMBED PREMIUM',
            'CategoryID' => '2',
            'price' => 44900,
            'detail' => 'Bahan 100% Cotton, serat lebih halus, NYAMAN dan TIDAK PANAS saat dipakai. Bahan Kaos Cotton Combed ini murni menggunakan bahan katun saja tanpa dicampur dengan bahan-bahan sintetis seperti Polyester sehingga tidak memiliki campuran senyawa kimia di dalamnya. Model jahitan rantai membuat kaos lebih awet.',
            'photo' => 'KAOS POLOS KATUN COMBED PREMIUM.jpg',
        ]);

        Product::create([
            'name' => 'En-ji Nara Slingbag - Khaki',
            'CategoryID' => '2',
            'price' => 149250,
            'detail' => 'Hadir dengan motif gingham dengan aksen logo aksesoris dilengkapi tali panjang dan tali rantai .Yang cocok untuk dibawa hangout ,bisa muat handphone makin buat tampilan kamu jadi tambah chic!!! Ukuran: P: 19.5 cm x L: 4 cm x T: 11.5 cm. Untuk pengemasan yang lebih aman sangat disarankan untuk order box atau bubble tambahan agar tidak terjadi kerusakan pada produk.',
            'photo' => 'En-ji Nara Slingbag.jpg',
        ]);

        Product::create([
            'name' => 'This Is April Celana Panjang Wanita Taylie Pants Sage',
            'CategoryID' => '2',
            'price' => 207200,
            'detail' => 'Celana panjang kulot bahan cotton dengan detail kancing besar di bagian depan ( aksen ), Terdapat reselting di sisi kanan samping ( setengah ) karet di bagian pingang belakang dan juga kantong di sisi kanan dan kiri, di padukan dengan atasan kemeja dan sepatu flat shoes cocok di gunakan untuk kerja atau kegiatan formal.
            ',
            'photo' => 'This Is April Celana Panjang.jpg',
        ]);


        //Kategori Home Decor & Craft
        Product::create([ //1
            'name' => 'Lonceng Angin Bambu Kecil / Windchime - Polos 30cm',
            'CategoryID' => '3',
            'price' => 35077,
            'detail' => 'Cocok di pajang depan rumah/teras atau sebagai dekorasi rumah. Lonceng angin bambu menghasilkan suara unik bambu menambah rasa nyaman khas pedesaan.Suara dan nada-nada yang dihasilkan oleh lonceng bambu yang bergoyang pelan, juga hembusan angin yang bertiup sejuk, pastinya akan membuatmu berasa rileks',
            'photo' => 'Lonceng Angin Bambu Kecil.jpg',
        ]);

        Product::create([ //2
            'name' => 'Lukisan dinding kanvas besar ikan koi asli tangan',
            'CategoryID' => '3',
            'price' => 90000,
            'detail' => 'cara pengepakan toko ini beda dr yang lain, kami bungkus lukisanya dengan plastik lalu di roll menggunakam kones atau paralon. kelebihan dengan cara roll ini membuat lukisan tidak mengkerut dan tidak lupa buble warp juga lakban pastinya juragan',
            'photo' => 'lukisan dinding kanvas.jpg',
        ]);

        Product::create([ //3
            'name' => 'WP Project Hiasan dekorasi pajangan dinding kayu',
            'CategoryID' => '3',
            'price' => 44900,
            'detail' => 'Bahan kayu plywood tebal 3mmfinishing pernis waterbased (tidak bau) Ukuran 30x30cm Cutting rapi dan presisi krn menggunakan mesin laser.',
            'photo' => 'WP Project Hiasan dekorasi pajangan dinding kayu.jpg',
        ]);

        Product::create([ //4
            'name' => 'Patung kayu kepala Kuda kerajinan tangan hiasan dekorasi handmade bali ',
            'CategoryID' => '3',
            'price' => 24000,
            'detail' => 'Harga untuk 1pcs, Kerajinan tangan Patung ukiran kayu handmade,ukuran bisa saja kurang atau lebih,tidak selalu pas, Motif kepala Kuda, bahan kayu finishing natural coklat,',
            'photo' => 'Patung kayu kepala Kuda.jpg',
        ]);

        Product::create([ //5
            'name' => 'POT BUNGA SUDUT ROTAN GUCI ARTIFICIAL DEKORASI',
            'CategoryID' => '3',
            'price' => 192000,
            'detail' => 'Harga 1 pot saja, tidak termasuk bunga nya
            Bahan rangka besi, dan rotan sintetis, awet bisa di cuci, tidak luntur, tahan panas dingin. Cocok dan manis sekali buat ditaruh di sudut ruangan mempermanis ruangan anda, bisa buat property foto untuk online shop anda. Foto dengan bunga hanyalah contoh pemakaian saja. warna tersedia : Putih, Coklat tua, dan Krem. tuliskan warna pilihan di note ya. jika tidak ada ket maka dikriimkan random. Bahan besi dan rotan sintetis, awet tahan lama, bisa dicuci, bisa dijemur, tidak lapuk, tidak dimakan rayap. Barang akan dicheck dan dikirim dalam kondisi bagus,, tidak ada yang cacat.',
            'photo' => 'POT BUNGA SUDUT ROTAN.jpg',
        ]);

        Product::create([ //6
            'name' => 'Cermin Rotan Lilitan Natural LusioSB Rattan Mirror Hiasan Dinding',
            'CategoryID' => '3',
            'price' => 147500,
            'detail' => 'Produk-produk rotan kami adalah 100% hasil karya kerajinan tangan orang-orang Indonesia, sehingga apabila ada sedikit perbedaan di produk kami, itu dikarenakan semua barang kami dibuat melalui proses buatan tangan.',
            'photo' => 'Cermin Rotan Lilitan Natural.jpg',
        ]);

        Product::create([ //7
            'name' => 'Artificial Flower Robella Daisy Bunga Palsu Plastik Buatan Dekorasi',
            'CategoryID' => '3',
            'price' => 17970,
            'detail' => ' Bahan : Terbuat Dari Plastik dan Kawat bisa di bentuk sesuai keinginan, Ukuran : Tinggi -+40cm, Warna : White/ Maroon/ Hot Pink/ Light Pink/ Cameo Pink/ Peach, Harga : Untuk 1 tangkai, Kegunaan : Dekorasi pernikahan, rumah, cafe, restoran, buket bunga, dll, Awet : Tahunan bahkan selamanya dengan perawatan yang benar, Info : Impor, ready stock, foto asli, GRATIS packing, Min ongkir : 1kg muat 25 tangkai.',
            'photo' => 'Artificial Flower.jpg',
        ]);

        Product::create([ //8
            'name' => 'Kursi Cafe Ropan Kayu Jati - Kursi Makan Ropan Jati - Non Finishing',
            'CategoryID' => '3',
            'price' => 170000,
            'detail' => 'Kursi Cafe Ropan KayuJati Untuk warna, silahkan pilih varian: , Non finishing/ mentahan , Sudah finishing , Mix 2 warna , Dengan jok/ busa dudukan Spesifikasi Produk : , Dimensi : 45x45x45x80 cm  , Ukuran sampai sandaran 80 cm, dari lantai hingga dudukan 45 cm , Material : kayu jati perhutani',
            'photo' => 'Kursi Cafe Ropan Kayu Jati - Kursi Makan Ropan Jati - Non Finishing.jpg',
        ]);

        Product::create([ //9
            'name' => 'BOLLE Mangkok Kayu',
            'CategoryID' => '3',
            'price' => 65000,
            'detail' => 'BOLLE Mangkok Kayu Jati 12cm 15cm 17cm 20cm / Wooden Bowl Mangkuk Kayu, Semua produk dibuat dari kayu alami, maka serat dan warna akan bervariasi; tidak bisa 100% sama dengan foto, Produk kami dibuat manual (handmade) oleh pengrajin kami, maka kemungkinan akan ada perbedaan ukuran kurang lebih 1cm.',
            'photo' => 'BOLLE Mangkok Kayu.jpg',
        ]);

        Product::create([ //10
            'name' => 'Sutil Kuda Besar Kayu Jati Coklat',
            'CategoryID' => '3',
            'price' => 17000,
            'detail' => 'Deskripsi Sutil Mini Kayu Jati Coklat
            Rajawali adalah perusahaan yang sudah 20 tahun lebih menjalani usaha peralatan dapur dan sudah dikenal di seluruh Indonesia. Semua produk kamai terbuat dari bahan alami dan dikerjakan oleh pengrajin lokal yang sudah tidak diragukan kemampuannya. Semua bahan yg dihasilkan berkualitas baik dengan bahan dasar dari seperti: kayu Jati, jati emas, sono, aren, glugu, pinus, bambu, batok kelapa, akasia, mindi, batu dan sebagainya.',
            'photo' => 'Sutil Kuda Besar Kayu Jati Coklat.jpg',
        ]);

        Product::create([ //11
            'name' => 'Wins Rak Kayu/ Lemari Serbaguna / Buku / Baju',
            'CategoryID' => '3',
            'price' => 73500,
            'detail' => 'Rak Serbaguna ini sangat cocok melengkapi sudut ruangan rumah, bisa dijadikan rak baju, rak buku, rak peralatan, rak mainan, rak pajangan, dan berbagai fungsi lainnya sesuai kebutuhan anda.',
            'photo' => 'Wins Rak Kayu.jpg',
        ]);

        Product::create([ //12
            'name' => 'Vas Pot Bunga Tanaman Plastik / Guci Pajangan / Pot Dekorasi',
            'CategoryID' => '3',
            'price' => 11499,
            'detail' => 'Vas Pot Bunga Tanaman Plastik / Guci Pajangan / Pot Dekorasi Rumah Minimalis Gaya Nordic, Vas gaya nordic tiga dimensi, membuat vas kelihatan lebih unik, Bahan berkualitas tinggi, tidak pecah karena terbuat dari plastik, Cocok untuk meja makan / ruang tamu / kantor dll.',
            'photo' => 'Vas Pot Bunga Tanaman Plastik.jpg',
        ]);

        Product::create([ //13
            'name' => 'MARBLE HANDCRAFT Black MARBLE TRAY Tatakan Marmer Tray marmer',
            'CategoryID' => '3',
            'price' => 72750,
            'detail' => 'material= batu alam gunung jawa jawatimur berkualitas mitrabatu, Meskipun Kami PRODKSI SENDIRI product-product yang Kami Jual , Jangan samakan product Kami dengan Toko SEBELAH, yang MENJUAL BARANG MURAHAN /, REJECT Q.C / OBRALAN ,,Karena dari Tingkat BAHAN BAKU,Dan Finishing Product Kami Sudah BERBEDA Dengan product MURAHAN (ASAL-ASALAN MATERIAL BAHAN BAKU BATU dan FINISHINGPRODUCT YANG TIDAK RAPI',
            'photo' => 'MARBLE HANDCRAFT Black MARBLE TRAY Tatakan Marmer Tray marmer.jpg',
        ]);

        Product::create([ //14
            'name' => 'Sedotan bambu asli Go Green asli lokal handcrafted',
            'CategoryID' => '3',
            'price' => 2000,
            'detail' => 'Bisa digunakan sehari2 supaya lebih nikmat, atapun untuk aksesoris photo pastinya aesthetic!Bahan awet dan tahan terdepat 2 varian : Panjang 22cm, Panjang 14cm',
            'photo' => 'Sedotan bambu asli Go Green asli lokal handcrafted.jpg',
        ]);

        Product::create([ //15
            'name' => 'Costum top table kayu jati',
            'CategoryID' => '3',
            'price' => 1099000,
            'detail' => 'produk : Daun meja (belum kaki), bahan : kayu jati, ukuran : 150 x 60 x 3 cm Lebar L (40cm x 40cm), finishing : natural. Packing Bubble Wrap Demi menghindari dampak kerusakan selama proses pengiriman oleh kurir mohon memasukkan packing tambahan bubble wrap pada keranjang belanja Anda. Diproduksi dengan bahan kayu jati tua, Papan jati, Finishing politur wood (bukan politur kuning). Jadi tampak natural dan tidak mudah lecet.',
            'photo' => 'Costum top table kayu jati.jpg',
        ]);
    }
}
