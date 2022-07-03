Saya mengerjakan tugas ini, saya samakan dengan tutorial youtube dari Rollo Academy, yang saya rubah hanya nama data dan jenis-jenis isi data yang ada didalamnya. Ada beberapa kendala yang saya alami, seperti halnya dalam kurangnya penulisan codingan saya pada mahasiswa.controller pada baris ke 22, kurang penulisan saya yaitu except. dan pada saat create.blade.php saya banyak mengalami kekurangan pada penulisan, termasuk pada pemanggilan methode. Mungkin kendala saya hanya pada diri saya sendiri, karena kurang teliti dalam penulisan saya. 

LANGKAH-LANGKAH 

1. menginstall Laravel via composer penentukan tempat penyimpana projek yang akan di gunakan 
2. buka cmd jalankan perintah cretae-projek laravel, dan beri nama projek yang akan digunakan
3. saat di cmd, masuk pada folder yang telah kita buat
4. buka projek di visual studio code dengan menggunakan code editor di cmd buka .env di visual code dan ganti nama (nama database yang akan digunakan)
5. jalankan perintan di php artisan migrtate untuk membuktikan bahwa database yang kita gunakan sudah terhubung atau belum membuat migrationuntuk table baru, dengan menjalankan perintah php artisan make: migration create_mahasiswa_table
6. membuat file apa saja yang akan di buat pada dalam tabel baru tersebut seperti (nama data, nama seseorang, nim, jurusan, jenis kelamin, alamat)
7. buka cmd dan jalan kan php artisan migrate. untuk menentukan apakah sudah terbuat table baru yang kita inginkan 
8. pada table mahasiswa kita juga membuat model yang bernama mahasiswa  di cmd ketik php artisan make:model mahasiswa pada models ada table baru bernama mahasiswa 
9. buka visual code buat pada rautes wab.bhp ketik pada codingan routre:: get('mahasiswa',function()){ untuk meng handel pengolahan coding pada data mahasiswa perlu membuatkan mahasiswa.controller
10. buka cmd untuk membuat mahasiswa.controller pada visual code (php artisan make:controller mahasiswa.controler di visual code di folder app, http, mahasiswa.controller 
11. pada wab.php untuk menghendel wab.php kepada warga controller (route::get("/mahasiswa',[mahasiswa.Controller::clas,index]); mahasiswa.controller cidongan pada baris ke 5 harus mengimport terlebih dahulu(use App\Http\Controllers\mahasiswaController;)
pada warga.cobtroller barsi ke 9  (public function index(); 
12. untuk membaca data yang kita inginkan. bisa diisi secara manual pada localhost (phpmyadmin)
13. buka visual code buka pada halaman mahasiswa.controller pada baris 10 ketik untuk menemukan data yang telah kita gunakan ($mahasiswa = mahasiswa::all();) pada baris ke 12 di mahasiswa.controller (return view(mahasiswa('mahasiswa.index',compact(['mahasiswa'])))
14. buat folder baru di folder resources, view, buat nama folder (index.blade.php)
15. pada folde index.blade.php buat parameter <tableboreder="1"> <tr> <th> nama <th> <th> nim <th> <th> jurusan <th> <th> jenis kelami <th> <th> alamat <th> kalau data lebih dari 1 dapat di looping @foreach($mahasiswa as $w) <tr> <td>{{$w->id}}</td> <td>{{$w->nama}}</td> <td>{{$w->nim}}</td> <td>{{$w->jurusan}}</td> <td>{{$w->alamat}}</td>

