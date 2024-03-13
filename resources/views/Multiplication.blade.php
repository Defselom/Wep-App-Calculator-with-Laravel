@extends('home')


@section('content')
<div class="">
    <h2 class="text-center w-full font-bold">Multiplication</h2>
</div>
<div>
  <x-form action="{{ route('makeMultiplication')}}" method='get' number1='$number1' number2='$number2' operation='Multiplication' ></x-form>

</div>

@endsection