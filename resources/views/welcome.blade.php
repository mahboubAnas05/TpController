<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <style>
        nav{
            border-bottom : 1px solid  #212529;
        }
        main{
            margin-top :10%;
            text-align : center;
        }

    </style>
</head>
<body class="text-dark bg-light">

    <nav class="p-3 mx-5 d-flex justify-content-between align-items-center">
        <div>
            <h1>welcome</h1>
        </div>
        <div> 
            <button id="mode" onclick="changeTheme()" class="btn">
                dark mode 
            </button>
            <button id="modeL" onclick="changeThemeLi()" class="btn">
                light mode 
            </button>
        </div>
    </nav>
   
    <main class="mx-5">

        <h1>Bienvenue Dans Notre Site</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque labore asperiores aliquam ratione facilis.</p>

        <div class="text-center">
            <button id="view" class="btn btn-dark">Voir</button>
        </div>

    </main>

    <script>

        let isDark = false;
        const mode = document.getElementById('mode')
        const modeL = document.getElementById('modeL')
        const view = document.getElementById('view')
        const bgMode = document.querySelector('body')

        function changeTheme(){
            isDark = true;

            if (isDark === true){

            mode.className = "btn btn-light";
            view.className = "btn btn-light";
            mode.innerText = "light mode"
            bgMode.className = "text-light bg-dark";
         }
        else{
            
            mode.className = "btn btn-dark";
            view.className = "btn btn-dark";
            mode.innerText = "dark mode"
            bgMode.className = "text-dark bg-light";
        }
        }
        function changeThemeLi(){
            islight = true;

            if (islight === true){
          
            mode.className = "btn btn-dark";
            view.className = "btn btn-dark";
            mode.innerText = "dark mode"
            bgMode.className = "text-dark bg-light";
        
         }
        else{

            mode.className = "btn btn-light";
            view.className = "btn btn-light";
            mode.innerText = "light mode"
            bgMode.className = "text-light bg-dark";
        }
        }

    </script>
</body>
</html>