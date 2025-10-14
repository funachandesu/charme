		<p class="txt txt-form">下記の必要項目を入力して、「確認画面へ進む」ボタンをクリックしてください。</p>

		<form action="<?php echo esc_url(get_permalink(5)); ?>" method="post">
			<dl>
				<dt><div class="contact-item">お名前<span class="required">*</span></div></dt>
				<dd>
					<input type="text" name="fullname" value="<?php if (array_key_exists('fullname', $_POST)) echo esc_h($_POST['fullname']); ?>" class="box-input box-large">
					<?php if (array_key_exists('fullname', $arr_err)) echo $arr_err['fullname']; ?>
				</dd>
				<dt><div class="contact-item">生年月日<span class="required">*</span></div></dt>
				<dd>
					<input type="text" name="birthday" value="<?php if (array_key_exists('birthday', $_POST)) echo esc_h($_POST['birthday']); ?>" class="box-input box-small">
					<?php if (array_key_exists('birthday', $arr_err)) echo $arr_err['birthday']; ?>
				</dd>				<dt><div class="contact-item">電話番号<span class="required">*</span></div></dt>
				<dd>
					<input type="text" name="telnum-before" value="<?php if (array_key_exists('telnum-before', $_POST)) echo esc_h($_POST['telnum-before']); ?>" class="box-input box-small">
					<?php if (array_key_exists('telnum-before', $arr_err)) echo $arr_err['telnum-before']; ?> -
                    <input type="text" name="telnum-middle" value="<?php if (array_key_exists('telnum-middle', $_POST)) echo esc_h($_POST['telnum-middle']); ?>" class="box-input box-small">
					<?php if (array_key_exists('telnum-middle', $arr_err)) echo $arr_err['telnum-middle']; ?> -
                    <input type="text" name="telnum-after" value="<?php if (array_key_exists('telnum-after', $_POST)) echo esc_h($_POST['telnum-after']); ?>" class="box-input box-small">
					<?php if (array_key_exists('telnum-after', $arr_err)) echo $arr_err['telnum-after']; ?><br>
                    <span class="contact-tel">※担当コンシェルジュより携帯番号で御希望のお時間に折り返しご連絡致しますので、その際に連絡の取れる番号を御記載下さい。</span>
				</dd>
				<dt><div class="contact-item">メールアドレス<span class="required">*</span></div></dt>
				<dd>
					<input type="text" name="email" value="<?php if (array_key_exists('email', $_POST)) echo esc_h($_POST['email']); ?>" class="box-input box-large">
					<?php if (array_key_exists('email', $arr_err)) echo $arr_err['email']; ?>
				</dd>
				<dt><div class="contact-item">連絡希望時間帯<span class="required">*</span></div></dt>
				<dd>
                <div class="contact-time">
                        <select name="time_before">
                            <option value="10:00" selected="selected">10:00</option>
                            <option class="level-0" value="11:00">11:00</option>
                            <option class="level-0" value="12:00">12:00</option>
                            <option class="level-0" value="13:00">13:00</option>
                            <option class="level-0" value="14:00">14:00</option>
                            <option class="level-0" value="15:00">15:00</option>
                            <option class="level-0" value="16:00">16:00</option>
                            <option class="level-0" value="17:00">17:00</option>
                            <option class="level-0" value="18:00">18:00</option>
                            <option class="level-0" value="19:00">19:00</option>
                        </select> 〜
                        <select name="time_after">
                            <option value="11:00" selected="selected">11:00</option>
                            <option class="level-0" value="12:00">12:00</option>
                            <option class="level-0" value="13:00">13:00</option>
                            <option class="level-0" value="14:00">14:00</option>
                            <option class="level-0" value="15:00">15:00</option>
                            <option class="level-0" value="16:00">16:00</option>
                            <option class="level-0" value="17:00">17:00</option>
                            <option class="level-0" value="18:00">18:00</option>
                            <option class="level-0" value="19:00">19:00</option>
                            <option class="level-0" value="20:00">20:00</option>
                        </select>
                    </div>
				</dd>
				<dt><div class="contact-item">LINE ID<span class="required">*</span></div></dt>
				<dd>
					<input type="text" name="line_id" value="<?php if (array_key_exists('line_id', $_POST)) echo esc_h($_POST['line_id']); ?>" class="box-input box-middle">
					<?php if (array_key_exists('line_id', $arr_err)) echo $arr_err['line_id']; ?>
				</dd>
				<dt><div class="contact-item">ご紹介者<span class="required-none"></span></div></dt>
				<dd>
					<input type="text" name="introducer" value="<?php if (array_key_exists('introducer', $_POST)) echo esc_h($_POST['introducer']); ?>" class="box-input box-middle"> 様
				</dd>
				<dt><div class="contact-item">ご相談内容<span class="required">*</span></div></dt>
				<dd>
					<ul class="list-enquete">
<?php
	for ($i = 0; $i < count($arr_enquete); $i++) {
		$flg = false;
		if (array_key_exists('enquete', $_POST)) {
			if (in_array($i, $_POST['enquete']))  $flg = true;
		}
?>
						<li><input type="checkbox" name="enquete[]" id="advice_<?=$i?>" value="<?php echo $i; ?>"<?php if ($flg) echo ' checked="checked"'; ?>><label for="advice_<?=$i?>"> <?php echo esc_h($arr_enquete[$i]); ?></label></li>
<?php } ?>
					</ul>
				</dd>
                <dt><div class="contact-item">備考</div></dt>
				<dd>
					<textarea name="memo" value="<?php if (array_key_exists('memo', $_POST)) echo esc_h($_POST['memo']); ?>" class="box-input box-large-memo"><?php if (array_key_exists('memo', $arr_err)) echo $arr_err['memo']; ?></textarea>
				</dd>
			</dl>

			<div class="area-agree">
				<p class="txt txt-agree">※施術に関しましてはクリニックのカウンセリングに基づき、ご本人様のご判断になります。また、クリニックとの契約になりますので、そこでのトラブルに関しましては弊社は責任を負いかねますのでご了承下さい。<br>
				※CHARMEコンシェルジュは医師ではありません。あくまでコンシェルジュサービス（予約・キャンセルの確認やその作業の代行、クリニックへのご質問を一括して確認、割引、その他ご要望）をさせて頂いております。</p>
				<input type="checkbox" id="agree" name="agree" value="1"<?php if (array_key_exists('agree', $_POST)) echo ' checked="checked"'; ?> /> <label for="agree">上記の内容に同意する</label>
				<?php if (array_key_exists('agree', $arr_err)) echo $arr_err['agree']; ?>
			</div>
			<div class="area-btn">
				<input type="submit" name="confirm" value="確認画面へ進む" class="btn-flex btn-submit">
			</div>
		</form>
