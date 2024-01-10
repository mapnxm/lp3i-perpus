<div class="modal invisible w-full h-screen flex justify-center items-center fixed top-0 left-0 backdrop-blur-2xl">
    <form  class=" fixed px-10 py-14 rounded-xl bg-lp3i bg-opacity-30" action="/store" method="POST">
        @csrf
        <h2 class="font-bold text-2xl text-white mb-10 ">Form Input Data Buku</h2>
        <input class="focus:outline-none placeholder:text-white text-white bg-transparent border-b-white border-b" autocomplete="off" placeholder="Judul buku" type="text" id="nama" name="JudulBuku" required>
        <input class="focus:outline-none placeholder:text-white text-white  bg-transparent  mt-5 block border-b-white border-b" autocomplete="off" placeholder="Kode" type="text" name="kode" id="email" required>
        <input class="focus:outline-none placeholder:text-white text-white  bg-transparent  block mt-5  border-b-white border-b" autocomplete="off" placeholder="penulis" type="text" name="penulis" id="penulis" required>
        <select class="mt-5 rounded-lg" name="" id="">
            <option value="">Status</option>
            <option class="bg-red-500 text-white" value="0">di pinjam</option>
            <option class="bg-green-500 text-white" value="1">Tersedia</option>
        </select>

        <input type="submit" class="block mt-5 px-3 py-2 bg-gray-500 cursor-pointer text-white rounded-xl hover:bg-green-600" value="Submit">
        <a href="/list_buku" class="close group py-1 px-2.5 bg-gray-500 text-white rounded-full absolute top-5 right-5 group-hover:bg-red-600 "><i class="fa-solid fa-xmark rotate-0 transition duration-500 ease-in-out group-hover:-rotate-180"></i></a>
    </form>
</div>
