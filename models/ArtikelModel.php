<?php
if(isset($_POST["update"])){
    $artikelModel = new ArtikelModel();
    $artikelModel->updateArtikel();
}


class ArtikelModel
{
    public function getAllArtikelAsTable()
    {
        $sql = "SELECT * FROM artikel";

        try
            {
                $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
                $rueckgabe= $dbh->query($sql); 
                $erg = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);  
                
                echo '<table border="1" style="border-color: black;"  class="table table-hover">';
                echo "<td>ID:</td>";
                echo "<td>Bild:</td>";
                echo "<td>Name:</td>";
                echo "<td>Kategorie:</td>";
                echo "<td>Beschreibung:</td>";
                echo "<td>Preis:</td>";
                echo "<td></td>";
                echo "</td>";

                foreach($erg as $inhalt) 
                {
                    $aid = $inhalt['aid'];
                    echo "<tr>";
                    echo "<td>".$inhalt['aid']."</td>"; 
                    echo "<td> <img class='bilder' width='100' height='100' src='".$inhalt['bilderURL']."'></td>";
                    echo "<td>".$inhalt['aname']."</td>";
                    echo "<td>".$inhalt['kategorie']."</td>"; 
                    echo "<td>".$inhalt['beschreibung']."</td>";    // Soll als hover ausgegeben werden
                    echo "<td>".$inhalt['preis']."</td>";
                    echo "<td> <form action='index.php?controller=artikel&action=ArtikelUpdate' method='post'>  <input type='hidden' name ='aid' value='$aid'> <input class='btn btn-dark' type='submit' value='Bearbeiten'></form>
                               <form action='index.php?controller=artikel&action=deleteArtikelByID' method='post'>  <input type='hidden' name ='aid' value='$aid'> <input class='btn btn-dark' type='submit' value='Löschen'> </form> </td>";
                    echo "</tr>";
                }

                echo "</table>";

                $dbh = null;

            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
            
    } 

    public function getArtikelByID($id)
    {
        $sql = "SELECT * FROM artikel WHERE aid = $id";

        $artikel = array();

        try
            {
                $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
                $rueckgabe= $dbh->query($sql); 
                $erg = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);  
                

                foreach($erg as $inhalt) 
                {
                   $artikel['aid'] = $inhalt['aid']; 
                   $artikel['aname'] = $inhalt['aname'];
                   $artikel['kategorie'] = $inhalt['kategorie'];
                   $artikel['beschreibung'] = $inhalt['beschreibung'];
                   $artikel['preis'] = $inhalt['preis']; 
                   $artikel['bilderURL'] = $inhalt['bilderURL']; 
                }

                $dbh = null;


            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }

            return $artikel;
            
    }

    public function getArtikelByName($name)
    {
        $sql = "SELECT * FROM artikel WHERE aname = '$name'";

        $artikel = array();

        try
        {
            $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
            $rueckgabe= $dbh->query($sql); 
            $erg = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);  

        
            foreach($erg as $inhalt) 
            {
                $artikel['aid'] = $inhalt['aid']; 
                $artikel['aname'] = $inhalt['aname'];
                $artikel['kategorie'] = $inhalt['kategorie'];
                $artikel['beschreibung'] = $inhalt['beschreibung'];
                $artikel['preis'] = $inhalt['preis']; 
                $artikel['bilderURL'] = $inhalt['bilderURL']; 
            }

            $dbh = null;

            return $artikel;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

        return null;   
    }

    public function getArtikelByKategorie($kategorie)
    {
        $sql = "SELECT * FROM artikel WHERE kategorie = '$kategorie'";

        try
            {
                $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
                $rueckgabe= $dbh->query($sql); 
                $erg = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);  
                
                echo '<table class="table table-hover">';
                echo "<td>ID:</td>";
                echo "<td>Bild:</td>";
                echo "<td>Name:</td>";
                echo "<td>Kategorie:</td>";
                echo "<td>Beschreibung:</td>";
                echo "<td>Preis:</td>";
                echo "</td>";

                foreach($erg as $inhalt) 
                {
                    $aid = $inhalt['aid'];
                    echo "<tr>";
                    echo "<td>".$inhalt['aid']."</td>";
                    echo "<td> <img class='bilder' width='100' height='100' src='".$inhalt['bilderURL']."'></td>";
                    echo "<td>".$inhalt['aname']."</td>";
                    echo "<td>".$inhalt['kategorie']."</td>"; 
                    echo "<td>".$inhalt['beschreibung']."</td>";    // Soll als hover ausgegeben werden
                    echo "<td>".$inhalt['preis']."</td>";
                    echo "<td> <form action='index.php?controller=artikel&action=ArtikelUpdate' method='post'>  <input type='hidden' name ='aid' value='$aid'> <input type='submit' class='btn btn-dark' value='Bearbeiten'></form>
                               <form action='index.php?controller=artikel&action=deleteArtikelByID' method='post'>  <input type='hidden' name ='aid' value='$aid'> <input type='submit' class='btn btn-dark' value='Löschen'> </form> </td>";
                    echo "</tr>";
                }

                echo "</table>";

            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
            
    } 

    public function insertArtikel()
    {
        
        $name = $_POST['aname'];
        $kategorie = $_POST['Kat'];
        $preis = $_POST['preis'];
        $bild = $_POST['bilderURL'];
        $beschreibung = $_POST['beschreibung'];
       
        $sql = "INSERT INTO artikel (aname, kategorie, preis, beschreibung, bilderURL)
        VALUES ('$name', '$kategorie', '$preis', '$beschreibung', '$bild');";
        
        try
        {
            $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
            $dbh->query($sql);  
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

    }

    public function updateArtikel()
    {

        $id = $_POST['aid'];
        $name = $_POST['aname'];
        $kategorie = $_POST['kategorie'];
        $preis = $_POST['preis'];
        $bild = $_POST['bilderURL'];
        $beschreibung = $_POST['beschreibung']; 
        
        $sql = "UPDATE artikel
        SET  aname = '$name', kategorie = '$kategorie', preis = $preis, bilderURL = '$bild', beschreibung = '$beschreibung' 
        WHERE aid = $id;";
        
        try
        {
            $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
            $dbh->query($sql); 
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function deleteArtikelByID()
    {
        

        $id = $_POST['aid'];
        $sql = "DELETE FROM artikel WHERE aid = $id;";
        
        try
        {
            $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
            $dbh->query($sql);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }  
}

