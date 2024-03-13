@extends('home')


@section('content')
<div class="">
    <h2 class="text-center w-full font-bold">Division</h2>
</div>
<div>
  <x-form action="{{ route('makeDivision')}}" method='get' number1='$number1' number2='$number2' operation='Division' ></x-form>
  
</div>

@endsection