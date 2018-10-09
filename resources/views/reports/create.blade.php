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
		</tr>
		@for($i=1; $i<=8; $i++)
		<tr>
			<td>{{ $i }}. </td>
			<td><input type="text" name="shop"></td>
			<td><input type="text" name="shop"></td>
		</tr>
		@endfor
		<tr>
			<td><a id="addShop" href="#">追加</a></td>
		</tr>		
	</table>
</form>
@endsection
