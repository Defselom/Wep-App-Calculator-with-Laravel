@extends('home')


@section('content')
<div class="">
    <h2 class="text-center w-full font-bold">Division</h2>
<div>
  
<form action="{{ route('makeDivision')}}" method="get" class="max-w-sm mx-auto ">
    @csrf
    <div class="mb-5">
      <label for="number1" class="block mb-2 text-sm font-medium text-black ">Nombre 1</label>
      <input type="text" id="number1" name="number1" value="{{ old('number1') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex: 12" required />
      @error('number1')
  <span class="text-red-500">{{ $message}}</span>
@enderror
    </div>
    <div class="flex justify-center items-center ]">    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-divide"><circle cx="12" cy="6" r="1"/><line x1="5" x2="19" y1="12" y2="12"/><circle cx="12" cy="18" r="1"/></svg>
    </div>
    <div class="mb-5">
        <label for="number2" class="block mb-2 text-sm font-medium text-black">Nombre 2</label>
        <input type="text" id="number2" name="number2" value="{{ old('number2') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex: 10" required />
        @error('number2')
  <span class="text-red-500">{{ $message }}</span>
@enderror
      </div>
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Calculer</button>
  </form>
  
</div>

@endsection