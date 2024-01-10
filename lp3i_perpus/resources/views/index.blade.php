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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
    <title>Sistem Perpustakaan || LP3I</title>
</head>
<body
class="font-monserat">
<div class="flex flex-col justify-center items-center gap-20">
    <h1 class="text-4xl font-bold mt-20">Menu Admin Perpus LP3I Malang</h1>
    <div class="flex gap-10">
        <button class="show">
            <div class="bg-lp3i w-64 h-96 flex flex-col justify-center items-center gap-10 rounded-xl hover:scale-95 transition duration-500">
                <i class="fa-solid fa-book-medical fa-6x text-white "></i>
                <p class="text-white text-2xl w-28 text-center font-semibold">Input Data Peminjam</p>
            </div>
        </button>
        <a class="" href="list_buku">
            <div class="bg-lp3i w-64 h-96 flex flex-col justify-center items-center gap-10 rounded-xl hover:scale-95 transition duration-500">
                <i class="fa-solid fa-list-ul fa-6x text-white"></i>
                <p class="text-white text-2xl w-30 text-center font-semibold">Daftar Buku Perpustakaan</p>
            </div>
        </a>
        <a class="" href="buku_dipinjam">
            <div class="bg-lp3i w-64 h-96 flex flex-col justify-center items-center gap-10 rounded-xl hover:scale-95 transition duration-500">
                <i class="fa-solid fa-book fa-6x text-white"></i>
                <p class="text-white text-2xl w-28 text-center font-semibold">Daftar Buku Dipinjam</p>
            </div>
        </a>
    </div>
</div>
@include('modal.addPeminjam')
<script>
    const modal = document.querySelector('.modal');
    const showModal = document.querySelector('.show');
    const closeModal = document.querySelector('.close');

    showModal.addEventListener('click', function() {
        modal.classList.remove('invisible');
    });
</script>
</body>
</html>
