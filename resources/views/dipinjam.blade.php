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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
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
    <title>Daftar Buku Yang Dipinjam</title>
</head>
<body>
    <div class="flex ">
        <div class="w-[70%] mx-auto mt-20">
            <h2 class="text-4xl font-bold text-center ">Daftar Buku Yang Dipinjam</h2>
            <div class="flex justify-between items-center mt-16">
                <form action="/buku_dipinjam" method="GET">
                    <input type="search"  name="cari2" class="border border-black p-2 rounded-full bg-gray-200 text-black placeholder:text-gray-500 focus:outline-none w-60 " placeholder="Search">
                </form>
            </div>
            <div class="bg-gray-200 py-1 px-2 mt-10  rounded-md h-[35rem]">
                <table class="table-auto text-center font-semibold text-xl w-full  ">
                    <tr class="border-b-2 border-black">
                        <th class="w-1/7">Nama</th>
                        <th class="w-2/7 p-2">Judul Buku</th>
                        <th class="w-1/7 p-2">Email</th>
                        <th class="w-1/7">Tanggal pinjam</th>
                        <th class="w-1/7">Tanggal kembali</th>
                        <th class="w-1/7">kode</th>
                        <th class="w-1/7">Aksi</th>
                    </tr>
                    @foreach ($data as $d)
                    <tr>
                        <td class="py-2">{{$d->nama}}</td>
                        <td>{{$d->JudulBuku}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->tglPinjam}}</td>
                        <td>{{$d->tglKembali}}</td>
                        <td>{{$d->kode}}</td>
                        <td><a href="#" class="hover:scale-105 del" data-id="{{$d->id}}"><i class="fa-solid fa-trash bg-red-500 text-white px-2 py-1 rounded-md text-2xl " ></i></a></td>
                    </tr>
                    @endforeach
                </table>
                {{$data->links()}}
                <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
                <script>
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
                                    window.location = "/"+delid+"/hapus"
                                }
                            });
                        });
                </script>
            </div>

            <a class="group bg-red-700 text-white px-3 py-2 absolute bottom-10 left-36 rounded-md" href="/"><i class="fa-solid fa-less-than fa-2x rotate-90 group-hover:rotate-0 transition-all duration-100 ease-in-out delay-75"></i></a>
        </div>
    </div>
</body>
</html>
