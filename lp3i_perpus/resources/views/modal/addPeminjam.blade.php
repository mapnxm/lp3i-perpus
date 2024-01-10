<div class="modal invisible w-full h-screen flex justify-center items-center fixed top-0 left-0 backdrop-blur-2xl">
    <form  class=" fixed flex flex-col px-10 py-14 rounded-xl bg-lp3i bg-opacity-30" action="/kirim" method="POST">
        @csrf
        <h2 class="font-bold text-2xl text-white mb-10 ">Form Input Data Peminjam</h2>
        <input class="focus:outline-none placeholder:text-white text-white bg-transparent border-b-white border-b" autocomplete="off" placeholder="Nama" type="text" name="nama" id="nama" require>
        <input class="focus:outline-none placeholder:text-white text-white  bg-transparent  mt-5 block border-b-white border-b" autocomplete="off" placeholder="E-mail" type="email" name="email" id="email" require>
        <input class="focus:outline-none placeholder:text-white text-white  bg-transparent  my-5 block border-b-white border-b" autocomplete="off" placeholder="Tenggat" type="date" name="kembali" id="email" require >

        <select class="js-example-basic-single" name="kode" id="">
            <option value="0">Kode</option>
            @foreach($data as $s)
                @if($s->status == 1)
                <option value='{{$s->id}}' data-id="{{$s->status}}" class="a text-red-600 bg-red-300">{{$s->kode}} tersedia</option>
                @else
                <option value='{{$s->id}}' data-id="{{$s->status}}" class="a text-green-600 bg-green-300">{{$s->kode}} dipinjam</option>
                @endif
            @endforeach
        </select>

        <script>
            var stt = $(this).attr('data-id');
            // In your Javascript (external .js resource or <script> tag)
                $(document).ready(function() {
                    $('.js-example-basic-single').select2();
                    if (stt = 0) {
                        $('.a').style.color = "red";
                    } else{
                        $('.a').style.color = "green";
                    }
                });
        </script>

        <div class="">
            <input type="submit" class="block mt-10 px-3 py-2 bg-gray-500 cursor-pointer text-white rounded-xl hover:bg-green-600" value="Submit">
        </div>
        <a href="/" class="close group py-1 px-2.5 bg-gray-500 text-white rounded-full absolute top-5 right-5 hover:bg-red-600 "><i class="fa-solid fa-xmark rotate-0 transition duration-500 ease-in-out group-hover:-rotate-180"></i></a>
    </form>
</div>
