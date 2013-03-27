<?php
/**
 * The application's mailer class.
 *
 * For more information see http://book.atk14.net/czech/sending-emails/
 */
class ApplicationMailer extends Atk14Mailer {

	/**
	 * A place for common configuration.
	 */
	function _before_filter(){
		$this->content_type = "text/plain";
		$this->content_charset = DEFAULT_CHARSET; // "UTF-8"
		$this->from = DEFAULT_EMAIL;
	}
}
