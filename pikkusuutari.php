<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="form.php" method="post">
            <br>
            <h3>Lapsen tiedot:</h3>
            <br>
            <div class="form-group">
                <label for="firstname">Etunimi:</label>
                <input type="text" name="first" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="lastname">Sukunimi:</label>
                <input type="text" name="last" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="hetu">Henkilöturvatunnus:</label>
                <input type="text" name="id" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="adress">Lähiosoite:</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="postcode">Postinumero</label>
                <input type="text" name="postcode" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="city">Postitoimipaikka:</label>
                <input type="text" name="city" class="form-control" required>
            </div> 
            
            <div class="form-group">
                <label for="county">Kunta:</label>
                <input type="text" name="county" class="form-control" required>
            </div>
            
            
                 <br>
            <h3>Huoltaja:</h3>
            <br>
            <div class="form-group">
                <label for="firstname">Etunimi:</label>
                <input type="text" name="a_first" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="lasttname">Sukunimi:</label>
                <input type="text" name="a_last" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="hetu">Henkilöturvatunnus:</label>
                <input type="text" name="a_id" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Sähköpostiosoite:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phonenumber">Puhelinnumero:</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="profession">Ammatti:</label>
                <input type="text" name="profession" class="form-control" required>
            </div> 
            
            <div class="form-group">
                <label for="job">Työpaikka:</label>
                <input type="text" name="job" class="form-control" required>
            </div>
            
          
            <br>
            <h3>Tiedot hoidosta:</h3>
                  <div class="form-group">
                <label for="date">Toivottu hoidon aloittamispäivämäärä:</label>
                <input type="date" name="date" class="form-control" required>
            </div> 
            
            <div class="form-group">
                <label for="dailyhours">Päivittäinen hoitoaika:</label>
                <input type="text" name="dailyhours" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="info">Lisätietoja(allergiat, sairaudet yms.):</label>
                <textarea name="info" class="form-control" required></textarea>
            </div>
            
                 <br>
            
            <br> 
            <button type="submit" name="submit" class="btn btn-primary">Lähetä</button>
            
            <br>

        </form>
    </div>
</body>

</html>
