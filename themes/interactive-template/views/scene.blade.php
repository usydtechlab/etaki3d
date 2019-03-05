@extends('theme::index')

@section('title', $space_title)

@section('scene')

    <a-scene>

        @include('theme::assets')



        @foreach ($content['messages'] as $message)
		<a-text position="5 0 0" rotation="-48.314 0 0" color="#ffd536" value="{{ $message['message-text']['#value'] }}"width="3.63" 
				animation="property: position; to: 0 4 -4; dur: 8000; easing: linear" xOffset="0.02">
			</a-text>

  
        @endforeach


		<a-camera position="-0.2 1.6 1.615"></a-camera>
        <a-sky color="#000000"></a-sky>
    </a-scene>

@endsection
