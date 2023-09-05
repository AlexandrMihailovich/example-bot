<?php
function getTextsArray()
{
    return [
        'exit_command_qustion' => 'Вы точно хотите отменить заполнение анкеты?',
        'exit_command_yes' => 'Да',
        'exit_command_no' => 'Нет',
        'exit_command_approve' => 'Вы всегда можете заполнить анкету заново, для этого отправьте команду /start',
        'exit_command_cancle' => '✅',

        'command_start_des' => 'Начать заполнение анкеты',
        'command_exit_des' => 'Отменить заполнение анкеты',

        'state_0' => 'Привет @user_name 😻 Мы рады, что ты хочешь присоединиться к нашей команде. Скорее заполняй анкету и присылай. ' . PHP_EOL .
            PHP_EOL . '🔥 Выбери вакансию:',
        'state_0_selected' => 'Готово',

        'state_1' => '🔥 Напишите имя и фамилию:',

        'state_2' => '🔥 Ваш возраст:',
        'state_2_help' => 'Введите число',

        'state_3' => '🔥 Ваш рост:',
        'state_3_help' => 'Введите число',

        'state_4' => '🔥 В каком городе вы живете:',

        'state_5' => '🔥 Расскажите о вашем предыдущем опыте работы:',

        'state_6' => '🔥 Расскажите о себе:',

        'state_7' => '🔥 Занятость на данный момент:',

        'state_8' => '🔥 Ваше фото и/или видео:',
        'state_8_skip' => 'Пропустить',
        'state_8_complete' => 'Готово',
        'state_8_help' => 'Напишите "Готово" или загрузите ещё файлы',

        'state_9' => '🔥 Ваш номер телефона:',
        'state_9_keyboard' => 'Отправить номер телефона',

        'state_10' => '🔥 Рассматриваете ли вы эту работу как подработку или основную?',

        'state_11' => '🔥 ссылка на ВКонтакте(vk.com):',

        'output' => 'Входящая заявка:' . PHP_EOL .
            PHP_EOL . '<b>Пользователь:</b> @user_name' . PHP_EOL .
            '<b>ID Пользователя:</b> <code>user_id</code>' . PHP_EOL .

            PHP_EOL . '✅ <b>Вакансия: position</b>' .
            PHP_EOL . '✅ <b>ФИО:</b> surname' .
            PHP_EOL . '✅ <b>Возраст:</b> age' .
            PHP_EOL . '✅ <b>Рост:</b> height' .
            PHP_EOL . '✅ <b>Город:</b> location' .
            PHP_EOL . '✅ <b>Контакты:</b> phone_number' .
            PHP_EOL . '✅ <b>О себе:</b> about' .
            PHP_EOL . '✅ <b>Опыт работы:</b> experience' .
            PHP_EOL . '✅ <b>Занятость:</b> employment' .
            PHP_EOL . '✅ <b>Ищу:</b> sidejob' .
            PHP_EOL . '✅ <b>VK:</b> vk',

        'output_user' => 'Отлично 👍 ваша анкета отправлена.' . PHP_EOL .

            PHP_EOL . '✅ <b>Вакансия: position</b>' .
            PHP_EOL . '✅ <b>ФИО:</b> surname' .
            PHP_EOL . '✅ <b>Возраст:</b> age' .
            PHP_EOL . '✅ <b>Рост:</b> height' .
            PHP_EOL . '✅ <b>Город:</b> location' .
            PHP_EOL . '✅ <b>Контакты:</b> phone_number' .
            PHP_EOL . '✅ <b>О себе:</b> about' .
            PHP_EOL . '✅ <b>Опыт работы:</b> experience' .
            PHP_EOL . '✅ <b>Занятость:</b> employment' .
            PHP_EOL . '✅ <b>Ищу:</b> sidejob' .
            PHP_EOL . '✅ <b>VK:</b> vk' .
            // PHP_EOL . '' .
            PHP_EOL . '',


        // 'command_exit_des' => '',
    ];
}

function getTextValue($key, $content = [])
{
    $texts = getTextsArray();
    $str = $texts[$key] ?? 'no value for key: ' . $key;
    $keys = array_keys($content);
    $values = array_values($content);
    return str_replace($keys, $values, $str);
}
