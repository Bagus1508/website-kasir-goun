@extends('layouts.app')

@section('content')
    <section id="card-dashboard" class="">
        <div class="flex gap-[20px]">
            <div class="bg-[#7D51FC] text-white w-[269px] px-[24px] py-[24px] rounded-[10px]">
                <div class="text-[16px] font-semibold pb-[12px]">
                    Jumlah Barang
                </div>
                <div class="text-[14px]">
                    12 Barang
                </div>
            </div>
            <div class="bg-[#FC51A3] text-white w-[269px] px-[24px] py-[24px] rounded-[10px]">
                <div class="text-[16px] font-semibold pb-[12px]">
                    Jumlah Transaksi
                </div>
                <div class="text-[14px]">
                    12 Transaksi
                </div>
            </div>
        </div>
    </section>
@endsection