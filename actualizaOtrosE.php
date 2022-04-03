<html>
<?php

    $id = $_POST['id'];
    $TerapiaHormonal=$_POST['opTerapiaHormonal'];
    $PeriPostMenopausia=$_POST['opPeriPostMenopausia'];
    $ITS=$_POST['opITS'];
    $ApoyoViolencia=$_POST['opApoyoViolencia'];
    $PatologiaMamariaB=$_POST['opPatologiaMamariaB'];
    $CancerMamario=$_POST['opCancerMamario'];
    $Colposcopia=$_POST['opColposcopia'];
    $CancerCervicouterino=$_POST['opCancerCervicouterino'];

    $conectar = mysqli_connect("localhost","root","","retho");

//   echo $id."<br>";
//   echo $TerapiaHormonal."<br>";
//   echo $PeriPostMenopausia."<br>";
//   echo $ITS."<br>";
//   echo $ApoyoViolencia."<br>";
//   echo $PatologiaMamariaB."<br>";
//   echo $CancerMamario."<br>";
//   echo $Colposcopia."<br>";
//   echo $CancerCervicouterino."<br>";

    $_UPDATE_SQL="UPDATE otroseventos set 
                                            TerapiaHormonal='$TerapiaHormonal', 
                                            PeriPostMenopausia='$PeriPostMenopausia', 
                                            ITS='$ITS', 
                                            ApoyoViolencia='$ApoyoViolencia', 
                                            PatologiaMamariaB='$PatologiaMamariaB', 
                                            CancerMamario='$CancerMamario', 
                                            Colposcopia='$Colposcopia', 
                                            CancerCervicouterino='$CancerCervicouterino' WHERE IdPaciente=$id";
    mysqli_query($conectar,$_UPDATE_SQL);


    ?>
    <script language="JavaScript"> 
     window.location = 'paciente.php?id=<?php echo $id ?>';
    </script>
     
</html>