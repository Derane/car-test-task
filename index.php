<!DOCTYPE html>
<html lang="en">
<head>
    <title>Добавить машину</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
<h1>Добавить машину</h1>
<form action="save_car.php" method="post">
    <label for="title">Название:</label>
    <input type="text" id="title" name="title" required><br>

    <label for="desc">Описание:</label>
    <textarea id="desc" name="desc" required></textarea><br>

    <label for="engine">Двигатель:</label>
    <input type="text" id="engine" name="engine" required><br>

    <label for="fuel">Топливо:</label>
    <input type="text" id="fuel" name="fuel" required><br>

    <label for="price">Цена:</label>
    <input type="text" id="price" name="price" required><br>

    <h2>Владельцы:</h2>
    <div id="owners">
        <div class="owner">
            <label for="owner_name_1">Имя владельца:</label>
            <input type="text" id="owner_name_1" name="owner_name[]" required>

            <label for="owner_age_1">Возраст владельца:</label>
            <input type="text" id="owner_age_1" name="owner_age[]" required>
        </div>
    </div>
    <button type="button" onclick="addOwner()">Добавить владельца</button>

    <button type="submit">Сохранить</button>
</form>
</body>
</html>