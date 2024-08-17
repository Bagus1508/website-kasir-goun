@extends('layouts.base')

@section('base')

<body class="bg-[#5181FC] font-poppins">
    <section id="login" class="flex items-center justify-center min-h-screen">
        <div class="bg-white w-[416px] h-[612px] rounded-[20px] justify-center items-center mx-auto">
            <div class="p-[24px]">
                <div class="flex items-center justify-center">
                    <img src="src/img/logo-Goun.jpg" alt="Logo GoUN" class="w-[180px] h-[180px]">
                </div>
                <div class="py-[40px]">
                    <h5 class="text-[16px] font-semibold text-center pb-[8px]">Welcome Back</h5>
                    <h5 class="text-[16px] font-medium text-center">Penggawa Narotama</h5>
                </div>
                <div>
                    <form action="post">
                        <div class="pb-[32px]">
                            <input type="text" placeholder="Username" class="bg-[#F2F2F2] w-[368px] h-[60px] rounded-[10px] pl-[25px]">
                        </div>
                        <div>
                            <input type="password" placeholder="Password" class="bg-[#F2F2F2] w-[368px] h-[60px] rounded-[10px] pl-[25px]">
                        </div>
                    </form>
                </div>
                <div class="pt-[40px]">
                    <button type="submit" class="bg-blue-500 text-white font-semibold text-[14px] w-[368px] h-[60px] rounded-[20px] hover:bg-blue-600">Login</button>
                </div>
            </div>
        </div>
    </section>
</body>
    
@endsection