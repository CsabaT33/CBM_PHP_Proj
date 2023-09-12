<?php
if(isset($_POST["update"])){
    $kundenModel = new KundenModel();
    $kundenModel->updateKunden();
}
class KundenModel
{

    public function getAllKundenAsTable()
    {
        $sql = "SELECT * FROM kunden";
        try
            {
                $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
                $rueckgabe= $dbh->query($sql); 
                $erg = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);  
                
                echo '<table border="1" style="border-color: black;"  class="table table-hover">';
                echo "<td>ID:</td>";
                echo "<td>Vorname:</td>";
                echo "<td>Nachname:</td>";
                echo "<td>E-Mail:</td>";
                echo "<td>Straße:</td>";
                echo "<td>PLZ:</td>";
                echo "<td>Ort</td>";
                echo "<td></td>";
                echo "</td>";

                foreach($erg as $inhalt) 
                {
                    $kid = $inhalt['kid'];
                    echo "<tr>";
                    echo "<td>".$inhalt['kid']."</td>"; 
                    echo "<td>".$inhalt['vorname']."</td>";
                    echo "<td>".$inhalt['nachname']."</td>";
                    echo "<td>".$inhalt['email']."</td>";
                    echo "<td>".$inhalt['strasse']."</td>"; 
                    echo "<td>".$inhalt['plz']."</td>";    // Soll als hover ausgegeben werden
                    echo "<td>".$inhalt['ort']."</td>";
                    echo "<td> <form action='index.php?controller=kunden&action=KundenUpdate' method='post'>  <input type='hidden' name ='kid' value='$kid'> <input class='btn btn-dark' type='submit' value='Bearbeiten'></form>
                               <form action='index.php?controller=kunden&action=deleteKundenByID' method='post'>  <input type='hidden' name ='kid' value='$kid'> <input class='btn btn-dark' type='submit' value='Löschen'></form></td>";
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

    public function getKundenByID($id)
    {
        $sql = "SELECT * FROM kunden WHERE kid = $id";

        $kunden = array();

        try
            {
                $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
                $rueckgabe= $dbh->query($sql); 
                $erg = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);  
                

                foreach($erg as $inhalt) 
                {
                   $kunden['kid'] = $inhalt['kid']; 
                   $kunden['vorname'] = $inhalt['vorname'];
                   $kunden['nachname'] = $inhalt['nachname'];
                   $kunden['email'] = $inhalt['email'];
                   $kunden['strasse'] = $inhalt['strasse']; 
                   $kunden['plz'] = $inhalt['plz']; 
                   $kunden['ort'] = $inhalt['ort']; 
                }

                $dbh = null;


            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }

            return $kunden;
            
    }
    
    public function getKundenByName($name)
    {
        $sql = "SELECT * FROM kunden WHERE nachname = '$name'";

        $kunden = array();

        try
        {
            $dbh = new PDO("mysql:dbname=ccshop; host=localhost","root","");
            $rueckgabe= $dbh->query($sql); 
            $erg = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);  

        
            foreach($erg as $inhalt) 
            {
               $kunden['kid'] = $inhalt['kid']; 
               $kunden['vorname'] = $inhalt['vorname'];
               $kunden['nachname'] = $inhalt['nachname'];
               $kunden['email'] = $inhalt['email'];
               $kunden['strasse'] = $inhalt['strasse']; 
               $kunden['plz'] = $inhalt['plz']; 
               $kunden['ort'] = $inhalt['ort']; 
            }

            $dbh = null;

            return $kunden;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

        return null;   
    }

    public function insertKunden()
    {

        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];
        $email = $_POST['email'];
        $strasse = $_POST['strasse'];
        $plz = $_POST['plz'];
        $ort = $_POST['ort'];
 
        $sql = "INSERT INTO kunden (vorname, nachname, email, strasse, plz, ort)
        VALUES ('$vorname', '$nachname', '$email', '$strasse', '$plz', '$ort');";
        
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

    public function updateKunden()
    {
        $id = $_POST['kid'];
        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];
        $email = $_POST['email'];
        $strasse = $_POST['strasse'];
        $plz = $_POST['plz'];
        $ort = $_POST['ort'];
        
        $sql = "UPDATE kunden
        SET  vorname = '$vorname', nachname = '$nachname', email = '$email', strasse = '$strasse', plz = '$plz', ort = '$ort'
        WHERE kid = $id;";
        
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

    public function deleteKundenByID()
    {
        

        $id = $_POST['kid'];
        $sql = "DELETE FROM kunden WHERE kid = $id;";
        
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

