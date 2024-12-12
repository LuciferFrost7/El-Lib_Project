<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>El-lib Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php" title="go to main page"><img class="img_logo" src="Images/Icon.png" alt="Sory, Image"></a></li>
        <li><img class="img_name" src="Images/Name.png" alt="Sory, Image"></li>
        <li class="citata"><?php
            $citats = array('А судьи кто?' => '5', 'Делить со всяким можно смех' => '5',
                'Злые языки страшнее пистолета' => '5', 'Природа не храм, а мастерская, и человек в ней работник' => '5',
                'Воспоминаний много, а вспомнить нечего' => '5', 'Или я не понял этой жизни, или она никуда не годится' => '5',
                'Мудрено и трудно жить просто!' => '5', 'Нет человека, который бы не умел чего-нибудь, ей богу нет!' => '5',
                'А разве нет удачи удалому?' => '5', 'Поп в гостях, черти на погосте' => '5',
                'Сражение выигрывает тот, кто твердо решил его выиграть!' => '5', 'Надо жить, надо любить, надо верить' => '5',
                'Есть такие же, как и мы, есть и хуже нас' => '5', 'При неудаче все кажется глупо!' => '5',
                'Ко всему-то подлец-человек привыкает!' => '5', 'Ну как же, как же без человека-то прожить!' => '5',
                'Страдание принять и искупить себя им, вот что надо' => '5', 'Я люблю сидеть низко — с низкого не так опасно падать' => '5',
                'Все будет правильно — на этом построен мир' => '5', 'Нет, говорят, своего-то ума. И, значит, живи век чужим' => '5');

            $newCitats = array();
            foreach ($citats as $key => $value)
            {
                $newCitats = array_merge($newCitats, array_fill(0, $value, $key));
            }

            echo $newCitats[array_rand($newCitats)];
            ?></li>
        <li>
            <div>
                <a href="login_form.php" class="label_login">Логин</a>
                <a href="reg_form.php" class="label_reg">Регистрация</a>
                <a href="account.php" class="label_account">Профиль</a>
                <img class="label_photo" width="90px" height="90px" alt="Sory, Image" src="Images/user_icon.png">
                <img class="Book_Loaded" src="Images/Book_Logined.png" alt="Sory, Image">
            </div>
        </li>
    </ul>
</nav>
</body>
</html>