$(".star").click(function () {
  $(this).toggleClass("active");
});

$(".star").click(function () {
  $(".debris").toggleClass("trans");
});

window.addEventListener("resize", menu);

function menu() {
  var navigation = document.querySelector('.navigation');
  var w = document.documentElement.clientWidth;
  var navButton = document.getElementById('NavbarButton');
  var navButtonItem = document.getElementById("navbarSupportedContent");
  if (w < 1800) {
    navigation.classList.remove('active');
    navigation.classList.add('inactive')

  } else {
    navigation.classList.remove('inactive');
    navigation.classList.add('active')
  }
  if (w > 991) {
    navigation.classList.remove('navigation1');
    navButton.classList.add('collapsed');
    navButton.ariaExpanded = false;
    navButtonItem.classList.remove('show');


  }



}

function nav() {
  var navButton = document.getElementById('NavbarButton');
  var navigation = document.querySelector('.navigation');



  if ((navButton.className == 'navbar-toggler col-sm-2 col-xs-2 col-text-center collapsed')) {

    navigation.classList.remove('navigation1');
  }
  if (!(navButton.className == 'navbar-toggler col-sm-2 col-xs-2 col-text-center collapsed')) {

    navigation.classList.add('navigation1');
  }


}



//add active class in selected list item
let list = document.querySelectorAll('.list'); //nodelist (60)45
//let div (class/id);//crear classe para los forms que van a ese menu.(.menu1)(crear una clase[.esconder clase] :display none )
//display:relative

for (let i = 0; i < list.length; i++) {
  list[i].onclick = function () {
    let menus = document.querySelectorAll('.ocultar');
    let j = 0;
    while (j < list.length) {

      list[j].className = 'list';
      menus[j].className = 'ocultar';
      j++;

    }

    list[i].className = 'list active';
    menus[i].className = 'ocultar menu-active';





  }
}

function radio() {
  var radio = document.querySelectorAll('.radioForm6');
  var radioDiv = document.querySelectorAll('.radioDiv');


  for (var i = 0; i < radio.length; i++) {
    if (radio[i].checked) {
      radioDiv[i].classList.add('Divbackground');
      console.log(i);
      if (i == 0) {

        var newElement = `<div id="detallesplan1" class="row">
              <div>
                  <h1>TEXTO 1</h1>
                  <p>Plan GENIUS</p>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor
                  sit<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor
                  sit
              </div>
              <br>
              <div>
                  <p><br>Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                      consectetuer
                      adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                      laoreet
                      dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                      veniam,
                      quis
                      nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                      aliquip
                      ex
                      ea
                      commodo consequat. Duis autem vel eum iriure dolor.</p>
                  <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed
                      diam
                      nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                      erat.
                  </p>
              </div>
          </div>`;
        document.getElementById("detallesplan").innerHTML = newElement;
        document.getElementById("geniusPrecio").innerHTML = "160€";


      }
      if (i == 1) {


        var newElement = `<div id="detallesplan1" class="row">
              <div>
                  <h1>TEXTO 2</h1>
                  <p>Plan WISE</p>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor
                  sit<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor
                  sit
              </div>
              <br>
              <div>
                  <p><br>Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                      consectetuer
                      adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                      laoreet
                      dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                      veniam,
                      quis
                      nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                      aliquip
                      ex
                      ea
                      commodo consequat. Duis autem vel eum iriure dolor.</p>
                  <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed
                      diam
                      nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                      erat.
                  </p>
              </div>
          </div>`;
        document.getElementById("detallesplan").innerHTML = newElement;
        document.getElementById("geniusPrecio").innerHTML = "200€";


      }
      if (i == 2) {


        var newElement = `<div id="detallesplan1" class="row">
              <div>
                  <h1>TEXTO 3</h1>
                  <p>Plan SMART</p>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor
                  sit<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor
                  sit
              </div>
              <br>
              <div>
                  <p><br>Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                      consectetuer
                      adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                      laoreet
                      dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                      veniam,
                      quis
                      nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                      aliquip
                      ex
                      ea
                      commodo consequat. Duis autem vel eum iriure dolor.</p>
                  <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed
                      diam
                      nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                      erat.
                  </p>
              </div>
          </div>`;
        document.getElementById("detallesplan").innerHTML = newElement;
        document.getElementById("geniusPrecio").innerHTML = "220€";


      }
      if (i == 3) {


        var newElement = `<div id="detallesplan1" class="row">
              <div>
                  <h1>TEXTO 4</h1>
                  <p>Plan CLEVER</p>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor
                  sit<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem<br>
                  <ion-icon class="ticks md hydrated" name="checkmark-sharp" role="img" aria-label="checkmark sharp"></ion-icon>Lorem
                  ipsum
                  dolor
                  sit
              </div>
              <br>
              <div>
                  <p><br>Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                      consectetuer
                      adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                      laoreet
                      dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                      veniam,
                      quis
                      nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                      aliquip
                      ex
                      ea
                      commodo consequat. Duis autem vel eum iriure dolor.</p>
                  <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed
                      diam
                      nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                      erat.
                  </p>
              </div>
          </div>`;
        document.getElementById("detallesplan").innerHTML = newElement;
        document.getElementById("geniusPrecio").innerHTML = "260€";


      }
    } else {
      radioDiv[i].classList.remove('Divbackground');
    }
  }
}

function myDropDown(dropdown) {
  $('#myDropdown').toggle();
}

function myDropDown1(dropdown) {
  $('#myDropdown1').toggle();
}

function boton1() {

  let x = document.getElementById("form1");
  let y = document.getElementById("form2");
  if (x.style.display === "none") {

    x.style.display = "flex";
    y.style.display = "none";

  } else {
    x.style.display = "flex";
  }

}

function boton2() {
  let x = document.getElementById("form2");
  let y = document.getElementById("form1");
  if (x.style.display === "none") {
    x.style.display = "flex";
    y.style.display = "none";
  } else {
    x.style.display = "flex";

  }
}

function boton3() {

  let x = document.getElementById("form3");
  let y = document.getElementById("form4");
  if (x.style.display === "none") {
    x.style.display = "flex";
    y.style.display = "none";


  } else {
    x.style.display = "flex";
  }
}

function boton4() {
  let x = document.getElementById("form4");
  let y = document.getElementById("form3");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "block";

  }
}

function boton5() {

  let x = document.getElementById("form5");
  let y = document.getElementById("form6");
  if (x.style.display === "none") {
    x.style.display = "flex";
    y.style.display = "none";


  } else {
    x.style.display = "flex";
  }
}

function boton6() {
  let x = document.getElementById("form6");
  let y = document.getElementById("form5");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "block";

  }
}

function boton7() {

  let x = document.getElementById("form7");
  let y = document.getElementById("form8");
  let z = document.getElementById("form9");
  if (x.style.display === "none") {
    x.style.display = "flex";
    y.style.display = "none";
    z.style.display = "none";


  } else {
    x.style.display = "flex";
  }
}

function boton8() {
  let x = document.getElementById("form8");
  let y = document.getElementById("form7");
  let z = document.getElementById("form9");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
  } else {
    x.style.display = "block";

  }
}

function boton9() {

  let x = document.getElementById("form9");
  let y = document.getElementById("form8");
  let z = document.getElementById("form7");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";


  } else {
    x.style.display = "block";
  }
}