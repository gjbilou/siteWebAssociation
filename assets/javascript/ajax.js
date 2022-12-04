const section = document.querySelector('body main section:last-of-type')

const h2 = document.createElement('h2')
const img = document.createElement('img')
const p = document.createElement('p')
section.appendChild(h2)
section.appendChild(img)
section.appendChild(p)
img.style.display = "none";
document.querySelector("button").addEventListener("click", async function () {
  // requête de type AJAX
  
  // console.log('avant la requête')

  try {
    img.style.display = "inline";

    const response = await fetch("assets/php/requestAjax.php");
    const data = await response.json();
    const url = document.URL;
    var newUrl = url.split("=");
    // console.log(newUrl);
    if (newUrl.length == 2 && newUrl[1] === "fr") {
      const response1 = await fetch("assets/php/langAJAX.php");

      const lang = await response1.json();
      // console.log(lang);
      document.querySelector("main section p").innerHTML = lang["description"][data[0]]
      img.setAttribute("alt", lang["alt"][data[0]])
    }
    else
    {
      const response1 = await fetch("assets/php/langAJAX.php");
      const lang = await response1.json();
      document.querySelector("main section p").innerHTML = data[2];
      // img.setAttribute("alt", )
    }

    // console.log(data);
    document.querySelector("main section h2").innerHTML = data[1];
    document.querySelector("main section img").src =
      "assets/img/moviesToDisplay/" + data[3];
  } catch (error) {
    console.log(error);
  }
  // console.log('après la requête')
});
