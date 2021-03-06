<?php

return array(
    'ad'				        => 'Usługa katalogowa Active Directory',
    'ad_domain'				    => 'Domena Active Directory',
    'ad_domain_help'			=> 'Czasami jest taka sama jak domena poczty e-mail, ale nie zawsze.',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'To jest serwer Active Directory',
	'alert_email'				=> 'Wyślij powiadomienia do',
	'alerts_enabled'			=> 'Alarmy włączone',
	'alert_interval'			=> 'Próg wygasających alarmów (w dniach)',
	'alert_inv_threshold'		=> 'Inwentarz progu alarmów',
	'asset_ids'					=> 'ID Aktywa',
	'audit_interval'            => 'Interwał audytu',
    'audit_interval_help'       => 'Jeśli wymagane są regularne kontrole fizycznie aktyw, wprowadź interwał w miesiącach.',
	'audit_warning_days'        => 'Próg ostrzegania przed audytem',
    'audit_warning_days_help'   => 'Ile dni wcześniej powinniśmy ostrzec Cię, gdy majątek ma zostać poddany audytowi?',
	'auto_increment_assets'		=> 'Generuj automatycznie zwiększane ID aktywa',
	'auto_increment_prefix'		=> 'Prefix (opcjonalnie)',
	'auto_incrementing_help'    => 'Najpierw aktywuj automatycznie zwiększane ID Aktywa, by móc ustawić te opcje.',
	'backups'					=> 'Kopie zapasowe',
	'barcode_settings'			=> 'Ustawienia Kodów Kreskowych',
    'confirm_purge'			    => 'Potwierdź wyczyszczenie',
    'confirm_purge_help'		=> 'Wpisz w poniższe pole słowo "DELETE" aby wyczyścić usunięte rekordy. Tej czynności nie da się cofnąć.',
	'custom_css'				=> 'Własny CSS',
	'custom_css_help'			=> 'Wprowadź własny kod CSS. Nie używaj tagów &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Niestandardowy adres URL resetowania hasła',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Komunikat pulpitu nawigacyjnego',
    'dashboard_message_help'	=> 'Ten tekst pojawi się na pulpicie nawigacyjnym dla każdego, kto ma uprawnienia do wyświetlania pulpitu.',
	'default_currency'  		=> 'Domyślna Waluta',
	'default_eula_text'			=> 'Domyślna EULA',
  'default_language'			=> 'Domyślny język',
	'default_eula_help_text'	=> 'Możesz również sporządzić własną licencje by sprecyzować kategorie aktywa.',
    'display_asset_name'        => 'Wyświetl nazwę aktywa',
    'display_checkout_date'     => 'Wyświetl Datę Przypisania',
    'display_eol'               => 'Wyświetl koniec linii w widoku tabeli',
    'display_qr'                => 'Wyświetlaj QR kody',
	'display_alt_barcode'		=> 'Wyświetlaj kod kreskowy w 1D',
	'barcode_type'				=> 'Kod kreskowy typu 2D',
	'alt_barcode_type'			=> 'Kod kreskowy typu 1D',
    'eula_settings'				=> 'Ustawienia Licencji',
    'eula_markdown'				=> 'Ta licencja zezwala na <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings'			=> 'Ustawienia ogólne',
	'generate_backup'			=> 'Stwórz Kopie zapasową',
    'header_color'              => 'Kolor nagłówka',
    'info'                      => 'Te ustawienia pozwalają ci zdefiniować najważniejsze szczegóły twojej instalacji.',
    'laravel'                   => 'Wersja Laravel',
    'ldap_enabled'              => 'LDAP włączone',
    'ldap_integration'          => 'Integracja z LDAP',
    'ldap_settings'             => 'Ustawienia LDAP',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'Serwery LDAP',
    'ldap_server_help'          => 'To powinno się rozpocząć od ldap: / / (dla nieszyfrowanych połączeń) lub ldaps: / / (dla szyfrowanych połączeń)',
	'ldap_server_cert'			=> 'Walidacja certyfikatu SSL dla LDAP',
	'ldap_server_cert_ignore'	=> 'Zezwalaj na nieprawidłowy certyfikat SSL',
	'ldap_server_cert_help'		=> 'Zaznacz tą opcje jeśli używasz certyfikatu SSL podpisanego przez samego siebie i chcesz zezwolić na nieprawidłowy certyfikat.',
    'ldap_tls'                  => 'Używaj TLS',
    'ldap_tls_help'             => 'Ta opcja powinna zaznaczony jedynie gdy używasz STARTLS w swoim serwerze LDAP. ',
    'ldap_uname'                => 'Użytkownik do łączenia się z serwerem LDAP',
    'ldap_pword'                => 'Hasło użytkownika wpisanego do łączenia się z serwerem LDAP',
    'ldap_basedn'               => 'DN',
    'ldap_filter'               => 'Filtr LDAP',
    'ldap_pw_sync'              => 'Synchronizacja haseł LDAP',
    'ldap_pw_sync_help'         => 'Odznacz jeśli nie chcesz synchronizować haseł z LDAP z lokalnymi',
    'ldap_username_field'       => 'Pole użytkownika',
    'ldap_lname_field'          => 'Nazwisko',
    'ldap_fname_field'          => 'Imię',
    'ldap_auth_filter_query'    => 'Autoryzacja LDAP',
    'ldap_version'              => 'Wersja LDAP',
    'ldap_active_flag'          => 'Aktywna flaga LDAP',
    'ldap_emp_num'              => 'Nr pracownika LDAP',
    'ldap_email'                => 'E-mail pracownika LDAP',
    'license'                  => 'Licencja oprogramowania',
    'load_remote_text'          => 'Skrypty zdalne',
    'load_remote_help_text'		=> 'Ta instalacja Snipe-IT może załadować skrypty z zewnętrznego świata.',
    'login_note'                => 'Noty logowania',
    'login_note_help'           => 'Opcjonalnie umieść kilka zdań na ekranie logowania, na przykład w celu pomocy osobom, które znalazły zagubione lub skradzione urządzenia. To pole akceptuje <a href="https://help.github.com/articles/github-flavored-markdown/"> oznaczenia Github </a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Ograniczenie do użytkowników',
    'full_multiple_companies_support_text' => 'Wsparcie dla wielu firm',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'opcjonalny',
    'per_page'                  => 'Wyników na stronie',
    'php'                       => 'Wersja PHP',
    'php_gd_info'               => 'Aby wyświetlić kody QR wymagana jest instalacja php-gd, sprawdź instrukcję.',
    'php_gd_warning'            => 'PHP Image Processing i GD plugin nie są zainstalowane.',
    'pwd_secure_complexity'     => 'Złożoności haseł',
    'pwd_secure_complexity_help' => 'Wybierz dowolną regułę złożoności hasła, którą chcesz wymusić.',
    'pwd_secure_min'            => 'Minimalne znaki hasła',
    'pwd_secure_min_help'       => 'Minimalna dozwolona wartość to 5',
    'pwd_secure_uncommon'       => 'Zapobieganie wspólnym hasłom',
    'pwd_secure_uncommon_help'  => 'Uniemożliwi to użytkownikom używanie wspólnych haseł z 10 000 haseł zgłaszanych z naruszeniem.',
    'qr_help'                   => 'Aby użyć tej opcji odblokuj Kody QR',
    'qr_text'                   => 'Tekst kodu QR',
    'setting'                   => 'Ustawienie',
    'settings'                  => 'Ustawienia',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Zarchiwizowane zasoby',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Nazwa Witryny',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Kanał Slack',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Ustawienia Slack',
    'slack_integration_help'    => 'Integracja luzowa jest opcjonalna, jednakże punkt końcowy i kanał są wymagane, jeśli chcesz go używać. Aby skonfigurować integrację Slack, musisz najpierw <a href=":slack_link" target="_new">tworzyć przychodzący webhook</a> na swoim koncie Slack.',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Wersja Snipe-IT',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual.',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Informacje o Systemie',
    'update'                    => 'Ustawienia Aktualizacji',
    'value'                     => 'Wartość',
    'brand'                     => 'Nagłówek',
    'about_settings_title'      => 'O Ustawieniach',
    'about_settings_text'       => 'Te ustawienia pozwalają ci zmodyfikować najważniejsze szczegóły twojej instalacji.',
    'labels_per_page'           => 'Etykieta per strona',
    'label_dimensions'          => 'rozmiar etykiety',
    'next_auto_tag_base'        => 'Następny automatyczny przyrost',
    'page_padding'              => 'Margines strony (cale)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Wyczyść usunięte rekordy',
    'labels_display_bgutter'    => 'Etykieta z rynną dolną',
    'labels_display_sgutter'    => 'Etykieta z rynną boczną',
    'labels_fontsize'           => 'Rozmiar czcionki na etykiecie',
    'labels_pagewidth'          => 'Szerokość arkusza etykiety',
    'labels_pageheight'         => 'Wysokość arkusza etykiet',
    'label_gutters'        => 'Rozstaw etykiet (cale)',
    'page_dimensions'        => 'Margines strony (cale)',
    'label_fields'          => 'Widoczne póla etykiet',
    'inches'        => 'cale',
    'width_w'        => 'szerokość',
    'height_h'        => 'wysokość',
    'show_url_in_emails'                => 'Połącz się z Snipe-IT w wiadomościach e-mail',
    'show_url_in_emails_help_text'      => 'Usuń zaznaczenie tego pola, jeśli nie chcesz łączyć się z instalacją Snipe-IT w stopkach wiadomości e-mail. Przydatne, jeśli większość użytkowników nigdy nie loguje się.',
    'text_pt'        => 'piksel',
    'thumbnail_max_h'   => 'Max wysokość miniatur',
    'thumbnail_max_h_help'   => 'Maksymalna wysokość w pikselach, które miniatury mogą wyświetlać w widoku aukcji. Min 25, maks. 500.',
    'two_factor'        => 'Autoryzacja dwuskładnikowa',
    'two_factor_secret'        => 'Kod jednorazowy',
    'two_factor_enrollment'        => 'Rejestracja dwóch czynników',
    'two_factor_enabled_text'        => 'Włącz uwieżytelnianie dwuskładnikowe',
    'two_factor_reset'        => 'Zresetować dwuskładnikowy klucz',
    'two_factor_reset_help'        => 'Spowoduje to zmuszenie użytkownika do ponownego zapisu swojego urządzenia w usłudze Google Authenticator. Może to być przydatne, jeśli ich aktualnie zapisane urządzenie zostanie utracone lub skradzione.',
    'two_factor_reset_success'          => 'Dwa urządzenia współczynnikowe z powodzeniem zresetowane',
    'two_factor_reset_error'          => 'Nie udało się zresetować urządzenia',
    'two_factor_enabled_warning'        => 'Włączenie dwóch czynników, jeśli nie jest aktualnie włączone, natychmiast zmusi Cię do uwierzytelnienia przy użyciu urządzenia z certyfikatem Google Authentication. Będziesz mieć możliwość zapisania urządzenia, jeśli nie jest on aktualnie zapisany.',
    'two_factor_enabled_help'        => 'Włączy to uwierzytelnianie dwuskładnikowe za pomocą narzędzia Google Authenticator.',
    'two_factor_optional'        => 'Wybiórczo (Użytkownicy mogą włączyć lub wyłączyć jeśli posiadają uprawnienie)',
    'two_factor_required'        => 'Wymagane dla wszystkich użytkowników',
    'two_factor_disabled'        => 'Wyłączony',
    'two_factor_enter_code'	=> 'Wprowadź kod jednorazowy',
    'two_factor_config_complete'	=> 'Zatwierdź kod',
    'two_factor_enabled_edit_not_allowed' => 'Administrator nie zezwala na edycję tego ustawienia.',
    'two_factor_enrollment_text'	=> "Wymagane jest uwierzytelnianie dwóch elementów, ale urządzenie nie zostało jeszcze zapisane. Otwórz aplikację Google Authenticator i zeskanuj kod QR poniżej, aby zarejestrować urządzenie. Po zarejestrowaniu urządzenia wprowadź poniższy kod",
    'require_accept_signature'      => 'Wymagany podpis',
    'require_accept_signature_help_text'      => 'Włączając tę funkcjonalność wymusza się na użytkownikach fizycznego podpisania przyjęcia aktywa.',
    'left'        => 'lewo',
    'right'        => 'prawo',
    'top'        => 'góra',
    'bottom'        => 'dół',
    'vertical'        => 'pionowy',
    'horizontal'        => 'poziomy',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Długość znaczników zasobów, w tym zerofill',
);
