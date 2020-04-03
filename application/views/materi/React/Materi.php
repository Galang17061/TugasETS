<h1>Kenapa React?</h1>

<h2>Komponen</h2>
<p>
	React menganggap setiap elemen UI sebagai komponen jadi bisa di analogikan sama dengan membuat lego yang artinya
	untuk membuat sebuah UI kita akan memasang component yang ada dan menggabungkanya agar menjadi sebuah website. Dan
	setiap komponen diharapkan hanya mempunyai satu tanggung jawab. Jika komponen tersebut berupa tombol maka tugasnya
	hanya bisa ditekan dan berteriak, “aku ditekan”. Oke. Boleh saja dia diam — itu hak asasi tombol.
	Jika komponen hanya mempunyai satu tanggung jawab, kita bisa memanfaatkan komponen berulang kali (reusable) dan bisa
	juga menggabungkan satu komponen dengan lainnya (composable).
</p>

<div class="line"></div>

<h2>One way data flow</h2>
<p>Setiap komponen kadang membutuhkan data, entah dari database aplikasi atau sumber data yang lain. Yang bertugas
	menggambil data adalah komponen paling atas atau komponen paling besar yang mengelola anak-anaknya.
	Analoginya, tugas membagikan data diserahkan kepada orang tua. Orang tua akan memberikan data kepada anaknya,
	kemudian tugas sang anak menampilkan data tersebut. Data baru bisa diminta oleh anak lewat event atau orang tua
	menyerahkan data baru kepada anak langsung. Sehingga sumber data hanya berasal dari satu pihak.
	Ketika anak mendapat data dari orang lain — misal formulir — , sang anak akan mengirim permintaan (aksi) kepada
	orang tua beserta data yang diterima tersebut, karena si anak tak tahu bagaimana data tersebut diolah. Kemudian
	orang tua memproses data tersebut dan mengirimkan respon dengan memberikan data baru kepada sang anak.</p>

<div class="line"></div>

<h2>JSX</h2>
<p>JSX adalah ekstensi JavaScript yang memungkinkan menulis sintaks mirip XML di dalam kode JavaScript. Jadi meskipun
	mirip HTML, pada akhirnya, JSX akan diubah ke JavaScript sebelum diproses.
	JSX memudahkan kita memindahkan HTML ke JavaScript. Dan perbedaan antara JSX dan HTML tak cukup rumit daripada
	membuat elemen React satu per satu dengan JavaScript.</p>

<div class="line"></div>
<h2>Virtual DOM</h2>
<p>Kenapa React menggunakan virtual DOM? JavaScript itu sebenarnya kenceng. Yang membuat JavaScript terasa lemot adalah
	ketika JavaScript mengolah DOM. React membuat virtual DOM untuk mempercepat urusan tersebut.
	React melakukan semua operasi di dalam virtual DOM. Setelah operasi tersebut selesai, React menulis perubahan
	tersebut di DOM.</p>
