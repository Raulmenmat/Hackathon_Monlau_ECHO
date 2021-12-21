<?php  	
/*
  $name=basename(__FILE__); 
  if(isset($_POST['actionSubmit'])){
    $name=str_replace("View","Model",$name); 
	print("<br>-----------------".$name."<br>");
    require "./Model/".$name;
    $name=str_replace(".php","",$name);   
    $c = new $name();
    }else{}
    if(isset($_POST['actionSubmit2'])){
        $name=str_replace("View","Model",$name); 
        print("<br>-----------------".$name."<br>");
        require "./Model/".$name;
        $name=str_replace(".php","",$name);   
        $c = new $name();
    }else{} */

            
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" href="css/nav.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>User Panel</title>
        </head>

        <body onload="menu()" class="colorbody">
            <section>
                <nav class="navbar navbar-expand-lg navbar-light NavBackground">
                    <div class="container-fluid row row-cols-4 col-lg-12 col-dm-12">
                        <!---------------------NAVBAR 12 Cols---------------------->

                        <!---------------------[LOGO] 2 Cols---------------------->

                        <a class=" d-flex col-4 col-lg-2 col-md-4 col-xs-4 align-items-center "
                        style="text-decoration:none ; color: green;">
                        <h1 style="font-size: 2.5vw;">NUWE</h1>
                    </a>

                    <a class="d-lg-none col-sm-6 col-xs-6 "></a>

                    <button id="NavbarButton" onclick="nav()" class="navbar-toggler col-sm-2 col-xs-2 col-text-center"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <!-------[MENU] 10 Cols--(Al entrar en un col de 10 volvemos a tener 12 cols)--------------->
                <div class="collapse col-lg-10 col-md-10 navbar-collapse navbar-expand-lg"
                id="navbarSupportedContent">

                <ul class="navbar-nav centrado col-lg-12 me-auto mb-3 mb-lg-0">
                    <!------------[col-1]---------STORE---------------------->
                    <li class="nav-item col-lg-1 col-md-5 ml-4 ">
                        <a class="nav-link h5  active text-center" aria-current="page" href="#">Store</a>
                    </li>
                    <!------------[col-3]---------SEARCH---------------------->
                    <li class="nav-item col-lg-3 col-md-1">
                        <form class="  search-box  d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                            <input id="search" type="search" placeholder="Search anything "
                            class="search-input   ">

                            <a href="#" class="search-btn  ">
                                <ion-icon name="search-outline">
                                </a>
                            </form>
                        </li>
                        <!-------------[col-5]----COL VACIO PARA ESPACIADO--------->
                        <li class="col-lg-7 col-md-0">
                            <div></div>
                        </li>
                        <!-------------[col-3]----USER--------->
                        <li class="nav-item  dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                            class="rounded-circle" height="50" alt="" loading="lazy">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

<section>

    <!------------------------FORMS[COL-10]-------------------------------->
    <div class="col-12" style="padding: 50px;">

        <section id="1" class="ocultar menu-active">
            <!--Form 1-->
            <div class="container-fluid mt-5">

                <div class="row" id="form1">
                    <form action="adduser.php" method="post">
                        <div class="row ">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <h2 class="formh2">Datos personales</h2>
                                <div class="colorform border">


                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nombre </label>
                                        <input type="text" require class="form-control" name="Name" id="fullname"
                                        placeholder="Introduce nombre completo">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fullname"  class="form-label">Apellidos</label>
                                        <input type="text" require class="form-control" name="Surname" id="surname"
                                        placeholder="Introduce nombre completo">
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthdate"  class="form-label">Fecha de nacimiento</label>
                                        <input type="date" require class="form-control" name="Birthdate" id="birthdate">
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <h2 class="formh2">Dirección</h2>
                                <div class="colorform border">

                                    <div class="mb-3">
                                        <label for="pais" class="form-label">País</label>
                                        <select class="form-select" require name="Country" id="pais">
                                            <option value="AF">Afganistán</option>
                                            <option value="AL">Albania</option>
                                            <option value="DE">Alemania</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antártida</option>
                                            <option value="AG">Antigua y Barbuda</option>
                                            <option value="AN">Antillas Holandesas</option>
                                            <option value="SA">Arabia Saudí</option>
                                            <option value="DZ">Argelia</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaiyán</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrein</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BE">Bélgica</option>
                                            <option value="BZ">Belice</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermudas</option>
                                            <option value="BY">Bielorrusia</option>
                                            <option value="MM">Birmania</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BA">Bosnia y Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BR">Brasil</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="BT">Bután</option>
                                            <option value="CV">Cabo Verde</option>
                                            <option value="KH">Camboya</option>
                                            <option value="CM">Camerún</option>
                                            <option value="CA">Canadá</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CY">Chipre</option>
                                            <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comores</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">República Democrática del Congo</option>
                                            <option value="KR">Corea</option>
                                            <option value="KP">Corea del Norte</option>
                                            <option value="CI">Costa de Marfíl</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croacia (Hrvatska)</option>
                                            <option value="CU">Cuba</option>
                                            <option value="DK">Dinamarca</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egipto</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="AE">Emiratos Árabes Unidos</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="SI">Eslovenia</option>
                                            <option value="ES" selected>España</option>
                                            <option value="US">Estados Unidos</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Etiopía</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="PH">Filipinas</option>
                                            <option value="FI">Finlandia</option>
                                            <option value="FR">Francia</option>
                                            <option value="GA">Gabón</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GD">Granada</option>
                                            <option value="GR">Grecia</option>
                                            <option value="GL">Groenlandia</option>
                                            <option value="GP">Guadalupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GY">Guayana</option>
                                            <option value="GF">Guayana Francesa</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GQ">Guinea Ecuatorial</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="HT">Haití</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HU">Hungría</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IQ">Irak</option>
                                            <option value="IR">Irán</option>
                                            <option value="IE">Irlanda</option>
                                            <option value="BV">Isla Bouvet</option>
                                            <option value="CX">Isla de Christmas</option>
                                            <option value="IS">Islandia</option>
                                            <option value="KY">Islas Caimán</option>
                                            <option value="CK">Islas Cook</option>
                                            <option value="CC">Islas de Cocos o Keeling</option>
                                            <option value="FO">Islas Faroe</option>
                                            <option value="HM">Islas Heard y McDonald</option>
                                            <option value="FK">Islas Malvinas</option>
                                            <option value="MP">Islas Marianas del Norte</option>
                                            <option value="MH">Islas Marshall</option>
                                            <option value="UM">Islas menores de Estados Unidos</option>
                                            <option value="PW">Islas Palau</option>
                                            <option value="SB">Islas Salomón</option>
                                            <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                            <option value="TK">Islas Tokelau</option>
                                            <option value="TC">Islas Turks y Caicos</option>
                                            <option value="VI">Islas Vírgenes (EEUU)</option>
                                            <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                            <option value="WF">Islas Wallis y Futuna</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italia</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japón</option>
                                            <option value="JO">Jordania</option>
                                            <option value="KZ">Kazajistán</option>
                                            <option value="KE">Kenia</option>
                                            <option value="KG">Kirguizistán</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="LA">Laos</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LV">Letonia</option>
                                            <option value="LB">Líbano</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libia</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lituania</option>
                                            <option value="LU">Luxemburgo</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MY">Malasia</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MV">Maldivas</option>
                                            <option value="ML">Malí</option>
                                            <option value="MT">Malta</option>
                                            <option value="MA">Marruecos</option>
                                            <option value="MQ">Martinica</option>
                                            <option value="MU">Mauricio</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">México</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MD">Moldavia</option>
                                            <option value="MC">Mónaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Níger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk</option>
                                            <option value="NO">Noruega</option>
                                            <option value="NC">Nueva Caledonia</option>
                                            <option value="NZ">Nueva Zelanda</option>
                                            <option value="OM">Omán</option>
                                            <option value="NL">Países Bajos</option>
                                            <option value="PA">Panamá</option>
                                            <option value="PG">Papúa Nueva Guinea</option>
                                            <option value="PK">Paquistán</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Perú</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PF">Polinesia Francesa</option>
                                            <option value="PL">Polonia</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="UK">Reino Unido</option>
                                            <option value="CF">República Centroafricana</option>
                                            <option value="CZ">República Checa</option>
                                            <option value="ZA">República de Sudáfrica</option>
                                            <option value="DO">República Dominicana</option>
                                            <option value="SK">República Eslovaca</option>
                                            <option value="RE">Reunión</option>
                                            <option value="RW">Ruanda</option>
                                            <option value="RO">Rumania</option>
                                            <option value="RU">Rusia</option>
                                            <option value="EH">Sahara Occidental</option>
                                            <option value="KN">Saint Kitts y Nevis</option>
                                            <option value="WS">Samoa</option>
                                            <option value="AS">Samoa Americana</option>
                                            <option value="SM">San Marino</option>
                                            <option value="VC">San Vicente y Granadinas</option>
                                            <option value="SH">Santa Helena</option>
                                            <option value="LC">Santa Lucía</option>
                                            <option value="ST">Santo Tomé y Príncipe</option>
                                            <option value="SN">Senegal</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leona</option>
                                            <option value="SG">Singapur</option>
                                            <option value="SY">Siria</option>
                                            <option value="SO">Somalia</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="PM">St Pierre y Miquelon</option>
                                            <option value="SZ">Suazilandia</option>
                                            <option value="SD">Sudán</option>
                                            <option value="SE">Suecia</option>
                                            <option value="CH">Suiza</option>
                                            <option value="SR">Surinam</option>
                                            <option value="TH">Tailandia</option>
                                            <option value="TW">Taiwán</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TJ">Tayikistán</option>
                                            <option value="TF">Territorios franceses del Sur</option>
                                            <option value="TP">Timor Oriental</option>
                                            <option value="TG">Togo</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad y Tobago</option>
                                            <option value="TN">Túnez</option>
                                            <option value="TM">Turkmenistán</option>
                                            <option value="TR">Turquía</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UA">Ucrania</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistán</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="YE">Yemen</option>
                                            <option value="YU">Yugoslavia</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabue</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="codigopostal" class="form-label">Código Postal</label>
                                        <input type="text" require class="form-control" name="PostalNumber"
                                        id="codigopostal" placeholder="Introduce código postal">
                                    </div>

                                    <div class="mb-3">
                                        <label for="direccion" class="form-label">Dirección</label>
                                        <textarea class="form-control" require name="Address" id="direccion"
                                        placeholder="Introduce direccion completa"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 div3">
                                <h2 class="formh2">Contacto</h2>
                                <div class="colorform border personalWidth">

                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <input type="number" require name="PhoneNumber" class="form-control" id="telefono"
                                        pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Ej. 555 555 555"
                                        maxlength="9">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" require name="Email" class="form-control" id="email"
                                        placeholder="ejemplo@mail.com">
                                    </div>
                                    <div class="form-group "
                                    style="width:200px; margin-left:30%;margin-top:10%;">
                                    <button type="submit" name="actionSubmit"
                                    class="form-control btn btn-primary submit px-3">SAVE</button>
                                </div>


                            </div>
                        </div>
                    </form>
                    <div class="col-lg-4 col-md-12 col-sm-12 div3  mt-5">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 div3  mt-5">

                        <div class="colorform border personalWidth " style="heigh:150px;">
                            <form action="deleteuser.php" method="post">
                                <h2 class="formh2">Borrar Datos</h2>
                                <div class="colorform border personalWidth">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="Email" require class="form-control" id="email"
                                        placeholder="ejemplo@mail.com">
                                    </div>
                                    <div class="form-group " style="width:200px; margin-left:30%;;">
                                        <button type="submit" name="actionSubmit2"
                                        class="form-control btn btn-primary submit px-3">DELETE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 div3">

                        <form action="visualizar.php" method="post">
                        <h2 class="formh2">Visualizar Datos</h2>

                        <div class="colorform border personalWidth ">



                            <div class="mb-3 overflow-auto" style="height:200px">
                                <?php 
                                /*echo();*/
                                ?>



                            </div>


                            <div class="form-group "
                            style="width:200px; margin-left:30%;margin-top:10%;">
                            <button type="submit" name="actionSubmit"
                            class="form-control btn btn-primary submit px-3">VISUALIZAR</button>
                        </div>
                        </form>



                    </div>



                </div>

            </div>

        </div>




    </section>

</div>
</div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/scripts.js"></script>
</section>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>