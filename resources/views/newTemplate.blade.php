<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="border-0 m-0 dark:bg-gray-800 bg-red-200">

    <div class="bg-[#C9777D] p-[1px]">
        <div class="max-w-[1100px] my-2 mx-auto">
            <div class="sm:flex justify-between">
                <div class="flex gap-2">
                    <a class="text-white rounded-full" href="">
                        @include("/icons/facebook")
                    </a>
                    <a class="text-white bg" href="">
                        @include("/icons/instagram")
                    </a>
                    <a class="text-white bg" href="">
                        @include("/icons/tiktok")
                    </a>
                </div>
                <div class="flex gap-4">
                    <a class="text-white cursor-pointer" href="">Mi cuenta</a>
                    <a class="text-white cursor-pointer" href="">Punto de venta</a>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1100px] my-2 mx-auto">
        <div class="flex justify-between items-center">
            <img src="{{asset('img/logo.png')}}" alt="">
            <div>
                <input class=" border-2 border-[#C9777D] rounded-full pt-[9px] pr-[0px] pb-[9px] pl-[20px]" type="text">
            </div>
        </div>
    </div>
</body>

</html