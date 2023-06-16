<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet"
    />

    <style>


button {
  border: 0;
  padding: 0;
  background: transparent;
  cursor: pointer;   
  margin-:30px;
  
}

.navbar,
.navbar-burger,
.menu,
.background {
  position: fixed;
}



body.open .background {
  filter: blur(20px);
}

.navbar {
  z-index: 1;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: 72px;
  padding-left: 20px;
  padding-right: 72px;
  background: #19191c;
  color: #f9f9f9;
}

.navbar > button {
  font-size: 28px;
}

.navbar-logo {
  height: 25px;
}

.navbar-burger {
  z-index: 3;
  top: 0;
  right: 0;
  display: grid;
  place-items: center;
  width: 72px;
  height: 72px;
  background-image: url("./assets/menu.svg");
  background-repeat: no-repeat;
  background-position: center;
}

body.open .navbar-burger {
  background-image: url("./assets/close.svg");
}

.navbar-search {
  border: 0;
  height: 40px;
  background: #2f3339 url("assets/search.svg");
  background-repeat: no-repeat;
  background-position: 10px 50%;
  border: 0;
  border-radius: 6px;
  padding-left: 36px;
  width: 180px;
  font-size: 16px;
  font-family: "Euclid Circular A";
}

.navbar-search::placeholder {
  color: #a7a7a7;
}

.menu {
  z-index: 2;
  top: 0;
  left: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 32px;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  opacity: 0;
  visibility: hidden;
  transition: 0.5s;
}

body.open .menu {
  opacity: 1;
  visibility: visible;
}

.menu > a {
  color: #f9f9f9;
  font-size: 32px;
  font-family: "Euclid Circular A";
  text-decoration: none;
}

body.open .menu > a {
  animation: appear 0.3s both;
}

@keyframes appear {
  0% {
    opacity: 0;
    translate: 0 50px;
  }
  100% {
    opacity: 1;
  }
}

      </style>
</head>
   <header class="header" style="background: linear-gradient(39deg, rgba(2,0,36,1) 0%, rgba(28,20,26,1) 43%, rgba(0,138,255,1) 100%);">

   <div class="flex">
       <img style="width:50px;" src="cpu.png" alt=""/>
      <a style="text-decoration:none;" href="#" class="logo" style="">Circuit Central</a>


      

      <button style="text-decoration:none; !important" class="navbar-burger" onclick="toggleMenu()"></button>
         <nav style="text-decoration:none; !important" class="menu">
      <a href="index.php" style="animation-delay: 0.1s;text-decoration:none;">Log-Out</a>
        </nav>
  

   </div>

</header>
<script type="text/javascript">
      const toggleMenu = () => {
        document.body.classList.toggle("open");
      };
</script>
</body>
</html>
