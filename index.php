<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Currículum web</title>
</head>

<body>
    <?php include "navigationBar.php";?>
    <main class="container">
    <aside>
        <img src="img/fotoPerfil.jpeg" alt="" srcset="">
       <div class="personalInformation">
       <p><span>Name:</span> Gerardo Arturo Pérez Pérez</p>
        <p><a href="mailto:jerryperezperez@hotmail.com"><span>Email:</span> jerryperezperez@hotmail.com</a></p>
        
        <p><a href="https://github.com/jerryperezperez"><span>GitHub:</span> jerryperezperez</a></p>
        <p><span>Occupation:</span> Student at Instituto Tecnológico de Mérida</p>
        <p><span>Age:</span> 22 years old</p>
        <p><span>Location:</span> Mérida, Yucatán</p>  
       </div>

    </aside>
        <section id="about">
            <p>Programmer with knowledge in web development, machine learning and desktop application development.</p>
           
           <ul id="listExperience">
            <li class="itemExperience">Computer Systems Engineering student at Instituto Tecnológico de Mérida.</li>
          <li class="itemExperience">Student at Instituto Tecnológico de Mérida specializing in Artificial Intelligence.</li>
        <li class="itemExperience">XCBR Challenge 2022 Competitor for explanation Weather Forecasting model.</li>
        <li class="itemExperience">Active member in AAAIMX International Student Chapter.</li>
        </ul> 
        </section>   
    </main>
    <?php include "footer.php";?>

    <script src="js/script.js"></script>
</body>

</html>