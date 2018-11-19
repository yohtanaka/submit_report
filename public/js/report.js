$(function() {
	$('#addShop').click(function() {
		$('.added').html(`
			<tr>
				<td>*. </td>
				<td><input type="text" name="shop"></td>
				<td><input type="text" name="shop"></td>
			</tr>
			<div class="added"></div>`
		);
	});
	$('#shop1').click(function() {
		console.log('lod');
		var addText = "★追記データ";
		// テキストボックスのデータを取得します
		var getData = String($(".cm-null").val());
		// 取得データと追記文言をくっつけて出力します
		$(".cm-null").val( getData + addText );
	});
});
