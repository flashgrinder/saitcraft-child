<?php

/*
*
* Window with cities list
*
*/

defined( 'ABSPATH' ) || exit;

?>
<div id="cityChange" class="popup-window popup-window-with-titlebar pop-up city-change belingo-modal">
      <div class="popup-window-titlebar" id="popup-window-titlebar-cityChange">
            <span>Выберите регион из списка:</span>
      </div>
      <div id="popup-window-content-cityChange" class="popup-window-content">
          <div class="bx-sls">
              <div class="bx-ui-sls-quick-locations quick-locations">
                  <?php do_action('belingogeo_before_cities_list_container'); ?>
                  <div class="quick-locations__values__container"></div>
              </div>
              <?php do_action('belingogeo_after_cities_list_container'); ?>
          </div>
          <div class="block-info">
              <div class="block-info__title">Не нашли Ваш город?</div>
                <div class="block-info__subtitle">
                    <a class="continue-without-geo" href="#">
                    <?php esc_html_e('Continue without the city', 'belingogeo'); ?>
                    </a>
                </div>
          </div>
      </div>
    <span class="popup-window-close-icon popup-window-titlebar-close-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="5.72729" y="17.7273" width="16.9706" height="0.848528" transform="rotate(-45 5.72729 17.7273)" fill="white"/>
            <rect x="6.1521" y="5.84788" width="16.9706" height="0.848528" transform="rotate(45 6.1521 5.84788)" fill="white"/>
        </svg>
    </span>
</div>
<div id="geolocation" class="geolocation belingo-geo">
    <a id="geolocationChangeCity" class="geolocation__link" href="javascript:void(0);">
        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.5 0C7.65371 0 3.71094 3.94277 3.71094 8.78906C3.71094 10.4265 4.1645 12.0244 5.0229 13.4107L11.9997 24.6538C12.0654 24.7596 12.1571 24.847 12.2659 24.9076C12.3748 24.9682 12.4974 25 12.622 25H12.6278C12.7534 24.999 12.8767 24.9658 12.9857 24.9034C13.0947 24.8411 13.1859 24.7517 13.2504 24.6439L20.0494 13.292C20.8604 11.935 21.2891 10.3779 21.2891 8.78906C21.2891 3.94277 17.3463 0 12.5 0ZM18.7923 12.5399L12.6109 22.8606L6.26792 12.639C5.55342 11.4851 5.16602 10.1538 5.16602 8.78906C5.16602 4.75049 8.46143 1.45508 12.5 1.45508C16.5386 1.45508 19.8291 4.75049 19.8291 8.78906C19.8291 10.1133 19.4672 11.4105 18.7923 12.5399Z"/>
            <path d="M12.5 4.39453C10.0769 4.39453 8.10547 6.36592 8.10547 8.78906C8.10547 11.1967 10.0448 13.1836 12.5 13.1836C14.9855 13.1836 16.8945 11.1703 16.8945 8.78906C16.8945 6.36592 14.9231 4.39453 12.5 4.39453ZM12.5 11.7285C10.8761 11.7285 9.56055 10.4085 9.56055 8.78906C9.56055 7.17363 10.8846 5.84961 12.5 5.84961C14.1154 5.84961 15.4346 7.17363 15.4346 8.78906C15.4346 10.3849 14.1496 11.7285 12.5 11.7285Z"/>
        </svg>
      <span id="geolocation__value" class="geolocation__value"><?php esc_html_e('Finding...', 'belingogeo'); ?></span>
    </a>
</div>