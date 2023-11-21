<?

    add_action('wpcf7_before_send_mail', 'wpcf7_mail_sent_function');
    
    function wpcf7_mail_sent_function($contact_form) {

        $title = $contact_form->title;
        $posted_data = $contact_form->posted_data;

        if (
            'Контактная форма c телефоном' == $title ||
            'Контактная форма в модальном окне' == $title ||
            'Контактная форма в подвале' == $title
            ) {

            $queryUrl = 'https://saitcraft.bitrix24.ru/rest/13/s7sugqiitewyxvim/crm.lead.add.json';
            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();

            // Перехватывает введенные данные в Contact Form 7
            $title = $posted_data['text-251'];
	        $lid_name = $posted_data['text-683'];
	        $lid_tel = $posted_data['tel-885'];
	        $lid_email = $posted_data['email-626'];
	        $lid_message = $posted_data['textarea-746'];
	        $urlPage = explode('?', $_SERVER['HTTP_REFERER'])[0];

	        $utm_source = htmlspecialchars($_COOKIE["utm_source"]);
	        $utm_medium = htmlspecialchars($_COOKIE["utm_medium"]);
	        $utm_campaign = htmlspecialchars($_COOKIE["utm_campaign"]);
	        $utm_content = htmlspecialchars($_COOKIE["utm_content"]);
	        $utm_term = htmlspecialchars($_COOKIE["utm_term"]);

            $queryData = http_build_query(array(
                'fields' => array(
                    'TITLE' => $title,
                    'NAME' => $lid_name,
                    'UF_CRM_DCT_CONTENT' => $lid_message,
                    'SOURCE_DESCRIPTION' => $urlPage,
                    'PHONE' => Array(
                        "n0" => Array(
                            "VALUE" => $lid_tel,
                            "VALUE_TYPE" => "WORK"
                        )
                    ),
                    'EMAIL' => Array(
                        "n0" => Array(
                            "VALUE" => $lid_email,
                            "VALUE_TYPE" => "WORK"
                        )
                    ),
                    /* UTM MARKS */
                    'UTM_SOURCE' => $utm_source,
                    'UTM_MEDIUM' => $utm_medium,
                    'UTM_CAMPAIGN' => $utm_campaign,
                    'UTM_CONTENT' => $utm_content,
                    'UTM_TERM' => $utm_term,
                ),
                'params' => array("REGISTER_SONET_EVENT" => "Y")
            ));

            // обращаемся к Битрикс24 при помощи функции curl_exec
            $curl = curl_init();
            curl_setopt_array($curl, array(
                /* Отключаем проверку SSL */
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYSTATUS => 0,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $queryUrl,
                CURLOPT_POSTFIELDS => $queryData,
            ));

            $result = curl_exec($curl);
            curl_close($curl);
            $result = json_decode($result, 1);
            if (array_key_exists('error', $result)) echo "Ошибка при сохранении лида: ".$result['error_description']."<br/>";
        }

    };
