@extends('home')


@section('content')
<div class="">
    <h2 class="text-center w-full font-bold">Soustraction</h2>
</div>
<div>
  <x-form action="{{ route('makeSoustraction')}}" method='get' number1='$number1' number2='$number2' operation='Soustraction' ></x-form>

</div>

@endsection