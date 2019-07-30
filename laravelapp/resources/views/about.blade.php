@extends('template')

@section('main')
<div id='siswa'>
  <h1>Data</h1>
   @if (!empty($siswa))
    <ul>
      @foreach ($siswa as $val)
        <li>{{$val}}</li>
      @endforeach
    </ul>
    @else
      <h3>No data</h3>
    @endif
</div>
@stop

@section('footer')
<div id='footer'>
  <p>&copy; 2016 Laravel</p>
</div>
@stop
