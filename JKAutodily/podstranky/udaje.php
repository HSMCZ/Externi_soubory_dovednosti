<h2>Zadejte údaje k doručení</h2>
     
      <form method="post" action="index.php?stranka=potvrzeni">  
        Jméno: <input type="text" name="jmeno" value="">
        <br><br>
        Příjmení: <input type="text" name="prijmeni" value="">
        <br><br>
        E-mail: <input type="text" name="email" value="">
        <br><br>
        Město: <input type="text" name="mesto" value="">
        <br><br>
        Ulice a č.p.: <input type="text" name="ulice" value="">
        <br><br>
        Poznámky: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Trasa:
        <input type="radio" name="trasa" value="TrasaA">Trasa A
        <input type="radio" name="trasa" value="TrasaB">Trasa B
        <input type="radio" name="trasa" value="TrasaC">Trasa C
        <input type="radio" name="trasa" value="TrasaD">Trasa D 
        <br><br>
        
        <input type="submit" name="submit" value="Odeslat">  
      </form>