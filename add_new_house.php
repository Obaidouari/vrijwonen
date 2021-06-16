<!-- aanmaak datum: 15/01/2021, 10:16. author: Mohamad Dian Bah
Revision history
0.1            00/00/2030  Mohamad Dian  update ect...-->
<!doctype html>
<html lang="nl">
  <head>
	  <title>Woning voegen</title>

	  <meta charset="UTF-8">
	  <meta name="description" content="In deze geweldige pagina kunt u allerlei revieuws toevoegen. U bent van harte welkom ...">
	  <meta name="keywords" content="Knowitall, review, gasten, welkom">
	  <meta name="author" content="Mohamad Dian Bah">
	  <meta name="robots" content="all">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="images/logos/logo-alleen.png" sizes="16x16">
	  <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <form action="./add_new_house_result.php" method="post" enctype="multipart/form-data"><role="form">
      <h2>Woning registreren</h2>
      <table>
        <tr>
    	    <td><input type="text" name="title" placeholder="Titel"></td>
    	  </tr>
        <tr>
    	    <td><input type="text" name="price" placeholder="Prijs"></td>
    	  </tr>
        <tr>
    	    <td><input type="text" name="address" placeholder="Adres"></td>
    	  </tr>
        <tr>
    	    <td><input type="text" name="postalcode" placeholder="Postcode"></td>
    	  </tr>
        <tr>
    	    <td><input type="text" name="place" placeholder="Plaats"></td>
    	  </tr>
        <tr>
    	    <td><textarea input type="text" name="description" placeholder="Omschijving*"></textarea></td>
    	  </tr>
        <tr>
    	    <td><b>Default Afbeelding kiezen: </b><input type="file" name="first_photo" accept="image/*"></td>
    	  </tr>
        <tr>
    	    <td><b>4 Afbeelding kiezen: </b></td>
          <td>
            <input type="file" name="photo_1" accept="image/*">
          </td>
          <td>
            <input type="file" name="photo_2" accept="image/*">
          </td>
          <td>
            <input type="file" name="photo_3" accept="image/*">
          </td>
          <td>
            <input type="file" name="photo_4" accept="image/*">
          </td>
        </tr>
          <!-- -----------start----Ligging------------------ -->
        <tr>
          <td>
            <h3>Ligging:</h3>
          </td>
          <td>
            <input type="checkbox" name="location[]" value="0">
            <label>-Dicht bij een bos.</label>
          </td>
          <td>
            <input type="checkbox" name="location[]" value="1">
            <label>-Dicht bij een stad.</label>
          </td>
          <td>
            <input type="checkbox" name="location[]" value="2">
            <label>-Dicht bij de zee.</label>
          </td>
          <td>
            <input type="checkbox" name="location[]" value="3">
            <label>-In het heuvelland.</label>
          </td>
          <td>
            <input type="checkbox" name="location[]" value="4">
            <label>-Aan het water.</label>
          </td>
        </tr>
        <!-- ----------einde-----Ligging------------------ -->
        <!-- ----------start-----Eigenschappen------------------ -->
        <tr>
          <td>
            <h3>Eigenschappen:</h3>
          </td>
          <td>
            <input type="checkbox" name="properties[]" value="0">
            <label>-Inclusief overname inventaris.</label>
          </td>
          <td>
            <input type="checkbox" name="properties[]" value="1">
            <label>-Zwembad op het park.</label>
          </td>
          <td>
            <input type="checkbox" name="properties[]" value="2">
            <label>-Winkel op het park.</label>
          </td>
          <td>
            <input type="checkbox" name="properties[]" value="3">
            <label>-Entertainment op het park.</label>
          </td>
          <td>
            <input type="checkbox" name="properties[]" value="4">
            <label>-Op een privepark.</label>
          </td>
        </tr>
        <tr>
          <td>
            <h3>Status:</h3>
          </td>
          <td>
            <input type="radio" name="status[]" value="0">
            <label>beschikbaar</label>
          </td>
          <td>
            <input type="radio" name="status[]" value="1">
            <label>verkocht</label>
          </td>
        </tr>
        <!-- ---------einde------Eigenschappen------------------ -->
    	  <tr>
    	    <td><input class="verzend-box" type="submit" name="submit" value="verzenden"></td>
    	  </tr>
      </table>
    </form>

  </body>
</html>
