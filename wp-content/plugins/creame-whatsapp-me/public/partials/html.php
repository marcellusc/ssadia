<?php

/**
 * Join.chat public html template
 *
 * @since      4.1.5
 * @package    JoinChat
 * @subpackage JoinChat/public
 * @author     Creame <hola@crea.me>
 */

defined( 'WPINC' ) || exit;
?>

<div class="joinchat <?php echo esc_attr( apply_filters( 'joinchat_classes', $joinchat_classes ) ); ?>" data-settings='<?php echo JoinChatUtil::to_json( $data ); ?>'>
	<div class="joinchat__button">
		<div class="joinchat__button__open"></div>
		<?php if ( $image ) : ?>
			<div class="joinchat__button__image"><?php echo $image; ?></div>
		<?php endif; ?>
			<?php if ( $this->settings['message_start'] ) : ?>
			<div class="joinchat__button__sendtext"><?php echo esc_html( $this->settings['message_start'] ); ?></div>
		<?php endif; ?>
		<?php if ( $box_content ) : ?>
			<svg class="joinchat__button__send" viewbox="0 0 400 400" stroke-linecap="round" stroke-width="33">
				<path class="joinchat_svg__plain" d="M168.83 200.504H79.218L33.04 44.284a1 1 0 0 1 1.386-1.188L365.083 199.04a1 1 0 0 1 .003 1.808L34.432 357.903a1 1 0 0 1-1.388-1.187l29.42-99.427"/>
				<path class="joinchat_svg__chat" d="M318.087 318.087c-52.982 52.982-132.708 62.922-195.725 29.82l-80.449 10.18 10.358-80.112C18.956 214.905 28.836 134.99 81.913 81.913c65.218-65.217 170.956-65.217 236.174 0 42.661 42.661 57.416 102.661 44.265 157.316"/>
			</svg>
		<?php endif; ?>
		<?php if ( $this->settings['message_badge'] ) : ?>
			<div class="joinchat__badge">1</div>
		<?php endif; ?>
		<?php if ( $this->settings['button_tip'] ) : ?>
			<div class="joinchat__tooltip"><div><?php echo esc_html( $this->settings['button_tip'] ); ?></div></div>
		<?php endif; ?>
	</div>
	<?php if ( $box_content ) : ?>
		<div class="joinchat__box">
			<div class="joinchat__header">
				<?php if ( '__jc__' === $this->settings['header'] ) : ?>
					<a class="joinchat__powered" href="<?php echo $powered_link; ?>" rel="nofollow noopener" target="_blank">
						<?php _e( 'Powered by', 'creame-whatsapp-me' ); ?> <svg viewbox="0 0 1424 318"><title>Join.chat</title><path d="M171 7c1.3 0 3.2.6 5.5 1.8 2.3 1.1 3.5 2.3 3.5 3.4v1.2l-.3 3.6-.5 8a947.3 947.3 0 00-2 56v37.2l.2 15.9.2 23.7c.2 12.3.2 22.8.2 31.4 0 22-5.8 42.8-17.4 62.5-11.6 19.7-27.9 35.7-48.7 48S68 318 43.3 318c-14 0-24.6-2.7-32-8.2A27 27 0 010 286.6a27 27 0 017-18.7c4.7-5.2 11-7.8 18.8-7.8 6.9 0 13.1 2 18.7 6 5.4 3.8 9.7 7.9 12.8 12.4l.3.5A96.8 96.8 0 0068 291.9c3.7 4 7.2 5.9 10.3 5.9 4 0 7.1-2 9.6-6s4.5-11.8 6.2-23.3v-.6a363 363 0 002.5-47.5V104.2l.1-.1V76.3c0-1.6-.2-2.6-.6-3V73c-.5-.4-1.4-.8-3-1.2l-.5-.2-11.9-2c-1.9-.3-2.8-2.5-2.8-6.7 0-3.8 1-6 2.8-6.7 27-10.5 56.2-26.6 87.5-48.3a6 6 0 012.8-1zm1205 43c3.9 0 6 .8 6.1 2.5 1.3 9.6 2.1 21.8 2.5 36.6h.5a1888.3 1888.3 0 0033.7-.3h.8c1.7 0 2.8.7 3.4 2s1 4 1 8-.3 6.6-1 7.7c-.6 1.2-1.7 1.8-3.4 1.8h-1.9c-15.1 0-26-.2-32.8-.4v62c0 13.8 1.7 23.3 5.1 28.5 3.4 5.3 8.8 7.9 16 7.9 1.4 0 3-.3 4.6-1 1.7-.6 2.7-.9 3.1-.9 1.9 0 3.8 1 5.6 3 1.9 2 2.5 3.7 1.9 5.1a62.9 62.9 0 01-22 27.8 59.2 59.2 0 01-36.3 11.7c-16.1 0-28.4-4.9-36.9-14.6-3.3-3.8-6-8.1-8-13l-.4.4-.6.5c-17.4 17.1-33 25.7-46.7 25.7-18.7 0-31.7-13-39.2-39.2-5 12.3-12 22-21 28.9a49.2 49.2 0 01-30.7 10.3 37.6 37.6 0 01-29-12.5 44 44 0 01-11.4-30.7c0-9.5 1.6-17.2 5-23a41 41 0 0117-15.3c13.2-7 35.4-13.8 66.6-20.8l1-.2V138c0-10.8-1.7-19.3-5-25.5-3.3-6.4-7.9-9.6-13.7-9.6-2.8 0-4.4 1.6-5 4.7v.3l-2.1 14.8-.1.6a38.4 38.4 0 01-11.1 24c-6 5.4-13.5 8.1-22.4 8.1-5.2 0-9.6-1.5-13.1-4.6a16 16 0 01-5.3-12.7c0-10.7 8.8-21.7 26.3-33s37.5-17 60-17c41 0 61.7 15.2 62.1 45.7V192c0 4.6.3 8.4.7 11.4.4 3 1 5.4 1.7 7 .7 1.7 1.7 2.7 2.8 3.1 1.1.5 2.3.5 3.6 0a21 21 0 004.6-2.4l1.7-1c-.7-4-1-8.4-1-13v-85.8c0-1.5-.2-2.4-.6-2.8-.4-.5-1.4-.9-3-1.3l-11.2-1.6c-1.7-.2-2.5-2.3-2.5-6.2 0-4.4.8-6.7 2.5-7 15.9-3.7 29-8.6 39.3-14.6a144 144 0 0031-25.4c1.7-1.7 4-2.5 7.1-2.5zM290 88c27.5 0 49.7 7.2 66.6 21.6a73.1 73.1 0 0125.3 58.7c0 25.7-9 46-27 60.6S313.3 251 283.9 251c-27.5 0-49.7-7.2-66.6-21.6a73.1 73.1 0 01-25.3-58.7c0-25.7 9-46 27-60.6S260.8 88 290.1 88zm588.2 0c18.5 0 33.4 4.1 44.5 12.3 11.2 8.3 16.7 17.9 16.7 28.8 0 6.1-2.1 11.2-6.5 15.2s-9.9 6-16.7 6c-13 0-24-8.5-33-25.6-5.6-10.5-10-17.3-13-20.5s-6.1-4.8-9.7-4.8c-7.4 0-11 5.5-11 16.4 0 13.6 3 28.2 9.2 44a108 108 0 0023.2 37.5c8 8 16.5 12 25.4 12 7.6 0 15.3-3.3 23.2-9.9 1.4-1 3.5-.6 6.1 1.3 2.7 1.8 3.8 3.6 3.1 5.2a70.1 70.1 0 01-28.7 31.8 89 89 0 01-48.6 13.3 77.6 77.6 0 01-57.2-22.2 78.4 78.4 0 01-22.3-58c0-24.6 9-44.5 27-59.8 17.9-15.3 40.6-23 68.3-23zm-402.4-2.8c1.2 0 2.9.5 5 1.6 2 1 3 2 3 3.1l-.6 9.7a784.6 784.6 0 00-1.9 53.2v76.5c.1 2.2 1.3 3.6 3.5 4l.2.1 10.5 2.2.5.1h.4l10.5-2.2h.3c2.3-.5 3.4-2 3.4-4.4v-81.9c0-1.3-.2-2.1-.6-2.5-.4-.4-1.4-.8-3-1.3l-10.6-1.8h-.2c-1.5-.4-2.3-2.3-2.3-6 0-3.2.8-5.2 2.5-5.8a364 364 0 0074.3-42.9c.9-.6 1.7-.9 2.5-.9 1.3 0 3 .5 5 1.6s3 2 3 3v.1c0 .8-.1 4.9-.5 12a392.8 392.8 0 00-.7 21.8 64.5 64.5 0 0121.6-26 56.2 56.2 0 0134-10.6c16.2 0 29 4.6 38.5 14a52.6 52.6 0 0114 39v88.5c.2 2.3 1.4 3.7 3.8 4l10.5 2.3h.2c1.5.3 2.3 2.6 2.3 6.8 0 4.3-.8 6.5-2.5 6.5l-19-1c-11.7-.8-22-1.2-30.9-1.2s-18.8.4-29.9 1.1l-18 1.1c-1.7 0-2.6-2.2-2.6-6.5 0-4 .9-6.2 2.5-6.8l8.4-2.2.3-.1c1.5-.4 2.4-.8 2.8-1.3.4-.5.6-1.5.6-3v-61.9c0-14-2-24-6-29.7-4-5.8-11.2-8.7-21.6-8.7-3 0-5.3.4-6.8 1v99.6c0 1.3.2 2.2.6 2.7.4.5 1.5 1 3.1 1.4l8.4 2.1.1.1c1.6.7 2.4 3 2.4 6.8 0 4.3-.9 6.5-2.5 6.5l-18-1a454.5 454.5 0 00-60.7 0 868.8 868.8 0 01-20 1h-.2l-18.8-1c-11.6-.8-21.7-1.2-30.5-1.2s-19 .4-30.7 1.1l-19 1.1c-1.7 0-2.5-2.2-2.5-6.6 0-4.2.8-6.5 2.3-6.8h.2l10.4-2.2h.2c2.2-.5 3.4-1.9 3.5-4.1v-82.6c0-1.3-.3-2.1-.6-2.5-.4-.4-1.3-.8-2.8-1.2h-.3l-10.4-2h-.2c-1.5-.3-2.3-2.2-2.3-5.9 0-3.3.8-5.3 2.5-5.9a380 380 0 0077-43c1-.7 1.8-1 2.4-1zM1014.7 10c1.3 0 3 .5 5 1.5s3.1 2 3.1 3.1l-.6 9.5a758.2 758.2 0 00-1.9 54.5v42.7l.4-.6c5.1-8.8 12.2-16.1 21.3-22.1a56 56 0 0131.6-9.2c16.3 0 29.2 4.6 38.6 13.8a51.8 51.8 0 0114 38.8v87.6c.2 2.3 1.4 3.6 3.8 4l10.5 2.2h.2c1.5.3 2.3 2.6 2.3 6.7 0 4.3-.8 6.5-2.5 6.5l-19-1c-11.7-.8-22-1.2-30.9-1.2s-18.8.4-29.9 1.1l-18 1.1c-1.7 0-2.6-2.2-2.6-6.5 0-3.9.9-6.1 2.5-6.7l8.4-2.2h.3c1.5-.4 2.4-.9 2.8-1.4.4-.5.6-1.5.6-2.9V168c0-14-2-23.8-6-29.4-4-5.8-11.2-8.6-21.6-8.6-3 0-5.3.3-6.8.9v98.7c0 1.3.2 2.2.6 2.6.4.5 1.5 1 3.1 1.4l8.4 2.2h.1c1.6.7 2.4 3 2.4 6.7 0 4.3-.9 6.5-2.5 6.5l-18-1a459 459 0 00-60.7 0l-19.2 1c-1.7 0-2.5-2.2-2.5-6.5s.8-6.5 2.5-6.7l10.5-2.2h.3c2.3-.5 3.4-2 3.4-4.3V70.6c0-1.3-.2-2-.6-2.5-.4-.4-1.4-.8-3-1.2l-10.6-1.8h-.2c-1.5-.4-2.3-2.3-2.3-5.9 0-3.3.8-5.2 2.5-5.8 24-9.3 49.9-23.4 77.8-42.5 1-.6 1.8-.9 2.4-.9zm-743 90c-7.6 0-11.4 6.7-11.4 20.3 0 16.6 3.7 38.3 11.2 65.2 7.4 26.9 14.5 43.7 21.1 50.3 3.1 3 6.3 4.6 9.7 4.6 7.6 0 11.5-6.8 11.5-20.4 0-16.5-3.8-38.2-11.2-65.2-7.5-26.9-14.5-43.6-21.2-50.2-3.1-3.1-6.3-4.7-9.6-4.7zm939.2 64.9c-6 0-9.1 4.3-9.1 12.8 0 8.4 2.4 15.9 7 22.4 4.8 6.6 10 9.8 15.4 9.8 2.2 0 4-.6 5.4-2l.3-.1v-22.3a20.6 20.6 0 00-6.7-14.8c-4-3.9-8-5.8-12.3-5.8zM450.6 0a34 34 0 0125.5 10.3c6.7 6.9 10 15.4 10 25.7a35 35 0 01-35.5 36 34 34 0 01-25.5-10.4 35.3 35.3 0 01-10-25.6c0-10.3 3.3-18.8 10-25.7A34 34 0 01450.6 0zM748 249a31 31 0 0022-8.2c6-5.5 9-12.2 9-20.3s-3-14.8-8.9-20.3-13.2-8.2-22-8.2-16.3 2.7-22.2 8.2-8.9 12.2-8.9 20.3 3 14.8 8.9 20.3 13.3 8.2 22.1 8.2z"/></svg>
					</a>
				<?php elseif ( '__wa__' === $this->settings['header'] ) : ?>
					<svg class="joinchat__wa" viewBox="0 0 120 28"><title>WhatsApp</title><path d="M117.2 17c0 .4-.2.7-.4 1-.1.3-.4.5-.7.7l-1 .2c-.5 0-.9 0-1.2-.2l-.7-.7a3 3 0 0 1-.4-1 5.4 5.4 0 0 1 0-2.3c0-.4.2-.7.4-1l.7-.7a2 2 0 0 1 1.1-.3 2 2 0 0 1 1.8 1l.4 1a5.3 5.3 0 0 1 0 2.3zm2.5-3c-.1-.7-.4-1.3-.8-1.7a4 4 0 0 0-1.3-1.2c-.6-.3-1.3-.4-2-.4-.6 0-1.2.1-1.7.4a3 3 0 0 0-1.2 1.1V11H110v13h2.7v-4.5c.4.4.8.8 1.3 1 .5.3 1 .4 1.6.4a4 4 0 0 0 3.2-1.5c.4-.5.7-1 .8-1.6.2-.6.3-1.2.3-1.9s0-1.3-.3-2zm-13.1 3c0 .4-.2.7-.4 1l-.7.7-1.1.2c-.4 0-.8 0-1-.2-.4-.2-.6-.4-.8-.7a3 3 0 0 1-.4-1 5.4 5.4 0 0 1 0-2.3c0-.4.2-.7.4-1 .1-.3.4-.5.7-.7a2 2 0 0 1 1-.3 2 2 0 0 1 1.9 1l.4 1a5.4 5.4 0 0 1 0 2.3zm1.7-4.7a4 4 0 0 0-3.3-1.6c-.6 0-1.2.1-1.7.4a3 3 0 0 0-1.2 1.1V11h-2.6v13h2.7v-4.5c.3.4.7.8 1.2 1 .6.3 1.1.4 1.7.4a4 4 0 0 0 3.2-1.5c.4-.5.6-1 .8-1.6.2-.6.3-1.2.3-1.9s-.1-1.3-.3-2c-.2-.6-.4-1.2-.8-1.6zm-17.5 3.2l1.7-5 1.7 5h-3.4zm.2-8.2l-5 13.4h3l1-3h5l1 3h3L94 7.3h-3zm-5.3 9.1l-.6-.8-1-.5a11.6 11.6 0 0 0-2.3-.5l-1-.3a2 2 0 0 1-.6-.3.7.7 0 0 1-.3-.6c0-.2 0-.4.2-.5l.3-.3h.5l.5-.1c.5 0 .9 0 1.2.3.4.1.6.5.6 1h2.5c0-.6-.2-1.1-.4-1.5a3 3 0 0 0-1-1 4 4 0 0 0-1.3-.5 7.7 7.7 0 0 0-3 0c-.6.1-1 .3-1.4.5l-1 1a3 3 0 0 0-.4 1.5 2 2 0 0 0 1 1.8l1 .5 1.1.3 2.2.6c.6.2.8.5.8 1l-.1.5-.4.4a2 2 0 0 1-.6.2 2.8 2.8 0 0 1-1.4 0 2 2 0 0 1-.6-.3l-.5-.5-.2-.8H77c0 .7.2 1.2.5 1.6.2.5.6.8 1 1 .4.3.9.5 1.4.6a8 8 0 0 0 3.3 0c.5 0 1-.2 1.4-.5a3 3 0 0 0 1-1c.3-.5.4-1 .4-1.6 0-.5 0-.9-.3-1.2zM74.7 8h-2.6v3h-1.7v1.7h1.7v5.8c0 .5 0 .9.2 1.2l.7.7 1 .3a7.8 7.8 0 0 0 2 0h.7v-2.1a3.4 3.4 0 0 1-.8 0l-1-.1-.2-1v-4.8h2V11h-2V8zm-7.6 9v.5l-.3.8-.7.6c-.2.2-.7.2-1.2.2h-.6l-.5-.2a1 1 0 0 1-.4-.4l-.1-.6.1-.6.4-.4.5-.3a4.8 4.8 0 0 1 1.2-.2 8.3 8.3 0 0 0 1.2-.2l.4-.3v1zm2.6 1.5v-5c0-.6 0-1.1-.3-1.5l-1-.8-1.4-.4a10.9 10.9 0 0 0-3.1 0l-1.5.6c-.4.2-.7.6-1 1a3 3 0 0 0-.5 1.5h2.7c0-.5.2-.9.5-1a2 2 0 0 1 1.3-.4h.6l.6.2.3.4.2.7c0 .3 0 .5-.3.6-.1.2-.4.3-.7.4l-1 .1a21.9 21.9 0 0 0-2.4.4l-1 .5c-.3.2-.6.5-.8.9-.2.3-.3.8-.3 1.3s.1 1 .3 1.3c.1.4.4.7.7 1l1 .4c.4.2.9.2 1.3.2a6 6 0 0 0 1.8-.2c.6-.2 1-.5 1.5-1a4 4 0 0 0 .2 1H70l-.3-1v-1.2zm-11-6.7c-.2-.4-.6-.6-1-.8-.5-.2-1-.3-1.8-.3-.5 0-1 .1-1.5.4a3 3 0 0 0-1.3 1.2v-5h-2.7v13.4H53v-5.1c0-1 .2-1.7.5-2.2.3-.4.9-.6 1.6-.6.6 0 1 .2 1.3.6.3.4.4 1 .4 1.8v5.5h2.7v-6c0-.6 0-1.2-.2-1.6 0-.5-.3-1-.5-1.3zm-14 4.7l-2.3-9.2h-2.8l-2.3 9-2.2-9h-3l3.6 13.4h3l2.2-9.2 2.3 9.2h3l3.6-13.4h-3l-2.1 9.2zm-24.5.2L18 15.6c-.3-.1-.6-.2-.8.2A20 20 0 0 1 16 17c-.2.2-.4.3-.7.1-.4-.2-1.5-.5-2.8-1.7-1-1-1.7-2-2-2.4-.1-.4 0-.5.2-.7l.5-.6.4-.6v-.6L10.4 8c-.3-.6-.6-.5-.8-.6H9c-.2 0-.6.1-.9.5C7.8 8.2 7 9 7 10.7c0 1.7 1.3 3.4 1.4 3.6.2.3 2.5 3.7 6 5.2l1.9.8c.8.2 1.6.2 2.2.1.6-.1 2-.8 2.3-1.6.3-.9.3-1.5.2-1.7l-.7-.4zM14 25.3c-2 0-4-.5-5.8-1.6l-.4-.2-4.4 1.1 1.2-4.2-.3-.5A11.5 11.5 0 0 1 22.1 5.7 11.5 11.5 0 0 1 14 25.3zM14 0A13.8 13.8 0 0 0 2 20.7L0 28l7.3-2A13.8 13.8 0 1 0 14 0z"/></svg>
				<?php elseif ( '' !== $this->settings['header'] ) : ?>
					<span class="joinchat__header__text"><?php echo esc_html( $this->settings['header'] ); ?></span>
				<?php endif; ?>
				<div class="joinchat__close" aria-label="<?php _e( 'Close', 'creame-whatsapp-me' ); ?>"></div>
			</div>
			<div class="joinchat__box__scroll">
				<div class="joinchat__box__content">
					<?php echo $box_content; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<svg height="0" width="0"><defs><clipPath id="joinchat__message__peak"><path d="M17 25V0C17 12.877 6.082 14.9 1.031 15.91c-1.559.31-1.179 2.272.004 2.272C9.609 18.182 17 18.088 17 25z"/></clipPath></defs></svg>
</div>
