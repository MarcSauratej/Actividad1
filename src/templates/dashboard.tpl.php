<?php
include 'header.tpl.php';
?>
                    <li>
                        <a href="?url=home">Home</a>
                    </li>
                    <li>
                        <a href="?url=login">Logout</a>
                    </li>
            </ul>
</nav>
        </header>
        <main class="dash2">
            <div class="text1">
                <h2 class="title">WELCOME IN YOUR SITE</h2>
                <p class="title">For beautiful people. Just like you are</p>
            </div>  
        </main>
        <br><br>
        <section class="dsection">
            <div class="content">
                <h2 id='welcome' >Welcome aboard <?= $_SESSION['username'];  ?>!</h2>
                <h3>CUSTOMIZE YOUR SITE</h3>
                <div class="breadcrumb">
                <div><a href="?url=home">Home</a></div>/<div><a href="?url=home">Dashboard</a></div>
                <button onclick="myFunction()">Toggle dark mode</button>
                <button id="bt0">delete cookie</button>
            </div>
        <br>
        <section class='dashboard'>
            
        </section><button id="u">MISMO BOTON, QUE SE SUPONE QUE HACE LO MISMO PERO NO TIRA</button>
              <h2 id="lastLogin">Ultima Sesion: </h2>
            </div>
        </section>


  <script>
    function myFunction() {
     var element = document.body;
     element.classList.toggle("dark-mode");
    }

    //Ultimo Inicio de Sesion: dd/mm/yyyy HH:MM:SS
    let clock=document.getElementById("lastLogin");
    let u= document.getElementById("u");
    u.addEventListener("click",function(){
        <?php  $login = date('m-d-Y h:i:s a', time()); $lastlogin= $login;?>
        alert('<?php echo $login ?>');

    });
    clock.innerHTML= '<?php echo"ultima sesión: "+ $login ?>';
    //Ultimo Inicio de Sesion: dd/mm/yyyy HH:MM:SS
   /*let time;
    time= 

    clock.innerHTML+= time;
    console.log(time);*/

//CUIDADO QUE PETA(no se si peta pero probar si boton borra todas las cookies)
let bt0=document.getElementById("bt0");
      bt0.addEventListener('click',function() {
        
        document.cookie = "email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "passwd=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    });
      

</script>
    </body>
</html>