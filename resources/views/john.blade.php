<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>John Page</title>
    <script src="http://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Card de apresentação do John -->
    <div class="w-screen h-screen flex justify-center items-center flex-col text-xl text-center">
        <div class="overflow-hidden shadow-lg sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="mt-4 font-semibold leading-6 text-gray-900">Hi, my name is {{ $john->nome }} </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Here you can find more about me</p>
            </div>
            <div class="border-t border-gray-200 flex flex-col justify-center items-center">
                <h1 class="mb-2 mt-2 text-sm font-medium text-gray-500 text-center">Access my personal pages!</h1>
                <div class="mb-4 mt-2 flex flex-row justify-center items-center gap-8">
                    <a href="{{ $john->linkedin }}" class="hover:scale-125 ease-out duration-300 text-center rounded-full bg-violet-400 px-2 py-2 shadow-sm hover:bg-violet-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <img src="{{asset('assets/images/linkedin.png')}}" width="30px" class="m-1">
                    </a>
                </div>
                <div class="mb-6 flex flex-row justify-center items-center gap-8">
                    <a href="{{ $john->github }}" class="hover:scale-125 ease-out duration-300 text-center rounded-full bg-violet-400 px-2 pb-2 pt-2.5 font-semibold text-white shadow-sm hover:bg-violet-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <img src="{{asset('assets/images/github.png')}}" width="30px" class="m-1">
                    </a>
                </div>
            
            </div>
        </div>
    </div>

</body>
</html>