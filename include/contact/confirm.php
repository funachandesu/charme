		<form action="<?php echo esc_url(get_permalink(5)); ?>" method="post">
			<dl>
				<dt>お名前</dt>
				<dd>
					<?php echo esc_h($_POST['fullname']); ?>
					<input type="hidden" name="fullname" value="<?php echo esc_h($_POST['fullname']); ?>">
				</dd>
				<dt>生年月日</dt>
				<dd>
					<?php echo esc_h($_POST['birthday']); ?>
					<input type="hidden" name="birthday" value="<?php echo esc_h($_POST['birthday']); ?>">
				</dd>

				<dt>電話番号</dt>
				<dd>
					<?php echo esc_h($_POST['telnum-before']); ?>
					<input type="hidden" name="telnum-before" value="<?php echo esc_h($_POST['telnum-before']); ?>"> -
                    <?php echo esc_h($_POST['telnum-middle']); ?>
					<input type="hidden" name="telnum-middle" value="<?php echo esc_h($_POST['telnum-middle']); ?>"> -
                    <?php echo esc_h($_POST['telnum-after']); ?>
					<input type="hidden" name="telnum-after" value="<?php echo esc_h($_POST['telnum-after']); ?>">
				</dd>
				<dt>メールアドレス</dt>
				<dd>
					<?php echo esc_h($_POST['email']); ?>
					<input type="hidden" name="email" value="<?php echo esc_h($_POST['email']); ?>">
				</dd>
				<dt>連絡希望時間帯（10:00～20:00）</dt>
				<dd>
					<?php echo esc_h($_POST['time_before']); ?>
					<input type="hidden" name="time_before" value="<?php echo esc_h($_POST['time_before']); ?>"> 〜
                    <?php echo esc_h($_POST['time_after']); ?>
					<input type="hidden" name="time_after" value="<?php echo esc_h($_POST['time_after']); ?>">
				</dd>
                <dt>LENE ID</dt>
				<dd>
					<?php echo esc_h($_POST['line_id']); ?>
					<input type="hidden" name="line_id" value="<?php echo esc_h($_POST['line_id']); ?>">
				</dd>
				<dt>ご紹介者</dt>
				<dd>
					<?php echo esc_h($_POST['introducer']); ?>
					<input type="hidden" name="introducer" value="<?php echo esc_h($_POST['introducer']); ?>"> 様
				</dd>
				<dt>ご相談内容</dt>
				<dd>
					<ul class="list-enquete-confirm">
<?php
	if (array_key_exists('enquete', $_POST)) {
		for ($i = 0; $i < count($_POST['enquete']); $i++) {
?>
						<li>
							<?php echo esc_h($arr_enquete[$_POST['enquete'][$i]]); ?>
							<input type="hidden" name="enquete[]" value="<?php echo esc_h($_POST['enquete'][$i]); ?>">
						</li>
<?php
		}
	}
?>
					</ul>
				</dd>
                <dt>備考</dt>
				<dd>
					<?php echo esc_h($_POST['memo']); ?>
					<input type="hidden" name="memo" value="<?php echo esc_h($_POST['memo']); ?>">
				</dd>
			</dl>

			<div class="area-btn-confirm">
				<input type="submit" name="revise" value="戻る" class="btn-flex btn-revise">
				<input type="submit" name="complete" value="送信" class="btn-flex btn-submit">
			</div>
		</form>
