<?php
class Osoba{
    public $ime;     //ime korisnika
    public $godina; // godina starosti korisnika
    public $email; //email korisnika
    public $username; // username korisnika
    public $password; //password korisnika
    public $passwordconf;
    
    
    function __construct(){
    }

    function pretGod($godina){
        $year    = date("Y");
        $year    -= $godina;
        return $year;
    }

    function dodajKorisnika(){
        $korisnici=array(
            "Ime"=>$this->ime,
            "godina"=>$this->godina,
            "email"=>$this->email,
            "username"=>$this->username,
            "password"=>$this->password,
        );
        $file = fopen("Korisnici.txt","a+");
        while($element=each($korisnici)){
            $txt = $element['key'] . ":" . $element['value']." ";
            fwrite($file, $txt);
        }
        
        fclose($file);
    }

    //provera ispravnosti
    function proveraIspravnosti(){
        $status = false;
        if(!isset($_POST['imeR']) && !isset($_POST['mailR']) && !isset($_POST['datumR'])
         && !isset($_POST['usernameR']) && !isset($_POST['passwordR']) && empty($_POST['imeR']) && empty($_POST['mailR'])&&
          empty($_POST['datumR']) && empty($_POST['usernameR']) && empty($_POST['passwordR'])){
            $status = false;
        }else{
            $status = true;
        }
        return $status;
    }

    //provera ispravnosti

    //provera lozinke
    function proveraPass($password,$passwordconf){
        $status = false;
        if($passwordconf != $password){
            $status = false;
        }else{
            $status = true;
        }
        return $status;
    }

    //provera lozinke

    //registracija
    function registracija($ime,$godina,$email,$username,$password){
        $db = new mysqli('localhost','root','','oldtajmeri');
        if(mysqli_connect_errno()){
            echo "ERROR";
        }
        $rezultatR = $db->query("select * from korisnici where username = '$username';");
        if(!$rezultatR){
            throw new exception("Ne moze da se izvrsi upit !!!");
        }
        
        if($rezultatR->num_rows>0){
            echo "<script>alert('Vec imate nalog pod tim usernamemom');</script>";
        }elseif($rezultatR->num_rows <= 0){
            $rezultatRR = $db->query("INSERT INTO korisnici(ime,email,username,password,godina)
                VALUES('$ime','$email','$username','$password','$godina')");
            if(!$rezultatRR){
                throw new exception("Greska prilikom registracije !!!");
            }
        }
        $_SESSION['username']=$username;
        echo "<div id='alllogin'>";
        echo "<div class='logpap'>";
        echo "<legend>Registrovani ste! </legend>";
        echo "<p>
                Ime: ".$ime."<br/>
                Username: ".$username."<br/>
                Password: ".$password."<br/>
                Datum rodjenja: ".$godina."<br/>
            </p>";
        echo "<legend></legend>";
        echo "<p>Vreme registracije: ".date("Y-m-d H:i:s")."</p>";
        echo "</div>";
        echo "</div>";
        return true;
    }  
    //registracija


    //login
    function login($username,$password){

        if(isset($_POST['username']) && isset($_POST['password'])){ //ako je korisnik uneo username i password
            $username = $_POST['username'];//
            $password = $_POST['password'];

        $db = new mysqli('localhost','root','','oldtajmeri');
            if(mysqli_connect_errno()){
                echo "Greska pogresni podaci za bazu podataka !!";
                exit();
            }
            
            $loginQuery = "SELECT * FROM korisnici WHERE username = '$username' and password = '$password';";
            $rezultat = $db->query($loginQuery);
            if($rezultat->num_rows>0){
                while($row = $rezultat->fetch_assoc()){
                    $_SESSION['username']=$username;

                    echo "<p>
                        Ime: ".$row['ime']."<br/>
                        Username: ".$row['username']."<br/>
                        Password: ".$row['password']."<br/>
                        Datum rodjenja: ".$row['godina']."<br/>
                        Email: ".$row['email']."<br/>
                    </p>";
                    echo "<p>Vreme vaseg logovanja: ".date("Y-m-d H:i:s")."</p>";
                }
            }
            $db->close();
        }else{
            echo "niste uneli prave podatke";
        }
    //login
    }

    //kupujete 
    function kupujete($imeiprezime,$prebivaliste,$model,$modelCar,$telefon,$email,$username){
        $db = new mysqli('localhost','root','','oldtajmeri');
        if(mysqli_connect_errno()){
            throw new exception("GRESKA PRI POVEZIVANJU SA BAZOM !!!",18);
        }
        $searchQuery = "Select 
        *
        from 
        korisnici k inner join kupljeniautomobili ka
        on k.ID_korisnik = ka.ID_Korisnika
        inner join automobil a 
        on ka.ID_automobil = a.ID_automobil
        where 
        username='$username' and model='$model';";
        $rezultat = $db->query($searchQuery);
        if(!$rezultat){
            throw new exception("Greska, model ne postoji ",19);
        }
        if($rezultat->num_rows > 0){
            while($row = $rezultat->fetch_assoc()){
                //podaci iz baze za kola
                ob_start();
                echo "<legend>Uspesno ste kupili kola! </legend>";
                echo "<legend>Podaci o kolima:</legend>";
                echo "<b>Model:</b>" . $row['model']."<br/>";
                echo "<b>Marka:</b> ".$row['marka']."<br/>";
                echo "<b>Kubikaza:</b> ".$row['kubikaza']."<br/>";
                echo "<b>Konjaza:</b> ".$row['konjaza']."<br/>";
                echo "<b>Boja:</b> ".$row['boja']."<br/>";
                echo "<b>Godina proizvodnje:</b> ".$row['godina_proizvodnje']."<br/>";
                echo "<b>Broj vrata:</b> ".$row['broj_vrata']."<br/>";
                echo "<b>Gorivo:</b> ".$row['gorivo']."<br/>";
                echo "<b>Kilometraza:</b> ".$row['kilometraza']."<br/>";
                echo "<b>Cena:</b> ".$row['cena']."<br/>";
                //licni podaci
                echo "<b>Ime:</b> ".$imeiprezime."<br/>";
                echo "<b>Prebivaliste:</b> ".$prebivaliste."<br/>";
                echo "<b>Nacin placanja:</b> ".$modelCar."<br/>";
                echo "<b>Telefon:</b> ".$telefon."<br/>";
                echo "<b>Email:</b> ".$email."<br/>";

            }
        }elseif($rezultat->num_rows <= 0){
            $ID_korisnik;
            $ID_automobil;
            
            $datum = date("Y-m-d");
            $selectKorisnik = "Select * from korisnici where username ='$username';";
            $rezultat_select1 = $db->query($selectKorisnik);
            if(!$rezultat_select1){
                echo "Greska !!!";
            }
            if($rezultat_select1->num_rows > 0){
                while($row = $rezultat_select1->fetch_assoc()){
                    $ID_korisnik=$row['ID_korisnik'];
                }
            }
            $selectAutomobil = "Select * from automobil where model = '$model';";
            $rezultat_select2 = $db->query($selectAutomobil);
            if(!$rezultat_select2){
                echo "Greska !!!";
            }
            if($rezultat_select2->num_rows > 0){
                while($row = $rezultat_select2->fetch_assoc()){
                    $ID_automobil=$row['ID_automobil'];
                }
            }
            $insert1 = "INSERT INTO kupljeniautomobili(ID_Korisnika,ID_automobil,datum_kupljenog_vozila)VALUES('$ID_korisnik','$ID_automobil','$datum');";
            $rezultat_insert = $db->query($insert1);
            if(!$rezultat_insert){
                echo "Error: ".$sql."at".$db->error;
            }
            
            
        }
        
        $ispis = "Select * from automobil where model= '$model';";
        $ispisR = $db->query($ispis);
        if($ispisR->num_rows > 0){
            while($row = $ispisR->fetch_assoc()){
                ob_clean();
                echo "<legend>Uspesno ste kupili kola! </legend>";
                echo "<legend>Podaci o kolima:</legend>";
                echo "<b>Model:</b>" . $row['model']."<br/>";
                echo "<b>Marka:</b> ".$row['marka']."<br/>";
                echo "<b>Kubikaza:</b> ".$row['kubikaza']."<br/>";
                echo "<b>Konjaza:</b> ".$row['konjaza']."<br/>";
                echo "<b>Boja:</b> ".$row['boja']."<br/>";
                echo "<b>Godina proizvodnje:</b> ".$row['godina_proizvodnje']."<br/>";
                echo "<b>Broj vrata:</b> ".$row['broj_vrata']."<br/>";
                echo "<b>Gorivo:</b> ".$row['gorivo']."<br/>";
                echo "<b>Kilometraza:</b> ".$row['kilometraza']."<br/>";
                echo "<b>Cena:</b> ".$row['cena']."<br/>";
                //licni podaci
                echo "<b>Ime:</b> ".$imeiprezime."<br/>";
                echo "<b>Prebivaliste:</b> ".$prebivaliste."<br/>";
                echo "<b>Nacin placanja:</b> ".$modelCar."<br/>";
                echo "<b>Telefon:</b> ".$telefon."<br/>";
                echo "<b>Email:</b> ".$email."<br/>";    
            }
        }
        $selectKorisnik = "Select * from korisnici where username ='$username';";
        $rezultat_select1 = $db->query($selectKorisnik);
        if(!$rezultat_select1){
            echo "Greska !!!";
        }
        if($rezultat_select1->num_rows > 0){
            while($row = $rezultat_select1->fetch_assoc()){
                $ID_korisnik=$row['ID_korisnik'];
            }
        }
        
        $selectKorisnik1 = "Select * from popust where ID_korisnik = '$ID_korisnik';";
        $rezultatKorinik = $db->query($selectKorisnik1);
        if($rezultatKorinik->num_rows > 0){
            // pass
        }elseif($rezultat_select1->num_rows == 0){
            $insert2 = "INSERT INTO popust(ID_korisnik)Value('$ID_korisnik');";
            $rezultat_insert = $db->query($insert2);
            if(!$rezultat_insert){
                echo "Error: ".$sql."at".$db->error;
            }
        }
        $updateKorisnik = "update korisnici
        set Broj_kupljenih_vozila = Broj_kupljenih_vozila + 1
        where username = '$username';";
        $rezultatUpdate1 = $db->query($updateKorisnik);
        
        $updatePopust = 
        "Update popust p inner join korisnici k 
        on p.ID_korisnik = k.ID_korisnik
        set popusti = 
        case 
            when Broj_kupljenih_vozila > 5 and Broj_kupljenih_vozila < 10 then 20
            when Broj_kupljenih_vozila >= 10 then 30
        End
        where username = '$username';
        ";
        $rezultatUpdate2 = $db->query($updatePopust);
        if(!$rezultatUpdate2){
            echo "Greska".$sql."at".$db->error;
        }
        
        
        
    }// kraj funkcije kupujete 
    
    function autentifikacija($username,$password){
        $AUTH_USER = '$username';
        $AUTH_PASS = '$password';
        header('WWW-Authenticate: Basic realm="My Realm"');
        $has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
        $is_not_authenticated = (!$has_supplied_credentials||$_SERVER['PHP_AUTH_USER']!= $AUTH_USER||$_SERVER['PHP_AUTH_PW'] != $AUTH_PASS);
        if ($is_not_authenticated) {
            header('HTTP/1.1 401 Authorization Required');
            header('WWW-Authenticate: Basic realm="Access denied"');
            exit;
        }
            
    }
    function sortiranjePodataka(){
        $db = new mysqli('localhost','root','','oldtajmeri');
        if(mysqli_connect_errno()){
            throw new exception("Nesto nije uredu sa bazom,proverite podatke za konekciju");
        }
        $selectUpit4 = "SELECT * FROM automobili ORDER BY automobili.model ASC;";
        $rezultat_select_upit4 = $db->query($selectUpit4);
        if(!$rezultat_select_upit4){
            echo "Greska sa upitom !!! proverite da li ste uneli baze";
        }
        if($rezultat_select_upit4->num_rows>0){
            while($row = $rezultat_select_upit4->fetch_assoc()){
                $automobil = array(
                    "model"=>$row['model'],  
                    "marka"=>$row['marka'],  
                    "kubikaza"=>$row['kubikaza'],  
                    "konjaza"=>$row['konjaza'],  
                    "boja"=>$row['boja'],  
                    "godina Proizvodnje"=>$row['godina_proizvodnje'],  
                    "Broj vrata"=>$row['broj_vrata'],  
                    "gorivo"=>$row['gorivo'],  
                    "kilometraza"=>$row['kilometraza'],  
                    "cena"=>$row['cena'],  
                );
                $file = fopen("SortiraniAutomobili.json","a+");
                while($element = each($automobil)){
                    $txt = $element['key'].":".$element['value']."\r\n\r";
                    fwrite($file,$txt);
                }
                fclose($file);
            }
        }
    }
    
     function upisivanjeKolacica(){
        
        $datum = date("Y-m-d H:i:s");
        $korisnici=array( //pravljenje niza sa sting kljucevima
            "Username"=>$_COOKIE["username"], 
            "Datum logovanja"=>$datum,
        );
        $file = fopen("upis/KorisniciKolacici.json","a+"); // otvaranje fajla 
        while($element = each($korisnici)){ // proci kroz sve elemente
            $txt = $element['key'] . ":" . $element['value']."\r\n\r"; // za svaki kljuc upisi vrednost
            fwrite($file, $txt); // upisi u fajl
        }
        
        fclose($file); // ugasi fajl
    }
    
}
?>