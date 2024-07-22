<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>UMN RadioActive 2023 | Login</title>
</head>

<body>
    <section class="bg-black h-screen relative">
        <img class="absolute inset-0 h-auto w-full lg:h-3/4 max-w-full max-h-full m-auto opacity-50" src="{{ asset("images/logo2024.png") }}"/>
        <div class="container mx-auto p-4">
            <form action="/login" method="POST">
                <div class="bg-opacity-75 flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4">
                    <div class="p-6 flex flex-col gap-4">
                        @csrf
                        <div class="relative w-full min-w-[200px] h-11">
                            <p class="font-ltmuseumbold text-xl">EMAIL</p>
                            <input name="email" type="email" placeholder="Email" class="font-ltmuseumbold mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1">
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mt-7">
                            <p class="font-ltmuseumbold text-xl">PASSWORD</p>
                            <input name="password" type="password" placeholder="Password" class="font-ltmuseumbold mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1">
                        </div>
                        <div class="relative w-full min-w-[200px] text-left mt-4">
                            <a class="text-blue-600 hover:text-blue-500 text-xs" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mb-3">
                            <button type="submit" class="bg-[#D61625] hover:bg-[#9B1625] text-white font-bold py-2 px-4 rounded-xl block w-full">Login</button>
                        </div>
                        <div class="relative w-full min-w-[200px]">
                            <a href="/signup" class="flex mt-3 justify-center text-blue-600 text-s hover:text-blue-500">Don't have an account yet? Register here!</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
