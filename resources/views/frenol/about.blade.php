@extends('master')
@extends('layouts.app')
@section('content')

<div class="sp-container">
  <div class="sp-content">
    @foreach($services as $service)
{{$service->description }}
<img src="Storage::url('/storage/app/{$service->image}')" alt="unable to load" />

    @endforeach
  </div>
</div>
@endsection