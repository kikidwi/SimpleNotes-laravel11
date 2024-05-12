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
                <div class="border-2 border-black rounded-lg p-1 max-w-50 m-1">
                    <p class="text-2x1 font-medium text-center">judul note</p>
                </div>
                <div class="border-2 border-black rounded-lg p-1 max-w-50 m-1">
                    <p class="text-2x1 font-medium text-center">judul note</p>
                </div>
            </div>
            <div class="container ml-2">
                <form action="{{url('insertData')}}" method="POST">
                    @csrf
                    <div class="flex flex-row">
                        <div class="col-span-full mr-2">
                            <div class="mt-2">
                                <input type="text" name="judulNotes"  class="border-2 border-black rounded-md w-[650px] pl-2">
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="rounded-md bg-white px-[110px] py-1 text-sm font-semibold text-gray-900 shadow-sm ring-2 ring-inset ring-black hover:bg-[#D9D9D9]">SAVE</button>
                        </div>
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
</body>
</html>
