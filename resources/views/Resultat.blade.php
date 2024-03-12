@extends('home')


@section('content')
<div class="">
    <h2 class="text-center w-full font-bold">Resultat</h2>
<div>
    <form  class="max-w-sm mx-auto ">
        <div class="mb-5">
          <label for="number1" class="block mb-2 text-sm font-medium text-black ">Nombre 1</label>
          <input type="text" id="number1" disabled value="{{ isset($number1) ? $number1 : 0 }}" name="number1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex: 12" required />
        </div>
        <div class="mb-5">
            <label for="number2" class="block mb-2 text-sm font-medium text-black">Nombre 2</label>
            <input type="text" id="number2" value="{{ isset($number2) ? $number2 : 0 }}" disabled name="number2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex: 10" required />
          </div>
          <div class="font-semibold">Operation : <span class="font-bold text-green-400">{{ isset($operation) ? $operation : "Pas d'operation effectue" }}</span></div>
          <div class="mb-5">
            <label for="resultat" class="block mb-2 text-sm font-medium text-black">Resultat</label>
            <input type="text" id="resultat" value="{{ isset($resultat) ? $resultat : 0 }}" disabled name="number2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex: 10" required />
          </div>
      <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{url(isset($operation) ? $operation : 'Home')}}">
        Retouner a la page de calcul</a>
      </form>
      
</div>

@endsection