@extends('home')


@section('content')
<div class="">
    <h2 class="text-center w-full font-bold">Addition</h2>
<div>

  <x-form action="{{ route('makeAddition')}}" method='get' number1='$number1' number2='$number2' operation='Addition' ></x-form>

    
</div>
</div>

@endsection