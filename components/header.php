<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.css'>";
    echo "<link rel='stylesheet' href='../styles/main.scss'>";
    echo "<link rel='stylesheet' href='../styles/auth.scss' >";
    echo "<style>
    .auth-list {
    max-width: 55rem;
    max-height: 40rem;
    grid-column-gap: 2rem;
    grid-template-columns: 17rem 17rem 17rem;
    grid-template-rows: repeat(autofit, min-content);
    box-shadow: 0.8rem 0.8rem 1.4rem var(--greyLight-2), -0.2rem -0.2rem 1.8rem var(--white);
    align-items: center;
    display: grid;
    padding: 4rem;
    grid-row-gap: 2rem;
    border-radius: 3rem;
    }
    </style>"
    ?>

    <title>Phonebook</title>
  </head>
  <body>
