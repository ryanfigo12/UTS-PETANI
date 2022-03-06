@extends('layout.template')
@section('title')

@section('content')
<font Size="5" face="Algerian">JAJAN BALI</font> <br> <br>
<div class="w-full mt-6" @data="{ openTab: 1 }">
    <div>
    <ul class="flex border-b">
            <li class="-mb-px mr-1" @click="openTab = 1">
                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Toko Berdiri</a>
    <div class="bg-white p-6">
        <div id="" class="" x-show="openTab === 1">
     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        </div>
        <li class="mr-1" @click="openTab = 3">
                <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Sejarah Jajan Bali</a>
            </li>
        <div id="" class="" x-show="openTab === 3">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, cumque sapiente? Molestias amet explicabo dolorum voluptate provident expedita, minus esse recusandae? Magni earum corrupti alias facilis repellat impedit minima consequuntur.</p>
        </div>  
    </div>
@endsection