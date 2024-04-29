<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anleitung</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .magazin ol,.magazin ul{font-family:"Times New Roman",Times,serif;font-size:20px;margin:1.56em 20px 0}.magazin ul,.magazin_paragraph,blockquote{letter-spacing:-.003em;line-height:28px}.link,.magazin a{text-decoration:underline}.magazin_headline,.magazin_paragraph,blockquote{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif}.no-border-blockquote{border-left:0 solid #000!important}blockquote{font-size:20px;margin:1.56em 0 0;background-color:#fafafa;color:#000;border-left:8px solid #000;padding:42px}.magazin ul{list-style-type:disc}.magazin a{cursor:pointer!important;transition:.4s}.magazin a:hover{opacity:.8}.magazin ol{letter-spacing:-.003em;line-height:30px}.magazin_paragraph{font-size:19px;font-weight:400;margin:1.56em 0 0!important}.magazin_headline{font-weight:600;margin:1.56em 0 1em!important;letter-spacing:0;font-size:44px}@media only screen and (max-width:767px){.magazin_headline{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:600;margin:1.56em 0 1em!important;letter-spacing:0;font-size:24px}.magazin ul{font-size:18px!important;line-height:28px}blockquote{padding:42px 28px;font-size:18px}.fix-12-12,.fix-8-12{padding-left:9px;padding-right:9px}.fix-10-12,.magazin{padding-right:0}.fix-10-12{padding-left:0}}.magazine2 ul{list-style-type:none;padding-left:0;margin-bottom:0!important}.magazine2 ul li strong{font-size:18px}.magazine2 ul li{line-height: 28px; margin:10px 0 5px 5px;padding:0 0 0 25px!important;font-size:19px; position: relative;}.magazine2 ul li:before{font-size: 24px;content:"\2022";color:#e08e69;display:inline-block;position: absolute;left: 0px;}.magazine2 ul li:first-child{margin-top:30px}
        </style>
    @livewireStyles
</head>
<body> 
       
    <section class="slide padding-top-md-4 padding-bottom-md-4" style="background: #F6F0E7; height: 100vw">
        <div class="content">
          <div class="container">
            <div class="wrap">
                <div class="fix-8-12 left magazine2">
                    <h1>Versuchsablauf</h1>
                   <p class="micro">Dir werden nacheinander 10 verschiedene Schachpartien präsentiert. Neben jeder Partie findest du ein leeres Schachbrett, das du mit Figuren per Drag-and-Drop Funktion bestücken kannst.</p>
                   <p class="micro margin-top-2">Deine Aufgabe ist es, dir zu jeder vorgegebenen Partie eine analoge Situation auf dem leeren Schachbrett auszudenken. Du kannst dafür alle Figuren oberhalb und unterhalb des leeren Bretts benutzen. Die Analogie muss nicht dieselben Figuren verwenden, aber die Strukturen sollten sich ähneln.</p> 
                   <p class="micro margin-top-2">Erinnere dich an das Beispiel mit Hänsel und Gretel. Weder Hänsel und Gretel noch ihr Lebkuchenhaus haben etwas mit dem Klimawandel zu tun.  Aber die Art und Weise, wie sie ihr Zuhause zerstören, ähnelt der Art und Weise, wie wir unseren Planeten zerstören, indem wir Ressourcen ohne Rücksicht auf die Folgen verbrauchen.  
                    Genau diese Art der Ähnlichkeit solltest du beim Befüllen des leeren Bretts berücksichtigen.</p>
                   <p class="micro margin-top-2">Nachdem du deine analoge Position aufgebaut hast, erläutere bitte deine Beweggründe
                    <br>- Warum hast du genau diese Position gewählt?
                    <br>- Woher hast du die Idee für dein analoges leeres Spielbrett genommen? (War es eine Partie, die du selbst gespielt hast, beobachtet hast, oder hast du sie für diese Aufgabe erfunden?)</p> 
                   <p class="micro margin-top-2">Zum Schluss sollst du bewerten wie sehr du deine Analogie magst und wie zuversichtlich du mit deiner Analogie bist.</p> 
                   <p class="micro margin-top-2"><strong>Wichtig:</strong> Wenn dir zu einer vorgegebenen Partie keine konkrete Analogie einfällt, kannst du gerne eine neue Situation erfinden! Achte aber darauf, dass die erstellten Positionen grundsätzlich spielbar sind.</p>                  
                  <a href="{{ route('rate.images', ['image_number' => 1]) }}" class="button" style="border-radius: 7px; color: white; background-color: green;">Weiter</a>
                </div> 
            </div>
            </div>
            </div>
</section> 

    <!-- Include Livewire Scripts -->
    @livewireScripts
</body>
</html>
