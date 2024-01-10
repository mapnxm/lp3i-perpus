<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                lp3i: '#323266',
              }
            }
          }
        }
      </script>
    <title>Document</title>
</head>
<body>
    <div class="modal bg-white w-full h-screen flex justify-center items-center fixed top-0 left-0 backdrop-blur-2xl">
        <form  class=" fixed px-10 py-14 rounded-xl bg-black bg-opacity-80 " action="/{{$edit->id}}" method="POST">
          @method('put')
          @csrf
            <h2 class="font-bold text-2xl text-white mb-10 ">Form Edit Data Buku</h2>
            <input class="focus:outline-none placeholder:text-white text-white bg-transparent border-b-white border-b" autocomplete="off" placeholder="Judul" type="text" id="nama" name="nama" value="{{$edit->nama}}" required>
            <input class="focus:outline-none placeholder:text-white text-white  bg-transparent  mt-5 block border-b-white border-b" autocomplete="off" placeholder="Kode Buku" type="text" name="kode" value="{{$edit->kode}}" required>
            <input class="focus:outline-none placeholder:text-white text-white  bg-transparent  mt-5 border-b-white border-b" autocomplete="off" placeholder="Penulis" type="text" name="penulis" value="{{$edit->penulis}}" required>
            <select id="select" class="cursor-pointer block mt-5 rounded-md focus:outline-none p-1" name="status">
                <option>Status</option>
                <option value="1" <?php if($edit->status == "0"){echo "selected";}?> class="bg-red-200 text-red-500 font-semibold" >Dipinjam</option>
                <option value="0" <?php if($edit->status == "1"){echo "selected";}?> class="bg-green-200 text-green-500 font-semibold">Tersedia</option>
            </select>
            <div class="">
                <input type="submit" class="font-semibold mt-10 px-3 py-2 bg-gray-500 text-white rounded-xl transition duration-300 cursor-pointer hover:bg-green-600" value="Submit">
                <a href="/list_buku" class="ml-2 font-semibold mt-10 px-3 py-2 bg-red-200 text-red-600 rounded-xl transition duration-300 hover:bg-red-600 hover:text-white"><code><</code>Kembali</a>
            </div>

            <button class="close py-1 px-2.5 bg-gray-500 text-white rounded-full absolute top-5 right-5 hover:bg-red-600 "><i class="fa-solid fa-xmark"></i></button>
        </form>
    </div>
</body>
</html>
