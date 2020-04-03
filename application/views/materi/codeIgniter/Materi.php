<h1>Struktur Dasar Code Igniter</h1>
<p>
	<ul>
		<li>
			<p>
				Index.php: Index.php disini berfungsi sebagai file pertama dalam program yang akan dibaca oleh program.
			</p>
		</li>
		<li>
			<p>
				The Router: Router akan memeriksa HTTP request untuk menentukan hal apa yang harus dilakukan oleh
				program.
			</p>
		</li>
		<li>
			<p>
				Cache File: Apabila dalam program sudah terdapat “cache file” maka file tersebut akan langsung dikirim
				ke browser. File cache inilah yang dapat membuat sebuah website dapat di buka dengan lebih cepat. Cache
				file dapat melewati proses yang sebenarnya harus dilakukan oleh program codeigniter.
			</p>
		</li>
		<li>
			<p>
				Security: Sebelum file controller di load keseluruhan, HTTP request dan data yang disubmit oleh user
				akan disaring terlebih dahulu melalui fasilitas security yang dimiliki oleh codeigniter.
			</p>
		</li>
		<li>
			<p>
				Controller: Controller akan membuka file model, core libraries, helper dan semua resources yang
				dibutuhkan dalam program tersebut.
			</p>
		</li>
		<li>
			<p>
				View: Hal yang terakhir akan dilakukan adalah membaca semua program yang ada dalam view file dan
				mengirimkannya ke browser supaya dapat dilihat. Apabila file view sudah ada yang di “cache” maka file
				view baru yang belum ter-cache akan mengupdate file view yang sudah ada.
			</p>
		</li>
	</ul>
</p>
