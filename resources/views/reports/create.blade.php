@extends('layouts.common')
@section('title', '日報作成')
@section('content')
<h1>日報作成</h1>
<form method="post">
	@csrf
	<table>
		<tr>
			<td>報告日</td>
			<td>
				<input type="number" name="year" value="{{ date('Y') }}">
				<input type="number" name="month" value="{{ date('m') }}">
				<input type="number" name="day" value="{{ date('d') }}">
			</td>
			<td>走行距離</td>
			<td>
				<input type="number" name="distance">
				<span>km</span>
			</td>
			<td>電車</td>
			<td>
				<input type="radio" name="" value="train">
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td></td>
			<td>店名</td>
			<td>面談者</td>
			<td></td>
		</tr>
		@for($i=1; $i<=8; $i++)
		<tr>
			<td>{{ $i }}. </td>
			<td><input type="text" name="shop" data-id="{{ $i }}"></td>
			<td><input type="text" name="staff"></td>
			<td><span id="shop{{ $i }}" data-id="shop{{ $i }}">詳細に追加</span></td>
		</tr>
		@endfor
	</table>
	<div class="added"></div>
	<p><a id="addShop" href="#">追加</a></p>
	<p>報告内容　(2画面表示・全画面表示を行った際はescで戻れます)</p>
	<textarea id="editor" name="body" rows="8" cols="40"></textarea>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
	<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
	<script>
		var simplemde = new SimpleMDE({ element: document.getElementById("editor") });
	</script>
	<p><button class="btn btn-primary">内容確認</button></p>
</form>
@endsection
