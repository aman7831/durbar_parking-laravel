@extends('layouts.app')

@section('content')
<br><br><br><br>
parking details

@if(!empty($reserves))
@foreach($reserves as $reserve)
{{$reserve->id}}
@endforeach
@endif
@endsection