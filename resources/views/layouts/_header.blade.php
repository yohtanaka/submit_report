@php
$user = Auth::user();
@endphp
<a href="/">
  <h1 class="left">システム</h1>
</a>
@if($user)
	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
	<form id="logout-form" action="{{ route('logout') }}" method="POST">
		@csrf
	</form>
	<a href="">
	@if($user)
		こんにちは！{{$user->name}}さん
	@endif
	</a>
@else
	<a href="{{ route('login') }}">ログイン</a>
	<a href="{{ route('register') }}">新規登録</a>
@endif
