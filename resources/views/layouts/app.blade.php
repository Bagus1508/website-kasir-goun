@extends('layouts.base')

@section('base')
<body class="antialiased font-poppins m-[20px] bg-gray-200">
    <div class="">
        <div class="flex">
            @include('partials.sidebar')

            <main class="w-5/6">
                <section id="navbar" class="mb-[20px] shadow-md rounded-[10px]">
                    @include('partials.navbar')
                </section>

                <section id="body" class="bg-white min-h-screen rounded-[10px] shadow-md">
                    <div class="px-[40px] py-[40px]">
                        <div class="items-center">
                            <h1 class="font-semibold text-[28px] text-[#464646]">{{ $title ?? 'Data Kosong' }}</h1>
                            @yield('buttons')
                        </div>
        
                        <div class="py-4">
                            @yield('content')
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    @include('partials.scripts')

    @stack('scripts')
</body>

@endsection