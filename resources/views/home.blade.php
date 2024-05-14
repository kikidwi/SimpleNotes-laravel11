<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>My notes</title>
</head>
<body class="container mx-auto px-2 py-2 flex flex-col items-center">
    <header>
        <div>
            <h1 class="text-4xl font-bold text-left">
                My notes
            </h1>
        </div>
    </header>
    <div>
        <div class="flex flex-row">
            <div class=" mt-2 border-2 border-black rounded-lg w-44 h-auto">
                <div class="p-2">
                    <h2 class="text-3x1 font-bold">Lists</h2>
                </div>
                @foreach ($notes as $dataNote)
                    <div class="border-2 border-black rounded-lg p-1 max-w-50 m-1 overflow-hidden">
                        <p class="text-2x1 font-medium text-center">{{$dataNote->judul}}</p>
                    </div>
                @endforeach
            </div>
            <div class="container ml-2">
                <form id="noteForm" action="{{url('insertData')}}" method="post">
                    @csrf
                    <div class="flex flex-row">
                        <div class="col-span-full mr-2">
                            <div class="mt-2">
                                <input type="text" name="judulNotes"  class="border-2 border-black rounded-md w-[650px] pl-2">
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" id="showModalButton" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="rounded-md bg-white px-[110px] py-3 text-sm font-semibold text-gray-900 shadow-sm ring-2 ring-inset ring-black hover:bg-[#D9D9D9]">SAVE</button>
                        </div>
                        <x-Alert></x-Alert>
                    </div>
                    <div class="col-span-full">
                        <div class="mt-2">
                        <textarea id="about" name="isiNotes" rows="3" class="block rounded-md border-2 border-black w-[914px] pl-2 h-auto"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
