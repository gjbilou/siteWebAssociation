<header>
    <nav>
      <ul>
        <li><img src="assets/img/logoAssociation.svg" alt="Association logo representing a drawn photographic film" /></li>
        <li><a href="index.php"><img src="assets/img/homePage.svg" alt="icon d'une maison representant la page principale"></a></li>
        <li><a href="search.php"><img src="assets/img/search-svgrepo-com.svg" alt="icon representant une loupe"></a></li>
        <li><a href="signIn.php"><img src="assets/img/admin1.svg" alt="icon representant un logo d'un utilisateur"></a></li> 
        <li><a href="<?php
          if (is_null($pof) == false) {
            echo($url.$page."?lang=fr&pof=".$pof);
          }
          else
          {
            echo($url.$page."?lang=fr");
          }
        ?>"><img src="assets/img/frenchFlag.svg" alt="flag francais"></a></li>
        <li><a href="<?php
          if (is_null($pof) == false) {
            echo($url.$page."?lang=en&pof=".$pof);
          }
          else
          {
            echo($url.$page."?lang=en");
          }
        ?>"><img src="assets/img/englishFlag.svg" alt="flag anglais"></a></li>
      </ul>
    </nav>
  </header>