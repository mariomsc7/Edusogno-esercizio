<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit-icons.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="uk-container">
    <h2>Info utente</h2>
    <form action="php/user.php" method="POST">
        <fieldset class="uk-fieldset">

            <div class="uk-margin">
                <label for="name">Nome</label>
                <input class="uk-input" type="text" placeholder="Nome" name="name" id="name" required>
            </div>
            <div class="uk-margin">
                <label for="lastname">Cognome</label>
                <input class="uk-input" type="text" placeholder="Cognome" name="lastname" id="lastname" required>
            </div>
            <div class="uk-margin">
                <label for="email">Email</label>
                <input class="uk-input" type="email" placeholder="Email" name="email" id="email" required>
            </div>
            <input type="submit" value="Submit">
        </fieldset>
        
    </form>

    <h2>Info evento</h2>
    <form action="php/event.php" method="POST">
        <fieldset class="uk-fieldset">

            <div class="uk-margin">
                <label for="event_name">Nome evento</label>
                <input class="uk-input" type="text" placeholder="Nome evento" name="event_name" id="event_name" required>
            </div>
            <div class="uk-margin">
                <label for="event_description">Descrizione evento</label>
                <textarea class="uk-textarea" rows="5" placeholder="Descrizione evento" name="event_description" id="event_description" required></textarea>
            </div>
            <div class="uk-margin">
                <label for="event_date">Data evento</label>
                <input class="uk-input" type="date" placeholder="Data evento" name="event_date" id="event_date" required>
            </div>
            <div class="uk-margin">
                <label for="event_time">Orario evento</label>
                <input class="uk-input" type="time" placeholder="Orario evento" name="event_time" id="event_time" required>
            </div>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    </div>
    
</body>
</html>