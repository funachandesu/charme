<?php
/**
 * include: core.php
 */
?>
<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require_once($_SERVER['DOCUMENT_ROOT'].'/lib/PHPMailer/src/Exception.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/lib/PHPMailer/src/PHPMailer.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/lib/PHPMailer/src/SMTP.php');
?>
<?php
	function esc_h($str) {
		return stripslashes(htmlspecialchars($str, ENT_QUOTES, 'UTF-8'));
	}
	function convert_kana($str = null, $option = null) {
		return mb_convert_kana($str, $option, 'UTF-8');
	}
	function br2nl($str = null) {
		return preg_replace('/<br[[:space:]]*\/?[[:space:]]*>/i', "\n", $str);
	}
	function is_blank_single($post = null) {
		$flg = false;
		if (preg_match('/\A[[:^cntrl:]]{1,100}\z/u', $post) == 0) {
			$flg = true;
		}

		return $flg;
	}
	function is_blank_multi($post = null) {
		$flg = false;
		if (preg_match('/\A[\r\n\t[:^cntrl:]]{1,400}\z/u', $post) == 0) {
			$flg = true;
		}

		return $flg;
	}
	function check_num($post= null, $min_length = null, $max_length = null) {
		convert_kana($post,'a');
		$flg = false;
		if (preg_match('/\A[0-9]{'.$min_length.','.$max_length.'}\z/u', $post) == 0) {
			$flg = true;
		}

		return $flg;
	}
	function check_post_code($post= null) {
		convert_kana($post,'a');
		$flg = false;
		if (preg_match('/\A[0-9]{7}\z/u', $post) == 0) {
			$flg = true;
		}

		return $flg;
	}
	function check_email($post= null) {
		convert_kana($post,'a');
		$flg = false;
		if (preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $post) == 0) {
			$flg = true;
		}

		return $flg;
	}
	function create_error_txt($str = null, $case = null) {
		$txt_err = '';
		switch($case) {
			case 'blank':
				$txt_err = '<div class="txt-error">'.$str.'を入力してください。</div>';
			break;
			case 'radio':
				$txt_err = '<div class="txt-error">'.$str.'を選択してください。</div>';
			break;
			case 'validate':
				$txt_err = '<div class="txt-error">'.$str.'を正しく入力してください。</div>';
			break;
			case 'privacy_agree':
				$txt_err = '<div class="txt-error">'.$str.'に同意してください。</div>';
			break;
			default:
			break;
		}

		return $txt_err;
	}
?>
<?php
	$arr_enquete = array('全身','豊胸','全身脱毛','アートメイク','脂肪','ホワイトニング','鼻の施術全般','目の施術全般','注入系（ボトックス、ヒアルロン酸）','骨格、フェイスライン','その他','提携希望（業者様向け）');
	$arr_err = array();
	$mode = 'input';

	$error_send_message = '';

	if (array_key_exists('confirm', $_POST)) {
		// お名前
		if (is_blank_single($_POST['fullname'])) {
			$arr_err['fullname'] = create_error_txt('お名前', 'blank');
		}

		// 生年月日
		if (is_blank_single($_POST['birthday'])) {
			$arr_err['birthday'] = create_error_txt('生年月日', 'blank');
		}

		// 電話番号
		$telnum = $_POST['telnum-before'].$_POST['telnum-middle'].$_POST['telnum-after'];
        $telnum_before = $_POST['telnum-before'];
        $telnum_middle = $_POST['telnum-middle'];
        $telnum_after = $_POST['telnum-after'];
		if (is_blank_single($telnum_before)) {
			$arr_err['telnum-after'] = create_error_txt('電話番号', 'blank');
        } elseif (is_blank_single($telnum_middle)) {
			$arr_err['telnum-after'] = create_error_txt('電話番号', 'blank');
		} elseif (is_blank_single($telnum_after)) {
			$arr_err['telnum-after'] = create_error_txt('電話番号', 'blank');
		} elseif (check_num($telnum, 10, 11)) {
			$arr_err['telnum-after'] = create_error_txt('電話番号', 'validate');
		}

		// メールアドレス
		if (is_blank_single($_POST['email'])) {
			$arr_err['email'] = create_error_txt('メールアドレス', 'blank');
		} elseif (check_email($_POST['email'])) {
			$arr_err['email'] = create_error_txt('メールアドレス', 'validate');
		}

		// ご相談内容
		if (!array_key_exists('enquete', $_POST)) {
			$arr_err['enquete'] = create_error_txt('ご相談内容', 'radio');
		}

        // LINE ID
		if (is_blank_single($_POST['line_id'])) {
			$arr_err['line_id'] = create_error_txt('LINEID', 'blank');
		}

        // 備考
		if (is_blank_single($_POST['memo'])) {
			$arr_err['memo'] = create_error_txt('備考', 'blank');
		}

		// 同意
		if (!array_key_exists('agree', $_POST)) {
			$arr_err['agree'] = '<div class="txt-error">同意をお願いします。</div>';
		}

		if (count($arr_err) == 0) {
			$mode = 'confirm';
		}
	} elseif (array_key_exists('complete', $_POST)) {
		$mail = new PHPMailer(true);
		try {
			// PHPMailerの設定
//			$mail->SMTPDebug = 2;
			$mail->isSMTP();
			$mail->Host = 'smtp.hetemail.jp';
			$mail->CharSet = 'utf-8';
			$mail->SMTPAuth = true;
			$mail->Username = 'noreply@charme-beauty.jp';
			$mail->Password = 'MWD9KjKqHgMh2bhc';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;

			// 共通設定
			$client_company = 'CHARME';
			$client_address = array('support@charme-beauty.jp'); // REAL
//			$client_address = array('nakatani@n2-bureau.com'); // TEST

			$common_message = '';
			$common_message .= 'お名前：'.$_POST['fullname']."\n";
			$common_message .= '生年月日：'.$_POST['birthday']."\n";
			$common_message .= '電話番号：'.$_POST['telnum-before'].$_POST['telnum-middle'].$_POST['telnum-after']."\n";
			$common_message .= 'メールアドレス：'.$_POST['email']."\n";
			$common_message .= '連絡希望時間帯（10:00～20:00）：'.$_POST['time_before'].'〜'.$_POST['time_after']."\n";
            $common_message .= 'LINE ID：'.$_POST['line_id']."\n";
			$common_message .= 'ご紹介者：'.$_POST['introducer'].'様'."\n";
			$common_message .= "\n";
			$common_message .= '【ご相談内容】'."\n";
			if (array_key_exists('enquete', $_POST)) {
				for ($i = 0; $i < count($_POST['enquete']); $i++) {
					$common_message .= $arr_enquete[$_POST['enquete'][$i]]."\n";
				}
			}
            $common_message .= '備考：'.$_POST['memo']."\n";
			$common_message .= "\n";

			// ユーザー宛
			$subject = '['.$client_company.'] お問い合わせありがとうございます。';
			$message = '';
			$message .= $_POST['fullname'].' さま'."\n";
			$message .= "\n";
			$message .= 'お問い合わせありがとうございます。'."\n";
			$message .= '下記のとおり、お問い合わせを承りました。'."\n";
			$message .= '5営業日以内に、担当者よりお電話にてご連絡させていただきます。'."\n";
            $message .= 'お出になられたかった場合にはショートメールをお送りさせて頂きますのでご確認下さい。'."\n";
			$message .= "\n";
			$message .= $common_message;
			$message .= "\n";
			$message .= '--------------------------------------------------'."\n";
			$message .= 'このメールは自動返信メールです。'."\n";
			$message .= 'このメール宛に返信を頂いてもご返信する事が出来ません。'."\n";
			$message .= '--------------------------------------------------'."\n";
			$message .= "\n";
			$message .= $client_company."\n";
			$message .= 'https://charme-beauty.jp/'."\n";
            $message .= '日祝以外10:00～20:00'."\n";

			$mail->setFrom('noreply@charme-beauty.jp', $client_company);
			$mail->Subject = mb_convert_encoding($subject, 'UTF-8', 'AUTO');
			$mail->Body = mb_convert_encoding($message, 'UTF-8', 'AUTO');
			$mail->addAddress($_POST['email']);
			$mail->Send();

			// 管理者宛
			$subject = 'Webサイトよりお問い合わせがありました。';
			$message = '';
			$message .= '下記のとおり、お問い合わせがありました。'."\n";
			$message .= "\n";
			$message .= $common_message;
			$message .= "\n";

			$mail->setFrom($_POST['email'], $_POST['fullname']);
			$mail->Subject = mb_convert_encoding($subject, 'UTF-8', 'AUTO');
			$mail->Body = mb_convert_encoding($message, 'UTF-8', 'AUTO');
			$mail->clearAddresses();
			for ($i = 0; $i < count($client_address); $i++) {
				$mail->addAddress($client_address[$i]);
			}
			$mail->Send();

			$_POST = NULL;

			// ファイルへ書き込み
			$file = $_SERVER['DOCUMENT_ROOT'].'/../../charme-beauty.jp/contact/'.date('Ym').'.txt';
			$file_message = '';
			$file_message .= '----------------'."\n";
			$file_message .= date_i18n('Y/m/d H:i:s')."\n";
			$file_message .= $common_message;
			file_put_contents($file, $file_message, FILE_APPEND | LOCK_EX);

			header('Location: /contact/complete/');
			exit;
		} catch (Exception $e) {
			$mode = 'error';
			$error_send_message = $mail->ErrorInfo;
		}
	}
?>
