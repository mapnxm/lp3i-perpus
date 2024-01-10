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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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
    <title>Daftar Buku Perpustakaan</title>
</head>
<body>
    <div class="flex ">
        <div class="w-[70%] mx-auto mt-20">
            <h2 class="text-4xl font-bold text-center ">Daftar Buku Perpustakaan</h2>
            <div class="flex justify-between items-center mt-16">
                <form action="">
                    <input type="search" class="border border-black p-2 rounded-full bg-gray-200 text-black placeholder:text-gray-500 focus:outline-none w-60 " placeholder="Search">
                </form>
                <i class="fa-solid fa-folder-plus fa-3x text-lp3i cursor-pointer hover:scale-[1.2]" id="show-modal"></i>
            </div>
            <div class="bg-gray-200 py-1 px-2 mt-10  rounded-md h-[35rem]">
                <table class="table-auto text-center font-semibold text-xl w-full  ">
                    <tr class="border-b-2 border-black">
                        <th class="w-1/4 p-2">Judul Buku</th>
                        <th class="w-1/5">kode</th>
                        <th class="w-1/5">Penulis</th>
                        <th class="w-1/5">Status</th>
                        <th class="w-1/5">Aksi</th>
                    </tr>
                    @foreach ($buku as $b)
                    <tr>
                        <td class="py-4">{{$b->nama}}</td>
                        <td>{{$b->kode}}</td>
                        <td>{{$b->penulis}}</td>
                        <td>
                            @if ($b->status == "0")
                                <a href="#" class="text-red-500 p" data-id="{{$b->id}}" ><i class="fa-regular fa-circle "></i>di pinjam </a>
                            @else
                                <a href="#" class="text-green-700 p" data-id="{{$b->id}}"><i class="fa-regular fa-circle "></i>Tersedia</a>
                            @endif
                       </td>

                        <td>
                            <a href="#" class="bg-red-500 text-white px-2 py-1 rounded-md text-2xl hover:scale-105 del " data-id="{{$b->id}}"><i class="fa-solid fa-trash"></i></a>
                            <a href="{{$b->id}}/update" class="bg-yellow-400 text-white px-2 py-1 rounded-md ml-4 text-2xl hover:scale-150"><i class="fa-solid fa-pen"></i></a></td>
                    </tr>
                    <script type="text/javascript">
                        $('.p').click( function() {
                            var bukuid = $(this).attr('data-id');
                            Swal.fire({
                                title: "Apa kamu yakin?",
                                text: "Aksi ini dapat merubah status ",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Iya"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire({
                                        title: "Updated!",
                                        text: "Data sudah di update",
                                        icon: "success",
                                    });
                                    window.location = "/"+bukuid+"/ubah"
                                }
                            });
                        });
                        $('.del').click( function() {
                            var delid = $(this).attr('data-id');
                            Swal.fire({
                                title: "Apa kamu yakin?",
                                text: "Aksi ini dapat menghapus data",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Iya"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Data sudah di hapus",
                                        icon: "success",
                                    });
                                    window.location = "/"+delid+"/del"
                                }
                            });
                        });

                    </script>
                    @endforeach
                </table>
            </div>

            <a class="group bg-red-700 text-white px-3 py-2 absolute bottom-10 left-36 rounded-md" href="/"><i class="fa-solid fa-less-than fa-2x rotate-90 group-hover:rotate-0 transition-all duration-100 ease-in-out delay-75"></i></a>
        </div>
    </div>
    @include('modal.addBuku')

    <script>
        const modal = document.querySelector('.modal');
        const showModal = document.querySelector('#show-modal');
        const closeModal = document.querySelector('.close');

        const Edit = document.querySelector('.modalEdit');
        const showModalE = document.querySelector("#Edit");
        const closeModalE = document.querySelector('.closeEdit');

        showModal.addEventListener('click', function() {
            modal.classList.remove('invisible');
        });

        showModalE.addEventListener('click', function() {
            Edit.classList.remove('invisible');
        });
    </script>
</body>
</html>
